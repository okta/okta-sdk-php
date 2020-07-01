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

class PasswordPolicyPasswordSettingsAge extends \Okta\Resource\AbstractResource
{
    const MAX_AGE_DAYS = 'maxAgeDays';
    const HISTORY_COUNT = 'historyCount';
    const MIN_AGE_MINUTES = 'minAgeMinutes';
    const EXPIRE_WARN_DAYS = 'expireWarnDays';

    /**
     * Set the MaxAgeDays.
     *
     * @param mixed $maxAgeDays The maxAgeDays to set.
     * @return self
     */
    function setMaxAgeDays($maxAgeDays) : PasswordPolicyPasswordSettingsAge
    {
        $this->setProperty(
            self::MAX_AGE_DAYS,
            $maxAgeDays
        );
    
        return $this;
    }
    
    /**
     * Set the HistoryCount.
     *
     * @param mixed $historyCount The historyCount to set.
     * @return self
     */
    function setHistoryCount($historyCount) : PasswordPolicyPasswordSettingsAge
    {
        $this->setProperty(
            self::HISTORY_COUNT,
            $historyCount
        );
    
        return $this;
    }
    
    /**
     * Set the MinAgeMinutes.
     *
     * @param mixed $minAgeMinutes The minAgeMinutes to set.
     * @return self
     */
    function setMinAgeMinutes($minAgeMinutes) : PasswordPolicyPasswordSettingsAge
    {
        $this->setProperty(
            self::MIN_AGE_MINUTES,
            $minAgeMinutes
        );
    
        return $this;
    }
    
    /**
     * Set the ExpireWarnDays.
     *
     * @param mixed $expireWarnDays The expireWarnDays to set.
     * @return self
     */
    function setExpireWarnDays($expireWarnDays) : PasswordPolicyPasswordSettingsAge
    {
        $this->setProperty(
            self::EXPIRE_WARN_DAYS,
            $expireWarnDays
        );
    
        return $this;
    }
    
    /**
     * Get the MaxAgeDays.
     *
     * @param mixed $maxAgeDays The maxAgeDays to set.
     * @return int
     */
    function getMaxAgeDays() : int
    {
        return $this->getProperty(
            self::MAX_AGE_DAYS
        );
    }
    
    /**
     * Get the HistoryCount.
     *
     * @param mixed $historyCount The historyCount to set.
     * @return int
     */
    function getHistoryCount() : int
    {
        return $this->getProperty(
            self::HISTORY_COUNT
        );
    }
    
    /**
     * Get the MinAgeMinutes.
     *
     * @param mixed $minAgeMinutes The minAgeMinutes to set.
     * @return int
     */
    function getMinAgeMinutes() : int
    {
        return $this->getProperty(
            self::MIN_AGE_MINUTES
        );
    }
    
    /**
     * Get the ExpireWarnDays.
     *
     * @param mixed $expireWarnDays The expireWarnDays to set.
     * @return int
     */
    function getExpireWarnDays() : int
    {
        return $this->getProperty(
            self::EXPIRE_WARN_DAYS
        );
    }
    

}