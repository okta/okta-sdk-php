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

class UserPolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const EXCLUDE = 'exclude';
    const INCLUDE = 'include';
    const INACTIVITY = 'inactivity';
    const PASSWORD_EXPIRATION = 'passwordExpiration';
    const LIFECYCLE_EXPIRATION = 'lifecycleExpiration';
    const USER_LIFECYCLE_ATTRIBUTE = 'userLifecycleAttribute';


    /**
     * Set the Exclude.
     *
     * @param mixed $exclude The exclude to set.
     * @return self
     */
    function setExclude($exclude) : UserPolicyRuleCondition
    {
        $this->setProperty(
            self::EXCLUDE,
            $exclude
        );
    
        return $this;
    }
    
    /**
     * Set the Include.
     *
     * @param mixed $include The include to set.
     * @return self
     */
    function setInclude($include) : UserPolicyRuleCondition
    {
        $this->setProperty(
            self::INCLUDE,
            $include
        );
    
        return $this;
    }
    
    /**
     * Set the Inactivity.
     *
     * @param mixed $inactivity The inactivity to set.
     * @return self
     */
    function setInactivity(\Okta\Policy\InactivityPolicyRuleCondition $inactivity) : UserPolicyRuleCondition
    {
        $this->setResourceProperty(
            self::INACTIVITY,
            $inactivity
        );
    
        return $this;
    }

    /**
     * Set the PasswordExpiration.
     *
     * @param mixed $passwordExpiration The passwordExpiration to set.
     * @return self
     */
    function setPasswordExpiration(\Okta\Policy\PasswordExpirationPolicyRuleCondition $passwordExpiration) : UserPolicyRuleCondition
    {
        $this->setResourceProperty(
            self::PASSWORD_EXPIRATION,
            $passwordExpiration
        );
    
        return $this;
    }

    /**
     * Set the LifecycleExpiration.
     *
     * @param mixed $lifecycleExpiration The lifecycleExpiration to set.
     * @return self
     */
    function setLifecycleExpiration(\Okta\Policy\LifecycleExpirationPolicyRuleCondition $lifecycleExpiration) : UserPolicyRuleCondition
    {
        $this->setResourceProperty(
            self::LIFECYCLE_EXPIRATION,
            $lifecycleExpiration
        );
    
        return $this;
    }

    /**
     * Set the UserLifecycleAttribute.
     *
     * @param mixed $userLifecycleAttribute The userLifecycleAttribute to set.
     * @return self
     */
    function setUserLifecycleAttribute(\Okta\Policy\UserLifecycleAttributePolicyRuleCondition $userLifecycleAttribute) : UserPolicyRuleCondition
    {
        $this->setResourceProperty(
            self::USER_LIFECYCLE_ATTRIBUTE,
            $userLifecycleAttribute
        );
    
        return $this;
    }

    /**
     * Get the Exclude.
     *
     * @param mixed $exclude The exclude to set.
     * @return array
     */
    function getExclude() : array
    {
        return $this->getProperty(
            self::EXCLUDE,
        );
    }
    
    /**
     * Get the Include.
     *
     * @param mixed $include The include to set.
     * @return array
     */
    function getInclude() : array
    {
        return $this->getProperty(
            self::INCLUDE,
        );
    }
    
    /**
     * Get the Inactivity.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\InactivityPolicyRuleCondition
     */
    function getInactivity(array $options = []) : \Okta\Policy\InactivityPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::INACTIVITY,
            \Okta\Policy\InactivityPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the PasswordExpiration.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordExpirationPolicyRuleCondition
     */
    function getPasswordExpiration(array $options = []) : \Okta\Policy\PasswordExpirationPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::PASSWORD_EXPIRATION,
            \Okta\Policy\PasswordExpirationPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the LifecycleExpiration.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\LifecycleExpirationPolicyRuleCondition
     */
    function getLifecycleExpiration(array $options = []) : \Okta\Policy\LifecycleExpirationPolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::LIFECYCLE_EXPIRATION,
            \Okta\Policy\LifecycleExpirationPolicyRuleCondition::class,
            $options
        );
    }

    /**
     * Get the UserLifecycleAttribute.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\UserLifecycleAttributePolicyRuleCondition
     */
    function getUserLifecycleAttribute(array $options = []) : \Okta\Policy\UserLifecycleAttributePolicyRuleCondition
    {
        return $this->getResourceProperty(
            self::USER_LIFECYCLE_ATTRIBUTE,
            \Okta\Policy\UserLifecycleAttributePolicyRuleCondition::class,
            $options
        );
    }


}