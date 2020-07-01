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

class SwaThreeFieldApplicationSettingsApplication extends \Okta\Application\ApplicationSettingsApplication
{
    const TARGET_URL = 'targetURL';
    const LOGIN_URL_REGEX = 'loginUrlRegex';
    const BUTTON_SELECTOR = 'buttonSelector';
    const EXTRA_FIELD_VALUE = 'extraFieldValue';
    const PASSWORD_SELECTOR = 'passwordSelector';
    const USER_NAME_SELECTOR = 'userNameSelector';
    const EXTRA_FIELD_SELECTOR = 'extraFieldSelector';

    /**
     * Set the TargetUrl.
     *
     * @param mixed $targetURL The targetURL to set.
     * @return self
     */
    function setTargetUrl($targetURL) : SwaThreeFieldApplicationSettingsApplication
    {
        $this->setProperty(
            self::TARGET_URL,
            $targetURL
        );
    
        return $this;
    }
    
    /**
     * Set the LoginUrlRegex.
     *
     * @param mixed $loginUrlRegex The loginUrlRegex to set.
     * @return self
     */
    function setLoginUrlRegex($loginUrlRegex) : SwaThreeFieldApplicationSettingsApplication
    {
        $this->setProperty(
            self::LOGIN_URL_REGEX,
            $loginUrlRegex
        );
    
        return $this;
    }
    
    /**
     * Set the ButtonSelector.
     *
     * @param mixed $buttonSelector The buttonSelector to set.
     * @return self
     */
    function setButtonSelector($buttonSelector) : SwaThreeFieldApplicationSettingsApplication
    {
        $this->setProperty(
            self::BUTTON_SELECTOR,
            $buttonSelector
        );
    
        return $this;
    }
    
    /**
     * Set the ExtraFieldValue.
     *
     * @param mixed $extraFieldValue The extraFieldValue to set.
     * @return self
     */
    function setExtraFieldValue($extraFieldValue) : SwaThreeFieldApplicationSettingsApplication
    {
        $this->setProperty(
            self::EXTRA_FIELD_VALUE,
            $extraFieldValue
        );
    
        return $this;
    }
    
    /**
     * Set the PasswordSelector.
     *
     * @param mixed $passwordSelector The passwordSelector to set.
     * @return self
     */
    function setPasswordSelector($passwordSelector) : SwaThreeFieldApplicationSettingsApplication
    {
        $this->setProperty(
            self::PASSWORD_SELECTOR,
            $passwordSelector
        );
    
        return $this;
    }
    
    /**
     * Set the UserNameSelector.
     *
     * @param mixed $userNameSelector The userNameSelector to set.
     * @return self
     */
    function setUserNameSelector($userNameSelector) : SwaThreeFieldApplicationSettingsApplication
    {
        $this->setProperty(
            self::USER_NAME_SELECTOR,
            $userNameSelector
        );
    
        return $this;
    }
    
    /**
     * Set the ExtraFieldSelector.
     *
     * @param mixed $extraFieldSelector The extraFieldSelector to set.
     * @return self
     */
    function setExtraFieldSelector($extraFieldSelector) : SwaThreeFieldApplicationSettingsApplication
    {
        $this->setProperty(
            self::EXTRA_FIELD_SELECTOR,
            $extraFieldSelector
        );
    
        return $this;
    }
    
    /**
     * Get the TargetUrl.
     *
     * @param mixed $targetURL The targetURL to set.
     * @return string
     */
    function getTargetUrl() : string
    {
        return $this->getProperty(
            self::TARGET_URL
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
            self::LOGIN_URL_REGEX
        );
    }
    
    /**
     * Get the ButtonSelector.
     *
     * @param mixed $buttonSelector The buttonSelector to set.
     * @return string
     */
    function getButtonSelector() : string
    {
        return $this->getProperty(
            self::BUTTON_SELECTOR
        );
    }
    
    /**
     * Get the ExtraFieldValue.
     *
     * @param mixed $extraFieldValue The extraFieldValue to set.
     * @return string
     */
    function getExtraFieldValue() : string
    {
        return $this->getProperty(
            self::EXTRA_FIELD_VALUE
        );
    }
    
    /**
     * Get the PasswordSelector.
     *
     * @param mixed $passwordSelector The passwordSelector to set.
     * @return string
     */
    function getPasswordSelector() : string
    {
        return $this->getProperty(
            self::PASSWORD_SELECTOR
        );
    }
    
    /**
     * Get the UserNameSelector.
     *
     * @param mixed $userNameSelector The userNameSelector to set.
     * @return string
     */
    function getUserNameSelector() : string
    {
        return $this->getProperty(
            self::USER_NAME_SELECTOR
        );
    }
    
    /**
     * Get the ExtraFieldSelector.
     *
     * @param mixed $extraFieldSelector The extraFieldSelector to set.
     * @return string
     */
    function getExtraFieldSelector() : string
    {
        return $this->getProperty(
            self::EXTRA_FIELD_SELECTOR
        );
    }
    

}