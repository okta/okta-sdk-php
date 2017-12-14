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


class SchemeApplicationCredentials extends \Okta\Applications\ApplicationCredentials
{
    const SCHEME = 'scheme';
    const SIGNING = 'signing';
    const PASSWORD = 'password';
    const USER_NAME = 'userName';
    const REVEAL_PASSWORD = 'revealPassword';



    /**
     * Get the scheme.
     *
     * @return string
     */
    public function getScheme()
    {
        return $this->getProperty(self::SCHEME);
    }

    /**
    * Set the scheme.
    *
    * @param mixed $scheme The value to set.
    * @return self
    */
    public function setScheme($scheme)
    {
        $this->setProperty(
            self::SCHEME,
            $scheme
        );

        return $this;
    }

    /**
     * Get the signing.
     *
     * @return \Okta\Applications\ApplicationCredentialsSigning
     */
    public function getSigning(array $options = []): \Okta\Applications\ApplicationCredentialsSigning
    {
        return $this->getResourceProperty(
            self::SIGNING,
            \Okta\Applications\ApplicationCredentialsSigning::class,
            $options
        );
    }


    /**
     * Set the signing.
     *
     * @param \Okta\Applications\ApplicationCredentialsSigning $signing The ApplicationCredentialsSigning instance.
     * @return self
     */
    public function setSigning(\Okta\Applications\ApplicationCredentialsSigning $signing)
    {
        $this->setResourceProperty(
            self::SIGNING,
            $signing
        );
        
        return $this;
    }

    /**
     * Get the password.
     *
     * @return \Okta\Users\PasswordCredential
     */
    public function getPassword(array $options = []): \Okta\Users\PasswordCredential
    {
        return $this->getResourceProperty(
            self::PASSWORD,
            \Okta\Users\PasswordCredential::class,
            $options
        );
    }


    /**
     * Set the password.
     *
     * @param \Okta\Users\PasswordCredential $password The PasswordCredential instance.
     * @return self
     */
    public function setPassword(\Okta\Users\PasswordCredential $password)
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

    /**
     * Get the revealPassword.
     *
     * @return bool
     */
    public function getRevealPassword()
    {
        return $this->getProperty(self::REVEAL_PASSWORD);
    }

    /**
    * Set the revealPassword.
    *
    * @param mixed $revealPassword The value to set.
    * @return self
    */
    public function setRevealPassword($revealPassword)
    {
        $this->setProperty(
            self::REVEAL_PASSWORD,
            $revealPassword
        );

        return $this;
    }
}
