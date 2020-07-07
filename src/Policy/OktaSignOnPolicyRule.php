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
     * Set the Priority.
     *
     * @param mixed $priority The priority to set.
     * @return self
     */
    function setPriority($priority) : OktaSignOnPolicyRule
    {
        $this->setProperty(
            self::PRIORITY,
            $priority
        );
    
        return $this;
    }
    
    /**
     * Set the Status.
     *
     * @param mixed $status The status to set.
     * @return self
     */
    function setStatus($status) : OktaSignOnPolicyRule
    {
        $this->setProperty(
            self::STATUS,
            $status
        );
    
        return $this;
    }
    
    /**
     * Set the System.
     *
     * @param mixed $system The system to set.
     * @return self
     */
    function setSystem($system) : OktaSignOnPolicyRule
    {
        $this->setProperty(
            self::SYSTEM,
            $system
        );
    
        return $this;
    }
    
    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : OktaSignOnPolicyRule
    {
        $this->setProperty(
            self::TYPE,
            $type
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
            self::NAME,
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

    /**
     * Get the Created.
     *
     * @param mixed $created The created to set.
     * @return \Carbon\Carbon
     */
    function getCreated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::CREATED
        );
    
        return $this;
    }

    /**
     * Get the Id.
     *
     * @param mixed $id The id to set.
     * @return string
     */
    function getId() : string
    {
        return $this->getProperty(
            self::ID,
        );
    }
    
    /**
     * Get the LastUpdated.
     *
     * @param mixed $lastUpdated The lastUpdated to set.
     * @return \Carbon\Carbon
     */
    function getLastUpdated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_UPDATED
        );
    
        return $this;
    }

    /**
     * Get the Priority.
     *
     * @param mixed $priority The priority to set.
     * @return int
     */
    function getPriority() : int
    {
        return $this->getProperty(
            self::PRIORITY,
        );
    }
    
    /**
     * Get the Status.
     *
     * @param mixed $status The status to set.
     * @return string
     */
    function getStatus() : string
    {
        return $this->getProperty(
            self::STATUS,
        );
    }
    
    /**
     * Get the System.
     *
     * @param mixed $system The system to set.
     * @return bool
     */
    function getSystem() : bool
    {
        return $this->getProperty(
            self::SYSTEM,
        );
    }
    
    /**
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return string
     */
    function getType() : string
    {
        return $this->getProperty(
            self::TYPE,
        );
    }
    

}