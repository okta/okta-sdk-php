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

class UserGroupStats extends AbstractResource
{
    const LINKS = '_links';
    const APPS_COUNT = 'appsCount';
    const USERS_COUNT = 'usersCount';
    const GROUP_PUSH_MAPPINGS_COUNT = 'groupPushMappingsCount';


    /**
     * Get the _links.
     *
     * @return array
     */
    public function getLinks(): array
    {
        return $this->getProperty(self::LINKS);
    }
    
    /**
     * Get the appsCount.
     *
     * @return 
     */
    public function getAppsCount(): undefined
    {
        return $this->getProperty(self::APPS_COUNT);
    }
    
    /**
     * Get the usersCount.
     *
     * @return 
     */
    public function getUsersCount(): undefined
    {
        return $this->getProperty(self::USERS_COUNT);
    }
    
    /**
     * Get the groupPushMappingsCount.
     *
     * @return 
     */
    public function getGroupPushMappingsCount(): undefined
    {
        return $this->getProperty(self::GROUP_PUSH_MAPPINGS_COUNT);
    }
    
}
