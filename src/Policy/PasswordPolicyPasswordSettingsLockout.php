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

class PasswordPolicyPasswordSettingsLockout extends \Okta\Resource\AbstractResource
{
    const MAX_ATTEMPTS = 'maxAttempts';
    const AUTO_UNLOCK_MINUTES = 'autoUnlockMinutes';
    const SHOW_LOCKOUT_FAILURES = 'showLockoutFailures';
    const USER_LOCKOUT_NOTIFICATION_CHANNELS = 'userLockoutNotificationChannels';


    /**
     * Set the MaxAttempts.
     *
     * @param mixed $maxAttempts The maxAttempts to set.
     * @return self
     */
    function setMaxAttempts($maxAttempts) : PasswordPolicyPasswordSettingsLockout
    {
        $this->setProperty(
            self::MAX_ATTEMPTS,
            $maxAttempts
        );
    
        return $this;
    }
    
    /**
     * Set the AutoUnlockMinutes.
     *
     * @param mixed $autoUnlockMinutes The autoUnlockMinutes to set.
     * @return self
     */
    function setAutoUnlockMinutes($autoUnlockMinutes) : PasswordPolicyPasswordSettingsLockout
    {
        $this->setProperty(
            self::AUTO_UNLOCK_MINUTES,
            $autoUnlockMinutes
        );
    
        return $this;
    }
    
    /**
     * Set the ShowLockoutFailures.
     *
     * @param mixed $showLockoutFailures The showLockoutFailures to set.
     * @return self
     */
    function setShowLockoutFailures($showLockoutFailures) : PasswordPolicyPasswordSettingsLockout
    {
        $this->setProperty(
            self::SHOW_LOCKOUT_FAILURES,
            $showLockoutFailures
        );
    
        return $this;
    }
    
    /**
     * Set the UserLockoutNotificationChannels.
     *
     * @param mixed $userLockoutNotificationChannels The userLockoutNotificationChannels to set.
     * @return self
     */
    function setUserLockoutNotificationChannels($userLockoutNotificationChannels) : PasswordPolicyPasswordSettingsLockout
    {
        $this->setProperty(
            self::USER_LOCKOUT_NOTIFICATION_CHANNELS,
            $userLockoutNotificationChannels
        );
    
        return $this;
    }
    
    /**
     * Get the MaxAttempts.
     *
     * @param mixed $maxAttempts The maxAttempts to set.
     * @return int
     */
    function getMaxAttempts() : int
    {
        return $this->getProperty(
            self::MAX_ATTEMPTS,
        );
    }
    
    /**
     * Get the AutoUnlockMinutes.
     *
     * @param mixed $autoUnlockMinutes The autoUnlockMinutes to set.
     * @return int
     */
    function getAutoUnlockMinutes() : int
    {
        return $this->getProperty(
            self::AUTO_UNLOCK_MINUTES,
        );
    }
    
    /**
     * Get the ShowLockoutFailures.
     *
     * @param mixed $showLockoutFailures The showLockoutFailures to set.
     * @return bool
     */
    function getShowLockoutFailures() : bool
    {
        return $this->getProperty(
            self::SHOW_LOCKOUT_FAILURES,
        );
    }
    
    /**
     * Get the UserLockoutNotificationChannels.
     *
     * @param mixed $userLockoutNotificationChannels The userLockoutNotificationChannels to set.
     * @return array
     */
    function getUserLockoutNotificationChannels() : array
    {
        return $this->getProperty(
            self::USER_LOCKOUT_NOTIFICATION_CHANNELS,
        );
    }
    

}