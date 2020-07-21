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

class SchemeApplicationCredentials extends \Okta\Application\ApplicationCredentials
{
    const SCHEME = 'scheme';
    const SIGNING = 'signing';
    const PASSWORD = 'password';
    const USER_NAME = 'userName';
    const REVEAL_PASSWORD = 'revealPassword';


    /**
     * Set the Scheme.
     *
     * @return self
     */
    function setScheme(\Okta\Application\ApplicationCredentialsScheme $scheme) : SchemeApplicationCredentials
    {
        $this->setEnumProperty(
            self::SCHEME,
            $scheme
        );
    
        return $this;
    }

    /**
     * Set the Password.
     *
     * @param mixed $password The password to set.
     * @return self
     */
    function setPassword(\Okta\User\PasswordCredential $password) : SchemeApplicationCredentials
    {
        $this->setResourceProperty(
            self::PASSWORD,
            $password
        );
    
        return $this;
    }

    /**
     * Set the UserName.
     *
     * @param mixed $userName The userName to set.
     * @return self
     */
    function setUserName($userName) : SchemeApplicationCredentials
    {
        $this->setProperty(
            self::USER_NAME,
            $userName
        );
    
        return $this;
    }
    
    /**
     * Set the RevealPassword.
     *
     * @param mixed $revealPassword The revealPassword to set.
     * @return self
     */
    function setRevealPassword($revealPassword) : SchemeApplicationCredentials
    {
        $this->setProperty(
            self::REVEAL_PASSWORD,
            $revealPassword
        );
    
        return $this;
    }
    
    /**
     * Get the Scheme.
     *
     * @return \Okta\Application\ApplicationCredentialsScheme
     */
    function getScheme() : \Okta\Application\ApplicationCredentialsScheme
    {
        return $this->getEnumProperty(
            self::SCHEME,
            \Okta\Application\ApplicationCredentialsScheme::class,
        );
    }

    /**
     * Get the Password.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\PasswordCredential
     */
    function getPassword(array $options = []) : \Okta\User\PasswordCredential
    {
        return $this->getResourceProperty(
            self::PASSWORD,
            \Okta\User\PasswordCredential::class,
            $options
        );
    }

    /**
     * Get the UserName.
     *
     * @param mixed $userName The userName to set.
     * @return string
     */
    function getUserName() : string
    {
        return $this->getProperty(
            self::USER_NAME,
        );
    }
    
    /**
     * Get the RevealPassword.
     *
     * @param mixed $revealPassword The revealPassword to set.
     * @return bool
     */
    function getRevealPassword() : bool
    {
        return $this->getProperty(
            self::REVEAL_PASSWORD,
        );
    }
    

}