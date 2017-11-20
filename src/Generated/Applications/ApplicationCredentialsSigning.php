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

namespace Okta\Generated\Applications;


class ApplicationCredentialsSigning extends \Okta\Resource\AbstractResource
{
    const KID = 'kid';
    const LAST_ROTATED = 'lastRotated';
    const NEXT_ROTATION = 'nextRotation';
    const ROTATION_MODE = 'rotationMode';

    /**
     * Get the kid.
     *
     * @return string
     */
    public function getKid(): string
    {
        return $this->getProperty(self::KID);
    }
    /**
    * Set the kid.
    *
    * @param mixed $kid The value to set.
    * @return self
    */
    public function setKid($kid)
    {
        $this->setProperty(
            self::KID,
            $kid
        );

        return $this;
    }
    /**
     * Get the lastRotated.
     *
     * @return string
     */
    public function getLastRotated(): string
    {
        return $this->getProperty(self::LAST_ROTATED);
    }
    /**
    * Set the lastRotated.
    *
    * @param mixed $lastRotated The value to set.
    * @return self
    */
    public function setLastRotated($lastRotated)
    {
        $this->setProperty(
            self::LAST_ROTATED,
            $lastRotated
        );

        return $this;
    }
    /**
     * Get the nextRotation.
     *
     * @return string
     */
    public function getNextRotation(): string
    {
        return $this->getProperty(self::NEXT_ROTATION);
    }
    /**
    * Set the nextRotation.
    *
    * @param mixed $nextRotation The value to set.
    * @return self
    */
    public function setNextRotation($nextRotation)
    {
        $this->setProperty(
            self::NEXT_ROTATION,
            $nextRotation
        );

        return $this;
    }
    /**
     * Get the rotationMode.
     *
     * @return string
     */
    public function getRotationMode(): string
    {
        return $this->getProperty(self::ROTATION_MODE);
    }
    /**
    * Set the rotationMode.
    *
    * @param mixed $rotationMode The value to set.
    * @return self
    */
    public function setRotationMode($rotationMode)
    {
        $this->setProperty(
            self::ROTATION_MODE,
            $rotationMode
        );

        return $this;
    }
}
