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

class BasicApplicationSettingsApplication extends \Okta\Application\ApplicationSettingsApplication
{
    const URL = 'url';
    const AUTH_URL = 'authURL';


    /**
     * Set the Url.
     *
     * @param mixed $url The url to set.
     * @return self
     */
    function setUrl($url) : BasicApplicationSettingsApplication
    {
        $this->setProperty(
            self::URL,
            $url
        );
    
        return $this;
    }
    
    /**
     * Set the AuthUrl.
     *
     * @param mixed $authURL The authURL to set.
     * @return self
     */
    function setAuthUrl($authURL) : BasicApplicationSettingsApplication
    {
        $this->setProperty(
            self::AUTH_URL,
            $authURL
        );
    
        return $this;
    }
    
    /**
     * Get the Url.
     *
     * @param mixed $url The url to set.
     * @return string
     */
    function getUrl() : string
    {
        return $this->getProperty(
            self::URL,
        );
    }
    
    /**
     * Get the AuthUrl.
     *
     * @param mixed $authURL The authURL to set.
     * @return string
     */
    function getAuthUrl() : string
    {
        return $this->getProperty(
            self::AUTH_URL,
        );
    }
    

}