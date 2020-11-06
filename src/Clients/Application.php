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

class Application {

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
     * Enumerates apps added to your organization with pagination. A subset of apps can be returned that match a supported filter expression or query.
     */
    function listApplications(array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\Application(null, $item);
            $responseModel = $responseModel->resolve();
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Application\Application::class);
        return $collection;
    }

    /**
     * Adds a new application to your Okta organization.
     */
    function createApplication(\Okta\Application\Application $application, array $headers = [], array $queryParameters = []) : \Okta\Application\Application 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($application)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Application\Application(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Removes an inactive application.
     */
    function deleteApplication($appId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Fetches an application from your Okta organization by &#x60;id&#x60;.
     */
    function getApplication($appId, array $queryParameters = []) : \Okta\Application\Application 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Application\Application(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Updates an application in your organization.
     */
    function updateApplication($appId, \Okta\Application\Application $application) : \Okta\Application\Application 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($application)
            ->executeRequest();

        $responseModel = new \Okta\Application\Application(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Enumerates Certificate Signing Requests for an application
     */
    function listCsrsForApplication($appId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/csrs"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\Csr(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Application\Csr::class);
        return $collection;
    }

    /**
     * Generates a new key pair and returns the Certificate Signing Request for it.
     */
    function generateCsrForApplication($appId, \Okta\Application\CsrMetadata $metadata) : \Okta\Application\Csr 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/csrs"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($metadata)
            ->executeRequest();

        $responseModel = new \Okta\Application\Csr(null, $body);
        return $responseModel;
    }

    /**
     * 
     */
    function revokeCsrFromApplication($appId, $csrId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/csrs/${csrId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * 
     */
    function getCsrForApplication($appId, $csrId) : \Okta\Application\Csr 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/csrs/${csrId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\Application\Csr(null, $body);
        return $responseModel;
    }

    /**
     * 
     */
    function publishCerCert($certificate, $appId, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/csrs/${csrId}/lifecycle/publish"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($certificate)
            ->setContentTypeHeader("application/x-x509-ca-cert")
            ->executeRequest();

        $responseModel = new \Okta\Application\JsonWebKey(null, $body);
        return $responseModel;
    }

    /**
     * 
     */
    function publishBinaryCerCert($certificate, $appId, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/csrs/${csrId}/lifecycle/publish"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($certificate)
            ->setContentTypeHeader("application/x-x509-ca-cert")
            ->executeRequest();

        $responseModel = new \Okta\Application\JsonWebKey(null, $body);
        return $responseModel;
    }

    /**
     * 
     */
    function publishDerCert($certificate, $appId, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/csrs/${csrId}/lifecycle/publish"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($certificate)
            ->setContentTypeHeader("application/pkix-cert")
            ->executeRequest();

        $responseModel = new \Okta\Application\JsonWebKey(null, $body);
        return $responseModel;
    }

    /**
     * 
     */
    function publishBinaryDerCert($certificate, $appId, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/csrs/${csrId}/lifecycle/publish"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($certificate)
            ->setContentTypeHeader("application/pkix-cert")
            ->executeRequest();

        $responseModel = new \Okta\Application\JsonWebKey(null, $body);
        return $responseModel;
    }

    /**
     * 
     */
    function publishBinaryPemCert($certificate, $appId, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/csrs/${csrId}/lifecycle/publish"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($certificate)
            ->setContentTypeHeader("application/x-pem-file")
            ->executeRequest();

        $responseModel = new \Okta\Application\JsonWebKey(null, $body);
        return $responseModel;
    }

    /**
     * Enumerates key credentials for an application
     */
    function listApplicationKeys($appId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/keys"
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
     * Generates a new X.509 certificate for an application key credential
     */
    function generateApplicationKey($appId, array $queryParameters = []) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/keys/generate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Application\JsonWebKey(null, $body);
        return $responseModel;
    }

    /**
     * Gets a specific application key credential by kid
     */
    function getApplicationKey($appId, $keyId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/keys/${keyId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\Application\JsonWebKey(null, $body);
        return $responseModel;
    }

    /**
     * Clones a X.509 certificate for an application key credential from a source application to target application.
     */
    function cloneApplicationKey($appId, $keyId, array $queryParameters = []) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/credentials/keys/${keyId}/clone"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Application\JsonWebKey(null, $body);
        return $responseModel;
    }

    /**
     * Lists all scope consent grants for the application
     */
    function listScopeConsentGrants($appId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/grants"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\OAuth2ScopeConsentGrant(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Application\OAuth2ScopeConsentGrant::class);
        return $collection;
    }

    /**
     * Grants consent for the application to request an OAuth 2.0 Okta scope
     */
    function grantConsentToScope($appId, \Okta\Application\OAuth2ScopeConsentGrant $oAuth2ScopeConsentGrant) : \Okta\Application\OAuth2ScopeConsentGrant 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/grants"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($oAuth2ScopeConsentGrant)
            ->executeRequest();

        $responseModel = new \Okta\Application\OAuth2ScopeConsentGrant(null, $body);
        return $responseModel;
    }

    /**
     * Revokes permission for the application to request the given scope
     */
    function revokeScopeConsentGrant($appId, $grantId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/grants/${grantId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Fetches a single scope consent grant for the application
     */
    function getScopeConsentGrant($appId, $grantId, array $queryParameters = []) : \Okta\Application\OAuth2ScopeConsentGrant 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/grants/${grantId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Application\OAuth2ScopeConsentGrant(null, $body);
        return $responseModel;
    }

    /**
     * Enumerates group assignments for an application.
     */
    function listApplicationGroupAssignments($appId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/groups"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\ApplicationGroupAssignment(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Application\ApplicationGroupAssignment::class);
        return $collection;
    }

    /**
     * Removes a group assignment from an application.
     */
    function deleteApplicationGroupAssignment($appId, $groupId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/groups/${groupId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Fetches an application group assignment
     */
    function getApplicationGroupAssignment($appId, $groupId, array $queryParameters = []) : \Okta\Application\ApplicationGroupAssignment 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/groups/${groupId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Application\ApplicationGroupAssignment(null, $body);
        return $responseModel;
    }

    /**
     * Assigns a group to an application
     */
    function createApplicationGroupAssignment($appId, $groupId, \Okta\Application\ApplicationGroupAssignment $applicationGroupAssignment = null) : \Okta\Application\ApplicationGroupAssignment 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/groups/${groupId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($applicationGroupAssignment)
            ->executeRequest();

        $responseModel = new \Okta\Application\ApplicationGroupAssignment(null, $body);
        return $responseModel;
    }

    /**
     * Activates an inactive application.
     */
    function activateApplication($appId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/lifecycle/activate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Deactivates an active application.
     */
    function deactivateApplication($appId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/lifecycle/deactivate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Revokes all tokens for the specified application
     */
    function revokeOAuth2TokensForApplication($appId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/tokens"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Lists all tokens for the application
     */
    function listOAuth2TokensForApplication($appId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/tokens"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\OAuth2Token(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Application\OAuth2Token::class);
        return $collection;
    }

    /**
     * Revokes the specified token for the specified application
     */
    function revokeOAuth2TokenForApplication($appId, $tokenId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/tokens/${tokenId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Gets a token for the specified application
     */
    function getOAuth2TokenForApplication($appId, $tokenId, array $queryParameters = []) : \Okta\Application\OAuth2Token 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/tokens/${tokenId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Application\OAuth2Token(null, $body);
        return $responseModel;
    }

    /**
     * Enumerates all assigned [application users](#application-user-model) for an application.
     */
    function listApplicationUsers($appId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/users"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\AppUser(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Application\AppUser::class);
        return $collection;
    }

    /**
     * Assigns an user to an application with [credentials](#application-user-credentials-object) and an app-specific [profile](#application-user-profile-object). Profile mappings defined for the application are first applied before applying any profile properties specified in the request.
     */
    function assignUserToApplication($appId, \Okta\Application\AppUser $appUser) : \Okta\Application\AppUser 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/users"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($appUser)
            ->executeRequest();

        $responseModel = new \Okta\Application\AppUser(null, $body);
        return $responseModel;
    }

    /**
     * Removes an assignment for a user from an application.
     */
    function deleteApplicationUser($appId, $userId, array $queryParameters = [])
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/users/${userId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

    }

    /**
     * Fetches a specific user assignment for application by &#x60;id&#x60;.
     */
    function getApplicationUser($appId, $userId, array $queryParameters = []) : \Okta\Application\AppUser 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/users/${userId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Application\AppUser(null, $body);
        return $responseModel;
    }

    /**
     * Updates a user&#x27;s profile for an application
     */
    function updateApplicationUser($appId, $userId, \Okta\Application\AppUser $appUser) : \Okta\Application\AppUser 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/apps/${appId}/users/${userId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($appUser)
            ->executeRequest();

        $responseModel = new \Okta\Application\AppUser(null, $body);
        return $responseModel;
    }

}