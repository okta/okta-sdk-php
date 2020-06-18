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

class DevicePolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const ROOTED = 'rooted';
    const MIGRATED = 'migrated';
    const PLATFORM = 'platform';
    const TRUST_LEVEL = 'trustLevel';



    /**
     * Get the rooted.
     *
     * @return bool
     */
    public function getRooted()
    {
        return $this->getProperty(self::ROOTED);
    }

    /**
    * Set the rooted.
    *
    * @param mixed $rooted The value to set.
    * @return self
    */
    public function setRooted($rooted)
    {
        $this->setProperty(
            self::ROOTED,
            $rooted
        );

        return $this;
    }

    /**
     * Get the migrated.
     *
     * @return bool
     */
    public function getMigrated()
    {
        return $this->getProperty(self::MIGRATED);
    }

    /**
    * Set the migrated.
    *
    * @param mixed $migrated The value to set.
    * @return self
    */
    public function setMigrated($migrated)
    {
        $this->setProperty(
            self::MIGRATED,
            $migrated
        );

        return $this;
    }

    /**
     * Get the platform.
     *
     * @return \Okta\Policies\DevicePolicyRuleConditionPlatform
     */
    public function getPlatform(array $options = []): \Okta\Policies\DevicePolicyRuleConditionPlatform
    {
        return $this->getResourceProperty(
            self::PLATFORM,
            \Okta\Policies\DevicePolicyRuleConditionPlatform::class,
            $options
        );
    }


    /**
     * Set the platform.
     *
     * @param \Okta\Policies\DevicePolicyRuleConditionPlatform $platform The DevicePolicyRuleConditionPlatform instance.
     * @return self
     */
    public function setPlatform(\Okta\Policies\DevicePolicyRuleConditionPlatform $platform)
    {
        $this->setResourceProperty(
            self::PLATFORM,
            $platform
        );

        return $this;
    }

    /**
     * Get the trustLevel.
     *
     * @return string
     */
    public function getTrustLevel()
    {
        return $this->getProperty(self::TRUST_LEVEL);
    }

    /**
    * Set the trustLevel.
    *
    * @param mixed $trustLevel The value to set.
    * @return self
    */
    public function setTrustLevel($trustLevel)
    {
        $this->setProperty(
            self::TRUST_LEVEL,
            $trustLevel
        );

        return $this;
    }
}
