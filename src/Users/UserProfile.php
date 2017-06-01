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
     * @return string
     */
    public function getEmail()
    {
        return $this->getProperty(self::EMAIL);
    }
    
    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->getProperty(self::LOGIN);
    }
    
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getProperty(self::LAST_NAME);
    }
    
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getProperty(self::FIRST_NAME);
    }
    
    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->getProperty(self::MOBILE_PHONE);
    }
    
    /**
     * @return string
     */
    public function getSecondEmail()
    {
        return $this->getProperty(self::SECOND_EMAIL);
    }
}
