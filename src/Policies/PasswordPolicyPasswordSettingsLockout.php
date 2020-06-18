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


class PasswordPolicyPasswordSettingsLockout extends \Okta\Resource\AbstractResource
{
    const MAX_ATTEMPTS = 'maxAttempts';
    const AUTO_UNLOCK_MINUTES = 'autoUnlockMinutes';
    const SHOW_LOCKOUT_FAILURES = 'showLockoutFailures';
    const USER_LOCKOUT_NOTIFICATION_CHANNELS = 'userLockoutNotificationChannels';



    /**
     * Get the maxAttempts.
     *
     * @return int
     */
    public function getMaxAttempts()
    {
        return $this->getProperty(self::MAX_ATTEMPTS);
    }

    /**
    * Set the maxAttempts.
    *
    * @param mixed $maxAttempts The value to set.
    * @return self
    */
    public function setMaxAttempts($maxAttempts)
    {
        $this->setProperty(
            self::MAX_ATTEMPTS,
            $maxAttempts
        );

        return $this;
    }

    /**
     * Get the autoUnlockMinutes.
     *
     * @return int
     */
    public function getAutoUnlockMinutes()
    {
        return $this->getProperty(self::AUTO_UNLOCK_MINUTES);
    }

    /**
    * Set the autoUnlockMinutes.
    *
    * @param mixed $autoUnlockMinutes The value to set.
    * @return self
    */
    public function setAutoUnlockMinutes($autoUnlockMinutes)
    {
        $this->setProperty(
            self::AUTO_UNLOCK_MINUTES,
            $autoUnlockMinutes
        );

        return $this;
    }

    /**
     * Get the showLockoutFailures.
     *
     * @return bool
     */
    public function getShowLockoutFailures()
    {
        return $this->getProperty(self::SHOW_LOCKOUT_FAILURES);
    }

    /**
    * Set the showLockoutFailures.
    *
    * @param mixed $showLockoutFailures The value to set.
    * @return self
    */
    public function setShowLockoutFailures($showLockoutFailures)
    {
        $this->setProperty(
            self::SHOW_LOCKOUT_FAILURES,
            $showLockoutFailures
        );

        return $this;
    }

    /**
     * Get the userLockoutNotificationChannels.
     *
     * @return array
     */
    public function getUserLockoutNotificationChannels()
    {
        return $this->getProperty(self::USER_LOCKOUT_NOTIFICATION_CHANNELS);
    }

    /**
    * Set the userLockoutNotificationChannels.
    *
    * @param mixed $userLockoutNotificationChannels The value to set.
    * @return self
    */
    public function setUserLockoutNotificationChannels($userLockoutNotificationChannels)
    {
        $this->setProperty(
            self::USER_LOCKOUT_NOTIFICATION_CHANNELS,
            $userLockoutNotificationChannels
        );

        return $this;
    }
}
