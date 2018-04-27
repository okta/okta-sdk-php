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

namespace Okta;

use Http\Client\HttpClient;
use Okta\Cache\CacheManager;
use Okta\Cache\MemoryManager;
use Okta\DataStore\DefaultDataStore;

/**
 * Class Client
 * @package Okta
 */
class Client
{
    /**
     * @var null|Client $instance The current instance of Client.
     */
    private static $instance = null;

    /**
     * @var string $token The API token for your Okta organization.
     */
    private $token;

    /**
     * @var string $organizationUrl The full url of your organization, (eg. https://dev-123456.okta.com).
     */
    private $organizationUrl;

    /**
     * @var HttpClient $httpClient An instance of HttpClient to use for communicating with Okta.
     */
    private $httpClient;

    /**
     * @var string $integrationUserAgent The integrations UserAgent string to add to the base UserAgent.
     */
    private $integrationUserAgent;

    /**
     * @var CacheManager $cacheManager The CacheManager Instance to use for caching.
     */
    private $cacheManager;

    /**
     * Create a new instance of Client.
     *
     * @param string                    $token
     * @param string                    $organizationUrl
     * @param HttpClient|NULL           $httpClient
     * @param string|NULL               $integrationUserAgent
     * @param CacheManager|NULL         $cacheManager
     */
    public function __construct(
        string $token,
        string $organizationUrl,
        HttpClient $httpClient = null,
        string $integrationUserAgent = null,
        CacheManager $cacheManager = null
    ) {
        $this->token = $token;
        $this->organizationUrl = $organizationUrl;
        $this->httpClient = $httpClient;
        $this->integrationUserAgent = $integrationUserAgent;
        $this->cacheManager = $cacheManager;

        $this->dataStore = new DefaultDataStore(
            $this->token,
            $this->organizationUrl,
            $this->httpClient
        );

        if(null === $this->cacheManager) {
            $this->cacheManager = new MemoryManager();
        }

        self::$instance = $this;
    }

    /**
     * Get the Organization url from the client.
     *
     * @return string
     */
    public function getOrganizationUrl(): string
    {
        return $this->organizationUrl;
    }

    /**
     * Get the Integration User Agent string.
     *
     * @return string
     */
    public function getIntegrationUserAgent(): string
    {
        return $this->integrationUserAgent;
    }

    /**
     * Get the DataStore Instance.
     *
     * @return DefaultDataStore
     */
    public function getDataStore(): DefaultDataStore
    {
        return $this->dataStore;
    }

    /**
     * Get the Cache Manager from the Client.
     *
     * @return CacheManager
     */
    public function getCacheManager(): CacheManager
    {
        return $this->cacheManager;
    }

    /**
     * Get the current instance of the Client object.
     *
     * @throws \RuntimeException
     * @return Client
     */
    public static function getInstance(): Client
    {
        if (null === self::$instance) {
            throw new \RuntimeException(
                'The client has not be instantiated yet, please
                build the client with the ClientBuilder first.'
            );
        }

        return self::$instance;
    }

    /**
     * Destroys the Client object.
     *
     * @return void
     */
    public static function destroy()
    {
        self::$instance = null;
    }
}
