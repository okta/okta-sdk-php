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

class PasswordPolicyRuleActions extends \Okta\Resource\AbstractResource
{
    const PASSWORD_CHANGE = 'passwordChange';
    const SELF_SERVICE_UNLOCK = 'selfServiceUnlock';
    const SELF_SERVICE_PASSWORD_RESET = 'selfServicePasswordReset';


    /**
     * Set the PasswordChange.
     *
     * @param mixed $passwordChange The passwordChange to set.
     * @return self
     */
    function setPasswordChange(\Okta\Policy\PasswordPolicyRuleAction $passwordChange) : PasswordPolicyRuleActions
    {
        $this->setResourceProperty(
            self::PASSWORD_CHANGE,
            $passwordChange
        );
    
        return $this;
    }

    /**
     * Set the SelfServiceUnlock.
     *
     * @param mixed $selfServiceUnlock The selfServiceUnlock to set.
     * @return self
     */
    function setSelfServiceUnlock(\Okta\Policy\PasswordPolicyRuleAction $selfServiceUnlock) : PasswordPolicyRuleActions
    {
        $this->setResourceProperty(
            self::SELF_SERVICE_UNLOCK,
            $selfServiceUnlock
        );
    
        return $this;
    }

    /**
     * Set the SelfServicePasswordReset.
     *
     * @param mixed $selfServicePasswordReset The selfServicePasswordReset to set.
     * @return self
     */
    function setSelfServicePasswordReset(\Okta\Policy\PasswordPolicyRuleAction $selfServicePasswordReset) : PasswordPolicyRuleActions
    {
        $this->setResourceProperty(
            self::SELF_SERVICE_PASSWORD_RESET,
            $selfServicePasswordReset
        );
    
        return $this;
    }

    /**
     * Get the PasswordChange.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyRuleAction
     */
    function getPasswordChange(array $options = []) : \Okta\Policy\PasswordPolicyRuleAction
    {
        return $this->getResourceProperty(
            self::PASSWORD_CHANGE,
            \Okta\Policy\PasswordPolicyRuleAction::class,
            $options
        );
    }

    /**
     * Get the SelfServiceUnlock.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyRuleAction
     */
    function getSelfServiceUnlock(array $options = []) : \Okta\Policy\PasswordPolicyRuleAction
    {
        return $this->getResourceProperty(
            self::SELF_SERVICE_UNLOCK,
            \Okta\Policy\PasswordPolicyRuleAction::class,
            $options
        );
    }

    /**
     * Get the SelfServicePasswordReset.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyRuleAction
     */
    function getSelfServicePasswordReset(array $options = []) : \Okta\Policy\PasswordPolicyRuleAction
    {
        return $this->getResourceProperty(
            self::SELF_SERVICE_PASSWORD_RESET,
            \Okta\Policy\PasswordPolicyRuleAction::class,
            $options
        );
    }


}