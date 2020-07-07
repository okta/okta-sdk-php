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

class AutoLoginApplicationSettingsSignOn extends \Okta\Resource\AbstractResource
{
    const LOGIN_URL = 'loginUrl';
    const REDIRECT_URL = 'redirectUrl';


    /**
     * Set the LoginUrl.
     *
     * @param mixed $loginUrl The loginUrl to set.
     * @return self
     */
    function setLoginUrl($loginUrl) : AutoLoginApplicationSettingsSignOn
    {
        $this->setProperty(
            self::LOGIN_URL,
            $loginUrl
        );
    
        return $this;
    }
    
    /**
     * Set the RedirectUrl.
     *
     * @param mixed $redirectUrl The redirectUrl to set.
     * @return self
     */
    function setRedirectUrl($redirectUrl) : AutoLoginApplicationSettingsSignOn
    {
        $this->setProperty(
            self::REDIRECT_URL,
            $redirectUrl
        );
    
        return $this;
    }
    
    /**
     * Get the LoginUrl.
     *
     * @param mixed $loginUrl The loginUrl to set.
     * @return string
     */
    function getLoginUrl() : string
    {
        return $this->getProperty(
            self::LOGIN_URL,
        );
    }
    
    /**
     * Get the RedirectUrl.
     *
     * @param mixed $redirectUrl The redirectUrl to set.
     * @return string
     */
    function getRedirectUrl() : string
    {
        return $this->getProperty(
            self::REDIRECT_URL,
        );
    }
    

}