<?php
/*******************************************************************************
 * Copyright 2017-Present Okta, Inc.
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

class PasswordPolicySettings extends \Okta\Resource\AbstractResource
{
    const PASSWORD = 'password';
    const RECOVERY = 'recovery';
    const DELEGATION = 'delegation';


    /**
     * Get the password.
     *
     * @return \Okta\Policies\PasswordPolicyPasswordSettings
     */
    public function getPassword(array $options = []): \Okta\Policies\PasswordPolicyPasswordSettings
    {
        return $this->getResourceProperty(
            self::PASSWORD,
            \Okta\Policies\PasswordPolicyPasswordSettings::class,
            $options
        );
    }

    /**
     * Set the password.
     *
     * @param \Okta\Policies\PasswordPolicyPasswordSettings $password The PasswordPolicyPasswordSettings instance.
     * @return self
     */
    public function setPassword(\Okta\Policies\PasswordPolicyPasswordSettings $password)
    {
        $this->setResourceProperty(
            self::PASSWORD,
            $password
        );

        return $this;
    }

    /**
     * Get the recovery.
     *
     * @return \Okta\Policies\PasswordPolicyRecoverySettings
     */
    public function getRecovery(array $options = []): \Okta\Policies\PasswordPolicyRecoverySettings
    {
        return $this->getResourceProperty(
            self::RECOVERY,
            \Okta\Policies\PasswordPolicyRecoverySettings::class,
            $options
        );
    }

    /**
     * Set the recovery.
     *
     * @param \Okta\Policies\PasswordPolicyRecoverySettings $recovery The PasswordPolicyRecoverySettings instance.
     * @return self
     */
    public function setRecovery(\Okta\Policies\PasswordPolicyRecoverySettings $recovery)
    {
        $this->setResourceProperty(
            self::RECOVERY,
            $recovery
        );

        return $this;
    }

    /**
     * Get the delegation.
     *
     * @return \Okta\Policies\PasswordPolicyDelegationSettings
     */
    public function getDelegation(array $options = []): \Okta\Policies\PasswordPolicyDelegationSettings
    {
        return $this->getResourceProperty(
            self::DELEGATION,
            \Okta\Policies\PasswordPolicyDelegationSettings::class,
            $options
        );
    }

    /**
     * Set the delegation.
     *
     * @param \Okta\Policies\PasswordPolicyDelegationSettings $delegation The PasswordPolicyDelegationSettings instance.
     * @return self
     */
    public function setDelegation(\Okta\Policies\PasswordPolicyDelegationSettings $delegation)
    {
        $this->setResourceProperty(
            self::DELEGATION,
            $delegation
        );

        return $this;
    }
}
