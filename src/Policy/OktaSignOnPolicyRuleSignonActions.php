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

class OktaSignOnPolicyRuleSignonActions extends \Okta\Resource\AbstractResource
{
    const ACCESS = 'access';
    const SESSION = 'session';
    const REQUIRE_FACTOR = 'requireFactor';
    const FACTOR_LIFETIME = 'factorLifetime';
    const FACTOR_PROMPT_MODE = 'factorPromptMode';
    const REMEMBER_DEVICE_BY_DEFAULT = 'rememberDeviceByDefault';


    /**
     * Set the Access.
     *
     * @param mixed $access The access to set.
     * @return self
     */
    function setAccess($access) : OktaSignOnPolicyRuleSignonActions
    {
        $this->setProperty(
            self::ACCESS,
            $access
        );
    
        return $this;
    }
    
    /**
     * Set the Session.
     *
     * @param mixed $session The session to set.
     * @return self
     */
    function setSession(\Okta\Policy\OktaSignOnPolicyRuleSignonSessionActions $session) : OktaSignOnPolicyRuleSignonActions
    {
        $this->setResourceProperty(
            self::SESSION,
            $session
        );
    
        return $this;
    }

    /**
     * Set the RequireFactor.
     *
     * @param mixed $requireFactor The requireFactor to set.
     * @return self
     */
    function setRequireFactor($requireFactor) : OktaSignOnPolicyRuleSignonActions
    {
        $this->setProperty(
            self::REQUIRE_FACTOR,
            $requireFactor
        );
    
        return $this;
    }
    
    /**
     * Set the FactorLifetime.
     *
     * @param mixed $factorLifetime The factorLifetime to set.
     * @return self
     */
    function setFactorLifetime($factorLifetime) : OktaSignOnPolicyRuleSignonActions
    {
        $this->setProperty(
            self::FACTOR_LIFETIME,
            $factorLifetime
        );
    
        return $this;
    }
    
    /**
     * Set the FactorPromptMode.
     *
     * @param mixed $factorPromptMode The factorPromptMode to set.
     * @return self
     */
    function setFactorPromptMode($factorPromptMode) : OktaSignOnPolicyRuleSignonActions
    {
        $this->setProperty(
            self::FACTOR_PROMPT_MODE,
            $factorPromptMode
        );
    
        return $this;
    }
    
    /**
     * Set the RememberDeviceByDefault.
     *
     * @param mixed $rememberDeviceByDefault The rememberDeviceByDefault to set.
     * @return self
     */
    function setRememberDeviceByDefault($rememberDeviceByDefault) : OktaSignOnPolicyRuleSignonActions
    {
        $this->setProperty(
            self::REMEMBER_DEVICE_BY_DEFAULT,
            $rememberDeviceByDefault
        );
    
        return $this;
    }
    
    /**
     * Get the Access.
     *
     * @param mixed $access The access to set.
     * @return string
     */
    function getAccess() : string
    {
        return $this->getProperty(
            self::ACCESS,
        );
    }
    
    /**
     * Get the Session.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\OktaSignOnPolicyRuleSignonSessionActions
     */
    function getSession(array $options = []) : \Okta\Policy\OktaSignOnPolicyRuleSignonSessionActions
    {
        return $this->getResourceProperty(
            self::SESSION,
            \Okta\Policy\OktaSignOnPolicyRuleSignonSessionActions::class,
            $options
        );
    }

    /**
     * Get the RequireFactor.
     *
     * @param mixed $requireFactor The requireFactor to set.
     * @return bool
     */
    function getRequireFactor() : bool
    {
        return $this->getProperty(
            self::REQUIRE_FACTOR,
        );
    }
    
    /**
     * Get the FactorLifetime.
     *
     * @param mixed $factorLifetime The factorLifetime to set.
     * @return int
     */
    function getFactorLifetime() : int
    {
        return $this->getProperty(
            self::FACTOR_LIFETIME,
        );
    }
    
    /**
     * Get the FactorPromptMode.
     *
     * @param mixed $factorPromptMode The factorPromptMode to set.
     * @return string
     */
    function getFactorPromptMode() : string
    {
        return $this->getProperty(
            self::FACTOR_PROMPT_MODE,
        );
    }
    
    /**
     * Get the RememberDeviceByDefault.
     *
     * @param mixed $rememberDeviceByDefault The rememberDeviceByDefault to set.
     * @return bool
     */
    function getRememberDeviceByDefault() : bool
    {
        return $this->getProperty(
            self::REMEMBER_DEVICE_BY_DEFAULT,
        );
    }
    

}