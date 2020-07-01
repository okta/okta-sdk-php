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

namespace Okta\Log;

class LogUserAgent extends \Okta\Resource\AbstractResource
{
    const OS = 'os';
    const BROWSER = 'browser';
    const RAW_USER_AGENT = 'rawUserAgent';

    /**
     * Get the Os.
     *
     * @param mixed $os The os to set.
     * @return string
     */
    function getOs() : string
    {
        return $this->getProperty(
            self::OS
        );
    }
    
    /**
     * Get the Browser.
     *
     * @param mixed $browser The browser to set.
     * @return string
     */
    function getBrowser() : string
    {
        return $this->getProperty(
            self::BROWSER
        );
    }
    
    /**
     * Get the RawUserAgent.
     *
     * @param mixed $rawUserAgent The rawUserAgent to set.
     * @return string
     */
    function getRawUserAgent() : string
    {
        return $this->getProperty(
            self::RAW_USER_AGENT
        );
    }
    

}