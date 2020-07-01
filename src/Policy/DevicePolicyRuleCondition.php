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

class DevicePolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const ROOTED = 'rooted';
    const MIGRATED = 'migrated';
    const PLATFORM = 'platform';
    const TRUST_LEVEL = 'trustLevel';

    /**
     * Set the Rooted.
     *
     * @param mixed $rooted The rooted to set.
     * @return self
     */
    function setRooted($rooted) : DevicePolicyRuleCondition
    {
        $this->setProperty(
            self::ROOTED,
            $rooted
        );
    
        return $this;
    }
    
    /**
     * Set the Migrated.
     *
     * @param mixed $migrated The migrated to set.
     * @return self
     */
    function setMigrated($migrated) : DevicePolicyRuleCondition
    {
        $this->setProperty(
            self::MIGRATED,
            $migrated
        );
    
        return $this;
    }
    
    /**
     * Set the Platform.
     *
     * @param mixed $platform The platform to set.
     * @return self
     */
    function setPlatform(\Okta\Policy\DevicePolicyRuleConditionPlatform $platform) : DevicePolicyRuleCondition
    {
        $this->setResourceProperty(
            self::PLATFORM,
            $platform
        );
    
        return $this;
    }

    /**
     * Set the TrustLevel.
     *
     * @param mixed $trustLevel The trustLevel to set.
     * @return self
     */
    function setTrustLevel($trustLevel) : DevicePolicyRuleCondition
    {
        $this->setProperty(
            self::TRUST_LEVEL,
            $trustLevel
        );
    
        return $this;
    }
    
    /**
     * Get the Rooted.
     *
     * @param mixed $rooted The rooted to set.
     * @return bool
     */
    function getRooted() : bool
    {
        return $this->getProperty(
            self::ROOTED
        );
    }
    
    /**
     * Get the Migrated.
     *
     * @param mixed $migrated The migrated to set.
     * @return bool
     */
    function getMigrated() : bool
    {
        return $this->getProperty(
            self::MIGRATED
        );
    }
    
    /**
     * Get the Platform.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\DevicePolicyRuleConditionPlatform
     */
    function getPlatform(array $options = []) : \Okta\Policy\DevicePolicyRuleConditionPlatform
    {
        return $this->getResourceProperty(
            self::PLATFORM,
            \Okta\Policy\DevicePolicyRuleConditionPlatform::class,
            $options
        );
    }

    /**
     * Get the TrustLevel.
     *
     * @param mixed $trustLevel The trustLevel to set.
     * @return string
     */
    function getTrustLevel() : string
    {
        return $this->getProperty(
            self::TRUST_LEVEL
        );
    }
    

}