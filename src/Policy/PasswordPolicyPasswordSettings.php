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

class PasswordPolicyPasswordSettings extends \Okta\Resource\AbstractResource
{
    const AGE = 'age';
    const LOCKOUT = 'lockout';
    const COMPLEXITY = 'complexity';


    /**
     * Set the Age.
     *
     * @param mixed $age The age to set.
     * @return self
     */
    function setAge(\Okta\Policy\PasswordPolicyPasswordSettingsAge $age) : PasswordPolicyPasswordSettings
    {
        $this->setResourceProperty(
            self::AGE,
            $age
        );
    
        return $this;
    }

    /**
     * Set the Lockout.
     *
     * @param mixed $lockout The lockout to set.
     * @return self
     */
    function setLockout(\Okta\Policy\PasswordPolicyPasswordSettingsLockout $lockout) : PasswordPolicyPasswordSettings
    {
        $this->setResourceProperty(
            self::LOCKOUT,
            $lockout
        );
    
        return $this;
    }

    /**
     * Set the Complexity.
     *
     * @param mixed $complexity The complexity to set.
     * @return self
     */
    function setComplexity(\Okta\Policy\PasswordPolicyPasswordSettingsComplexity $complexity) : PasswordPolicyPasswordSettings
    {
        $this->setResourceProperty(
            self::COMPLEXITY,
            $complexity
        );
    
        return $this;
    }

    /**
     * Get the Age.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyPasswordSettingsAge
     */
    function getAge(array $options = []) : \Okta\Policy\PasswordPolicyPasswordSettingsAge
    {
        return $this->getResourceProperty(
            self::AGE,
            \Okta\Policy\PasswordPolicyPasswordSettingsAge::class,
            $options
        );
    }

    /**
     * Get the Lockout.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyPasswordSettingsLockout
     */
    function getLockout(array $options = []) : \Okta\Policy\PasswordPolicyPasswordSettingsLockout
    {
        return $this->getResourceProperty(
            self::LOCKOUT,
            \Okta\Policy\PasswordPolicyPasswordSettingsLockout::class,
            $options
        );
    }

    /**
     * Get the Complexity.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyPasswordSettingsComplexity
     */
    function getComplexity(array $options = []) : \Okta\Policy\PasswordPolicyPasswordSettingsComplexity
    {
        return $this->getResourceProperty(
            self::COMPLEXITY,
            \Okta\Policy\PasswordPolicyPasswordSettingsComplexity::class,
            $options
        );
    }


}