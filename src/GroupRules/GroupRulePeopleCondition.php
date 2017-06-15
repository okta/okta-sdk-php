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

namespace Okta\GroupRules;

use Okta\Resource\AbstractResource;

class GroupRulePeopleCondition extends AbstractResource
{
    const USERS = 'users';
    const GROUPS = 'groups';

    /**
     * Get the users.
     *
     * @return GroupRuleUserCondition
     */
    public function getUsers(array $options = []): GroupRuleUserCondition
    {
        return $this->getResourceProperty(
            self::USERS,
            GroupRuleUserCondition::class,
            $options
        );
    }

    /**
     * Set the users.
     *
     * @param GroupRuleUserCondition $users The GroupRuleUserCondition instance.
     * @return self
     */
    public function setUsers(GroupRuleUserCondition $users)
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
     * @return GroupRuleGroupCondition
     */
    public function getGroups(array $options = []): GroupRuleGroupCondition
    {
        return $this->getResourceProperty(
            self::GROUPS,
            GroupRuleGroupCondition::class,
            $options
        );
    }

    /**
     * Set the groups.
     *
     * @param GroupRuleGroupCondition $groups The GroupRuleGroupCondition instance.
     * @return self
     */
    public function setGroups(GroupRuleGroupCondition $groups)
    {
        $this->setResourceProperty(
            self::GROUPS,
            $groups
        );
        
        return $this;
    }
}
