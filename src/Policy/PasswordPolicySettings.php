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

class PasswordPolicySettings extends \Okta\Resource\AbstractResource
{
    const PASSWORD = 'password';
    const RECOVERY = 'recovery';
    const DELEGATION = 'delegation';


    /**
     * Set the Password.
     *
     * @param mixed $password The password to set.
     * @return self
     */
    function setPassword(\Okta\Policy\PasswordPolicyPasswordSettings $password) : PasswordPolicySettings
    {
        $this->setResourceProperty(
            self::PASSWORD,
            $password
        );
    
        return $this;
    }

    /**
     * Set the Recovery.
     *
     * @param mixed $recovery The recovery to set.
     * @return self
     */
    function setRecovery(\Okta\Policy\PasswordPolicyRecoverySettings $recovery) : PasswordPolicySettings
    {
        $this->setResourceProperty(
            self::RECOVERY,
            $recovery
        );
    
        return $this;
    }

    /**
     * Set the Delegation.
     *
     * @param mixed $delegation The delegation to set.
     * @return self
     */
    function setDelegation(\Okta\Policy\PasswordPolicyDelegationSettings $delegation) : PasswordPolicySettings
    {
        $this->setResourceProperty(
            self::DELEGATION,
            $delegation
        );
    
        return $this;
    }

    /**
     * Get the Password.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyPasswordSettings
     */
    function getPassword(array $options = []) : \Okta\Policy\PasswordPolicyPasswordSettings
    {
        return $this->getResourceProperty(
            self::PASSWORD,
            \Okta\Policy\PasswordPolicyPasswordSettings::class,
            $options
        );
    }

    /**
     * Get the Recovery.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyRecoverySettings
     */
    function getRecovery(array $options = []) : \Okta\Policy\PasswordPolicyRecoverySettings
    {
        return $this->getResourceProperty(
            self::RECOVERY,
            \Okta\Policy\PasswordPolicyRecoverySettings::class,
            $options
        );
    }

    /**
     * Get the Delegation.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyDelegationSettings
     */
    function getDelegation(array $options = []) : \Okta\Policy\PasswordPolicyDelegationSettings
    {
        return $this->getResourceProperty(
            self::DELEGATION,
            \Okta\Policy\PasswordPolicyDelegationSettings::class,
            $options
        );
    }


}