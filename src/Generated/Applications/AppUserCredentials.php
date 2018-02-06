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


class AppUserCredentials extends \Okta\Resource\AbstractResource
{
    const PASSWORD = 'password';
    const USER_NAME = 'userName';



    /**
     * Get the password.
     *
     * @return \Okta\Applications\AppUserPasswordCredential
     */
    public function getPassword(array $options = []): \Okta\Applications\AppUserPasswordCredential
    {
        return $this->getResourceProperty(
            self::PASSWORD,
            \Okta\Applications\AppUserPasswordCredential::class,
            $options
        );
    }


    /**
     * Set the password.
     *
     * @param \Okta\Applications\AppUserPasswordCredential $password The AppUserPasswordCredential instance.
     * @return self
     */
    public function setPassword(\Okta\Applications\AppUserPasswordCredential $password)
    {
        $this->setResourceProperty(
            self::PASSWORD,
            $password
        );
        
        return $this;
    }

    /**
     * Get the userName.
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->getProperty(self::USER_NAME);
    }

    /**
    * Set the userName.
    *
    * @param mixed $userName The value to set.
    * @return self
    */
    public function setUserName($userName)
    {
        $this->setProperty(
            self::USER_NAME,
            $userName
        );

        return $this;
    }
}
