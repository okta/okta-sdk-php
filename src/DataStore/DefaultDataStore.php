<?php
/******************************************************************************
 * Copyright 2017 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

namespace Okta\DataStore;

use Okta\Client;
use Okta\Utilities\Enum;
use Okta\Exceptions\Error;
use Http\Client\HttpClient;
use Http\Message\UriFactory;
use Okta\Utilities\SswsAuth;
use Http\Message\MessageFactory;
use Psr\Http\Message\UriInterface;
use Cache\Adapter\Common\CacheItem;
use Okta\Resource\AbstractResource;
use Http\Client\Common\PluginClient;
use Okta\Utilities\UserAgentBuilder;
use Okta\Resource\AbstractCollection;
use Okta\Utilities\AuthorizationMode;
use Okta\Exceptions\ResourceException;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Psr\Http\Message\ResponseInterface;
use function GuzzleHttp\Psr7\build_query;
use function GuzzleHttp\Psr7\parse_query;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Client\Common\Plugin\AuthenticationPlugin;

class DefaultDataStore
{
    /**
     * @var \Http\Message\UriFactory $uriFactory Uri Factory.
     */
    protected $uriFactory;

    /**
     * @var \Http\Message\MessageFactory $messageFactory Message Factory.
     */
    protected $messageFactory;

    /**
     * @var string $token The token for your organization.
     */
    private $token;

    /**
     * @var string $organizationUrl The organization Url.
     */
    private $organizationUrl;

    /**
     * @var PluginClient $httpClient The Http Client Instance.
     */
    private $httpClient;

    /**
     * @var string $baseUrl The base url for calls. Generated from Organization
     *                      URL/api/v1
     */
    private $baseUrl;

    /**
     * @var \Okta\Cache\CacheManager The CacheManager Instance from the Client.
     */
    private $cacheManager;

    /**
     * @var AbstractResource A place to temporally store the resource we are working with.
     */
    private $resource;

    /**
     * @var string The accept header for the api call
     */
    private $acceptHeader;

    /**
     * @var string The DEFAULT accept header for all api calls
     */
    private $defaultAcceptHeader = 'application/json';

    /**
     * @var string The content type header for the api call
     */
    private $contentTypeHeader;

    /**
     * @var string The DEFAULT content type header for all api calls
     */
    private $defaultContentTypeHeader = 'application/json';

    /**
     * @var UriInterface The URI to use for requests
     */
    private $uri;

    /**
     * @var string The request method
     */
    private $requestMethod;

    /**
     * @var mixed The body for your request
     */
    private $requestBody;

    /**
     * @var array Query params for the requst
     */
    private $queryParams;

    /**
     * @var ResponseInterface Last Response recieved
     */
    private $lastResponse;

    /**
     * DefaultDataStore constructor.
     *
     * @param Okta\Client     $oktaClient
     */
    public function __construct(\Okta\Client $oktaClient)
    {
        $this->token = $oktaClient->getToken();
        $this->organizationUrl = $oktaClient->getOrganizationUrl();
        $this->acceptHeader = $this->defaultAcceptHeader;
        $this->contentTypeHeader = $this->defaultContentTypeHeader;

        $authenticationPlugin = new AuthenticationPlugin(
            $oktaClient->getAuthorizationMode()->getDriver()
        );

        $this->httpClient = new PluginClient(
            $oktaClient->getHttpClient() ?: HttpClientDiscovery::find(),
            [ $authenticationPlugin ]
        );

        $this->uriFactory = UriFactoryDiscovery::find();
        $this->messageFactory = MessageFactoryDiscovery::find();

        $this->baseUrl = $this->organizationUrl . '/api/v1';
    }

    /**
     * Create a new instance of a class with the provided properties.
     *
     * @param string         $class Class to instantiate.
     * @param \stdClass|NULL $properties The properties you want to use to instantiate.
     * @param array          $options Any options you want to set.
     * @return object
     */
    public function instantiate(string $class, \stdClass $properties = null, array $options = [])
    {
        $propertiesArr = array($properties, $options);

        $class = new \ReflectionClass($class);
        array_unshift($propertiesArr, Client::getInstance()->getDataStore());

        $newClass = $class->newInstanceArgs($propertiesArr);

        return $newClass;
    }


    /**
     * Get a resource from the API.
     *
     * @param string $href The unique identifier for the href.
     * @param string $className The class name to return as.
     * @param string $path The path to the resource.
     * @param array $options The options to use when making the request.
     * @return AbstractResource
     */
    public function getResource($href, $className, $path, array $options = []): AbstractResource
    {
        $uri = $this->uriFactory->createUri($this->organizationUrl . '/api/v1' . $path . '/' . $href);

        if (key_exists('query', $options)) {
            $queryString = $this->getQueryString($options['query']);
            $uri = $uri->withQuery($this->appendQueryValues($uri->getQuery(), $queryString));
        }

        $result = $this->executeRequest('GET', $uri);

        return new $className(null, $result);
    }

    /**
     * Get a collection of items.
     *
     * @param string $href The unique identifier for the href.
     * @param string $className The class name for each item in the collection.
     * @param string $collection the collection type to return as.
     * @param array $options Options to add to the request.
     * @return AbstractCollection
     */
    public function getCollection($href, $className, $collection, array $options = []): AbstractCollection
    {

        $uri = $this->uriFactory->createUri($this->organizationUrl . $href);

        if (key_exists('query', $options)) {
            $queryString = $this->getQueryString($options['query']);
            $uri = $uri->withQuery($this->appendQueryValues($uri->getQuery(), $queryString));
        }


        $toCollect = [];

        $result = $this->executeRequest('GET', $uri);


        foreach ($result as $item) {
            $toCollect[] = new $className(null, $item);
        }

        return new $collection($toCollect);
    }

    /**
     * Issues a save request to the API.
     *
     * @param string $href The path to the resource
     * @param AbstractResource $resource The resource to save.
     * @param string $returnType The Resource class you want to return.
     *
     * @return mixed
     */
    public function saveResource($href, $resource, $returnType)
    {
        $this->resource = $resource;
        $uri = $this->uriFactory->createUri($this->organizationUrl . '/api/v1' . $href . '/' . $resource->getId());

        $result = $this->executeRequest('POST', $uri, json_encode($this->toStdClass($resource)));
        $resource = new $returnType(null, $result);

        return $resource;
    }

    /**
     * Issues a save request to the API.
     *
     * @param string $href The path to the resource
     * @param AbstractResource $resource The resource to save.
     * @param string $returnType The Resource class you want to return.
     * @param array $query The query of the URL
     *
     * @return mixed
     */
    public function createResource($href, $resource, $returnType, $query = [])
    {
        $this->resource = $resource;
        $uri = $this->uriFactory->createUri($this->organizationUrl . '/api/v1' . $href);
        if (!empty($query)) {
            $uri = $uri->withQuery(http_build_query($query));
        }

        $result = $this->executeRequest('POST', $uri, json_encode($this->toStdClass($resource)));

        return new $returnType(null, $result);
    }

    /**
     * Issues a delete request to the API.
     *
     * @param string $href The path to the resource
     * @param AbstractResource $resource The resource to save.
     *
     * @return mixed
     */
    public function deleteResource($href, $resource)
    {
        $this->resource = $resource;
        $uri = $this->uriFactory->createUri($this->organizationUrl . '/api/v1' . $href . '/' . $resource->getId());

        $result = $this->executeRequest('DELETE', $uri);

        return $result;
    }

    /**
     * Make the request.
     *
     * @return mixed|null
     * @throws ResourceException
     */
    public function executeRequest()
    {
        $cacheManager = $cacheManager = Client::getInstance()->getCacheManager();
        $cacheKey = $cacheManager->createCacheKey($this->uri);

        if ('GET' == $this->requestMethod && $cacheManager->pool()->hasItem($cacheKey)) {
            return $cacheManager->pool()->getItem($cacheKey)->get();
        }

        $headers = [];
        $headers['Accept'] = $this->acceptHeader;

        $userAgentBuilder = new UserAgentBuilder;
        $headers['User-Agent'] = $userAgentBuilder->setOsName(php_uname('s'))
            ->setOsVersion(php_uname('r'))
            ->setPhpVersion(phpversion())
            ->build();

        if ($this->requestBody) {
            $headers['Content-Type'] = $this->contentTypeHeader;
            $headers['Content-Length'] = strlen($this->requestBody);
        }

        if (!empty($this->queryParams)) {
            $queryString = $this->getQueryString($this->queryParams);
            $this->uri = $this->uri->withQuery($this->appendQueryValues($this->uri->getQuery(), $queryString));
        }

        $resource = $this->requestBody;
        $body = null;
        if($resource) {
            $body = json_encode($this->toStdClass($resource));
        }
        $request = $this->messageFactory->createRequest($this->requestMethod, $this->uri, $headers, $body);

        $response = $this->httpClient->sendRequest($request);
        $this->lastResponse = $response;

        $result = $response->getBody() ? json_decode($response->getBody()) : null;

        if ($response->getStatusCode() < 200 || $response->getStatusCode() > 299) {
            $error = new Error($result);
            throw new ResourceException($error);
        }

        if (!is_array($result)) {
            switch ($this->requestMethod) {
                case 'GET':
                    if (null !== $result) {
                        $cacheManager->save($this->uri, $result);
                    }
                    break;
                case 'POST':
                case 'PUT':
                    if (null !== $result) {
                        $cacheManager->delete($this->uri, $result);
                        $cacheManager->save($this->uri, $result);
                    }
                    break;
                case 'DELETE':
                    $cacheManager->delete($this->uri);
                    break;
            }
        }
        $this->resetDefaults();
        return $result;
    }

    private function resetDefaults()
    {
        $this->requestBody = null;
        $this->uri = null;
        $this->queryParams = [];
        $this->acceptHeader = $this->defaultAcceptHeader;
        $this->contentTypeHeader = $this->defaultContentTypeHeader;
    }

    /**
     * Convert an AbstractResource object to a stdClass object.
     *
     * @param AbstractResource $resource The resource to convert.
     * @return \stdClass
     */
    private function toStdClass(AbstractResource $resource)
    {

        $propertyNames = $resource->getPropertyNames();

        $properties = new \stdClass();
        foreach ($propertyNames as $name) {
            $property = $resource->getProperty($name);

            if($property instanceof Enum) {
                $property = (string)$property;
            }

            $properties->$name = $property;
        }
        return $properties;
    }

    /**
     * Get the query string from the options.
     *
     * @param array $options The options to get the query string from.
     * @return array
     */
    private function getQueryString(array $options)
    {
        $query = array();

        foreach ($options as $key => $opt) {
            $query[$key] = !is_bool($opt)?
                strval($opt) :
                var_export($opt, true);
        }
        return $query;
    }

    /**
     * Adapted from Guzzle PSR-7, by Michael Dowling et al.
     * Licensed under the MIT license
     *
     * Any existing query string values that exactly match the provided key are
     * removed and replaced with the key value pair in the dictionary.
     *
     * A value of null will set the query string key without a value, e.g. "key"
     * instead of "key=value".
     *
     * @param string $currentQuery The current query string
     * @param array $queryDictionary A key-value array of query parameters to append to the query string
     *
     * @return string
     */
    private function appendQueryValues($currentQuery, $queryDictionary)
    {
        $currentQueryParts = parse_query($currentQuery);

        if ($currentQuery == '') {
            $result = [];
        }

        foreach ($queryDictionary as $key => $value) {
            $key = strtr($key, ['=' => '%3D', '&' => '%26']);
            if ($value !== null) {
                $result[$key] = strtr($value, ['=' => '%3D', '&' => '%26']);
            } else {
                $result[$key] = $key;
            }
        }

        $result = array_replace_recursive($currentQueryParts, $result);
        return build_query($result);
    }

    /**
     * Get the current PluginClient instance.
     *
     * @return PluginClient
     */
    public function getHttpClient(): PluginClient
    {
        return $this->httpClient;
    }

    /**
     * Get the current MessageFactory instance.
     *
     * @return MessageFactory
     */
    public function getMessageFactory(): MessageFactory
    {
        return $this->messageFactory;
    }

    /**
     * Get the current UriFactory instance.
     *
     * @return UriFactory
     */
    public function getUriFactory(): UriFactory
    {
        return $this->uriFactory;
    }

    /**
     * Get the organization url.
     *
     * @return string
     */
    public function getOrganizationUrl(): string
    {
        return $this->organizationUrl;
    }

    /**
     * Create an instance of Uri that can be used in the request.
     *
     * @param string $uri The URI to convert into a usable uri object.
     * @return UriInterface
     */
    public function buildUri(string $uri): UriInterface
    {
        return $this->uriFactory->createUri($this->getOrganizationurl() . $uri);
    }

    /**
     * Sets the accept header for the next call
     *
     * @param string $acceptHeader The accept header to use for the next call.
     * @return DefaultDataStore
     */
    public function setAcceptHeader(string $acceptHeader): DefaultDataStore
    {
        $this->acceptHeader = $acceptHeader;
        return $this;
    }

    /**
     * Sets the content-type header for the next call
     *
     * @param string $content-type Header The content-type  header to use for the next call.
     * @return DefaultDataStore
     */
    public function setContentTypeHeader(string $contentType): DefaultDataStore
    {
        $this->contentTypeHeader = $contentType;
        return $this;
    }

    public function setUri(UriInterface $uri): DefaultDataStore
    {
        $this->uri = $uri;
        return $this;
    }

    public function setRequestMethod(string $requestMethod): DefaultDataStore
    {
        $this->requestMethod = $requestMethod;
        return $this;
    }

    public function setRequestBody(\Okta\Resource\AbstractResource $body): DefaultDataStore
    {
        $this->requestBody = $body;
        return $this;
    }

    public function setQueryParams(array $queryParams = []): DefaultDataStore
    {
        $this->queryParams = $queryParams;
        return $this;
    }

    public function getLastResponse(): ResponseInterface
    {
        return $this->lastResponse;
    }
}
