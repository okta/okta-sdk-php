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

namespace Okta\Users;

use Okta\Resource\AbstractResource;

class UserProfile extends AbstractResource
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
    public function getEmail(): string
    {
        return $this->getProperty(self::EMAIL);
    }
    
    /**
     * Get the login.
     *
     * @return string
     */
    public function getLogin(): string
    {
        return $this->getProperty(self::LOGIN);
    }
    
    /**
     * Get the lastName.
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->getProperty(self::LAST_NAME);
    }
    
    /**
     * Get the firstName.
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->getProperty(self::FIRST_NAME);
    }
    
    /**
     * Get the mobilePhone.
     *
     * @return string
     */
    public function getMobilePhone(): string
    {
        return $this->getProperty(self::MOBILE_PHONE);
    }
    
    /**
     * Get the secondEmail.
     *
     * @return string
     */
    public function getSecondEmail(): string
    {
        return $this->getProperty(self::SECOND_EMAIL);
    }
}
