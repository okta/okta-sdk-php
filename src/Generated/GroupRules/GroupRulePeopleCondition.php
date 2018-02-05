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

namespace Okta\Generated\GroupRules;


class GroupRulePeopleCondition extends \Okta\Resource\AbstractResource
{
    const USERS = 'users';
    const GROUPS = 'groups';



    /**
     * Get the users.
     *
     * @return \Okta\GroupRules\GroupRuleUserCondition
     */
    public function getUsers(array $options = []): \Okta\GroupRules\GroupRuleUserCondition
    {
        return $this->getResourceProperty(
            self::USERS,
            \Okta\GroupRules\GroupRuleUserCondition::class,
            $options
        );
    }


    /**
     * Set the users.
     *
     * @param \Okta\GroupRules\GroupRuleUserCondition $users The GroupRuleUserCondition instance.
     * @return self
     */
    public function setUsers(\Okta\GroupRules\GroupRuleUserCondition $users)
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
     * @return \Okta\GroupRules\GroupRuleGroupCondition
     */
    public function getGroups(array $options = []): \Okta\GroupRules\GroupRuleGroupCondition
    {
        return $this->getResourceProperty(
            self::GROUPS,
            \Okta\GroupRules\GroupRuleGroupCondition::class,
            $options
        );
    }


    /**
     * Set the groups.
     *
     * @param \Okta\GroupRules\GroupRuleGroupCondition $groups The GroupRuleGroupCondition instance.
     * @return self
     */
    public function setGroups(\Okta\GroupRules\GroupRuleGroupCondition $groups)
    {
        $this->setResourceProperty(
            self::GROUPS,
            $groups
        );
        
        return $this;
    }
}
