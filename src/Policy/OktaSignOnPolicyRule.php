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

class OktaSignOnPolicyRule extends \Okta\Policy\PolicyRule
{
    const NAME = 'name';
    const ACTIONS = 'actions';
    const CONDITIONS = 'conditions';

    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : OktaSignOnPolicyRule
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Actions.
     *
     * @param mixed $actions The actions to set.
     * @return self
     */
    function setActions(\Okta\Policy\OktaSignOnPolicyRuleActions $actions) : OktaSignOnPolicyRule
    {
        $this->setResourceProperty(
            self::ACTIONS,
            $actions
        );
    
        return $this;
    }

    /**
     * Set the Conditions.
     *
     * @param mixed $conditions The conditions to set.
     * @return self
     */
    function setConditions(\Okta\Policy\OktaSignOnPolicyRuleConditions $conditions) : OktaSignOnPolicyRule
    {
        $this->setResourceProperty(
            self::CONDITIONS,
            $conditions
        );
    
        return $this;
    }

    /**
     * Get the Name.
     *
     * @param mixed $name The name to set.
     * @return string
     */
    function getName() : string
    {
        return $this->getProperty(
            self::NAME
        );
    }
    
    /**
     * Get the Actions.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\OktaSignOnPolicyRuleActions
     */
    function getActions(array $options = []) : \Okta\Policy\OktaSignOnPolicyRuleActions
    {
        return $this->getResourceProperty(
            self::ACTIONS,
            \Okta\Policy\OktaSignOnPolicyRuleActions::class,
            $options
        );
    }

    /**
     * Get the Conditions.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\OktaSignOnPolicyRuleConditions
     */
    function getConditions(array $options = []) : \Okta\Policy\OktaSignOnPolicyRuleConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\Policy\OktaSignOnPolicyRuleConditions::class,
            $options
        );
    }


}