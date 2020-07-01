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

class LifecycleExpirationPolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const UNIT = 'unit';
    const NUMBER = 'number';
    const LIFECYCLE_STATUS = 'lifecycleStatus';

    /**
     * Set the Unit.
     *
     * @param mixed $unit The unit to set.
     * @return self
     */
    function setUnit($unit) : LifecycleExpirationPolicyRuleCondition
    {
        $this->setProperty(
            self::UNIT,
            $unit
        );
    
        return $this;
    }
    
    /**
     * Set the Number.
     *
     * @param mixed $number The number to set.
     * @return self
     */
    function setNumber($number) : LifecycleExpirationPolicyRuleCondition
    {
        $this->setProperty(
            self::NUMBER,
            $number
        );
    
        return $this;
    }
    
    /**
     * Set the LifecycleStatus.
     *
     * @param mixed $lifecycleStatus The lifecycleStatus to set.
     * @return self
     */
    function setLifecycleStatus($lifecycleStatus) : LifecycleExpirationPolicyRuleCondition
    {
        $this->setProperty(
            self::LIFECYCLE_STATUS,
            $lifecycleStatus
        );
    
        return $this;
    }
    
    /**
     * Get the Unit.
     *
     * @param mixed $unit The unit to set.
     * @return string
     */
    function getUnit() : string
    {
        return $this->getProperty(
            self::UNIT
        );
    }
    
    /**
     * Get the Number.
     *
     * @param mixed $number The number to set.
     * @return int
     */
    function getNumber() : int
    {
        return $this->getProperty(
            self::NUMBER
        );
    }
    
    /**
     * Get the LifecycleStatus.
     *
     * @param mixed $lifecycleStatus The lifecycleStatus to set.
     * @return string
     */
    function getLifecycleStatus() : string
    {
        return $this->getProperty(
            self::LIFECYCLE_STATUS
        );
    }
    

}