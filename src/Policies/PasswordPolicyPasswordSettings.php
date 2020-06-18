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


class PasswordPolicyPasswordSettings extends \Okta\Resource\AbstractResource
{
    const AGE = 'age';
    const LOCKOUT = 'lockout';
    const COMPLEXITY = 'complexity';



    /**
     * Get the age.
     *
     * @return \Okta\Policies\PasswordPolicyPasswordSettingsAge
     */
    public function getAge(array $options = []): \Okta\Policies\PasswordPolicyPasswordSettingsAge
    {
        return $this->getResourceProperty(
            self::AGE,
            \Okta\Policies\PasswordPolicyPasswordSettingsAge::class,
            $options
        );
    }


    /**
     * Set the age.
     *
     * @param \Okta\Policies\PasswordPolicyPasswordSettingsAge $age The PasswordPolicyPasswordSettingsAge instance.
     * @return self
     */
    public function setAge(\Okta\Policies\PasswordPolicyPasswordSettingsAge $age)
    {
        $this->setResourceProperty(
            self::AGE,
            $age
        );

        return $this;
    }

    /**
     * Get the lockout.
     *
     * @return \Okta\Policies\PasswordPolicyPasswordSettingsLockout
     */
    public function getLockout(array $options = []): \Okta\Policies\PasswordPolicyPasswordSettingsLockout
    {
        return $this->getResourceProperty(
            self::LOCKOUT,
            \Okta\Policies\PasswordPolicyPasswordSettingsLockout::class,
            $options
        );
    }


    /**
     * Set the lockout.
     *
     * @param \Okta\Policies\PasswordPolicyPasswordSettingsLockout $lockout The PasswordPolicyPasswordSettingsLockout instance.
     * @return self
     */
    public function setLockout(\Okta\Policies\PasswordPolicyPasswordSettingsLockout $lockout)
    {
        $this->setResourceProperty(
            self::LOCKOUT,
            $lockout
        );

        return $this;
    }

    /**
     * Get the complexity.
     *
     * @return \Okta\Policies\PasswordPolicyPasswordSettingsComplexity
     */
    public function getComplexity(array $options = []): \Okta\Policies\PasswordPolicyPasswordSettingsComplexity
    {
        return $this->getResourceProperty(
            self::COMPLEXITY,
            \Okta\Policies\PasswordPolicyPasswordSettingsComplexity::class,
            $options
        );
    }


    /**
     * Set the complexity.
     *
     * @param \Okta\Policies\PasswordPolicyPasswordSettingsComplexity $complexity The PasswordPolicyPasswordSettingsComplexity instance.
     * @return self
     */
    public function setComplexity(\Okta\Policies\PasswordPolicyPasswordSettingsComplexity $complexity)
    {
        $this->setResourceProperty(
            self::COMPLEXITY,
            $complexity
        );

        return $this;
    }
}
