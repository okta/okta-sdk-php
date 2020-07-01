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

class Policy extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const TYPE = 'type';
    const LINKS = '_links';
    const STATUS = 'status';
    const SYSTEM = 'system';
    const CREATED = 'created';
    const PRIORITY = 'priority';
    const EMBEDDED = '_embedded';
    const CONDITIONS = 'conditions';
    const DESCRIPTION = 'description';
    const LAST_UPDATED = 'lastUpdated';

    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : Policy
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
    function setType($type) : Policy
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Status.
     *
     * @param mixed $status The status to set.
     * @return self
     */
    function setStatus($status) : Policy
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
    function setSystem($system) : Policy
    {
        $this->setProperty(
            self::SYSTEM,
            $system
        );
    
        return $this;
    }
    
    /**
     * Set the Priority.
     *
     * @param mixed $priority The priority to set.
     * @return self
     */
    function setPriority($priority) : Policy
    {
        $this->setProperty(
            self::PRIORITY,
            $priority
        );
    
        return $this;
    }
    
    /**
     * Set the Conditions.
     *
     * @param mixed $conditions The conditions to set.
     * @return self
     */
    function setConditions(\Okta\Policy\PolicyRuleConditions $conditions) : Policy
    {
        $this->setResourceProperty(
            self::CONDITIONS,
            $conditions
        );
    
        return $this;
    }

    /**
     * Set the Description.
     *
     * @param mixed $description The description to set.
     * @return self
     */
    function setDescription($description) : Policy
    {
        $this->setProperty(
            self::DESCRIPTION,
            $description
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
            self::ID
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
            self::NAME
        );
    }
    
    /**
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return \Okta\Policy\PolicyType
     */
    function getType() : \Okta\Policy\PolicyType
    {
        return $this->getProperty(
            self::TYPE
        );
    }
    
    /**
     * Get the Links.
     *
     * @param mixed $_links The _links to set.
     * @return \stdClass
     */
    function getLinks() : \stdClass
    {
        return $this->getProperty(
            self::LINKS
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
            self::STATUS
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
            self::SYSTEM
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
     * Get the Priority.
     *
     * @param mixed $priority The priority to set.
     * @return int
     */
    function getPriority() : int
    {
        return $this->getProperty(
            self::PRIORITY
        );
    }
    
    /**
     * Get the Embedded.
     *
     * @param mixed $_embedded The _embedded to set.
     * @return \stdClass
     */
    function getEmbedded() : \stdClass
    {
        return $this->getProperty(
            self::EMBEDDED
        );
    }
    
    /**
     * Get the Conditions.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicyRuleConditions
     */
    function getConditions(array $options = []) : \Okta\Policy\PolicyRuleConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\Policy\PolicyRuleConditions::class,
            $options
        );
    }

    /**
     * Get the Description.
     *
     * @param mixed $description The description to set.
     * @return string
     */
    function getDescription() : string
    {
        return $this->getProperty(
            self::DESCRIPTION
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
     * Gets a policy.
     */
    function read(array $queryParameters = []) : \Okta\Policy\Policy 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Policy\Policy(null, $body);
    }
    /**
     * Updates a policy.
     */
    function update() : \Okta\Policy\Policy 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($this)
                ->executeRequest();
        return new \Okta\Policy\Policy(null, $body);
    }
    /**
     * Removes a policy.
     */
    function delete()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Activates a policy.
     */
    function activate()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id."/lifecycle/activate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Deactivates a policy.
     */
    function deactivate()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id."/lifecycle/deactivate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Enumerates all policy rules.
     */
    function listPolicyRules() : \Okta\Policy\PolicyRule 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id."/rules"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Policy\PolicyRule(null, $body);
    }
    /**
     * Creates a policy rule.
     */
    function createRule() : \Okta\Policy\PolicyRule 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id."/rules"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->executeRequest();
        return new \Okta\Policy\PolicyRule(null, $body);
    }
    /**
     * Gets a policy rule.
     */
    function getPolicyRule($ruleId) : \Okta\Policy\PolicyRule 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id."/rules/${ruleId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Policy\PolicyRule(null, $body);
    }

}