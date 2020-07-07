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

class LogSecurityContext extends \Okta\Resource\AbstractResource
{
    const ISP = 'isp';
    const AS_ORG = 'asOrg';
    const DOMAIN = 'domain';
    const IS_PROXY = 'isProxy';
    const AS_NUMBER = 'asNumber';


    /**
     * Get the Isp.
     *
     * @param mixed $isp The isp to set.
     * @return string
     */
    function getIsp() : string
    {
        return $this->getProperty(
            self::ISP,
        );
    }
    
    /**
     * Get the AsOrg.
     *
     * @param mixed $asOrg The asOrg to set.
     * @return string
     */
    function getAsOrg() : string
    {
        return $this->getProperty(
            self::AS_ORG,
        );
    }
    
    /**
     * Get the Domain.
     *
     * @param mixed $domain The domain to set.
     * @return string
     */
    function getDomain() : string
    {
        return $this->getProperty(
            self::DOMAIN,
        );
    }
    
    /**
     * Get the IsProxy.
     *
     * @param mixed $isProxy The isProxy to set.
     * @return bool
     */
    function getIsProxy() : bool
    {
        return $this->getProperty(
            self::IS_PROXY,
        );
    }
    
    /**
     * Get the AsNumber.
     *
     * @param mixed $asNumber The asNumber to set.
     * @return int
     */
    function getAsNumber() : int
    {
        return $this->getProperty(
            self::AS_NUMBER,
        );
    }
    

}