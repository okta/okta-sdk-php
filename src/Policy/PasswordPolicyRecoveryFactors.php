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

class PasswordPolicyRecoveryFactors extends \Okta\Resource\AbstractResource
{
    const OKTA_SMS = 'okta_sms';
    const OKTA_CALL = 'okta_call';
    const OKTA_EMAIL = 'okta_email';
    const RECOVERY_QUESTION = 'recovery_question';

    /**
     * Set the OktaSms.
     *
     * @param mixed $okta_sms The okta_sms to set.
     * @return self
     */
    function setOktaSms(\Okta\Policy\PasswordPolicyRecoveryFactorSettings $okta_sms) : PasswordPolicyRecoveryFactors
    {
        $this->setResourceProperty(
            self::OKTA_SMS,
            $okta_sms
        );
    
        return $this;
    }

    /**
     * Set the OktaCall.
     *
     * @param mixed $okta_call The okta_call to set.
     * @return self
     */
    function setOktaCall(\Okta\Policy\PasswordPolicyRecoveryFactorSettings $okta_call) : PasswordPolicyRecoveryFactors
    {
        $this->setResourceProperty(
            self::OKTA_CALL,
            $okta_call
        );
    
        return $this;
    }

    /**
     * Set the OktaEmail.
     *
     * @param mixed $okta_email The okta_email to set.
     * @return self
     */
    function setOktaEmail(\Okta\Policy\PasswordPolicyRecoveryEmail $okta_email) : PasswordPolicyRecoveryFactors
    {
        $this->setResourceProperty(
            self::OKTA_EMAIL,
            $okta_email
        );
    
        return $this;
    }

    /**
     * Set the RecoveryQuestion.
     *
     * @param mixed $recovery_question The recovery_question to set.
     * @return self
     */
    function setRecoveryQuestion(\Okta\Policy\PasswordPolicyRecoveryQuestion $recovery_question) : PasswordPolicyRecoveryFactors
    {
        $this->setResourceProperty(
            self::RECOVERY_QUESTION,
            $recovery_question
        );
    
        return $this;
    }

    /**
     * Get the OktaSms.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyRecoveryFactorSettings
     */
    function getOktaSms(array $options = []) : \Okta\Policy\PasswordPolicyRecoveryFactorSettings
    {
        return $this->getResourceProperty(
            self::OKTA_SMS,
            \Okta\Policy\PasswordPolicyRecoveryFactorSettings::class,
            $options
        );
    }

    /**
     * Get the OktaCall.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyRecoveryFactorSettings
     */
    function getOktaCall(array $options = []) : \Okta\Policy\PasswordPolicyRecoveryFactorSettings
    {
        return $this->getResourceProperty(
            self::OKTA_CALL,
            \Okta\Policy\PasswordPolicyRecoveryFactorSettings::class,
            $options
        );
    }

    /**
     * Get the OktaEmail.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyRecoveryEmail
     */
    function getOktaEmail(array $options = []) : \Okta\Policy\PasswordPolicyRecoveryEmail
    {
        return $this->getResourceProperty(
            self::OKTA_EMAIL,
            \Okta\Policy\PasswordPolicyRecoveryEmail::class,
            $options
        );
    }

    /**
     * Get the RecoveryQuestion.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyRecoveryQuestion
     */
    function getRecoveryQuestion(array $options = []) : \Okta\Policy\PasswordPolicyRecoveryQuestion
    {
        return $this->getResourceProperty(
            self::RECOVERY_QUESTION,
            \Okta\Policy\PasswordPolicyRecoveryQuestion::class,
            $options
        );
    }


}