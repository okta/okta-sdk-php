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

use Cache\Adapter\Common\CacheItem;
use function GuzzleHttp\Psr7\build_query;
use function GuzzleHttp\Psr7\parse_query;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\MessageFactory;
use Http\Message\UriFactory;
use Okta\Client;
use Okta\Exceptions\Error;
use Okta\Exceptions\ResourceException;
use Okta\Resource\AbstractCollection;
use Okta\Resource\AbstractResource;
use Okta\Utilities\SswsAuth;
use Okta\Utilities\UserAgentBuilder;
use Psr\Http\Message\UriInterface;

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
     * DefaultDataStore constructor.
     *
     * @param string          $token
     * @param string          $organizationUrl
     * @param HttpClient|NULL $httpClient
     */
    public function __construct(string $token, string $organizationUrl, HttpClient $httpClient = null)
    {
        $this->token = $token;
        $this->organizationUrl = $organizationUrl;

        $authenticationPlugin = new AuthenticationPlugin(
            new SswsAuth($this->token)
        );

        $this->httpClient = new PluginClient(
            $httpClient ?: HttpClientDiscovery::find(),
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
    public function createResource($href, $resource, $returnType, $query=[])
    {
        $this->resource = $resource;
        $uri = $this->uriFactory->createUri($this->organizationUrl . '/api/v1' . $href);
        if(!empty($query)) {
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
     * @param string $method The type of request.
     * @param UriInterface $uri The URI object of the request.
     * @param string       $body The body of the request.
     * @param array        $options The options for the request.
     *
     * @return mixed|null
     * @throws ResourceException
     */
    public function executeRequest($method, UriInterface $uri, $body = '', array $options = [])
    {
        $cacheManager = $cacheManager = Client::getInstance()->getCacheManager();
        $cacheKey = $cacheManager->createCacheKey($uri);

        if('GET' == $method && $cacheManager->pool()->hasItem($cacheKey)) {
            return $cacheManager->pool()->getItem($cacheKey)->get();
        }

        $headers = [];
        $headers['Accept'] = 'application/json';

        $userAgentBuilder = new UserAgentBuilder;
        $headers['User-Agent'] = $userAgentBuilder->setOsName(php_uname('s'))
            ->setOsVersion(php_uname('r'))
            ->setPhpVersion(phpversion())
            ->build();

        if ($body) {
            $headers['Content-Type'] = 'application/json';
            $headers['Content-Length'] = strlen($body);
        }

        if (key_exists('query', $options)) {
            $queryString = $this->getQueryString($options['query']);
            $uri = $uri->withQuery($this->appendQueryValues($uri->getQuery(), $queryString));
        }

        $request = $this->messageFactory->createRequest($method, $uri, $headers, $body);

        $response = $this->httpClient->sendRequest($request);

        $result = $response->getBody() ? json_decode($response->getBody()) : null;

        if (isset($result) && $result instanceof \stdClass) {
            $result->httpStatus = $response->getStatusCode();
        }

        if ($response->getStatusCode() < 200 || $response->getStatusCode() > 299) {
            $error = new Error($result);
            throw new ResourceException($error);
        }

        if (!is_array($result)) {
            switch($method) {
                case 'GET':
                    if(null !== $result) {
                        $cacheManager->save($uri, $result);
                    }
                    break;
                case 'POST':
                    if(null !== $result) {
                        $cacheManager->delete($uri, $result);
                        $cacheManager->save($uri, $result);
                    }
                    break;
                case 'DELETE':
                    if(null !== $this->resource) {
                        $cacheManager->delete($uri, $this->toStdClass($this->resource));
                    }
                    break;
            }
        }
        return $result;
    }

    /**
     * Convert an AbstractResource object to a stdClass object.
     *
     * @param AbstractResource $resource The resource to convert.
     * @return \stdClass
     */
    private function toStdClass(AbstractResource $resource)
    {

        $propertyNames = $resource->getPropertyNames(true);

        $properties = new \stdClass();
        foreach ($propertyNames as $name) {
            $property = $resource->getProperty($name);

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
        return $this->uriFactory->createUri($uri);
    }
}
