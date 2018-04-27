<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\Generated\Applications;


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


    public function save( $appId )
    {
        return \Okta\Client::getInstance()
            ->getDataStore()
            ->saveResource(
                "/apps/{$appId}/users",
                $this,
                \Okta\Applications\AppUser::class
            );
    }
    
    public function delete( $appId )
    {
        return \Okta\Client::getInstance()
            ->getDataStore()
            ->deleteResource(
                "/apps/{$appId}/users",
                $this
            );
    }
    

    /**
     * Get the id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }

    /**
    * Set the id.
    *
    * @param mixed $id The value to set.
    * @return self
    */
    public function setId($id)
    {
        $this->setProperty(
            self::ID,
            $id
        );

        return $this;
    }

    /**
     * Get the scope.
     *
     * @return string
     */
    public function getScope()
    {
        return $this->getProperty(self::SCOPE);
    }

    /**
    * Set the scope.
    *
    * @param mixed $scope The value to set.
    * @return self
    */
    public function setScope($scope)
    {
        $this->setProperty(
            self::SCOPE,
            $scope
        );

        return $this;
    }

    /**
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }

    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
     * Get the created.
     *
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
    }

    /**
     * Get the profile.
     *
     * @return \stdClass
     */
    public function getProfile()
    {
        return $this->getProperty(self::PROFILE);
    }

    /**
    * Set the profile.
    *
    * @param mixed $profile The value to set.
    * @return self
    */
    public function setProfile($profile)
    {
        $this->setProperty(
            self::PROFILE,
            $profile
        );

        return $this;
    }

    /**
     * Get the lastSync.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastSync()
    {
        return $this->getDateProperty(self::LAST_SYNC);
    }

    /**
     * Get the _embedded.
     *
     * @return \stdClass
     */
    public function getEmbedded()
    {
        return $this->getProperty(self::EMBEDDED);
    }

    /**
     * Get the syncState.
     *
     * @return string
     */
    public function getSyncState()
    {
        return $this->getProperty(self::SYNC_STATE);
    }

    /**
     * Get the externalId.
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->getProperty(self::EXTERNAL_ID);
    }

    /**
     * Get the credentials.
     *
     * @return \Okta\Applications\AppUserCredentials
     */
    public function getCredentials(array $options = []): \Okta\Applications\AppUserCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\Applications\AppUserCredentials::class,
            $options
        );
    }


    /**
     * Set the credentials.
     *
     * @param \Okta\Applications\AppUserCredentials $credentials The AppUserCredentials instance.
     * @return self
     */
    public function setCredentials(\Okta\Applications\AppUserCredentials $credentials)
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );
        
        return $this;
    }

    /**
     * Get the lastUpdated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }

    /**
     * Get the statusChanged.
     *
     * @return \Carbon\Carbon|null
     */
    public function getStatusChanged()
    {
        return $this->getDateProperty(self::STATUS_CHANGED);
    }

    /**
     * Get the passwordChanged.
     *
     * @return \Carbon\Carbon|null
     */
    public function getPasswordChanged()
    {
        return $this->getDateProperty(self::PASSWORD_CHANGED);
    }
}
