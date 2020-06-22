<?php
/*******************************************************************************
 * Copyright 2017-Present Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\AuthorizationServers;

use Okta\Applications\OAuth2Claim;
use Okta\Applications\OAuth2Client;
use Okta\Applications\OAuth2RefreshToken;
use Okta\Applications\JsonWebKey;
use Okta\Applications\JwkUse;
use Okta\Policies\Policy;
use Okta\Applications\OAuth2Scope;

class AuthorizationServer extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const LINKS = '_links';
    const ISSUER = 'issuer';
    const STATUS = 'status';
    const CREATED = 'created';
    const AUDIENCES = 'audiences';
    const ISSUER_MODE = 'issuerMode';
    const CREDENTIALS = 'credentials';
    const DESCRIPTION = 'description';
    const LAST_UPDATED = 'lastUpdated';

    public function create($query = [])
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->createResource(
                    "/authorizationServers",
                    $this,
                    \Okta\AuthorizationServers\AuthorizationServer::class,
                    $query
                );
    }

    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\AuthorizationServers\AuthorizationServer::class,
                        "/authorizationServers"
                    );
    }
        
    public function save()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->saveResource(
                    "/authorizationServers",
                    $this,
                    \Okta\AuthorizationServers\AuthorizationServer::class
                );
    }


    public function delete() //test
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    "/authorizationServers",
                    $this
                );
    }
        
    /**
     * Get the id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->getProperty(self::NAME);
    }

    /**
    * Set the name.
    *
    * @param mixed $name The value to set.
    * @return self
    */
    public function setName($name)
    {
        $this->setProperty(
            self::NAME,
            $name
        );

        return $this;
    }

    /**
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }

    /**
     * Get the issuer.
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->getProperty(self::ISSUER);
    }

    /**
    * Set the issuer.
    *
    * @param mixed $issuer The value to set.
    * @return self
    */
    public function setIssuer($issuer)
    {
        $this->setProperty(
            self::ISSUER,
            $issuer
        );

        return $this;
    }

    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
    * Set the status.
    *
    * @param mixed $status The value to set.
    * @return self
    */
    public function setStatus($status)
    {
        $this->setProperty(
            self::STATUS,
            $status
        );

        return $this;
    }

    /**
     * Get the created.
     *
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
    }

    /**
     * Get the audiences.
     *
     * @return array
     */
    public function getAudiences()
    {
        return $this->getProperty(self::AUDIENCES);
    }

    /**
    * Set the audiences.
    *
    * @param mixed $audiences The value to set.
    * @return self
    */
    public function setAudiences($audiences)
    {
        $this->setProperty(
            self::AUDIENCES,
            $audiences
        );

        return $this;
    }

    /**
     * Get the issuerMode.
     *
     * @return string
     */
    public function getIssuerMode()
    {
        return $this->getProperty(self::ISSUER_MODE);
    }

    /**
    * Set the issuerMode.
    *
    * @param mixed $issuerMode The value to set.
    * @return self
    */
    public function setIssuerMode($issuerMode)
    {
        $this->setProperty(
            self::ISSUER_MODE,
            $issuerMode
        );

        return $this;
    }

    /**
     * Get the credentials.
     *
     * @return \Okta\Applications\AuthorizationServerCredentials
     */
    public function getCredentials(array $options = []): \Okta\Applications\AuthorizationServerCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\Applications\AuthorizationServerCredentials::class,
            $options
        );
    }

    /**
     * Set the credentials.
     *
     * @param \Okta\Applications\AuthorizationServerCredentials $credentials The AuthorizationServerCredentials instance.
     * @return self
     */
    public function setCredentials(\Okta\Applications\AuthorizationServerCredentials $credentials)
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );

        return $this;
    }

    /**
     * Get the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty(self::DESCRIPTION);
    }

    /**
    * Set the description.
    *
    * @param mixed $description The value to set.
    * @return self
    */
    public function setDescription($description)
    {
        $this->setProperty(
            self::DESCRIPTION,
            $description
        );

        return $this;
    }

    /**
     * Get the lastUpdated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }

    /**
    * Get the OAuth2Claim object.
    *
    * @param array $options The options for the request.
    * @return \Okta\AuthorizationServers\Collection
    */
    public function getOAuth2Claims(array $options = []): \Okta\AuthorizationServers\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/authorizationServers/{$this->getId()}/claims",
                    \Okta\AuthorizationServers\OAuth2Claim::class,
                    \Okta\AuthorizationServers\Collection::class,
                    $options
                );
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function createOAuth2Claim(OAuth2Claim $oAuth2Claim)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/claims";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $oAuth2Claim);

        return new \Okta\AuthorizationServers\OAuth2Claim(null, $body);
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function deleteOAuth2Claim($claimId)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/claims/{$claimId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function getOAuth2Claim($claimId)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/claims/{$claimId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\AuthorizationServers\OAuth2Claim(null, $body);
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function updateOAuth2Claim($claimId, OAuth2Claim $oAuth2Claim)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/claims/{$claimId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri, $oAuth2Claim);

        return new \Okta\AuthorizationServers\OAuth2Claim(null, $body);
    }

    /**
    * Get the OAuth2Client object.
    *
    * @param array $options The options for the request.
    * @return \Okta\AuthorizationServers\Collection
    */
    public function getOAuth2Clients(array $options = []): \Okta\AuthorizationServers\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/authorizationServers/{$this->getId()}/clients",
                    \Okta\AuthorizationServers\OAuth2Client::class,
                    \Okta\AuthorizationServers\Collection::class,
                    $options
                );
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function revokeRefreshTokensForClient($clientId)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/clients/{$clientId}/tokens";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }

    /**
    * Get the OAuth2RefreshToken object.
    *
    * @param array $options The options for the request.
    * @return \Okta\AuthorizationServers\Collection
    */
    public function getRefreshTokensForClient($clientId, array $options = []): \Okta\AuthorizationServers\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/authorizationServers/{$this->getId()}/clients/{$clientId}/tokens",
                    \Okta\AuthorizationServers\OAuth2RefreshToken::class,
                    \Okta\AuthorizationServers\Collection::class,
                    $options
                );
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function getRefreshTokenForClient($clientId, $tokenId)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/clients/{$clientId}/tokens/{$tokenId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\AuthorizationServers\OAuth2RefreshToken(null, $body);
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function revokeRefreshTokenForClient($clientId, $tokenId)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/clients/{$clientId}/tokens/{$tokenId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }

    /**
    * Get the JsonWebKey object.
    *
    * @param array $options The options for the request.
    * @return \Okta\AuthorizationServers\Collection
    */
    public function getKeys(array $options = []): \Okta\AuthorizationServers\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/authorizationServers/{$this->getId()}/credentials/keys",
                    \Okta\AuthorizationServers\JsonWebKey::class,
                    \Okta\AuthorizationServers\Collection::class,
                    $options
                );
    }

    /**
    * Get the JsonWebKey object.
    *
    * @param array $options The options for the request.
    * @return \Okta\AuthorizationServers\Collection
    */
    public function rotateKeys(array $options = []): \Okta\AuthorizationServers\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/authorizationServers/{$this->getId()}/credentials/lifecycle/keyRotate",
                    \Okta\AuthorizationServers\JsonWebKey::class,
                    \Okta\AuthorizationServers\Collection::class,
                    $options
                );
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function activate()
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/lifecycle/activate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return $body;
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function deactivate()
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/lifecycle/deactivate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return $body;
    }

    /**
    * Get the Policy object.
    *
    * @param array $options The options for the request.
    * @return \Okta\AuthorizationServers\Collection
    */
    public function getPolicies(array $options = []): \Okta\AuthorizationServers\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/authorizationServers/{$this->getId()}/policies",
                    \Okta\AuthorizationServers\Policy::class,
                    \Okta\AuthorizationServers\Collection::class,
                    $options
                );
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function createPolicy(Policy $policy)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/policies";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $policy);

        return new \Okta\AuthorizationServers\Policy(null, $body);
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function deletePolicy($policyId)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/policies/{$policyId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function getPolicy($policyId)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/policies/{$policyId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\AuthorizationServers\Policy(null, $body);
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function updatePolicy($policyId, Policy $policy)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/policies/{$policyId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri, $policy);

        return new \Okta\AuthorizationServers\Policy(null, $body);
    }

    /**
    * Get the OAuth2Scope object.
    *
    * @param array $options The options for the request.
    * @return \Okta\AuthorizationServers\Collection
    */
    public function getOAuth2Scopes(array $options = []): \Okta\AuthorizationServers\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/authorizationServers/{$this->getId()}/scopes",
                    \Okta\AuthorizationServers\OAuth2Scope::class,
                    \Okta\AuthorizationServers\Collection::class,
                    $options
                );
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function createOAuth2Scope(OAuth2Scope $oAuth2Scope)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/scopes";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $oAuth2Scope);

        return new \Okta\AuthorizationServers\OAuth2Scope(null, $body);
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function deleteOAuth2Scope($scopeId)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/scopes/{$scopeId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function getOAuth2Scope($scopeId)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/scopes/{$scopeId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\AuthorizationServers\OAuth2Scope(null, $body);
    }


    /**
    * Success
    *
    * @return mixed|null
    */
    public function updateOAuth2Scope($scopeId, OAuth2Scope $oAuth2Scope)
    {
        $uri = "/api/v1/authorizationServers/{$this->getId()}/scopes/{$scopeId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri, $oAuth2Scope);

        return new \Okta\AuthorizationServers\OAuth2Scope(null, $body);
    }
}
