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

namespace Okta\Generated\Applications;


class SwaThreeFieldApplicationSettingsApplication extends \Okta\Applications\ApplicationSettingsApplication
{
    const TARGET_URL = 'targetUrl';
    const LOGIN_URL_REGEX = 'loginUrlRegex';
    const BUTTON_SELECTOR = 'buttonSelector';
    const EXTRA_FIELD_VALUE = 'extraFieldValue';
    const PASSWORD_SELECTOR = 'passwordSelector';
    const USER_NAME_SELECTOR = 'userNameSelector';
    const EXTRA_FIELD_SELECTOR = 'extraFieldSelector';



    /**
     * Get the targetUrl.
     *
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->getProperty(self::TARGET_URL);
    }

    /**
    * Set the targetUrl.
    *
    * @param mixed $targetUrl The value to set.
    * @return self
    */
    public function setTargetUrl($targetUrl)
    {
        $this->setProperty(
            self::TARGET_URL,
            $targetUrl
        );

        return $this;
    }

    /**
     * Get the loginUrlRegex.
     *
     * @return string
     */
    public function getLoginUrlRegex()
    {
        return $this->getProperty(self::LOGIN_URL_REGEX);
    }

    /**
    * Set the loginUrlRegex.
    *
    * @param mixed $loginUrlRegex The value to set.
    * @return self
    */
    public function setLoginUrlRegex($loginUrlRegex)
    {
        $this->setProperty(
            self::LOGIN_URL_REGEX,
            $loginUrlRegex
        );

        return $this;
    }

    /**
     * Get the buttonSelector.
     *
     * @return string
     */
    public function getButtonSelector()
    {
        return $this->getProperty(self::BUTTON_SELECTOR);
    }

    /**
    * Set the buttonSelector.
    *
    * @param mixed $buttonSelector The value to set.
    * @return self
    */
    public function setButtonSelector($buttonSelector)
    {
        $this->setProperty(
            self::BUTTON_SELECTOR,
            $buttonSelector
        );

        return $this;
    }

    /**
     * Get the extraFieldValue.
     *
     * @return string
     */
    public function getExtraFieldValue()
    {
        return $this->getProperty(self::EXTRA_FIELD_VALUE);
    }

    /**
    * Set the extraFieldValue.
    *
    * @param mixed $extraFieldValue The value to set.
    * @return self
    */
    public function setExtraFieldValue($extraFieldValue)
    {
        $this->setProperty(
            self::EXTRA_FIELD_VALUE,
            $extraFieldValue
        );

        return $this;
    }

    /**
     * Get the passwordSelector.
     *
     * @return string
     */
    public function getPasswordSelector()
    {
        return $this->getProperty(self::PASSWORD_SELECTOR);
    }

    /**
    * Set the passwordSelector.
    *
    * @param mixed $passwordSelector The value to set.
    * @return self
    */
    public function setPasswordSelector($passwordSelector)
    {
        $this->setProperty(
            self::PASSWORD_SELECTOR,
            $passwordSelector
        );

        return $this;
    }

    /**
     * Get the userNameSelector.
     *
     * @return string
     */
    public function getUserNameSelector()
    {
        return $this->getProperty(self::USER_NAME_SELECTOR);
    }

    /**
    * Set the userNameSelector.
    *
    * @param mixed $userNameSelector The value to set.
    * @return self
    */
    public function setUserNameSelector($userNameSelector)
    {
        $this->setProperty(
            self::USER_NAME_SELECTOR,
            $userNameSelector
        );

        return $this;
    }

    /**
     * Get the extraFieldSelector.
     *
     * @return string
     */
    public function getExtraFieldSelector()
    {
        return $this->getProperty(self::EXTRA_FIELD_SELECTOR);
    }

    /**
    * Set the extraFieldSelector.
    *
    * @param mixed $extraFieldSelector The value to set.
    * @return self
    */
    public function setExtraFieldSelector($extraFieldSelector)
    {
        $this->setProperty(
            self::EXTRA_FIELD_SELECTOR,
            $extraFieldSelector
        );

        return $this;
    }
}
