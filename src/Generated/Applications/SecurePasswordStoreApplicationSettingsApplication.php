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


class SecurePasswordStoreApplicationSettingsApplication extends \Okta\Applications\ApplicationSettingsApplication
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

    /**
     * Get the optionalField1.
     *
     * @return string
     */
    public function getOptionalField1()
    {
        return $this->getProperty(self::OPTIONAL_FIELD_1);
    }

    /**
    * Set the optionalField1.
    *
    * @param mixed $optionalField1 The value to set.
    * @return self
    */
    public function setOptionalField1($optionalField1)
    {
        $this->setProperty(
            self::OPTIONAL_FIELD_1,
            $optionalField1
        );

        return $this;
    }

    /**
     * Get the optionalField2.
     *
     * @return string
     */
    public function getOptionalField2()
    {
        return $this->getProperty(self::OPTIONAL_FIELD_2);
    }

    /**
    * Set the optionalField2.
    *
    * @param mixed $optionalField2 The value to set.
    * @return self
    */
    public function setOptionalField2($optionalField2)
    {
        $this->setProperty(
            self::OPTIONAL_FIELD_2,
            $optionalField2
        );

        return $this;
    }

    /**
     * Get the optionalField3.
     *
     * @return string
     */
    public function getOptionalField3()
    {
        return $this->getProperty(self::OPTIONAL_FIELD_3);
    }

    /**
    * Set the optionalField3.
    *
    * @param mixed $optionalField3 The value to set.
    * @return self
    */
    public function setOptionalField3($optionalField3)
    {
        $this->setProperty(
            self::OPTIONAL_FIELD_3,
            $optionalField3
        );

        return $this;
    }

    /**
     * Get the optionalField1Value.
     *
     * @return string
     */
    public function getOptionalField1Value()
    {
        return $this->getProperty(self::OPTIONAL_FIELD_1_VALUE);
    }

    /**
    * Set the optionalField1Value.
    *
    * @param mixed $optionalField1Value The value to set.
    * @return self
    */
    public function setOptionalField1Value($optionalField1Value)
    {
        $this->setProperty(
            self::OPTIONAL_FIELD_1_VALUE,
            $optionalField1Value
        );

        return $this;
    }

    /**
     * Get the optionalField2Value.
     *
     * @return string
     */
    public function getOptionalField2Value()
    {
        return $this->getProperty(self::OPTIONAL_FIELD_2_VALUE);
    }

    /**
    * Set the optionalField2Value.
    *
    * @param mixed $optionalField2Value The value to set.
    * @return self
    */
    public function setOptionalField2Value($optionalField2Value)
    {
        $this->setProperty(
            self::OPTIONAL_FIELD_2_VALUE,
            $optionalField2Value
        );

        return $this;
    }

    /**
     * Get the optionalField3Value.
     *
     * @return string
     */
    public function getOptionalField3Value()
    {
        return $this->getProperty(self::OPTIONAL_FIELD_3_VALUE);
    }

    /**
    * Set the optionalField3Value.
    *
    * @param mixed $optionalField3Value The value to set.
    * @return self
    */
    public function setOptionalField3Value($optionalField3Value)
    {
        $this->setProperty(
            self::OPTIONAL_FIELD_3_VALUE,
            $optionalField3Value
        );

        return $this;
    }
}
