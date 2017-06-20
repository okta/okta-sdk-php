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

namespace Okta\Groups;

use Okta\Users\User;
use Okta\Resource\AbstractResource;

class Group extends AbstractResource
{
    const ID = 'id';
    const TYPE = 'type';
    const LINKS = '_links';
    const CREATED = 'created';
    const PROFILE = 'profile';
    const EMBEDDED = '_embedded';
    const LAST_UPDATED = 'lastUpdated';
    const OBJECT_CLASS = 'objectClass';
    const LAST_MEMBERSHIP_UPDATED = 'lastMembershipUpdated';

    public function save()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->saveResource(
                    '/groups',
                    $this,
                    self::class
                );
    }

    public function delete()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    '/groups',
                    $this
                );
    }

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
     * Get the type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->getProperty(self::TYPE);
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
     * @return GroupProfile
     */
    public function getProfile(array $options = []): GroupProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            GroupProfile::class,
            $options
        );
    }

    /**
     * Set the profile.
     *
     * @param GroupProfile $profile The GroupProfile instance.
     * @return self
     */
    public function setProfile(GroupProfile $profile)
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
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
     * Get the lastUpdated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }
    /**
     * Get the objectClass.
     *
     * @return array
     */
    public function getObjectClass(): array
    {
        return $this->getProperty(self::OBJECT_CLASS);
    }
    /**
     * Get the lastMembershipUpdated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastMembershipUpdated()
    {
        return $this->getDateProperty(self::LAST_MEMBERSHIP_UPDATED);
    }
    /**
    * Sends a request to the getStats endpoint.
    *
    *
    * @return mixed|null
    */
    public function getStats()
    {
        $uri = "/api/v1/groups/{$this->getId()}/stats";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'GET',
                    $uri
                );
    }
    /**
    * Sends a request to the removeUser endpoint.
    *
    *
    * @return mixed|null
    */
    public function removeUser()
    {
        $uri = "/api/v1/groups/{$this->getId()}/users/{$userId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'DELETE',
                    $uri
                );
    }
    /**
    * Get the User object.
    *
    * @param array $options The options for the request.
    * @return Collection
    */
    public function getUsers(array $options = []): Collection
    {
        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/groups/{$this->getId()}/users",
                    User::class,
                    Collection::class,
                    $options
                );
    }
}
