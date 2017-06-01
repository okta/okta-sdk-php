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

namespace Okta\Users;

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
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty(self::NAME);
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty(self::TYPE);
    }
    
    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }
    
    /**
     * @return GroupMembershipMediationActions
     */
    public function getActions(array $options = [])
    {
        return $this->getResourceProperty(
            self::ACTIONS,
            GroupMembershipMediationActions::class,
            $options
        );
    }

    /**
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
     * @return string
     */
    public function getCreated()
    {
        return $this->getProperty(self::CREATED);
    }
    
    /**
     * @return GroupMembershipMediationConditions
     */
    public function getConditions(array $options = [])
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            GroupMembershipMediationConditions::class,
            $options
        );
    }

    /**
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
     * @return string
     */
    public function getLastUpdated()
    {
        return $this->getProperty(self::LAST_UPDATED);
    }
}
