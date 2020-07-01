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

class SecurePasswordStoreApplicationSettingsApplication extends \Okta\Application\ApplicationSettingsApplication
{
    const URL = 'url';
    const PASSWORD_FIELD = 'passwordField';
    const USERNAME_FIELD = 'usernameField';
    const OPTIONAL_FIELD_1 = 'optionalField1';
    const OPTIONAL_FIELD_2 = 'optionalField2';
    const OPTIONAL_FIELD_3 = 'optionalField3';
    const OPTIONAL_FIELD_1_VALUE = 'optionalField1Value';
    const OPTIONAL_FIELD_2_VALUE = 'optionalField2Value';
    const OPTIONAL_FIELD_3_VALUE = 'optionalField3Value';

    /**
     * Set the Url.
     *
     * @param mixed $url The url to set.
     * @return self
     */
    function setUrl($url) : SecurePasswordStoreApplicationSettingsApplication
    {
        $this->setProperty(
            self::URL,
            $url
        );
    
        return $this;
    }
    
    /**
     * Set the PasswordField.
     *
     * @param mixed $passwordField The passwordField to set.
     * @return self
     */
    function setPasswordField($passwordField) : SecurePasswordStoreApplicationSettingsApplication
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
    function setUsernameField($usernameField) : SecurePasswordStoreApplicationSettingsApplication
    {
        $this->setProperty(
            self::USERNAME_FIELD,
            $usernameField
        );
    
        return $this;
    }
    
    /**
     * Set the OptionalField1.
     *
     * @param mixed $optionalField1 The optionalField1 to set.
     * @return self
     */
    function setOptionalField1($optionalField1) : SecurePasswordStoreApplicationSettingsApplication
    {
        $this->setProperty(
            self::OPTIONAL_FIELD_1,
            $optionalField1
        );
    
        return $this;
    }
    
    /**
     * Set the OptionalField2.
     *
     * @param mixed $optionalField2 The optionalField2 to set.
     * @return self
     */
    function setOptionalField2($optionalField2) : SecurePasswordStoreApplicationSettingsApplication
    {
        $this->setProperty(
            self::OPTIONAL_FIELD_2,
            $optionalField2
        );
    
        return $this;
    }
    
    /**
     * Set the OptionalField3.
     *
     * @param mixed $optionalField3 The optionalField3 to set.
     * @return self
     */
    function setOptionalField3($optionalField3) : SecurePasswordStoreApplicationSettingsApplication
    {
        $this->setProperty(
            self::OPTIONAL_FIELD_3,
            $optionalField3
        );
    
        return $this;
    }
    
    /**
     * Set the OptionalField1Value.
     *
     * @param mixed $optionalField1Value The optionalField1Value to set.
     * @return self
     */
    function setOptionalField1Value($optionalField1Value) : SecurePasswordStoreApplicationSettingsApplication
    {
        $this->setProperty(
            self::OPTIONAL_FIELD_1_VALUE,
            $optionalField1Value
        );
    
        return $this;
    }
    
    /**
     * Set the OptionalField2Value.
     *
     * @param mixed $optionalField2Value The optionalField2Value to set.
     * @return self
     */
    function setOptionalField2Value($optionalField2Value) : SecurePasswordStoreApplicationSettingsApplication
    {
        $this->setProperty(
            self::OPTIONAL_FIELD_2_VALUE,
            $optionalField2Value
        );
    
        return $this;
    }
    
    /**
     * Set the OptionalField3Value.
     *
     * @param mixed $optionalField3Value The optionalField3Value to set.
     * @return self
     */
    function setOptionalField3Value($optionalField3Value) : SecurePasswordStoreApplicationSettingsApplication
    {
        $this->setProperty(
            self::OPTIONAL_FIELD_3_VALUE,
            $optionalField3Value
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
            self::URL
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
            self::PASSWORD_FIELD
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
            self::USERNAME_FIELD
        );
    }
    
    /**
     * Get the OptionalField1.
     *
     * @param mixed $optionalField1 The optionalField1 to set.
     * @return string
     */
    function getOptionalField1() : string
    {
        return $this->getProperty(
            self::OPTIONAL_FIELD_1
        );
    }
    
    /**
     * Get the OptionalField2.
     *
     * @param mixed $optionalField2 The optionalField2 to set.
     * @return string
     */
    function getOptionalField2() : string
    {
        return $this->getProperty(
            self::OPTIONAL_FIELD_2
        );
    }
    
    /**
     * Get the OptionalField3.
     *
     * @param mixed $optionalField3 The optionalField3 to set.
     * @return string
     */
    function getOptionalField3() : string
    {
        return $this->getProperty(
            self::OPTIONAL_FIELD_3
        );
    }
    
    /**
     * Get the OptionalField1Value.
     *
     * @param mixed $optionalField1Value The optionalField1Value to set.
     * @return string
     */
    function getOptionalField1Value() : string
    {
        return $this->getProperty(
            self::OPTIONAL_FIELD_1_VALUE
        );
    }
    
    /**
     * Get the OptionalField2Value.
     *
     * @param mixed $optionalField2Value The optionalField2Value to set.
     * @return string
     */
    function getOptionalField2Value() : string
    {
        return $this->getProperty(
            self::OPTIONAL_FIELD_2_VALUE
        );
    }
    
    /**
     * Get the OptionalField3Value.
     *
     * @param mixed $optionalField3Value The optionalField3Value to set.
     * @return string
     */
    function getOptionalField3Value() : string
    {
        return $this->getProperty(
            self::OPTIONAL_FIELD_3_VALUE
        );
    }
    

}