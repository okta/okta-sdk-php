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
     * @return hash
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }
    
    /**
     * @return
     */
    public function getAppsCount()
    {
        return $this->getProperty(self::APPS_COUNT);
    }
    
    /**
     * @return
     */
    public function getUsersCount()
    {
        return $this->getProperty(self::USERS_COUNT);
    }
    
    /**
     * @return
     */
    public function getGroupPushMappingsCount()
    {
        return $this->getProperty(self::GROUP_PUSH_MAPPINGS_COUNT);
    }
}
