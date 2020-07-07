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

class ApplicationAccessibility extends \Okta\Resource\AbstractResource
{
    const SELF_SERVICE = 'selfService';
    const ERROR_REDIRECT_URL = 'errorRedirectUrl';
    const LOGIN_REDIRECT_URL = 'loginRedirectUrl';


    /**
     * Set the SelfService.
     *
     * @param mixed $selfService The selfService to set.
     * @return self
     */
    function setSelfService($selfService) : ApplicationAccessibility
    {
        $this->setProperty(
            self::SELF_SERVICE,
            $selfService
        );
    
        return $this;
    }
    
    /**
     * Set the ErrorRedirectUrl.
     *
     * @param mixed $errorRedirectUrl The errorRedirectUrl to set.
     * @return self
     */
    function setErrorRedirectUrl($errorRedirectUrl) : ApplicationAccessibility
    {
        $this->setProperty(
            self::ERROR_REDIRECT_URL,
            $errorRedirectUrl
        );
    
        return $this;
    }
    
    /**
     * Set the LoginRedirectUrl.
     *
     * @param mixed $loginRedirectUrl The loginRedirectUrl to set.
     * @return self
     */
    function setLoginRedirectUrl($loginRedirectUrl) : ApplicationAccessibility
    {
        $this->setProperty(
            self::LOGIN_REDIRECT_URL,
            $loginRedirectUrl
        );
    
        return $this;
    }
    
    /**
     * Get the SelfService.
     *
     * @param mixed $selfService The selfService to set.
     * @return bool
     */
    function getSelfService() : bool
    {
        return $this->getProperty(
            self::SELF_SERVICE,
        );
    }
    
    /**
     * Get the ErrorRedirectUrl.
     *
     * @param mixed $errorRedirectUrl The errorRedirectUrl to set.
     * @return string
     */
    function getErrorRedirectUrl() : string
    {
        return $this->getProperty(
            self::ERROR_REDIRECT_URL,
        );
    }
    
    /**
     * Get the LoginRedirectUrl.
     *
     * @param mixed $loginRedirectUrl The loginRedirectUrl to set.
     * @return string
     */
    function getLoginRedirectUrl() : string
    {
        return $this->getProperty(
            self::LOGIN_REDIRECT_URL,
        );
    }
    

}