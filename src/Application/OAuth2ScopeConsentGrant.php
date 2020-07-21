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

class OAuth2ScopeConsentGrant extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const LINKS = '_links';
    const ISSUER = 'issuer';
    const SOURCE = 'source';
    const STATUS = 'status';
    const USER_ID = 'userId';
    const CREATED = 'created';
    const SCOPE_ID = 'scopeId';
    const CLIENT_ID = 'clientId';
    const EMBEDDED = '_embedded';
    const CREATED_BY = 'createdBy';
    const LAST_UPDATED = 'lastUpdated';


    /**
     * Set the Issuer.
     *
     * @param mixed $issuer The issuer to set.
     * @return self
     */
    function setIssuer($issuer) : OAuth2ScopeConsentGrant
    {
        $this->setProperty(
            self::ISSUER,
            $issuer
        );
    
        return $this;
    }
    
    /**
     * Set the Source.
     *
     * @return self
     */
    function setSource(\Okta\Application\OAuth2ScopeConsentGrantSource $source) : OAuth2ScopeConsentGrant
    {
        $this->setEnumProperty(
            self::SOURCE,
            $source
        );
    
        return $this;
    }

    /**
     * Set the Status.
     *
     * @return self
     */
    function setStatus(\Okta\Application\OAuth2ScopeConsentGrantStatus $status) : OAuth2ScopeConsentGrant
    {
        $this->setEnumProperty(
            self::STATUS,
            $status
        );
    
        return $this;
    }

    /**
     * Set the UserId.
     *
     * @param mixed $userId The userId to set.
     * @return self
     */
    function setUserId($userId) : OAuth2ScopeConsentGrant
    {
        $this->setProperty(
            self::USER_ID,
            $userId
        );
    
        return $this;
    }
    
    /**
     * Set the ScopeId.
     *
     * @param mixed $scopeId The scopeId to set.
     * @return self
     */
    function setScopeId($scopeId) : OAuth2ScopeConsentGrant
    {
        $this->setProperty(
            self::SCOPE_ID,
            $scopeId
        );
    
        return $this;
    }
    
    /**
     * Set the ClientId.
     *
     * @param mixed $clientId The clientId to set.
     * @return self
     */
    function setClientId($clientId) : OAuth2ScopeConsentGrant
    {
        $this->setProperty(
            self::CLIENT_ID,
            $clientId
        );
    
        return $this;
    }
    
    /**
     * Set the CreatedBy.
     *
     * @param mixed $createdBy The createdBy to set.
     * @return self
     */
    function setCreatedBy(\Okta\Application\OAuth2Actor $createdBy) : OAuth2ScopeConsentGrant
    {
        $this->setResourceProperty(
            self::CREATED_BY,
            $createdBy
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
     * Get the Source.
     *
     * @return \Okta\Application\OAuth2ScopeConsentGrantSource
     */
    function getSource() : \Okta\Application\OAuth2ScopeConsentGrantSource
    {
        return $this->getEnumProperty(
            self::SOURCE,
            \Okta\Application\OAuth2ScopeConsentGrantSource::class,
        );
    }

    /**
     * Get the Status.
     *
     * @return \Okta\Application\OAuth2ScopeConsentGrantStatus
     */
    function getStatus() : \Okta\Application\OAuth2ScopeConsentGrantStatus
    {
        return $this->getEnumProperty(
            self::STATUS,
            \Okta\Application\OAuth2ScopeConsentGrantStatus::class,
        );
    }

    /**
     * Get the UserId.
     *
     * @param mixed $userId The userId to set.
     * @return string
     */
    function getUserId() : string
    {
        return $this->getProperty(
            self::USER_ID,
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
     * Get the ScopeId.
     *
     * @param mixed $scopeId The scopeId to set.
     * @return string
     */
    function getScopeId() : string
    {
        return $this->getProperty(
            self::SCOPE_ID,
        );
    }
    
    /**
     * Get the ClientId.
     *
     * @param mixed $clientId The clientId to set.
     * @return string
     */
    function getClientId() : string
    {
        return $this->getProperty(
            self::CLIENT_ID,
        );
    }
    
    /**
     * Get the Embedded.
     *
     * @param mixed $_embedded The _embedded to set.
     * @return \stdClass
     */
    function getEmbedded() : \stdClass
    {
        return $this->getProperty(
            self::EMBEDDED,
        );
    }
    
    /**
     * Get the CreatedBy.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\OAuth2Actor
     */
    function getCreatedBy(array $options = []) : \Okta\Application\OAuth2Actor
    {
        return $this->getResourceProperty(
            self::CREATED_BY,
            \Okta\Application\OAuth2Actor::class,
            $options
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


}