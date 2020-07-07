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

namespace Okta\Application;

class SwaApplicationSettingsApplication extends \Okta\Application\ApplicationSettingsApplication
{
    const URL = 'url';
    const BUTTON_FIELD = 'buttonField';
    const LOGIN_URL_REGEX = 'loginUrlRegex';
    const PASSWORD_FIELD = 'passwordField';
    const USERNAME_FIELD = 'usernameField';


    /**
     * Set the Url.
     *
     * @param mixed $url The url to set.
     * @return self
     */
    function setUrl($url) : SwaApplicationSettingsApplication
    {
        $this->setProperty(
            self::URL,
            $url
        );
    
        return $this;
    }
    
    /**
     * Set the ButtonField.
     *
     * @param mixed $buttonField The buttonField to set.
     * @return self
     */
    function setButtonField($buttonField) : SwaApplicationSettingsApplication
    {
        $this->setProperty(
            self::BUTTON_FIELD,
            $buttonField
        );
    
        return $this;
    }
    
    /**
     * Set the LoginUrlRegex.
     *
     * @param mixed $loginUrlRegex The loginUrlRegex to set.
     * @return self
     */
    function setLoginUrlRegex($loginUrlRegex) : SwaApplicationSettingsApplication
    {
        $this->setProperty(
            self::LOGIN_URL_REGEX,
            $loginUrlRegex
        );
    
        return $this;
    }
    
    /**
     * Set the PasswordField.
     *
     * @param mixed $passwordField The passwordField to set.
     * @return self
     */
    function setPasswordField($passwordField) : SwaApplicationSettingsApplication
    {
        $this->setProperty(
            self::PASSWORD_FIELD,
            $passwordField
        );
    
        return $this;
    }
    
    /**
     * Set the UsernameField.
     *
     * @param mixed $usernameField The usernameField to set.
     * @return self
     */
    function setUsernameField($usernameField) : SwaApplicationSettingsApplication
    {
        $this->setProperty(
            self::USERNAME_FIELD,
            $usernameField
        );
    
        return $this;
    }
    
    /**
     * Get the Url.
     *
     * @param mixed $url The url to set.
     * @return string
     */
    function getUrl() : string
    {
        return $this->getProperty(
            self::URL,
        );
    }
    
    /**
     * Get the ButtonField.
     *
     * @param mixed $buttonField The buttonField to set.
     * @return string
     */
    function getButtonField() : string
    {
        return $this->getProperty(
            self::BUTTON_FIELD,
        );
    }
    
    /**
     * Get the LoginUrlRegex.
     *
     * @param mixed $loginUrlRegex The loginUrlRegex to set.
     * @return string
     */
    function getLoginUrlRegex() : string
    {
        return $this->getProperty(
            self::LOGIN_URL_REGEX,
        );
    }
    
    /**
     * Get the PasswordField.
     *
     * @param mixed $passwordField The passwordField to set.
     * @return string
     */
    function getPasswordField() : string
    {
        return $this->getProperty(
            self::PASSWORD_FIELD,
        );
    }
    
    /**
     * Get the UsernameField.
     *
     * @param mixed $usernameField The usernameField to set.
     * @return string
     */
    function getUsernameField() : string
    {
        return $this->getProperty(
            self::USERNAME_FIELD,
        );
    }
    

}