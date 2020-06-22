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

class PasswordPolicyRuleActions extends \Okta\Resource\AbstractResource
{
    const PASSWORD_CHANGE = 'passwordChange';
    const SELF_SERVICE_UNLOCK = 'selfServiceUnlock';
    const SELF_SERVICE_PASSWORD_RESET = 'selfServicePasswordReset';


    /**
     * Get the passwordChange.
     *
     * @return \Okta\Policies\PasswordPolicyRuleAction
     */
    public function getPasswordChange(array $options = []): \Okta\Policies\PasswordPolicyRuleAction
    {
        return $this->getResourceProperty(
            self::PASSWORD_CHANGE,
            \Okta\Policies\PasswordPolicyRuleAction::class,
            $options
        );
    }

    /**
     * Set the passwordChange.
     *
     * @param \Okta\Policies\PasswordPolicyRuleAction $passwordChange The PasswordPolicyRuleAction instance.
     * @return self
     */
    public function setPasswordChange(\Okta\Policies\PasswordPolicyRuleAction $passwordChange)
    {
        $this->setResourceProperty(
            self::PASSWORD_CHANGE,
            $passwordChange
        );

        return $this;
    }

    /**
     * Get the selfServiceUnlock.
     *
     * @return \Okta\Policies\PasswordPolicyRuleAction
     */
    public function getSelfServiceUnlock(array $options = []): \Okta\Policies\PasswordPolicyRuleAction
    {
        return $this->getResourceProperty(
            self::SELF_SERVICE_UNLOCK,
            \Okta\Policies\PasswordPolicyRuleAction::class,
            $options
        );
    }

    /**
     * Set the selfServiceUnlock.
     *
     * @param \Okta\Policies\PasswordPolicyRuleAction $selfServiceUnlock The PasswordPolicyRuleAction instance.
     * @return self
     */
    public function setSelfServiceUnlock(\Okta\Policies\PasswordPolicyRuleAction $selfServiceUnlock)
    {
        $this->setResourceProperty(
            self::SELF_SERVICE_UNLOCK,
            $selfServiceUnlock
        );

        return $this;
    }

    /**
     * Get the selfServicePasswordReset.
     *
     * @return \Okta\Policies\PasswordPolicyRuleAction
     */
    public function getSelfServicePasswordReset(array $options = []): \Okta\Policies\PasswordPolicyRuleAction
    {
        return $this->getResourceProperty(
            self::SELF_SERVICE_PASSWORD_RESET,
            \Okta\Policies\PasswordPolicyRuleAction::class,
            $options
        );
    }

    /**
     * Set the selfServicePasswordReset.
     *
     * @param \Okta\Policies\PasswordPolicyRuleAction $selfServicePasswordReset The PasswordPolicyRuleAction instance.
     * @return self
     */
    public function setSelfServicePasswordReset(\Okta\Policies\PasswordPolicyRuleAction $selfServicePasswordReset)
    {
        $this->setResourceProperty(
            self::SELF_SERVICE_PASSWORD_RESET,
            $selfServicePasswordReset
        );

        return $this;
    }
}
