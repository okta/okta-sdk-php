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

namespace Okta\IdentityProvider;

class IdentityProvider extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const TYPE = 'type';
    const LINKS = '_links';
    const POLICY = 'policy';
    const STATUS = 'status';
    const CREATED = 'created';
    const PROTOCOL = 'protocol';
    const ISSUER_MODE = 'issuerMode';
    const LAST_UPDATED = 'lastUpdated';

    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : IdentityProvider
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : IdentityProvider
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Policy.
     *
     * @param mixed $policy The policy to set.
     * @return self
     */
    function setPolicy(\Okta\Policy\IdentityProviderPolicy $policy) : IdentityProvider
    {
        $this->setResourceProperty(
            self::POLICY,
            $policy
        );
    
        return $this;
    }

    /**
     * Set the Status.
     *
     * @param mixed $status The status to set.
     * @return self
     */
    function setStatus($status) : IdentityProvider
    {
        $this->setProperty(
            self::STATUS,
            $status
        );
    
        return $this;
    }
    
    /**
     * Set the Protocol.
     *
     * @param mixed $protocol The protocol to set.
     * @return self
     */
    function setProtocol(\Okta\IdentityProvider\Protocol $protocol) : IdentityProvider
    {
        $this->setResourceProperty(
            self::PROTOCOL,
            $protocol
        );
    
        return $this;
    }

    /**
     * Set the IssuerMode.
     *
     * @param mixed $issuerMode The issuerMode to set.
     * @return self
     */
    function setIssuerMode($issuerMode) : IdentityProvider
    {
        $this->setProperty(
            self::ISSUER_MODE,
            $issuerMode
        );
    
        return $this;
    }
    
    /**
     * Get the Id.
     *
     * @param mixed $id The id to set.
     * @return string
     */
    function getId() : string
    {
        return $this->getProperty(
            self::ID
        );
    }
    
    /**
     * Get the Name.
     *
     * @param mixed $name The name to set.
     * @return string
     */
    function getName() : string
    {
        return $this->getProperty(
            self::NAME
        );
    }
    
    /**
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return string
     */
    function getType() : string
    {
        return $this->getProperty(
            self::TYPE
        );
    }
    
    /**
     * Get the Links.
     *
     * @param mixed $_links The _links to set.
     * @return \stdClass
     */
    function getLinks() : \stdClass
    {
        return $this->getProperty(
            self::LINKS
        );
    }
    
    /**
     * Get the Policy.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\IdentityProviderPolicy
     */
    function getPolicy(array $options = []) : \Okta\Policy\IdentityProviderPolicy
    {
        return $this->getResourceProperty(
            self::POLICY,
            \Okta\Policy\IdentityProviderPolicy::class,
            $options
        );
    }

    /**
     * Get the Status.
     *
     * @param mixed $status The status to set.
     * @return string
     */
    function getStatus() : string
    {
        return $this->getProperty(
            self::STATUS
        );
    }
    
    /**
     * Get the Created.
     *
     * @param mixed $created The created to set.
     * @return \Carbon\Carbon
     */
    function getCreated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::CREATED
        );
    
        return $this;
    }

    /**
     * Get the Protocol.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\Protocol
     */
    function getProtocol(array $options = []) : \Okta\IdentityProvider\Protocol
    {
        return $this->getResourceProperty(
            self::PROTOCOL,
            \Okta\IdentityProvider\Protocol::class,
            $options
        );
    }

    /**
     * Get the IssuerMode.
     *
     * @param mixed $issuerMode The issuerMode to set.
     * @return string
     */
    function getIssuerMode() : string
    {
        return $this->getProperty(
            self::ISSUER_MODE
        );
    }
    
    /**
     * Get the LastUpdated.
     *
     * @param mixed $lastUpdated The lastUpdated to set.
     * @return \Carbon\Carbon
     */
    function getLastUpdated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_UPDATED
        );
    
        return $this;
    }

    /**
     * Adds a new IdP to your organization.
     */
    function create() : \Okta\IdentityProvider\IdentityProvider 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->executeRequest();
        return new \Okta\IdentityProvider\IdentityProvider(null, $body);
    }
    /**
     * Fetches an IdP by `id`.
     */
    function read($idpId) : \Okta\IdentityProvider\IdentityProvider 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/${idpId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\IdentityProvider\IdentityProvider(null, $body);
    }
    /**
     * Updates the configuration for an IdP.
     */
    function update() : \Okta\IdentityProvider\IdentityProvider 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody()
                ->executeRequest();
        return new \Okta\IdentityProvider\IdentityProvider(null, $body);
    }
    /**
     * Removes an IdP from your organization.
     */
    function delete()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Enumerates Certificate Signing Requests for an IdP
     */
    function listSigningCsrs() : \Okta\Application\Csr 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/credentials/csrs"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\Csr(null, $body);
    }
    /**
     * Generates a new key pair and returns a Certificate Signing Request for it.
     */
    function generateCsr() : \Okta\Application\Csr 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/credentials/csrs"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->executeRequest();
        return new \Okta\Application\Csr(null, $body);
    }
    /**
     * Revoke a Certificate Signing Request and delete the key pair from the IdP
     */
    function deleteSigningCsr($csrId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/credentials/csrs/${csrId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Gets a specific Certificate Signing Request model by id
     */
    function getSigningCsr($csrId) : \Okta\Application\Csr 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/credentials/csrs/${csrId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\Csr(null, $body);
    }
    /**
     * Enumerates signing key credentials for an IdP
     */
    function listSigningKeys() : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/credentials/keys"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Generates a new X.509 certificate for an IdP signing key credential to be used for signing assertions sent to the IdP
     */
    function generateSigningKey(array $queryParameters = []) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/credentials/keys/generate"
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
     * Gets a specific IdP Key Credential by `kid`
     */
    function getSigningKey($keyId) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/credentials/keys/${keyId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Clones a X.509 certificate for an IdP signing key credential from a source IdP to target IdP
     */
    function cloneKey($keyId, array $queryParameters = []) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/credentials/keys/${keyId}/clone"
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
     * Activates an inactive IdP.
     */
    function activate() : \Okta\IdentityProvider\IdentityProvider 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/lifecycle/activate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\IdentityProvider\IdentityProvider(null, $body);
    }
    /**
     * Deactivates an active IdP.
     */
    function deactivate() : \Okta\IdentityProvider\IdentityProvider 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/lifecycle/deactivate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\IdentityProvider\IdentityProvider(null, $body);
    }
    /**
     * Find all the users linked to an identity provider
     */
    function listUsers() : \Okta\IdentityProvider\IdentityProviderApplicationUser 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/users"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\IdentityProvider\IdentityProviderApplicationUser(null, $body);
    }
    /**
     * Removes the link between the Okta user and the IdP user.
     */
    function unlinkUser($userId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/users/${userId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Fetches a linked IdP user by ID
     */
    function getUser($userId) : \Okta\IdentityProvider\IdentityProviderApplicationUser 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/users/${userId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\IdentityProvider\IdentityProviderApplicationUser(null, $body);
    }
    /**
     * Links an Okta user to an existing Social Identity Provider. This does not support the SAML2 Identity Provider Type
     */
    function linkUser($userId) : \Okta\IdentityProvider\IdentityProviderApplicationUser 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/users/${userId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->executeRequest();
        return new \Okta\IdentityProvider\IdentityProviderApplicationUser(null, $body);
    }
    /**
     * Fetches the tokens minted by the Social Authentication Provider when the user authenticates with Okta via Social Auth.
     */
    function listSocialAuthTokens($userId) : \Okta\IdentityProvider\SocialAuthToken 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/idps/".$this->id."/users/${userId}/credentials/tokens"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\IdentityProvider\SocialAuthToken(null, $body);
    }

}