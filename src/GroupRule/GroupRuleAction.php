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

namespace Okta\GroupRule;

class GroupRuleAction extends \Okta\Resource\AbstractResource
{
    const ASSIGN_USER_TO_GROUPS = 'assignUserToGroups';


    /**
     * Set the AssignUserToGroups.
     *
     * @param mixed $assignUserToGroups The assignUserToGroups to set.
     * @return self
     */
    function setAssignUserToGroups(\Okta\GroupRule\GroupRuleGroupAssignment $assignUserToGroups) : GroupRuleAction
    {
        $this->setResourceProperty(
            self::ASSIGN_USER_TO_GROUPS,
            $assignUserToGroups
        );
    
        return $this;
    }

    /**
     * Get the AssignUserToGroups.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\GroupRule\GroupRuleGroupAssignment
     */
    function getAssignUserToGroups(array $options = []) : \Okta\GroupRule\GroupRuleGroupAssignment
    {
        return $this->getResourceProperty(
            self::ASSIGN_USER_TO_GROUPS,
            \Okta\GroupRule\GroupRuleGroupAssignment::class,
            $options
        );
    }


}