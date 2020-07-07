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

namespace Okta\Application;

class Application extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const LABEL = 'label';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
    const PROFILE = 'profile';
    const FEATURES = 'features';
    const SETTINGS = 'settings';
    const EMBEDDED = '_embedded';
    const LICENSING = 'licensing';
    const SIGN_ON_MODE = 'signOnMode';
    const VISIBILITY = 'visibility';
    const CREDENTIALS = 'credentials';
    const LAST_UPDATED = 'lastUpdated';
    const ACCESSIBILITY = 'accessibility';

    protected $requiresResolution = true;
    protected $resolutionPropertyName = "signOnMode";
    protected $resolutionMapping = [
        "AUTO_LOGIN" => \Okta\Application\AutoLoginApplication::class,
        "BASIC_AUTH" => \Okta\Application\BasicAuthApplication::class,
        "BOOKMARK" => \Okta\Application\BookmarkApplication::class,
        "BROWSER_PLUGIN" => \Okta\Application\BrowserPluginApplication::class,
        "OPENID_CONNECT" => \Okta\Application\OpenIdConnectApplication::class,
        "SAML_2_0" => \Okta\Application\SamlApplication::class,
        "SECURE_PASSWORD_STORE" => \Okta\Application\SecurePasswordStoreApplication::class,
        "WS_FEDERATION" => \Okta\Application\WsFederationApplication::class,
    ];


    /**
     * Fetches an application from your Okta organization by `id`.
     */
    function read(array $queryParameters = []) : \Okta\Application\Application 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\Application(null, $body);
    }
    /**
     * Updates an application in your organization.
     */
    function update() : \Okta\Application\Application 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($this)
                ->executeRequest();
        return new \Okta\Application\Application(null, $body);
    }
    /**
     * Removes an inactive application.
     */
    function delete()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Activates an inactive application.
     */
    function activate()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/lifecycle/activate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Deactivates an active application.
     */
    function deactivate()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/lifecycle/deactivate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Enumerates all assigned [application users](#application-user-model) for an application.
     */
    function listApplicationUsers(array $queryParameters = []) : \Okta\Application\AppUser 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/users"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\AppUser(null, $body);
    }
    /**
     * Assigns an user to an application with [credentials](#application-user-credentials-object) and an app-specific [profile](#application-user-profile-object). Profile mappings defined for the application are first applied before applying any profile properties specified in the request.
     */
    function assignUserToApplication(\Okta\Application\AppUser $appUser) : \Okta\Application\AppUser 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/users"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($appUser)
                ->executeRequest();
        return new \Okta\Application\AppUser(null, $body);
    }
    /**
     * Fetches a specific user assignment for application by `id`.
     */
    function getApplicationUser($userId, array $queryParameters = []) : \Okta\Application\AppUser 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/users/${userId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\AppUser(null, $body);
    }
    /**
     * Assigns a group to an application
     */
    function createApplicationGroupAssignment($groupId, \Okta\Application\ApplicationGroupAssignment $applicationGroupAssignment) : \Okta\Application\ApplicationGroupAssignment 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/groups/${groupId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($applicationGroupAssignment)
                ->executeRequest();
        return new \Okta\Application\ApplicationGroupAssignment(null, $body);
    }
    /**
     * Fetches an application group assignment
     */
    function getApplicationGroupAssignment($groupId, array $queryParameters = []) : \Okta\Application\ApplicationGroupAssignment 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/groups/${groupId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\ApplicationGroupAssignment(null, $body);
    }
    /**
     * Clones a X.509 certificate for an application key credential from a source application to target application.
     */
    function cloneApplicationKey($keyId, array $queryParameters = []) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/keys/${keyId}/clone"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Gets a specific application key credential by kid
     */
    function getApplicationKey($keyId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/keys/${keyId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Enumerates group assignments for an application.
     */
    function listGroupAssignments(array $queryParameters = []) : \Okta\Application\ApplicationGroupAssignment 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/groups"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\ApplicationGroupAssignment(null, $body);
    }
    /**
     * Enumerates key credentials for an application
     */
    function listKeys() : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/keys"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Generates a new X.509 certificate for an application key credential
     */
    function generateKey(array $queryParameters = []) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/keys/generate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Generates a new key pair and returns the Certificate Signing Request for it.
     */
    function generateCsr(\Okta\Application\CsrMetadata $metadata) : \Okta\Application\Csr 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($metadata)
                ->executeRequest();
        return new \Okta\Application\Csr(null, $body);
    }
    /**
     * 
     */
    function getCsr($csrId) : \Okta\Application\Csr 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\Csr(null, $body);
    }
    /**
     * 
     */
    function revokeCsr($csrId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Enumerates Certificate Signing Requests for an application
     */
    function listCsrs() : \Okta\Application\Csr 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\Csr(null, $body);
    }
    /**
     * 
     */
    function publishCerCert($certificate, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}/lifecycle/publish"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($certificate)
                ->setContentTypeHeader(application/x-x509-ca-cert)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * 
     */
    function publishBinaryCerCert($certificate, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}/lifecycle/publish"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($certificate)
                ->setContentTypeHeader(application/x-x509-ca-cert)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * 
     */
    function publishDerCert($certificate, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}/lifecycle/publish"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($certificate)
                ->setContentTypeHeader(application/pkix-cert)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * 
     */
    function publishBinaryDerCert($certificate, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}/lifecycle/publish"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($certificate)
                ->setContentTypeHeader(application/pkix-cert)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * 
     */
    function publishBinaryPemCert($certificate, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/credentials/csrs/${csrId}/lifecycle/publish"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($certificate)
                ->setContentTypeHeader(application/x-pem-file)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Lists all tokens for the application
     */
    function listOAuth2Tokens(array $queryParameters = []) : \Okta\Application\OAuth2Token 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/tokens"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2Token(null, $body);
    }
    /**
     * Revokes the specified token for the specified application
     */
    function revokeOAuth2TokenForApplication($tokenId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/tokens/${tokenId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Gets a token for the specified application
     */
    function getOAuth2Token($tokenId, array $queryParameters = []) : \Okta\Application\OAuth2Token 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/tokens/${tokenId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2Token(null, $body);
    }
    /**
     * Revokes all tokens for the specified application
     */
    function revokeOAuth2Tokens()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/tokens"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Lists all scope consent grants for the application
     */
    function listScopeConsentGrants(array $queryParameters = []) : \Okta\Application\OAuth2ScopeConsentGrant 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/grants"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2ScopeConsentGrant(null, $body);
    }
    /**
     * Grants consent for the application to request an OAuth 2.0 Okta scope
     */
    function grantConsentToScope(\Okta\Application\OAuth2ScopeConsentGrant $oAuth2ScopeConsentGrant) : \Okta\Application\OAuth2ScopeConsentGrant 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/grants"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($oAuth2ScopeConsentGrant)
                ->executeRequest();
        return new \Okta\Application\OAuth2ScopeConsentGrant(null, $body);
    }
    /**
     * Revokes permission for the application to request the given scope
     */
    function revokeScopeConsentGrant($grantId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/grants/${grantId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Fetches a single scope consent grant for the application
     */
    function getScopeConsentGrant($grantId, array $queryParameters = []) : \Okta\Application\OAuth2ScopeConsentGrant 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/".$this->id."/grants/${grantId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2ScopeConsentGrant(null, $body);
    }

}