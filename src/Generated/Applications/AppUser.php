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

    /**
     * Get the id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->getProperty(self::ID);
    }
    /**
     * Get the scope.
     *
     * @return string
     */
    public function getScope(): string
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
    public function getLinks(): \stdClass
    {
        return $this->getProperty(self::LINKS);
    }
    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->getProperty(self::STATUS);
    }
    /**
    * Set the status.
    *
    * @param mixed $status The value to set.
    * @return self
    */
    public function setStatus($status)
    {
        $this->setProperty(
            self::STATUS,
            $status
        );

        return $this;
    }
    /**
     * Get the created.
     *
     * @return string
     */
    public function getCreated(): string
    {
        return $this->getProperty(self::CREATED);
    }
    /**
    * Set the created.
    *
    * @param mixed $created The value to set.
    * @return self
    */
    public function setCreated($created)
    {
        $this->setProperty(
            self::CREATED,
            $created
        );

        return $this;
    }
    /**
     * Get the profile.
     *
     * @return \stdClass
     */
    public function getProfile(): \stdClass
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
     * @return string
     */
    public function getLastSync(): string
    {
        return $this->getProperty(self::LAST_SYNC);
    }
    /**
    * Set the lastSync.
    *
    * @param mixed $lastSync The value to set.
    * @return self
    */
    public function setLastSync($lastSync)
    {
        $this->setProperty(
            self::LAST_SYNC,
            $lastSync
        );

        return $this;
    }
    /**
     * Get the _embedded.
     *
     * @return \stdClass
     */
    public function getEmbedded(): \stdClass
    {
        return $this->getProperty(self::EMBEDDED);
    }
    /**
     * Get the syncState.
     *
     * @return string
     */
    public function getSyncState(): string
    {
        return $this->getProperty(self::SYNC_STATE);
    }
    /**
    * Set the syncState.
    *
    * @param mixed $syncState The value to set.
    * @return self
    */
    public function setSyncState($syncState)
    {
        $this->setProperty(
            self::SYNC_STATE,
            $syncState
        );

        return $this;
    }
    /**
     * Get the externalId.
     *
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->getProperty(self::EXTERNAL_ID);
    }
    /**
    * Set the externalId.
    *
    * @param mixed $externalId The value to set.
    * @return self
    */
    public function setExternalId($externalId)
    {
        $this->setProperty(
            self::EXTERNAL_ID,
            $externalId
        );

        return $this;
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
    public function setCredentials(AppUserCredentials $credentials)
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
     * @return string
     */
    public function getLastUpdated(): string
    {
        return $this->getProperty(self::LAST_UPDATED);
    }
    /**
    * Set the lastUpdated.
    *
    * @param mixed $lastUpdated The value to set.
    * @return self
    */
    public function setLastUpdated($lastUpdated)
    {
        $this->setProperty(
            self::LAST_UPDATED,
            $lastUpdated
        );

        return $this;
    }
    /**
     * Get the statusChanged.
     *
     * @return string
     */
    public function getStatusChanged(): string
    {
        return $this->getProperty(self::STATUS_CHANGED);
    }
    /**
    * Set the statusChanged.
    *
    * @param mixed $statusChanged The value to set.
    * @return self
    */
    public function setStatusChanged($statusChanged)
    {
        $this->setProperty(
            self::STATUS_CHANGED,
            $statusChanged
        );

        return $this;
    }
    /**
     * Get the passwordChanged.
     *
     * @return string
     */
    public function getPasswordChanged(): string
    {
        return $this->getProperty(self::PASSWORD_CHANGED);
    }
    /**
    * Set the passwordChanged.
    *
    * @param mixed $passwordChanged The value to set.
    * @return self
    */
    public function setPasswordChanged($passwordChanged)
    {
        $this->setProperty(
            self::PASSWORD_CHANGED,
            $passwordChanged
        );

        return $this;
    }
}
