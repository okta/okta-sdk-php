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

class PasswordPolicyRecoveryEmailRecoveryToken extends \Okta\Resource\AbstractResource
{
    const TOKEN_LIFETIME_MINUTES = 'tokenLifetimeMinutes';

    private $tokenLifetimeMinutes = '10080';

    /**
     * Set the TokenLifetimeMinutes.
     *
     * @param mixed $tokenLifetimeMinutes The tokenLifetimeMinutes to set.
     * @return self
     */
    function setTokenLifetimeMinutes($tokenLifetimeMinutes) : PasswordPolicyRecoveryEmailRecoveryToken
    {
        $this->setProperty(
            self::TOKEN_LIFETIME_MINUTES,
            $tokenLifetimeMinutes
        );
    
        return $this;
    }
    
    /**
     * Get the TokenLifetimeMinutes.
     *
     * @param mixed $tokenLifetimeMinutes The tokenLifetimeMinutes to set.
     * @return int
     */
    function getTokenLifetimeMinutes() : int
    {
        return $this->getProperty(
            self::TOKEN_LIFETIME_MINUTES,
        );
    }
    

}