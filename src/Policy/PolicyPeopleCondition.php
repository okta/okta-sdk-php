<?php
/*********************************************************************************/
/**   Copyright 2017 - Present Okta, Inc.                                       **/
/**                                                                             **/
/**   Licensed under the Apache License, Version 2.0 (the "License");           **/
/**   you may not use this file except in compliance with the License.          **/
/**   You may obtain a copy of the License at                                   **/
/**                                                                             **/
/**        http://www.apache.org/licenses/LICENSE-2.0                           **/
/**                                                                             **/
/**   Unless required by applicable law or agreed to in writing, software       **/
/**   distributed under the License is distributed on an "AS IS" BASIS,         **/
/**   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  **/
/**   See the License for the specific language governing permissions and       **/
/**   limitations under the License.                                            **/
/*********************************************************************************/

/************************************************/
/** This file is auto-generated.  Do Not Edit! **/
/************************************************/

namespace Okta\Policy;

class PolicyPeopleCondition extends \Okta\Resource\AbstractResource
{
    const USERS = 'users';
    const GROUPS = 'groups';

    /**
     * Set the Users.
     *
     * @param mixed $users The users to set.
     * @return self
     */
    function setUsers(\Okta\Policy\UserCondition $users) : PolicyPeopleCondition
    {
        $this->setResourceProperty(
            self::USERS,
            $users
        );
    
        return $this;
    }

    /**
     * Set the Groups.
     *
     * @param mixed $groups The groups to set.
     * @return self
     */
    function setGroups(\Okta\Policy\GroupCondition $groups) : PolicyPeopleCondition
    {
        $this->setResourceProperty(
            self::GROUPS,
            $groups
        );
    
        return $this;
    }

    /**
     * Get the Users.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\UserCondition
     */
    function getUsers(array $options = []) : \Okta\Policy\UserCondition
    {
        return $this->getResourceProperty(
            self::USERS,
            \Okta\Policy\UserCondition::class,
            $options
        );
    }

    /**
     * Get the Groups.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\GroupCondition
     */
    function getGroups(array $options = []) : \Okta\Policy\GroupCondition
    {
        return $this->getResourceProperty(
            self::GROUPS,
            \Okta\Policy\GroupCondition::class,
            $options
        );
    }


}