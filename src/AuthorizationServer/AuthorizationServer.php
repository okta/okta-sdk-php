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

namespace Okta\AuthorizationServer;

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


    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : AuthorizationServer
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Issuer.
     *
     * @param mixed $issuer The issuer to set.
     * @return self
     */
    function setIssuer($issuer) : AuthorizationServer
    {
        $this->setProperty(
            self::ISSUER,
            $issuer
        );
    
        return $this;
    }
    
    /**
     * Set the Status.
     *
     * @param mixed $status The status to set.
     * @return self
     */
    function setStatus($status) : AuthorizationServer
    {
        $this->setProperty(
            self::STATUS,
            $status
        );
    
        return $this;
    }
    
    /**
     * Set the Audiences.
     *
     * @param mixed $audiences The audiences to set.
     * @return self
     */
    function setAudiences($audiences) : AuthorizationServer
    {
        $this->setProperty(
            self::AUDIENCES,
            $audiences
        );
    
        return $this;
    }
    
    /**
     * Set the IssuerMode.
     *
     * @param mixed $issuerMode The issuerMode to set.
     * @return self
     */
    function setIssuerMode($issuerMode) : AuthorizationServer
    {
        $this->setProperty(
            self::ISSUER_MODE,
            $issuerMode
        );
    
        return $this;
    }
    
    /**
     * Set the Credentials.
     *
     * @param mixed $credentials The credentials to set.
     * @return self
     */
    function setCredentials(\Okta\Application\AuthorizationServerCredentials $credentials) : AuthorizationServer
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );
    
        return $this;
    }

    /**
     * Set the Description.
     *
     * @param mixed $description The description to set.
     * @return self
     */
    function setDescription($description) : AuthorizationServer
    {
        $this->setProperty(
            self::DESCRIPTION,
            $description
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
            self::ID,
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
            self::NAME,
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
            self::LINKS,
        );
    }
    
    /**
     * Get the Issuer.
     *
     * @param mixed $issuer The issuer to set.
     * @return string
     */
    function getIssuer() : string
    {
        return $this->getProperty(
            self::ISSUER,
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
            self::STATUS,
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
     * Get the Audiences.
     *
     * @param mixed $audiences The audiences to set.
     * @return array
     */
    function getAudiences() : array
    {
        return $this->getProperty(
            self::AUDIENCES,
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
            self::ISSUER_MODE,
        );
    }
    
    /**
     * Get the Credentials.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\AuthorizationServerCredentials
     */
    function getCredentials(array $options = []) : \Okta\Application\AuthorizationServerCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\Application\AuthorizationServerCredentials::class,
            $options
        );
    }

    /**
     * Get the Description.
     *
     * @param mixed $description The description to set.
     * @return string
     */
    function getDescription() : string
    {
        return $this->getProperty(
            self::DESCRIPTION,
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
     * Success
     */
    function create() : \Okta\AuthorizationServer\AuthorizationServer 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($this)
                ->executeRequest();
        return new \Okta\AuthorizationServer\AuthorizationServer(null, $body);
    }
    /**
     * Success
     */
    function read($authServerId) : \Okta\AuthorizationServer\AuthorizationServer 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/${authServerId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\AuthorizationServer\AuthorizationServer(null, $body);
    }
    /**
     * Success
     */
    function update() : \Okta\AuthorizationServer\AuthorizationServer 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($this)
                ->executeRequest();
        return new \Okta\AuthorizationServer\AuthorizationServer(null, $body);
    }
    /**
     * Success
     */
    function delete()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function listOAuth2Claims() : \Okta\Application\OAuth2Claim 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/claims"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\OAuth2Claim(null, $body);
    }
    /**
     * Success
     */
    function createOAuth2Claim(\Okta\Application\OAuth2Claim $oAuth2Claim) : \Okta\Application\OAuth2Claim 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/claims"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($oAuth2Claim)
                ->executeRequest();
        return new \Okta\Application\OAuth2Claim(null, $body);
    }
    /**
     * Success
     */
    function deleteOAuth2Claim($claimId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/claims/${claimId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function getOAuth2Claim($claimId) : \Okta\Application\OAuth2Claim 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/claims/${claimId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\OAuth2Claim(null, $body);
    }
    /**
     * Success
     */
    function updateOAuth2Claim($claimId, \Okta\Application\OAuth2Claim $oAuth2Claim) : \Okta\Application\OAuth2Claim 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/claims/${claimId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($oAuth2Claim)
                ->executeRequest();
        return new \Okta\Application\OAuth2Claim(null, $body);
    }
    /**
     * Success
     */
    function listOAuth2Clients() : \Okta\Application\OAuth2Client 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/clients"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\OAuth2Client(null, $body);
    }
    /**
     * Success
     */
    function revokeRefreshTokensForClient($clientId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/clients/${clientId}/tokens"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function listRefreshTokensForClient($clientId, array $queryParameters = []) : \Okta\Application\OAuth2RefreshToken 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/clients/${clientId}/tokens"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2RefreshToken(null, $body);
    }
    /**
     * Success
     */
    function getRefreshTokenForClient($clientId, $tokenId, array $queryParameters = []) : \Okta\Application\OAuth2RefreshToken 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/clients/${clientId}/tokens/${tokenId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2RefreshToken(null, $body);
    }
    /**
     * Success
     */
    function revokeRefreshTokenForClient($clientId, $tokenId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/clients/${clientId}/tokens/${tokenId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function listKeys() : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/credentials/keys"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Success
     */
    function rotateKeys(\Okta\Application\JwkUse $use) : \Okta\Application\JsonWebKey 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/credentials/lifecycle/keyRotate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($use)
                ->executeRequest();
        return new \Okta\Application\JsonWebKey(null, $body);
    }
    /**
     * Success
     */
    function activate()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/lifecycle/activate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function deactivate()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/lifecycle/deactivate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function listPolicies() : \Okta\Policy\Policy 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/policies"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Policy\Policy(null, $body);
    }
    /**
     * Success
     */
    function createPolicy(\Okta\Policy\Policy $policy) : \Okta\Policy\Policy 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/policies"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($policy)
                ->executeRequest();
        return new \Okta\Policy\Policy(null, $body);
    }
    /**
     * Success
     */
    function deletePolicy($policyId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/policies/${policyId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function getPolicy($policyId) : \Okta\Policy\Policy 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/policies/${policyId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Policy\Policy(null, $body);
    }
    /**
     * Success
     */
    function updatePolicy($policyId, \Okta\Policy\Policy $policy) : \Okta\Policy\Policy 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/policies/${policyId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($policy)
                ->executeRequest();
        return new \Okta\Policy\Policy(null, $body);
    }
    /**
     * Success
     */
    function listOAuth2Scopes(array $queryParameters = []) : \Okta\Application\OAuth2Scope 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/scopes"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2Scope(null, $body);
    }
    /**
     * Success
     */
    function createOAuth2Scope(\Okta\Application\OAuth2Scope $oAuth2Scope) : \Okta\Application\OAuth2Scope 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/scopes"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($oAuth2Scope)
                ->executeRequest();
        return new \Okta\Application\OAuth2Scope(null, $body);
    }
    /**
     * Success
     */
    function deleteOAuth2Scope($scopeId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/scopes/${scopeId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function getOAuth2Scope($scopeId) : \Okta\Application\OAuth2Scope 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/scopes/${scopeId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\OAuth2Scope(null, $body);
    }
    /**
     * Success
     */
    function updateOAuth2Scope($scopeId, \Okta\Application\OAuth2Scope $oAuth2Scope) : \Okta\Application\OAuth2Scope 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/authorizationServers/".$this->id."/scopes/${scopeId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($oAuth2Scope)
                ->executeRequest();
        return new \Okta\Application\OAuth2Scope(null, $body);
    }

}