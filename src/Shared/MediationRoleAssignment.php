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

class MediationRoleAssignment extends AbstractResource
{
    const ID = 'id';
    const TYPE = 'type';
    const LABEL = 'label';
    const STATUS = 'status';
    const CREATED = 'created';
    const EMBEDDED = '_embedded';
    const DESCRIPTION = 'description';
    const LAST_UPDATED = 'lastUpdated';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->getProperty(self::ID);
    }
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->getProperty(self::TYPE);
    }
    
    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->getProperty(self::LABEL);
    }
    
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->getProperty(self::STATUS);
    }
    
    /**
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
    }
    
    /**
     * @return array
     */
    public function getEmbedded(): array
    {
        return $this->getProperty(self::EMBEDDED);
    }
    
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->getProperty(self::DESCRIPTION);
    }
    
    /**
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }
}
