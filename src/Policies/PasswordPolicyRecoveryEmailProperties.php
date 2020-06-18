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


class PasswordPolicyRecoveryEmailProperties extends \Okta\Resource\AbstractResource
{
    const RECOVERY_TOKEN = 'recoveryToken';



    /**
     * Get the recoveryToken.
     *
     * @return \Okta\Policies\PasswordPolicyRecoveryEmailRecoveryToken
     */
    public function getRecoveryToken(array $options = []): \Okta\Policies\PasswordPolicyRecoveryEmailRecoveryToken
    {
        return $this->getResourceProperty(
            self::RECOVERY_TOKEN,
            \Okta\Policies\PasswordPolicyRecoveryEmailRecoveryToken::class,
            $options
        );
    }


    /**
     * Set the recoveryToken.
     *
     * @param \Okta\Policies\PasswordPolicyRecoveryEmailRecoveryToken $recoveryToken The PasswordPolicyRecoveryEmailRecoveryToken instance.
     * @return self
     */
    public function setRecoveryToken(\Okta\Policies\PasswordPolicyRecoveryEmailRecoveryToken $recoveryToken)
    {
        $this->setResourceProperty(
            self::RECOVERY_TOKEN,
            $recoveryToken
        );

        return $this;
    }
}
