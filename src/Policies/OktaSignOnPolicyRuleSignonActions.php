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


class OktaSignOnPolicyRuleSignonActions extends \Okta\Resource\AbstractResource
{
    const ACCESS = 'access';
    const SESSION = 'session';
    const REQUIRE_FACTOR = 'requireFactor';
    const FACTOR_LIFETIME = 'factorLifetime';
    const FACTOR_PROMPT_MODE = 'factorPromptMode';
    const REMEMBER_DEVICE_BY_DEFAULT = 'rememberDeviceByDefault';



    /**
     * Get the access.
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->getProperty(self::ACCESS);
    }

    /**
    * Set the access.
    *
    * @param mixed $access The value to set.
    * @return self
    */
    public function setAccess($access)
    {
        $this->setProperty(
            self::ACCESS,
            $access
        );

        return $this;
    }

    /**
     * Get the session.
     *
     * @return \Okta\Policies\OktaSignOnPolicyRuleSignonSessionActions
     */
    public function getSession(array $options = []): \Okta\Policies\OktaSignOnPolicyRuleSignonSessionActions
    {
        return $this->getResourceProperty(
            self::SESSION,
            \Okta\Policies\OktaSignOnPolicyRuleSignonSessionActions::class,
            $options
        );
    }


    /**
     * Set the session.
     *
     * @param \Okta\Policies\OktaSignOnPolicyRuleSignonSessionActions $session The OktaSignOnPolicyRuleSignonSessionActions instance.
     * @return self
     */
    public function setSession(\Okta\Policies\OktaSignOnPolicyRuleSignonSessionActions $session)
    {
        $this->setResourceProperty(
            self::SESSION,
            $session
        );

        return $this;
    }

    /**
     * Get the requireFactor.
     *
     * @return bool
     */
    public function getRequireFactor()
    {
        return $this->getProperty(self::REQUIRE_FACTOR);
    }

    /**
    * Set the requireFactor.
    *
    * @param mixed $requireFactor The value to set.
    * @return self
    */
    public function setRequireFactor($requireFactor)
    {
        $this->setProperty(
            self::REQUIRE_FACTOR,
            $requireFactor
        );

        return $this;
    }

    /**
     * Get the factorLifetime.
     *
     * @return int
     */
    public function getFactorLifetime()
    {
        return $this->getProperty(self::FACTOR_LIFETIME);
    }

    /**
    * Set the factorLifetime.
    *
    * @param mixed $factorLifetime The value to set.
    * @return self
    */
    public function setFactorLifetime($factorLifetime)
    {
        $this->setProperty(
            self::FACTOR_LIFETIME,
            $factorLifetime
        );

        return $this;
    }

    /**
     * Get the factorPromptMode.
     *
     * @return string
     */
    public function getFactorPromptMode()
    {
        return $this->getProperty(self::FACTOR_PROMPT_MODE);
    }

    /**
    * Set the factorPromptMode.
    *
    * @param mixed $factorPromptMode The value to set.
    * @return self
    */
    public function setFactorPromptMode($factorPromptMode)
    {
        $this->setProperty(
            self::FACTOR_PROMPT_MODE,
            $factorPromptMode
        );

        return $this;
    }

    /**
     * Get the rememberDeviceByDefault.
     *
     * @return bool
     */
    public function getRememberDeviceByDefault()
    {
        return $this->getProperty(self::REMEMBER_DEVICE_BY_DEFAULT);
    }

    /**
    * Set the rememberDeviceByDefault.
    *
    * @param mixed $rememberDeviceByDefault The value to set.
    * @return self
    */
    public function setRememberDeviceByDefault($rememberDeviceByDefault)
    {
        $this->setProperty(
            self::REMEMBER_DEVICE_BY_DEFAULT,
            $rememberDeviceByDefault
        );

        return $this;
    }
}
