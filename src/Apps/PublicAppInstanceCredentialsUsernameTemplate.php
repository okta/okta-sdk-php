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

namespace Okta\Apps;

use Okta\Resource\AbstractResource;

class PublicAppInstanceCredentialsUsernameTemplate extends AbstractResource
{
    const TYPE = 'type';
    const SUFFIX = 'suffix';
    const TEMPLATE = 'template';

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
    public function getSuffix()
    {
        return $this->getProperty(self::SUFFIX);
    }
    
    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->getProperty(self::TEMPLATE);
    }
}
