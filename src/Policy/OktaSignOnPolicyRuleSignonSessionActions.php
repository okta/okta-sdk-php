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

class OktaSignOnPolicyRuleSignonSessionActions extends \Okta\Resource\AbstractResource
{
    const USE_PERSISTENT_COOKIE = 'usePersistentCookie';
    const MAX_SESSION_IDLE_MINUTES = 'maxSessionIdleMinutes';
    const MAX_SESSION_LIFETIME_MINUTES = 'maxSessionLifetimeMinutes';

    /**
     * Set the UsePersistentCookie.
     *
     * @param mixed $usePersistentCookie The usePersistentCookie to set.
     * @return self
     */
    function setUsePersistentCookie($usePersistentCookie) : OktaSignOnPolicyRuleSignonSessionActions
    {
        $this->setProperty(
            self::USE_PERSISTENT_COOKIE,
            $usePersistentCookie
        );
    
        return $this;
    }
    
    /**
     * Set the MaxSessionIdleMinutes.
     *
     * @param mixed $maxSessionIdleMinutes The maxSessionIdleMinutes to set.
     * @return self
     */
    function setMaxSessionIdleMinutes($maxSessionIdleMinutes) : OktaSignOnPolicyRuleSignonSessionActions
    {
        $this->setProperty(
            self::MAX_SESSION_IDLE_MINUTES,
            $maxSessionIdleMinutes
        );
    
        return $this;
    }
    
    /**
     * Set the MaxSessionLifetimeMinutes.
     *
     * @param mixed $maxSessionLifetimeMinutes The maxSessionLifetimeMinutes to set.
     * @return self
     */
    function setMaxSessionLifetimeMinutes($maxSessionLifetimeMinutes) : OktaSignOnPolicyRuleSignonSessionActions
    {
        $this->setProperty(
            self::MAX_SESSION_LIFETIME_MINUTES,
            $maxSessionLifetimeMinutes
        );
    
        return $this;
    }
    
    /**
     * Get the UsePersistentCookie.
     *
     * @param mixed $usePersistentCookie The usePersistentCookie to set.
     * @return bool
     */
    function getUsePersistentCookie() : bool
    {
        return $this->getProperty(
            self::USE_PERSISTENT_COOKIE
        );
    }
    
    /**
     * Get the MaxSessionIdleMinutes.
     *
     * @param mixed $maxSessionIdleMinutes The maxSessionIdleMinutes to set.
     * @return int
     */
    function getMaxSessionIdleMinutes() : int
    {
        return $this->getProperty(
            self::MAX_SESSION_IDLE_MINUTES
        );
    }
    
    /**
     * Get the MaxSessionLifetimeMinutes.
     *
     * @param mixed $maxSessionLifetimeMinutes The maxSessionLifetimeMinutes to set.
     * @return int
     */
    function getMaxSessionLifetimeMinutes() : int
    {
        return $this->getProperty(
            self::MAX_SESSION_LIFETIME_MINUTES
        );
    }
    

}