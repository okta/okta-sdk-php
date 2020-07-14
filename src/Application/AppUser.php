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

class AppUser extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const SCOPE = 'scope';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
    const PROFILE = 'profile';
    const LAST_SYNC = 'lastSync';
    const EMBEDDED = '_embedded';
    const SYNC_STATE = 'syncState';
    const EXTERNAL_ID = 'externalId';
    const CREDENTIALS = 'credentials';
    const LAST_UPDATED = 'lastUpdated';
    const STATUS_CHANGED = 'statusChanged';
    const PASSWORD_CHANGED = 'passwordChanged';


    /**
     * Set the Id.
     *
     * @param mixed $id The id to set.
     * @return self
     */
    function setId($id) : AppUser
    {
        $this->setProperty(
            self::ID,
            $id
        );
    
        return $this;
    }
    
    /**
     * Set the Scope.
     *
     * @param mixed $scope The scope to set.
     * @return self
     */
    function setScope($scope) : AppUser
    {
        $this->setProperty(
            self::SCOPE,
            $scope
        );
    
        return $this;
    }
    
    /**
     * Set the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return self
     */
    function setProfile($profile) : AppUser
    {
        $this->setProperty(
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
    function setCredentials(\Okta\Application\AppUserCredentials $credentials) : AppUser
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
     * Get the Scope.
     *
     * @param mixed $scope The scope to set.
     * @return string
     */
    function getScope() : string
    {
        return $this->getProperty(
            self::SCOPE,
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
     * Get the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return \stdClass
     */
    function getProfile() : \stdClass
    {
        return $this->getProperty(
            self::PROFILE,
        );
    }
    
    /**
     * Get the LastSync.
     *
     * @param mixed $lastSync The lastSync to set.
     * @return \Carbon\Carbon
     */
    function getLastSync() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_SYNC
        );
    
        return $this;
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
     * Get the SyncState.
     *
     * @param mixed $syncState The syncState to set.
     * @return string
     */
    function getSyncState() : string
    {
        return $this->getProperty(
            self::SYNC_STATE,
        );
    }
    
    /**
     * Get the ExternalId.
     *
     * @param mixed $externalId The externalId to set.
     * @return string
     */
    function getExternalId() : string
    {
        return $this->getProperty(
            self::EXTERNAL_ID,
        );
    }
    
    /**
     * Get the Credentials.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\AppUserCredentials
     */
    function getCredentials(array $options = []) : \Okta\Application\AppUserCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\Application\AppUserCredentials::class,
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


}