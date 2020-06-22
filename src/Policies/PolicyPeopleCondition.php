<?php
/*******************************************************************************
 * Copyright 2017-Present Okta, Inc.
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

namespace Okta\Policies;

class PolicyPeopleCondition extends \Okta\Resource\AbstractResource
{
    const USERS = 'users';
    const GROUPS = 'groups';


    /**
     * Get the users.
     *
     * @return \Okta\Policies\UserCondition
     */
    public function getUsers(array $options = []): \Okta\Policies\UserCondition
    {
        return $this->getResourceProperty(
            self::USERS,
            \Okta\Policies\UserCondition::class,
            $options
        );
    }

    /**
     * Set the users.
     *
     * @param \Okta\Policies\UserCondition $users The UserCondition instance.
     * @return self
     */
    public function setUsers(\Okta\Policies\UserCondition $users)
    {
        $this->setResourceProperty(
            self::USERS,
            $users
        );

        return $this;
    }

    /**
     * Get the groups.
     *
     * @return \Okta\Policies\GroupCondition
     */
    public function getGroups(array $options = []): \Okta\Policies\GroupCondition
    {
        return $this->getResourceProperty(
            self::GROUPS,
            \Okta\Policies\GroupCondition::class,
            $options
        );
    }

    /**
     * Set the groups.
     *
     * @param \Okta\Policies\GroupCondition $groups The GroupCondition instance.
     * @return self
     */
    public function setGroups(\Okta\Policies\GroupCondition $groups)
    {
        $this->setResourceProperty(
            self::GROUPS,
            $groups
        );

        return $this;
    }
}
