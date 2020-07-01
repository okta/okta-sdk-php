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

namespace Okta\Policy;

class PasswordPolicyAuthenticationProviderCondition extends \Okta\Resource\AbstractResource
{
    const INCLUDE = 'include';
    const PROVIDER = 'provider';

    /**
     * Set the Include.
     *
     * @param mixed $include The include to set.
     * @return self
     */
    function setInclude($include) : PasswordPolicyAuthenticationProviderCondition
    {
        $this->setProperty(
            self::INCLUDE,
            $include
        );
    
        return $this;
    }
    
    /**
     * Set the Provider.
     *
     * @param mixed $provider The provider to set.
     * @return self
     */
    function setProvider($provider) : PasswordPolicyAuthenticationProviderCondition
    {
        $this->setProperty(
            self::PROVIDER,
            $provider
        );
    
        return $this;
    }
    
    /**
     * Get the Include.
     *
     * @param mixed $include The include to set.
     * @return array
     */
    function getInclude() : array
    {
        return $this->getProperty(
            self::INCLUDE
        );
    }
    
    /**
     * Get the Provider.
     *
     * @param mixed $provider The provider to set.
     * @return string
     */
    function getProvider() : string
    {
        return $this->getProperty(
            self::PROVIDER
        );
    }
    

}