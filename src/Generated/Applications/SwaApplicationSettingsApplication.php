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


class SwaApplicationSettingsApplication extends \Okta\Applications\ApplicationSettingsApplication
{
    const URL = 'url';
    const BUTTON_FIELD = 'buttonField';
    const LOGIN_URL_REGEX = 'loginUrlRegex';
    const PASSWORD_FIELD = 'passwordField';
    const USERNAME_FIELD = 'usernameField';



    /**
     * Get the url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->getProperty(self::URL);
    }

    /**
    * Set the url.
    *
    * @param mixed $url The value to set.
    * @return self
    */
    public function setUrl($url)
    {
        $this->setProperty(
            self::URL,
            $url
        );

        return $this;
    }

    /**
     * Get the buttonField.
     *
     * @return string
     */
    public function getButtonField()
    {
        return $this->getProperty(self::BUTTON_FIELD);
    }

    /**
    * Set the buttonField.
    *
    * @param mixed $buttonField The value to set.
    * @return self
    */
    public function setButtonField($buttonField)
    {
        $this->setProperty(
            self::BUTTON_FIELD,
            $buttonField
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
     * Get the passwordField.
     *
     * @return string
     */
    public function getPasswordField()
    {
        return $this->getProperty(self::PASSWORD_FIELD);
    }

    /**
    * Set the passwordField.
    *
    * @param mixed $passwordField The value to set.
    * @return self
    */
    public function setPasswordField($passwordField)
    {
        $this->setProperty(
            self::PASSWORD_FIELD,
            $passwordField
        );

        return $this;
    }

    /**
     * Get the usernameField.
     *
     * @return string
     */
    public function getUsernameField()
    {
        return $this->getProperty(self::USERNAME_FIELD);
    }

    /**
    * Set the usernameField.
    *
    * @param mixed $usernameField The value to set.
    * @return self
    */
    public function setUsernameField($usernameField)
    {
        $this->setProperty(
            self::USERNAME_FIELD,
            $usernameField
        );

        return $this;
    }
}
