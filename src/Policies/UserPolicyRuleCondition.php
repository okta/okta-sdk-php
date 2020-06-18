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

class UserPolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const EXCLUDE = 'exclude';
    const INCLUDE = 'include';
    const INACTIVITY = 'inactivity';
    const PASSWORD_EXPIRATION = 'passwordExpiration';
    const LIFECYCLE_EXPIRATION = 'lifecycleExpiration';
    const USER_LIFECYCLE_ATTRIBUTE = 'userLifecycleAttribute';



    /**
     * Get the exclude.
     *
     * @return array
     */
    public function getExclude()
    {
        return $this->getProperty(self::EXCLUDE);
    }

    /**
    * Set the exclude.
    *
    * @param mixed $exclude The value to set.
    * @return self
    */
    public function setExclude($exclude)
    {
        $this->setProperty(
            self::EXCLUDE,
            $exclude
        );

        return $this;
    }

    /**
     * Get the include.
     *
     * @return array
     */
    public function getInclude()
    {
        return $this->getProperty(self::INCLUDE);
    }

    /**
    * Set the include.
    *
    * @param mixed $include The value to set.
    * @return self
    */
    public function setInclude($include)
    {
        $this->setProperty(
            self::INCLUDE,
            $include
        );

        return $this;
    }

    /**
     * Get the inactivity.
     *
     * @return \Okta\Policies\InactivityPolicyRuleCondition
     */
    public function getInactivity(array $options = []): \Okta\Policies\InactivityPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::INACTIVITY,
            \Okta\Policies\InactivityPolicyRuleCondition::class,
            $options
        );
    }


    /**
     * Set the inactivity.
     *
     * @param \Okta\Policies\InactivityPolicyRuleCondition $inactivity The InactivityPolicyRuleCondition instance.
     * @return self
     */
    public function setInactivity(\Okta\Policies\InactivityPolicyRuleCondition $inactivity)
    {
        $this->setResourceProperty(
            self::INACTIVITY,
            $inactivity
        );

        return $this;
    }

    /**
     * Get the passwordExpiration.
     *
     * @return \Okta\Policies\PasswordExpirationPolicyRuleCondition
     */
    public function getPasswordExpiration(array $options = []): \Okta\Policies\PasswordExpirationPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::PASSWORD_EXPIRATION,
            \Okta\Policies\PasswordExpirationPolicyRuleCondition::class,
            $options
        );
    }


    /**
     * Set the passwordExpiration.
     *
     * @param \Okta\Policies\PasswordExpirationPolicyRuleCondition $passwordExpiration The PasswordExpirationPolicyRuleCondition instance.
     * @return self
     */
    public function setPasswordExpiration(\Okta\Policies\PasswordExpirationPolicyRuleCondition $passwordExpiration)
    {
        $this->setResourceProperty(
            self::PASSWORD_EXPIRATION,
            $passwordExpiration
        );

        return $this;
    }

    /**
     * Get the lifecycleExpiration.
     *
     * @return \Okta\Policies\LifecycleExpirationPolicyRuleCondition
     */
    public function getLifecycleExpiration(array $options = []): \Okta\Policies\LifecycleExpirationPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::LIFECYCLE_EXPIRATION,
            \Okta\Policies\LifecycleExpirationPolicyRuleCondition::class,
            $options
        );
    }


    /**
     * Set the lifecycleExpiration.
     *
     * @param \Okta\Policies\LifecycleExpirationPolicyRuleCondition $lifecycleExpiration The LifecycleExpirationPolicyRuleCondition instance.
     * @return self
     */
    public function setLifecycleExpiration(\Okta\Policies\LifecycleExpirationPolicyRuleCondition $lifecycleExpiration)
    {
        $this->setResourceProperty(
            self::LIFECYCLE_EXPIRATION,
            $lifecycleExpiration
        );

        return $this;
    }

    /**
     * Get the userLifecycleAttribute.
     *
     * @return \Okta\Policies\UserLifecycleAttributePolicyRuleCondition
     */
    public function getUserLifecycleAttribute(array $options = []): \Okta\Policies\UserLifecycleAttributePolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::USER_LIFECYCLE_ATTRIBUTE,
            \Okta\Policies\UserLifecycleAttributePolicyRuleCondition::class,
            $options
        );
    }


    /**
     * Set the userLifecycleAttribute.
     *
     * @param \Okta\Policies\UserLifecycleAttributePolicyRuleCondition $userLifecycleAttribute The UserLifecycleAttributePolicyRuleCondition instance.
     * @return self
     */
    public function setUserLifecycleAttribute(\Okta\Policies\UserLifecycleAttributePolicyRuleCondition $userLifecycleAttribute)
    {
        $this->setResourceProperty(
            self::USER_LIFECYCLE_ATTRIBUTE,
            $userLifecycleAttribute
        );

        return $this;
    }
}
