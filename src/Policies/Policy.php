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

namespace Okta\Policies;

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


    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\Policies\Policy::class,
                        "/policies"
                    );
    }
        
    public function save()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->saveResource(
                    "/policies",
                    $this,
                    \Okta\Policies\Policy::class
                );
    }

    public function delete()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    "/policies",
                    $this
                );
    }
        
    /**
     * Get the id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->getProperty(self::NAME);
    }

    /**
    * Set the name.
    *
    * @param mixed $name The value to set.
    * @return self
    */
    public function setName($name)
    {
        $this->setProperty(
            self::NAME,
            $name
        );

        return $this;
    }

    /**
     * Get the type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->getProperty(self::TYPE);
    }

    /**
    * Set the type.
    *
    * @param mixed $type The value to set.
    * @return self
    */
    public function setType($type)
    {
        $this->setProperty(
            self::TYPE,
            $type
        );

        return $this;
    }

    /**
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }

    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
    * Set the status.
    *
    * @param mixed $status The value to set.
    * @return self
    */
    public function setStatus($status)
    {
        $this->setProperty(
            self::STATUS,
            $status
        );

        return $this;
    }

    /**
     * Get the system.
     *
     * @return bool
     */
    public function getSystem()
    {
        return $this->getProperty(self::SYSTEM);
    }

    /**
    * Set the system.
    *
    * @param mixed $system The value to set.
    * @return self
    */
    public function setSystem($system)
    {
        $this->setProperty(
            self::SYSTEM,
            $system
        );

        return $this;
    }

    /**
     * Get the created.
     *
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
    }

    /**
     * Get the priority.
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->getProperty(self::PRIORITY);
    }

    /**
    * Set the priority.
    *
    * @param mixed $priority The value to set.
    * @return self
    */
    public function setPriority($priority)
    {
        $this->setProperty(
            self::PRIORITY,
            $priority
        );

        return $this;
    }

    /**
     * Get the _embedded.
     *
     * @return \stdClass
     */
    public function getEmbedded()
    {
        return $this->getProperty(self::EMBEDDED);
    }

    /**
     * Get the conditions.
     *
     * @return \Okta\Policies\PolicyRuleConditions
     */
    public function getConditions(array $options = []): \Okta\Policies\PolicyRuleConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\Policies\PolicyRuleConditions::class,
            $options
        );
    }


    /**
     * Set the conditions.
     *
     * @param \Okta\Policies\PolicyRuleConditions $conditions The PolicyRuleConditions instance.
     * @return self
     */
    public function setConditions(\Okta\Policies\PolicyRuleConditions $conditions)
    {
        $this->setResourceProperty(
            self::CONDITIONS,
            $conditions
        );

        return $this;
    }

    /**
     * Get the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty(self::DESCRIPTION);
    }

    /**
    * Set the description.
    *
    * @param mixed $description The value to set.
    * @return self
    */
    public function setDescription($description)
    {
        $this->setProperty(
            self::DESCRIPTION,
            $description
        );

        return $this;
    }

    /**
     * Get the lastUpdated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }


    /**
    * Activates a policy.
    *
    *
    * @return mixed|null
    */
    public function activate()
    {
        $uri = "/api/v1/policies/{$this->getId()}/lifecycle/activate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return $body;
    }


    /**
    * Deactivates a policy.
    *
    *
    * @return mixed|null
    */
    public function deactivate()
    {
        $uri = "/api/v1/policies/{$this->getId()}/lifecycle/deactivate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return $body;
    }


    /**
    * Get the PolicyRule object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Policies\Collection
    */
    public function getPolicyRules(array $options = []): \Okta\Policies\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/policies/{$this->getId()}/rules",
                    \Okta\Policies\PolicyRule::class,
                    \Okta\Policies\Collection::class,
                    $options
                );
    }


    /**
    * Creates a policy rule.
    *
    *
    * @return mixed|null
    */
    public function createRule(PolicyRule $policyRule)
    {
        $uri = "/api/v1/policies/{$this->getId()}/rules";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $policyRule);

        return new \Okta\Policies\PolicyRule(null, $body);
    }


    /**
    * Gets a policy rule.
    *
    *
    * @return mixed|null
    */
    public function getPolicyRule($ruleId)
    {
        $uri = "/api/v1/policies/{$this->getId()}/rules/{$ruleId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\Policies\PolicyRule(null, $body);
    }
}
