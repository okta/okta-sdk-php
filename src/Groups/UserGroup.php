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

class UserGroup extends AbstractResource
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
    
    public function getLinks()
    {
        $collect = [];

        $links = $this->getProperty('_links');

        foreach ($links as $link) {
            $collect[] = new \Okta\Shared\Link(null, $link);
        }

        return new \Okta\Shared\Collection($collect);
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
     * @return UserGroupProfile
     */
    public function getProfile(array $options = []): UserGroupProfile
    {
        return $this->getResourceProperty(
                        self::PROFILE,
                        UserGroupProfile::class,
                        $options
                    );
    }

    /**
     * Set the profile.
     *
     * @param UserGroupProfile $profile The UserGroupProfile instance.
     * @return self
     */
    public function setProfile(UserGroupProfile $profile)
    {
        $this->setResourceProperty(
                        self::PROFILE,
                        $profile
                    );
        
        return $this;
    }
    
    public function getEmbedded()
    {
        $collect = [];

        $embedded = $this->getProperty('_embedded');

        foreach ($embedded as $object) {
            $collect[] = new \Okta\Shared\EmbeddedObject(null, $object);
        }

        return new \Okta\Shared\Collection($collect);
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
