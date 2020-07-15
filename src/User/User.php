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

namespace Okta\User;

class User extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const TYPE = 'type';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
    const PROFILE = 'profile';
    const EMBEDDED = '_embedded';
    const ACTIVATED = 'activated';
    const LAST_LOGIN = 'lastLogin';
    const CREDENTIALS = 'credentials';
    const LAST_UPDATED = 'lastUpdated';
    const STATUS_CHANGED = 'statusChanged';
    const PASSWORD_CHANGED = 'passwordChanged';
    const TRANSITIONING_TO_STATUS = 'transitioningToStatus';


    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType(\Okta\UserType\UserType $type) : User
    {
        $this->setResourceProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }

    /**
     * Set the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return self
     */
    function setProfile(\Okta\User\UserProfile $profile) : User
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
        );
    
        return $this;
    }

    /**
     * Set the Credentials.
     *
     * @param mixed $credentials The credentials to set.
     * @return self
     */
    function setCredentials(\Okta\User\UserCredentials $credentials) : User
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
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
     * Get the Type.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\UserType\UserType
     */
    function getType(array $options = []) : \Okta\UserType\UserType
    {
        return $this->getResourceProperty(
            self::TYPE,
            \Okta\UserType\UserType::class,
            $options
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
     * @return \Okta\User\UserStatus
     */
    function getStatus() : \Okta\User\UserStatus
    {
        return $this->getEnumProperty(
            self::STATUS,
            \Okta\User\UserStatus::class,
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
     * Get the Profile.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\UserProfile
     */
    function getProfile(array $options = []) : \Okta\User\UserProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\User\UserProfile::class,
            $options
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
     * Get the Activated.
     *
     * @param mixed $activated The activated to set.
     * @return \Carbon\Carbon
     */
    function getActivated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::ACTIVATED
        );
    
        return $this;
    }

    /**
     * Get the LastLogin.
     *
     * @param mixed $lastLogin The lastLogin to set.
     * @return \Carbon\Carbon
     */
    function getLastLogin() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_LOGIN
        );
    
        return $this;
    }

    /**
     * Get the Credentials.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\UserCredentials
     */
    function getCredentials(array $options = []) : \Okta\User\UserCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\User\UserCredentials::class,
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

    /**
     * Get the StatusChanged.
     *
     * @param mixed $statusChanged The statusChanged to set.
     * @return \Carbon\Carbon
     */
    function getStatusChanged() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::STATUS_CHANGED
        );
    
        return $this;
    }

    /**
     * Get the PasswordChanged.
     *
     * @param mixed $passwordChanged The passwordChanged to set.
     * @return \Carbon\Carbon
     */
    function getPasswordChanged() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::PASSWORD_CHANGED
        );
    
        return $this;
    }

    /**
     * Get the TransitioningToStatus.
     *
     * @return \Okta\User\UserStatus
     */
    function getTransitioningToStatus() : \Okta\User\UserStatus
    {
        return $this->getEnumProperty(
            self::TRANSITIONING_TO_STATUS,
            \Okta\User\UserStatus::class,
        );
    }


}