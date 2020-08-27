<?php
/*********************************************************************************/
/**   Copyright 2017 - Present Okta, Inc.                                       **/
/**                                                                             **/
/**   Licensed under the Apache License, Version 2.0 (the "License");           **/
/**   you may not use this file except in compliance with the License.          **/
/**   You may obtain a copy of the License at                                   **/
/**                                                                             **/
/**        http://www.apache.org/licenses/LICENSE-2.0                           **/
/**                                                                             **/
/**   Unless required by applicable law or agreed to in writing, software       **/
/**   distributed under the License is distributed on an "AS IS" BASIS,         **/
/**   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  **/
/**   See the License for the specific language governing permissions and       **/
/**   limitations under the License.                                            **/
/*********************************************************************************/

/************************************************/
/** This file is auto-generated.  Do Not Edit! **/
/************************************************/

namespace Okta\Clients;

class AuthorizationServer {

    /**
     * The DataStore we are going to use for our Client
     * @var \Okta\DataStore\DefaultDataStore
     */
    protected $dataStore;

    public function __construct(\Okta\DataStore\DefaultDataStore $dataStore)
    {
        $this->dataStore = $dataStore;
    }

    /**
     * Success
     */
    function listAuthorizationServers(array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\AuthorizationServer\AuthorizationServer(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\AuthorizationServer\AuthorizationServer::class);
        return $collection;
    }

    /**
     * Success
     */
    function createAuthorizationServer(\Okta\AuthorizationServer\AuthorizationServer $authorizationServer) : \Okta\AuthorizationServer\AuthorizationServer 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($authorizationServer)
            ->executeRequest();

        $responseModel = new \Okta\AuthorizationServer\AuthorizationServer(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function deleteAuthorizationServer($authServerId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function getAuthorizationServer($authServerId) : \Okta\AuthorizationServer\AuthorizationServer 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\AuthorizationServer\AuthorizationServer(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function updateAuthorizationServer($authServerId, \Okta\AuthorizationServer\AuthorizationServer $authorizationServer) : \Okta\AuthorizationServer\AuthorizationServer 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($authorizationServer)
            ->executeRequest();

        $responseModel = new \Okta\AuthorizationServer\AuthorizationServer(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function listOAuth2Claims($authServerId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/claims"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\OAuth2Claim(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Application\OAuth2Claim::class);
        return $collection;
    }

    /**
     * Success
     */
    function createOAuth2Claim($authServerId, \Okta\Application\OAuth2Claim $oAuth2Claim) : \Okta\Application\OAuth2Claim 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/claims"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($oAuth2Claim)
            ->executeRequest();

        $responseModel = new \Okta\Application\OAuth2Claim(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function deleteOAuth2Claim($authServerId, $claimId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/claims/${claimId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function getOAuth2Claim($authServerId, $claimId) : \Okta\Application\OAuth2Claim 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/claims/${claimId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\Application\OAuth2Claim(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function updateOAuth2Claim($authServerId, $claimId, \Okta\Application\OAuth2Claim $oAuth2Claim) : \Okta\Application\OAuth2Claim 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/claims/${claimId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($oAuth2Claim)
            ->executeRequest();

        $responseModel = new \Okta\Application\OAuth2Claim(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function listOAuth2ClientsForAuthorizationServer($authServerId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/clients"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\OAuth2Client(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Application\OAuth2Client::class);
        return $collection;
    }

    /**
     * Success
     */
    function revokeRefreshTokensForAuthorizationServerAndClient($authServerId, $clientId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/clients/${clientId}/tokens"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function listRefreshTokensForAuthorizationServerAndClient($authServerId, $clientId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/clients/${clientId}/tokens"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\OAuth2RefreshToken(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Application\OAuth2RefreshToken::class);
        return $collection;
    }

    /**
     * Success
     */
    function revokeRefreshTokenForAuthorizationServerAndClient($authServerId, $clientId, $tokenId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/clients/${clientId}/tokens/${tokenId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function getRefreshTokenForAuthorizationServerAndClient($authServerId, $clientId, $tokenId, array $queryParameters = []) : \Okta\Application\OAuth2RefreshToken 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/clients/${clientId}/tokens/${tokenId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Application\OAuth2RefreshToken(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function listAuthorizationServerKeys($authServerId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/credentials/keys"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\JsonWebKey(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Application\JsonWebKey::class);
        return $collection;
    }

    /**
     * Success
     */
    function rotateAuthorizationServerKeys($authServerId, \Okta\Application\JwkUse $use) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/credentials/lifecycle/keyRotate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($use)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\JsonWebKey(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Application\JsonWebKey::class);
        return $collection;
    }

    /**
     * Success
     */
    function activateAuthorizationServer($authServerId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/lifecycle/activate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function deactivateAuthorizationServer($authServerId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/lifecycle/deactivate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function listAuthorizationServerPolicies($authServerId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/policies"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Policy\Policy(null, $item);
            $responseModel = $responseModel->resolve();
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Policy\Policy::class);
        return $collection;
    }

    /**
     * Success
     */
    function createAuthorizationServerPolicy($authServerId, \Okta\Policy\Policy $policy) : \Okta\Policy\Policy 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/policies"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($policy)
            ->executeRequest();

        $responseModel = new \Okta\Policy\Policy(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Success
     */
    function deleteAuthorizationServerPolicy($authServerId, $policyId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/policies/${policyId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function getAuthorizationServerPolicy($authServerId, $policyId) : \Okta\Policy\Policy 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/policies/${policyId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\Policy\Policy(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Success
     */
    function updateAuthorizationServerPolicy($authServerId, $policyId, \Okta\Policy\Policy $policy) : \Okta\Policy\Policy 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/policies/${policyId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($policy)
            ->executeRequest();

        $responseModel = new \Okta\Policy\Policy(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Success
     */
    function listOAuth2Scopes($authServerId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/scopes"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\OAuth2Scope(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Application\OAuth2Scope::class);
        return $collection;
    }

    /**
     * Success
     */
    function createOAuth2Scope($authServerId, \Okta\Application\OAuth2Scope $oAuth2Scope) : \Okta\Application\OAuth2Scope 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/scopes"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($oAuth2Scope)
            ->executeRequest();

        $responseModel = new \Okta\Application\OAuth2Scope(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function deleteOAuth2Scope($authServerId, $scopeId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/scopes/${scopeId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function getOAuth2Scope($authServerId, $scopeId) : \Okta\Application\OAuth2Scope 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/scopes/${scopeId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\Application\OAuth2Scope(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function updateOAuth2Scope($authServerId, $scopeId, \Okta\Application\OAuth2Scope $oAuth2Scope) : \Okta\Application\OAuth2Scope 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/authorizationServers/${authServerId}/scopes/${scopeId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($oAuth2Scope)
            ->executeRequest();

        $responseModel = new \Okta\Application\OAuth2Scope(null, $body);
        return $responseModel;
    }

}