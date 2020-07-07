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

class AppUserCredentials extends \Okta\Resource\AbstractResource
{
    const PASSWORD = 'password';
    const USER_NAME = 'userName';


    /**
     * Set the Password.
     *
     * @param mixed $password The password to set.
     * @return self
     */
    function setPassword(\Okta\Application\AppUserPasswordCredential $password) : AppUserCredentials
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
    function setUserName($userName) : AppUserCredentials
    {
        $this->setProperty(
            self::USER_NAME,
            $userName
        );
    
        return $this;
    }
    
    /**
     * Get the Password.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\AppUserPasswordCredential
     */
    function getPassword(array $options = []) : \Okta\Application\AppUserPasswordCredential
    {
        return $this->getResourceProperty(
            self::PASSWORD,
            \Okta\Application\AppUserPasswordCredential::class,
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
    

}