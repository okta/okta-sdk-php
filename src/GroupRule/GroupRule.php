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

class GroupRule extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const TYPE = 'type';
    const STATUS = 'status';
    const ACTIONS = 'actions';
    const CREATED = 'created';
    const CONDITIONS = 'conditions';
    const LAST_UPDATED = 'lastUpdated';


    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : GroupRule
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : GroupRule
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Actions.
     *
     * @param mixed $actions The actions to set.
     * @return self
     */
    function setActions(\Okta\GroupRule\GroupRuleAction $actions) : GroupRule
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
    function setConditions(\Okta\GroupRule\GroupRuleConditions $conditions) : GroupRule
    {
        $this->setResourceProperty(
            self::CONDITIONS,
            $conditions
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
    
    /**
     * Get the Status.
     *
     * @return \Okta\GroupRule\GroupRuleStatus
     */
    function getStatus() : \Okta\GroupRule\GroupRuleStatus
    {
        return $this->getEnumProperty(
            self::STATUS,
            \Okta\GroupRule\GroupRuleStatus::class,
        );
    }

    /**
     * Get the Actions.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\GroupRule\GroupRuleAction
     */
    function getActions(array $options = []) : \Okta\GroupRule\GroupRuleAction
    {
        return $this->getResourceProperty(
            self::ACTIONS,
            \Okta\GroupRule\GroupRuleAction::class,
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
     * Get the Conditions.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\GroupRule\GroupRuleConditions
     */
    function getConditions(array $options = []) : \Okta\GroupRule\GroupRuleConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\GroupRule\GroupRuleConditions::class,
            $options
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
     * Updates a group rule. Only `INACTIVE` rules can be updated.
     */
    function update() : \Okta\GroupRule\GroupRule 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/rules/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($this)
                ->executeRequest();
        return new \Okta\GroupRule\GroupRule(null, $body);
    }
    /**
     * Removes a specific group rule by id from your organization
     */
    function delete()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/rules/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Activates a specific group rule by id from your organization
     */
    function activate()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/rules/".$this->id."/lifecycle/activate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Deactivates a specific group rule by id from your organization
     */
    function deactivate()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/rules/".$this->id."/lifecycle/deactivate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }

}