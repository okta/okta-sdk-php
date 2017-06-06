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

class PublicAppInstanceCredentialsSigning extends AbstractResource
{
    const KID = 'kid';
    const LAST_ROTATED = 'lastRotated';
    const NEXT_ROTATION = 'nextRotation';
    const ROTATION_MODE = 'rotationMode';

    /**
     * @return string
     */
    public function getKid(): string
    {
        return $this->getProperty(self::KID);
    }
    
    /**
     * @return string
     */
    public function getLastRotated(): string
    {
        return $this->getProperty(self::LAST_ROTATED);
    }
    
    /**
     * @return string
     */
    public function getNextRotation(): string
    {
        return $this->getProperty(self::NEXT_ROTATION);
    }
    
    /**
     * @return string
     */
    public function getRotationMode(): string
    {
        return $this->getProperty(self::ROTATION_MODE);
    }
}
