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

namespace Okta\Session;

class Session extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const AMR = 'amr';
    const IDP = 'idp';
    const LOGIN = 'login';
    const LINKS = '_links';
    const STATUS = 'status';
    const USER_ID = 'userId';
    const CREATED_AT = 'createdAt';
    const EXPIRES_AT = 'expiresAt';
    const LAST_FACTOR_VERIFICATION = 'lastFactorVerification';
    const LAST_PASSWORD_VERIFICATION = 'lastPasswordVerification';


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
     * Get the Amr.
     *
     * @param mixed $amr The amr to set.
     * @return array
     */
    function getAmr() : array
    {
        return $this->getProperty(
            self::AMR,
        );
    }
    
    /**
     * Get the Idp.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Session\SessionIdentityProvider
     */
    function getIdp(array $options = []) : \Okta\Session\SessionIdentityProvider
    {
        return $this->getResourceProperty(
            self::IDP,
            \Okta\Session\SessionIdentityProvider::class,
            $options
        );
    }

    /**
     * Get the Login.
     *
     * @param mixed $login The login to set.
     * @return string
     */
    function getLogin() : string
    {
        return $this->getProperty(
            self::LOGIN,
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
     * Get the Status.
     *
     * @return \Okta\Session\SessionStatus
     */
    function getStatus() : \Okta\Session\SessionStatus
    {
        return $this->getEnumProperty(
            self::STATUS,
            \Okta\Session\SessionStatus::class,
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
     * Get the CreatedAt.
     *
     * @param mixed $createdAt The createdAt to set.
     * @return \Carbon\Carbon
     */
    function getCreatedAt() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::CREATED_AT
        );
    
        return $this;
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
     * Get the LastFactorVerification.
     *
     * @param mixed $lastFactorVerification The lastFactorVerification to set.
     * @return \Carbon\Carbon
     */
    function getLastFactorVerification() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_FACTOR_VERIFICATION
        );
    
        return $this;
    }

    /**
     * Get the LastPasswordVerification.
     *
     * @param mixed $lastPasswordVerification The lastPasswordVerification to set.
     * @return \Carbon\Carbon
     */
    function getLastPasswordVerification() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_PASSWORD_VERIFICATION
        );
    
        return $this;
    }


}