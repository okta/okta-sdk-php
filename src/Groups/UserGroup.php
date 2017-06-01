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
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty(self::TYPE);
    }
    
    /**
     * @return hash
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }
    
    /**
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
    }
    
    /**
     * @return UserGroupProfile
     */
    public function getProfile(array $options = [])
    {
        return $this->getResourceProperty(
            self::PROFILE,
            UserGroupProfile::class,
            $options
        );
    }

    /**
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
    
    /**
     * @return hash
     */
    public function getEmbedded()
    {
        return $this->getProperty(self::EMBEDDED);
    }
    
    /**
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }
    
    /**
     * @return array
     */
    public function getObjectClass()
    {
        return $this->getProperty(self::OBJECT_CLASS);
    }
    
    /**
     * @return \Carbon\Carbon|null
     */
    public function getLastMembershipUpdated()
    {
        return $this->getDateProperty(self::LAST_MEMBERSHIP_UPDATED);
    }
    
    public function getUsers(array $options = [])
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
