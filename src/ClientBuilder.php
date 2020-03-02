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
use Symfony\Component\Yaml\Parser;
use Okta\Utilities\AuthorizationMode;

/**
 * Class ClientBuilder
 * @package Okta
 */
class ClientBuilder
{
    /**
     * @var string $token The API token for your Okta organization.
     */
    private $token;

    /**
     * @var string $organizationUrl The full url of your organization, (eg. https://dev-123456.okta.com).
     */
    private $organizationUrl;

    /**
     * @var string|null $configFileLocation The full path to the config file location.
     */
    private $configFileLocation = null;

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
     * @var AuthorizationMode $authorizationMode The Authorization Mode to use for api calls.
     */
    private $authorizationMode;

    /**
     * @var string $clientId The client id of the application.
     */
    private $clientId;

    /**
     * @var string $scopes The scopes for the bearer token.
     */
    private $scopes;

    /**
     * @var string $privateKey The private key for the bearer token.
     */
    private $privateKey;

    /**
     * @var string $defaultFile Path from home directory to default yaml file.
     */
    private $defaultFile = '.okta/okta.yaml';

    public function __construct($yamlParser = null, $defaultFilePath = null)
    {
        if(function_exists('posix_getpwuid') && function_exists('posix_getuid')) {
            $this->defaultFile = posix_getpwuid(posix_getuid())['dir'] . '/' . $this->defaultFile;
        }
        if (null != $defaultFilePath) {
            $this->defaultFile = $defaultFilePath;
        }
        $this->yamlParser = (null === $yamlParser) ? new Parser() : $yamlParser;

        // Read Base Configuration
        if ((is_file($this->defaultFile) && is_readable($this->defaultFile))) {
            $this->setOptionsBasedOnFile($this->defaultFile);
        }

        $this->overrideOptionsWithEnvironmentVariables();

        $this->httpClient = new \Http\Client\Curl\Client();
    }

    /**
     * Set the API token on the client builder.
     *
     * @param string $token The API token for your Okta Organization
     * @return ClientBuilder
     */
    public function setToken(string $token): ClientBuilder
    {
        $this->token = $token;
        return $this;
    }

    /**
     * Set the organization URL on the client builder.
     *
     * @param string $organizationUrl The full url of your organization.
     * @return ClientBuilder
     */
    public function setOrganizationUrl(string $organizationUrl): ClientBuilder
    {
        $this->organizationUrl = $organizationUrl;
        return $this;
    }

    /**
     * Set the Config File Location on the client builder.
     *
     * @param string $configFileLocation The full path to your configuration file.
     * @throws \InvalidArgumentException
     * @return ClientBuilder
     */
    public function setConfigFileLocation(string $configFileLocation): ClientBuilder
    {
        if (!is_readable($configFileLocation)) {
            throw new \InvalidArgumentException('Config File location could not be read.');
        }

        $this->configFileLocation = $configFileLocation;
        return $this;
    }

    /**
     * Sets the HTTP Client to use.
     *
     * @param HttpClient $httpClient An instnace of HttpClient to be used in the SDK.
     * @return ClientBuilder
     */
    public function setHttpClient(HttpClient $httpClient): ClientBuilder
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * Set the Integrations User Agent string to be added to the UserAgent.
     *
     * @param string $integrationUserAgent The UserAgent from the integration to be added.
     * @return ClientBuilder
     */
    public function setIntegrationUserAgent(string $integrationUserAgent): ClientBuilder
    {
        $this->integrationUserAgent = $integrationUserAgent;
        return $this;
    }

    /**
     * Set the CacheManager Instance.
     *
     * @param CacheManager $cacheManager The CacheManager instance that you want to use.
     * @return ClientBuilder
     */
    public function setCacheManager(CacheManager $cacheManager): ClientBuilder
    {
        $this->cacheManager = $cacheManager;
        return $this;
    }

    /**
     * Set the Authorizaiton Mode.
     * 
     * @param AuthorizationMode $authorizationMode The Authorization mode for api calls.
     * @return ClientBuilder
     */
    public function setAuthorizationMode(AuthorizationMode $authorizationMode): ClientBuilder
    {
        $this->authorizationMode = $authorizationMode;
        return $this;
    }

    /**
     * Set the Client Id
     * 
     * @param string $clientId The Client id for the application
     * @return ClientBuilder
     */
    public function setClientId(string $clientId): ClientBuilder
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * Set the scopes for the token
     * 
     * @param string $scopes The scopes for the bearer token
     * @return ClientBuilder
     */
    public function setScopes(string $scopes): ClientBuilder
    {
        $this->scopes = $scopes;
        return $this;
    }

    /**
     * Set the private key
     * 
     * @param string $privateKey The private key for the bearer token. This accepts PEM string, JWK string, or file location of PEM
     * @return ClientBuilder
     */
    public function setPrivateKey(string $privateKey): ClientBuilder
    {
        $this->privateKey = $privateKey;
        return $this;
    }

    /**
     * Build the Okta client based on ClientBuilder settings.
     *
     * @return Client
     */
    public function build(): Client
    {
        if (null !== $this->configFileLocation) {
            $this->setOptionsBasedOnFile($this->configFileLocation);
        }

        if ($this->authorizationMode === null) {
            $this->authorizationMode = new AuthorizationMode(AuthorizationMode::SSWS);
        }

        if ($this->authorizationMode->getValue() == AuthorizationMode::SSWS) {
            $this->authorizationMode->setToken($this->token);
        }

        if ($this->authorizationMode->getValue() == AuthorizationMode::PRIVATE_KEY) {
            $this->authorizationMode
                ->setClientId($this->clientId)
                ->setScopes($this->scopes)
                ->setPrivateKey($this->privateKey)
                ->setOrgurl($this->organizationUrl);
        }

        return new Client(
            $this->token,
            $this->organizationUrl,
            $this->httpClient,
            $this->integrationUserAgent,
            $this->cacheManager,
            $this->authorizationMode
        );
    }

    /**
     * Get string of settings.
     *
     * @return string
     */
    public function __toString()
    {
        return "
            Token: {$this->token} \n
            OrgUrl: {$this->organizationUrl}
        ";
    }

    /**
     * Set the options based from the config file.
     *
     * @param string $configFileLocation The location you want to get your config from.
     * @return void
     */
    private function setOptionsBasedOnFile(string $configFileLocation)
    {
        $parsed = $this->yamlParser->parse(file_get_contents($configFileLocation));

        if (!key_exists('okta', $parsed) ||
            !key_exists('client', $parsed['okta'])
        ) {
            throw new \UnexpectedValueException('It appears that the options configuration file is not valid.');
        }

        if (key_exists('token', $parsed['okta']['client'])) {
            $this->setToken($parsed['okta']['client']['token']);
        }

        if (key_exists('orgUrl', $parsed['okta']['client'])) {
            $this->setOrganizationUrl($parsed['okta']['client']['orgUrl']);
        }

        if (key_exists('clientId', $parsed['okta']['client'])) {
            $this->setClientId($parsed['okta']['client']['clientId']);
        }

        if (key_exists('scopes', $parsed['okta']['client'])) {
            $this->setScopes($parsed['okta']['client']['scopes']);
        }

        if (key_exists('privateKey', $parsed['okta']['client'])) {
            $this->setPrivateKey($parsed['okta']['client']['privateKey']);
        }
    }

    private function overrideOptionsWithEnvironmentVariables()
    {
        $token = getenv('OKTA_CLIENT_TOKEN');
        $orgUrl = getenv('OKTA_CLIENT_ORGURL');
        $clientId = getenv('OKTA_CLIENT_CLIENTID');
        $scopes = getenv('OKTA_CLIENT_SCOPES');
        $privateKey = getenv('OKTA_CLIENT_PRIVATEKEY');

        if (false !== $token) {
            $this->setToken($token);
        }

        if (false !== $orgUrl) {
            $this->setOrganizationUrl($orgUrl);
        }

        if (false !== $clientId) {
            $this->setClientId($clientId);
        }

        if (false !== $scopes) {
            $this->setScopes($scopes);
        }

        if (false !== $privateKey) {
            $this->setPrivateKey($privateKey);
        }
    }
}
