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


class PasswordPolicyPasswordSettingsAge extends \Okta\Resource\AbstractResource
{
    const MAX_AGE_DAYS = 'maxAgeDays';
    const HISTORY_COUNT = 'historyCount';
    const MIN_AGE_MINUTES = 'minAgeMinutes';
    const EXPIRE_WARN_DAYS = 'expireWarnDays';



    /**
     * Get the maxAgeDays.
     *
     * @return int
     */
    public function getMaxAgeDays()
    {
        return $this->getProperty(self::MAX_AGE_DAYS);
    }

    /**
    * Set the maxAgeDays.
    *
    * @param mixed $maxAgeDays The value to set.
    * @return self
    */
    public function setMaxAgeDays($maxAgeDays)
    {
        $this->setProperty(
            self::MAX_AGE_DAYS,
            $maxAgeDays
        );

        return $this;
    }

    /**
     * Get the historyCount.
     *
     * @return int
     */
    public function getHistoryCount()
    {
        return $this->getProperty(self::HISTORY_COUNT);
    }

    /**
    * Set the historyCount.
    *
    * @param mixed $historyCount The value to set.
    * @return self
    */
    public function setHistoryCount($historyCount)
    {
        $this->setProperty(
            self::HISTORY_COUNT,
            $historyCount
        );

        return $this;
    }

    /**
     * Get the minAgeMinutes.
     *
     * @return int
     */
    public function getMinAgeMinutes()
    {
        return $this->getProperty(self::MIN_AGE_MINUTES);
    }

    /**
    * Set the minAgeMinutes.
    *
    * @param mixed $minAgeMinutes The value to set.
    * @return self
    */
    public function setMinAgeMinutes($minAgeMinutes)
    {
        $this->setProperty(
            self::MIN_AGE_MINUTES,
            $minAgeMinutes
        );

        return $this;
    }

    /**
     * Get the expireWarnDays.
     *
     * @return int
     */
    public function getExpireWarnDays()
    {
        return $this->getProperty(self::EXPIRE_WARN_DAYS);
    }

    /**
    * Set the expireWarnDays.
    *
    * @param mixed $expireWarnDays The value to set.
    * @return self
    */
    public function setExpireWarnDays($expireWarnDays)
    {
        $this->setProperty(
            self::EXPIRE_WARN_DAYS,
            $expireWarnDays
        );

        return $this;
    }
}
