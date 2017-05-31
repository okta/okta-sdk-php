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

use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\MessageFactory;
use Http\Message\UriFactory;
use Okta\Utilities\SswsAuth;

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
     * @var string $orgUrl The organization Url.
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


    public function getResource($href, $className, $path, array $options = [])
    {
        $queryString = $this->getQueryString($options);

        $uri = $this->uriFactory->createUri($this->orgUrl . '/api/v1' . $path . '/' . $href);
        $uri = $uri->withQuery($this->appendQueryValues($uri->getQuery(), $queryString));

        $result = $this->executeRequest('GET', $uri);

        return new $className(null, $result);
    }

    public function getCollection($href, $className, $collection, array $options = [])
    {

        $queryString = $this->getQueryString($options['query']);

        $uri = $this->uriFactory->createUri($this->orgUrl . '/api/v1' . $href);
        $uri = $uri->withQuery($this->appendQueryValues($uri->getQuery(), $queryString));


        $toCollect = [];

        $result = $this->executeRequest('GET', $uri);

        foreach ($result as $item) {
            $toCollect[] = new $className(null, $item);
        }

        return new $collection($toCollect);
    }

    public function saveResource($href, $resource, $returnType)
    {
        $uri = $this->uriFactory->createUri($this->orgUrl . '/api/v1' . $href . '/' . $resource->getId());

        $result = $this->executeRequest('POST', $uri, json_encode($this->toStdClass($resource)));

        return new $returnType(null, $result);
    }

    public function deleteResource($href, $resource)
    {

        $uri = $this->uriFactory->createUri($this->orgUrl . '/api/v1' . $href . '/' . $resource->getId());

        $result = $this->executeRequest('DELETE', $uri);

        return $result;
    }

    public function executeRequest($method, UriInterface $uri, $body = '', array $options = [])
    {
        $headers = [];
        $headers['Accept'] = 'application/json';

        $userAgentBuilder = new UserAgentBuilder;
        $headers['User-Agent'] = $userAgentBuilder->setOsName(php_uname('s'))
            ->setOsVersion(php_uname('r'))
            ->setPhpVersion(phpversion())
            ->build();

        if ($body) {
            $headers['Content-Type'] = 'application/json';
        }

        if (key_exists('query', $options)) {
            $queryString = $this->getQueryString($options['query']);
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

        return $result;
    }


    private function toStdClass(AbstractResource $resource)
    {

        $propertyNames = $resource->getPropertyNames(true);

        $properties = new \stdClass();
        foreach ($propertyNames as $name) {
            $property = $resource->getProperty($name);
            if ($property instanceof AbstractResource) {
                $property = $this->toStdClass($property);
            }
            $properties->$name = $property;
        }
        return $properties;
    }

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
        if ($currentQuery == '') {
            $result = [];
        } else {
            $decodedKeys = array_map('rawurldecode', array_keys($queryDictionary));
            $result = array_filter(explode('&', $currentQuery), function ($part) use ($decodedKeys) {
                return in_array(rawurldecode(explode('=', $part)[0]), $decodedKeys);
            });
        }
        foreach ($queryDictionary as $key => $value) {
            // Query string separators ("=", "&") within the key or value need to be encoded
            // (while preventing double-encoding) before setting the query string. All other
            // chars that need percent-encoding will be encoded by withQuery().
            $key = strtr($key, ['=' => '%3D', '&' => '%26']);
            if ($value !== null) {
                $result[] = $key . '=' . strtr($value, ['=' => '%3D', '&' => '%26']);
            } else {
                $result[] = $key;
            }
        }
        return implode('&', $result);
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
     * Determine if the URL needs to be fully qualified.
     *
     * @param string $href The href to check.
     * @return bool
     */
    private function needsToBeFullyQualified(string $href): bool
    {
        return stripos($href, $this->organizationUrl) === false;
    }

    /**
     * Qualify a href.
     *
     * @param string $href The full href to fully qualify.
     * @return string
     */
    private function qualify(string $href)
    {
        $slashAdded = '';
        if (!(stripos($href, '/') == 0)) {
            $slashAdded = '/';
        }
        return $this->baseUrl .$slashAdded .$href;
    }
}
