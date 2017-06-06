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

class PublicAppInstanceSettingsNotificationsVpnNetwork extends AbstractResource
{
    const EXCLUDE = 'exclude';
    const INCLUDE = 'include';
    const CONNECTION = 'connection';

    /**
     * @return array
     */
    public function getExclude(): array
    {
        return $this->getProperty(self::EXCLUDE);
    }
    
    /**
     * @return array
     */
    public function getInclude(): array
    {
        return $this->getProperty(self::INCLUDE);
    }
    
    /**
     * @return string
     */
    public function getConnection(): string
    {
        return $this->getProperty(self::CONNECTION);
    }
}
