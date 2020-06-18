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

namespace Okta\UserFactors;


class PushUserFactor extends \Okta\UserFactors\UserFactor
{
    const PROFILE = 'profile';
    const EXPIRES_AT = 'expiresAt';
    const FACTOR_RESULT = 'factorResult';



    /**
     * Get the profile.
     *
     * @return \Okta\UserFactors\PushUserFactorProfile
     */
    public function getProfile(array $options = []): \Okta\UserFactors\PushUserFactorProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\UserFactors\PushUserFactorProfile::class,
            $options
        );
    }


    /**
     * Set the profile.
     *
     * @param \Okta\UserFactors\PushUserFactorProfile $profile The PushUserFactorProfile instance.
     * @return self
     */
    public function setProfile(\Okta\UserFactors\PushUserFactorProfile $profile)
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
        );

        return $this;
    }

    /**
     * Get the expiresAt.
     *
     * @return \Carbon\Carbon|null
     */
    public function getExpiresAt()
    {
        return $this->getDateProperty(self::EXPIRES_AT);
    }

    /**
    * Set the expiresAt.
    *
    * @param mixed $expiresAt The value to set.
    * @return self
    */
    public function setExpiresAt($expiresAt)
    {
        $this->setProperty(
            self::EXPIRES_AT,
            $expiresAt
        );

        return $this;
    }

    /**
     * Get the factorResult.
     *
     * @return string
     */
    public function getFactorResult()
    {
        return $this->getProperty(self::FACTOR_RESULT);
    }

    /**
    * Set the factorResult.
    *
    * @param mixed $factorResult The value to set.
    * @return self
    */
    public function setFactorResult($factorResult)
    {
        $this->setProperty(
            self::FACTOR_RESULT,
            $factorResult
        );

        return $this;
    }
}
