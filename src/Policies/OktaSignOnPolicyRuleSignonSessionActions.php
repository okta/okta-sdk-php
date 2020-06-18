<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\Policies;


class OktaSignOnPolicyRuleSignonSessionActions extends \Okta\Resource\AbstractResource
{
    const USE_PERSISTENT_COOKIE = 'usePersistentCookie';
    const MAX_SESSION_IDLE_MINUTES = 'maxSessionIdleMinutes';
    const MAX_SESSION_LIFETIME_MINUTES = 'maxSessionLifetimeMinutes';

    private $maxSessionIdleMinutes = '120';


    /**
     * Get the usePersistentCookie.
     *
     * @return bool
     */
    public function getUsePersistentCookie()
    {
        return $this->getProperty(self::USE_PERSISTENT_COOKIE);
    }

    /**
    * Set the usePersistentCookie.
    *
    * @param mixed $usePersistentCookie The value to set.
    * @return self
    */
    public function setUsePersistentCookie($usePersistentCookie)
    {
        $this->setProperty(
            self::USE_PERSISTENT_COOKIE,
            $usePersistentCookie
        );

        return $this;
    }

    /**
     * Get the maxSessionLifetimeMinutes.
     *
     * @return int
     */
    public function getMaxSessionLifetimeMinutes()
    {
        return $this->getProperty(self::MAX_SESSION_LIFETIME_MINUTES);
    }

    /**
    * Set the maxSessionLifetimeMinutes.
    *
    * @param mixed $maxSessionLifetimeMinutes The value to set.
    * @return self
    */
    public function setMaxSessionLifetimeMinutes($maxSessionLifetimeMinutes)
    {
        $this->setProperty(
            self::MAX_SESSION_LIFETIME_MINUTES,
            $maxSessionLifetimeMinutes
        );

        return $this;
    }
}
