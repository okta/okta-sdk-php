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

class PasswordPolicyRecoveryFactors extends \Okta\Resource\AbstractResource
{
    const OKTA_SMS = 'okta_sms';
    const OKTA_CALL = 'okta_call';
    const OKTA_EMAIL = 'okta_email';
    const RECOVERY_QUESTION = 'recovery_question';



    /**
     * Get the okta_sms.
     *
     * @return \Okta\Policies\PasswordPolicyRecoveryFactorSettings
     */
    public function getOktaSms(array $options = []): \Okta\Policies\PasswordPolicyRecoveryFactorSettings
    {
        return $this->getResourceProperty(
            self::OKTA_SMS,
            \Okta\Policies\PasswordPolicyRecoveryFactorSettings::class,
            $options
        );
    }


    /**
     * Set the okta_sms.
     *
     * @param \Okta\Policies\PasswordPolicyRecoveryFactorSettings $okta_sms The PasswordPolicyRecoveryFactorSettings instance.
     * @return self
     */
    public function setOktaSms(\Okta\Policies\PasswordPolicyRecoveryFactorSettings $okta_sms)
    {
        $this->setResourceProperty(
            self::OKTA_SMS,
            $okta_sms
        );

        return $this;
    }

    /**
     * Get the okta_call.
     *
     * @return \Okta\Policies\PasswordPolicyRecoveryFactorSettings
     */
    public function getOktaCall(array $options = []): \Okta\Policies\PasswordPolicyRecoveryFactorSettings
    {
        return $this->getResourceProperty(
            self::OKTA_CALL,
            \Okta\Policies\PasswordPolicyRecoveryFactorSettings::class,
            $options
        );
    }


    /**
     * Set the okta_call.
     *
     * @param \Okta\Policies\PasswordPolicyRecoveryFactorSettings $okta_call The PasswordPolicyRecoveryFactorSettings instance.
     * @return self
     */
    public function setOktaCall(\Okta\Policies\PasswordPolicyRecoveryFactorSettings $okta_call)
    {
        $this->setResourceProperty(
            self::OKTA_CALL,
            $okta_call
        );

        return $this;
    }

    /**
     * Get the okta_email.
     *
     * @return \Okta\Policies\PasswordPolicyRecoveryEmail
     */
    public function getOktaEmail(array $options = []): \Okta\Policies\PasswordPolicyRecoveryEmail
    {
        return $this->getResourceProperty(
            self::OKTA_EMAIL,
            \Okta\Policies\PasswordPolicyRecoveryEmail::class,
            $options
        );
    }


    /**
     * Set the okta_email.
     *
     * @param \Okta\Policies\PasswordPolicyRecoveryEmail $okta_email The PasswordPolicyRecoveryEmail instance.
     * @return self
     */
    public function setOktaEmail(\Okta\Policies\PasswordPolicyRecoveryEmail $okta_email)
    {
        $this->setResourceProperty(
            self::OKTA_EMAIL,
            $okta_email
        );

        return $this;
    }

    /**
     * Get the recovery_question.
     *
     * @return \Okta\Policies\PasswordPolicyRecoveryQuestion
     */
    public function getRecoveryQuestion(array $options = []): \Okta\Policies\PasswordPolicyRecoveryQuestion
    {
        return $this->getResourceProperty(
            self::RECOVERY_QUESTION,
            \Okta\Policies\PasswordPolicyRecoveryQuestion::class,
            $options
        );
    }


    /**
     * Set the recovery_question.
     *
     * @param \Okta\Policies\PasswordPolicyRecoveryQuestion $recovery_question The PasswordPolicyRecoveryQuestion instance.
     * @return self
     */
    public function setRecoveryQuestion(\Okta\Policies\PasswordPolicyRecoveryQuestion $recovery_question)
    {
        $this->setResourceProperty(
            self::RECOVERY_QUESTION,
            $recovery_question
        );

        return $this;
    }
}
