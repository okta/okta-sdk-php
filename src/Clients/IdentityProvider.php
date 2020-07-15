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

class IdentityProvider {

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
     * Enumerates IdPs in your organization with pagination. A subset of IdPs can be returned that match a supported filter expression or query.
     */
    function listIdentityProviders(array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\IdentityProvider\IdentityProvider(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Adds a new IdP to your organization.
     */
    function createIdentityProvider(\Okta\IdentityProvider\IdentityProvider $identityProvider) : \Okta\IdentityProvider\IdentityProvider 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($identityProvider)
            ->executeRequest();

        $responseModel = new \Okta\IdentityProvider\IdentityProvider(null, $body);
        return $responseModel;
    }

    /**
     * Enumerates IdP key credentials.
     */
    function listIdentityProviderKeys(array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/credentials/keys"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\JsonWebKey(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Adds a new X.509 certificate credential to the IdP key store.
     */
    function createIdentityProviderKey(\Okta\Application\JsonWebKey $jsonWebKey) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/credentials/keys"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($jsonWebKey)
            ->executeRequest();

        $responseModel = new \Okta\Application\JsonWebKey(null, $body);
        return $responseModel;
    }

    /**
     * Deletes a specific IdP Key Credential by &#x60;kid&#x60; if it is not currently being used by an Active or Inactive IdP.
     */
    function deleteIdentityProviderKey($keyId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/credentials/keys/${keyId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Gets a specific IdP Key Credential by &#x60;kid&#x60;
     */
    function getIdentityProviderKey($keyId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/credentials/keys/${keyId}"
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
     * Removes an IdP from your organization.
     */
    function deleteIdentityProvider($idpId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Fetches an IdP by &#x60;id&#x60;.
     */
    function getIdentityProvider($idpId) : \Okta\IdentityProvider\IdentityProvider 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\IdentityProvider\IdentityProvider(null, $body);
        return $responseModel;
    }

    /**
     * Updates the configuration for an IdP.
     */
    function updateIdentityProvider($idpId, \Okta\IdentityProvider\IdentityProvider $identityProvider) : \Okta\IdentityProvider\IdentityProvider 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($identityProvider)
            ->executeRequest();

        $responseModel = new \Okta\IdentityProvider\IdentityProvider(null, $body);
        return $responseModel;
    }

    /**
     * Enumerates Certificate Signing Requests for an IdP
     */
    function listCsrsForIdentityProvider($idpId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/csrs"
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
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Generates a new key pair and returns a Certificate Signing Request for it.
     */
    function generateCsrForIdentityProvider($idpId, \Okta\Application\CsrMetadata $metadata) : \Okta\Application\Csr 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/csrs"
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
     * Revoke a Certificate Signing Request and delete the key pair from the IdP
     */
    function revokeCsrForIdentityProvider($idpId, $csrId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/csrs/${csrId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Gets a specific Certificate Signing Request model by id
     */
    function getCsrForIdentityProvider($idpId, $csrId) : \Okta\Application\Csr 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/csrs/${csrId}"
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
     * Update the Certificate Signing Request with a signed X.509 certificate and add it into the signing key credentials for the IdP.
     */
    function publishCerCertForIdentityProvider($certificate, $idpId, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/csrs/${csrId}/lifecycle/publish"
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
     * Update the Certificate Signing Request with a signed X.509 certificate and add it into the signing key credentials for the IdP.
     */
    function publishBinaryCerCertForIdentityProvider($certificate, $idpId, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/csrs/${csrId}/lifecycle/publish"
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
     * Update the Certificate Signing Request with a signed X.509 certificate and add it into the signing key credentials for the IdP.
     */
    function publishDerCertForIdentityProvider($certificate, $idpId, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/csrs/${csrId}/lifecycle/publish"
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
     * Update the Certificate Signing Request with a signed X.509 certificate and add it into the signing key credentials for the IdP.
     */
    function publishBinaryDerCertForIdentityProvider($certificate, $idpId, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/csrs/${csrId}/lifecycle/publish"
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
     * Update the Certificate Signing Request with a signed X.509 certificate and add it into the signing key credentials for the IdP.
     */
    function publishBinaryPemCertForIdentityProvider($certificate, $idpId, $csrId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/csrs/${csrId}/lifecycle/publish"
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
     * Enumerates signing key credentials for an IdP
     */
    function listIdentityProviderSigningKeys($idpId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/keys"
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
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Generates a new X.509 certificate for an IdP signing key credential to be used for signing assertions sent to the IdP
     */
    function generateIdentityProviderSigningKey($idpId, array $queryParameters = []) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/keys/generate"
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
     * Gets a specific IdP Key Credential by &#x60;kid&#x60;
     */
    function getIdentityProviderSigningKey($idpId, $keyId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/keys/${keyId}"
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
     * Clones a X.509 certificate for an IdP signing key credential from a source IdP to target IdP
     */
    function cloneIdentityProviderKey($idpId, $keyId, array $queryParameters = []) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/credentials/keys/${keyId}/clone"
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
     * Activates an inactive IdP.
     */
    function activateIdentityProvider($idpId) : \Okta\IdentityProvider\IdentityProvider 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/lifecycle/activate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\IdentityProvider\IdentityProvider(null, $body);
        return $responseModel;
    }

    /**
     * Deactivates an active IdP.
     */
    function deactivateIdentityProvider($idpId) : \Okta\IdentityProvider\IdentityProvider 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/lifecycle/deactivate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\IdentityProvider\IdentityProvider(null, $body);
        return $responseModel;
    }

    /**
     * Find all the users linked to an identity provider
     */
    function listIdentityProviderApplicationUsers($idpId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/users"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\IdentityProvider\IdentityProviderApplicationUser(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Removes the link between the Okta user and the IdP user.
     */
    function unlinkUserFromIdentityProvider($idpId, $userId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/users/${userId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Fetches a linked IdP user by ID
     */
    function getIdentityProviderApplicationUser($idpId, $userId) : \Okta\IdentityProvider\IdentityProviderApplicationUser 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/users/${userId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\IdentityProvider\IdentityProviderApplicationUser(null, $body);
        return $responseModel;
    }

    /**
     * Links an Okta user to an existing Social Identity Provider. This does not support the SAML2 Identity Provider Type
     */
    function linkUserToIdentityProvider($idpId, $userId, \Okta\Policy\UserIdentityProviderLinkRequest $userIdentityProviderLinkRequest) : \Okta\IdentityProvider\IdentityProviderApplicationUser 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/users/${userId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($userIdentityProviderLinkRequest)
            ->executeRequest();

        $responseModel = new \Okta\IdentityProvider\IdentityProviderApplicationUser(null, $body);
        return $responseModel;
    }

    /**
     * Fetches the tokens minted by the Social Authentication Provider when the user authenticates with Okta via Social Auth.
     */
    function listSocialAuthTokens($idpId, $userId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/idps/${idpId}/users/${userId}/credentials/tokens"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\IdentityProvider\SocialAuthToken(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

}