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

namespace Okta\Shared;

use Okta\Resource\AbstractResource;

class GroupMembershipMediationRule extends AbstractResource
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
     * Get the id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->getProperty(self::ID);
    }
    
    /**
     * Get the name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getProperty(self::NAME);
    }
    
    /**
     * Get the type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->getProperty(self::TYPE);
    }
    
    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->getProperty(self::STATUS);
    }
    
    /**
     * Get the actions.
     *
     * @return GroupMembershipMediationActions
     */
    public function getActions(array $options = []): GroupMembershipMediationActions
    {
        return $this->getResourceProperty(
                        self::ACTIONS,
                        GroupMembershipMediationActions::class,
                        $options
                    );
    }

    /**
     * Set the actions.
     *
     * @param GroupMembershipMediationActions $actions The GroupMembershipMediationActions instance.
     * @return self
     */
    public function setActions(GroupMembershipMediationActions $actions)
    {
        $this->setResourceProperty(
                        self::ACTIONS,
                        $actions
                    );
        
        return $this;
    }
    
    /**
     * Get the created.
     *
     * @return string
     */
    public function getCreated(): string
    {
        return $this->getProperty(self::CREATED);
    }
    
    /**
     * Get the conditions.
     *
     * @return GroupMembershipMediationConditions
     */
    public function getConditions(array $options = []): GroupMembershipMediationConditions
    {
        return $this->getResourceProperty(
                        self::CONDITIONS,
                        GroupMembershipMediationConditions::class,
                        $options
                    );
    }

    /**
     * Set the conditions.
     *
     * @param GroupMembershipMediationConditions $conditions The GroupMembershipMediationConditions instance.
     * @return self
     */
    public function setConditions(GroupMembershipMediationConditions $conditions)
    {
        $this->setResourceProperty(
                        self::CONDITIONS,
                        $conditions
                    );
        
        return $this;
    }
    
    /**
     * Get the lastUpdated.
     *
     * @return string
     */
    public function getLastUpdated(): string
    {
        return $this->getProperty(self::LAST_UPDATED);
    }
}
