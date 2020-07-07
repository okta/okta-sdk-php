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

class OAuth2Token extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const LINKS = '_links';
    const ISSUER = 'issuer';
    const SCOPES = 'scopes';
    const STATUS = 'status';
    const USER_ID = 'userId';
    const CREATED = 'created';
    const CLIENT_ID = 'clientId';
    const EMBEDDED = '_embedded';
    const EXPIRES_AT = 'expiresAt';
    const LAST_UPDATED = 'lastUpdated';


    /**
     * Set the Issuer.
     *
     * @param mixed $issuer The issuer to set.
     * @return self
     */
    function setIssuer($issuer) : OAuth2Token
    {
        $this->setProperty(
            self::ISSUER,
            $issuer
        );
    
        return $this;
    }
    
    /**
     * Set the Scopes.
     *
     * @param mixed $scopes The scopes to set.
     * @return self
     */
    function setScopes($scopes) : OAuth2Token
    {
        $this->setProperty(
            self::SCOPES,
            $scopes
        );
    
        return $this;
    }
    
    /**
     * Set the Status.
     *
     * @param mixed $status The status to set.
     * @return self
     */
    function setStatus($status) : OAuth2Token
    {
        $this->setProperty(
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
    function setUserId($userId) : OAuth2Token
    {
        $this->setProperty(
            self::USER_ID,
            $userId
        );
    
        return $this;
    }
    
    /**
     * Set the ClientId.
     *
     * @param mixed $clientId The clientId to set.
     * @return self
     */
    function setClientId($clientId) : OAuth2Token
    {
        $this->setProperty(
            self::CLIENT_ID,
            $clientId
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
     * Get the Scopes.
     *
     * @param mixed $scopes The scopes to set.
     * @return array
     */
    function getScopes() : array
    {
        return $this->getProperty(
            self::SCOPES,
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
     * Get the ExpiresAt.
     *
     * @param mixed $expiresAt The expiresAt to set.
     * @return \Carbon\Carbon
     */
    function getExpiresAt() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::EXPIRES_AT
        );
    
        return $this;
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