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

namespace Okta\Generated\Users;


class UserProfile extends \Okta\Resource\AbstractResource
{
    const EMAIL = 'email';
    const LOGIN = 'login';
    const LAST_NAME = 'lastName';
    const FIRST_NAME = 'firstName';
    const MOBILE_PHONE = 'mobilePhone';
    const SECOND_EMAIL = 'secondEmail';



    /**
     * Get the email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->getProperty(self::EMAIL);
    }

    /**
    * Set the email.
    *
    * @param mixed $email The value to set.
    * @return self
    */
    public function setEmail($email)
    {
        $this->setProperty(
            self::EMAIL,
            $email
        );

        return $this;
    }

    /**
     * Get the login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->getProperty(self::LOGIN);
    }

    /**
    * Set the login.
    *
    * @param mixed $login The value to set.
    * @return self
    */
    public function setLogin($login)
    {
        $this->setProperty(
            self::LOGIN,
            $login
        );

        return $this;
    }

    /**
     * Get the lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->getProperty(self::LAST_NAME);
    }

    /**
    * Set the lastName.
    *
    * @param mixed $lastName The value to set.
    * @return self
    */
    public function setLastName($lastName)
    {
        $this->setProperty(
            self::LAST_NAME,
            $lastName
        );

        return $this;
    }

    /**
     * Get the firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->getProperty(self::FIRST_NAME);
    }

    /**
    * Set the firstName.
    *
    * @param mixed $firstName The value to set.
    * @return self
    */
    public function setFirstName($firstName)
    {
        $this->setProperty(
            self::FIRST_NAME,
            $firstName
        );

        return $this;
    }

    /**
     * Get the mobilePhone.
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->getProperty(self::MOBILE_PHONE);
    }

    /**
    * Set the mobilePhone.
    *
    * @param mixed $mobilePhone The value to set.
    * @return self
    */
    public function setMobilePhone($mobilePhone)
    {
        $this->setProperty(
            self::MOBILE_PHONE,
            $mobilePhone
        );

        return $this;
    }

    /**
     * Get the secondEmail.
     *
     * @return string
     */
    public function getSecondEmail()
    {
        return $this->getProperty(self::SECOND_EMAIL);
    }

    /**
    * Set the secondEmail.
    *
    * @param mixed $secondEmail The value to set.
    * @return self
    */
    public function setSecondEmail($secondEmail)
    {
        $this->setProperty(
            self::SECOND_EMAIL,
            $secondEmail
        );

        return $this;
    }
}
