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

namespace Okta\UserFactor;

class PushUserFactor extends \Okta\UserFactor\UserFactor
{
    const PROFILE = 'profile';
    const EXPIRES_AT = 'expiresAt';
    const FACTOR_RESULT = 'factorResult';

    /**
     * Set the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return self
     */
    function setProfile(\Okta\UserFactor\PushUserFactorProfile $profile) : PushUserFactor
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
        );
    
        return $this;
    }

    /**
     * Set the ExpiresAt.
     *
     * @param mixed $expiresAt The expiresAt to set.
     * @return self
     */
    function setExpiresAt($expiresAt) : PushUserFactor
    {
        $this->setDateTimeProperty(
            self::EXPIRES_AT,
            $expiresAt
        );
    
        return $this;
    }

    /**
     * Set the FactorResult.
     *
     * @param mixed $factorResult The factorResult to set.
     * @return self
     */
    function setFactorResult($factorResult) : PushUserFactor
    {
        $this->setProperty(
            self::FACTOR_RESULT,
            $factorResult
        );
    
        return $this;
    }
    
    /**
     * Get the Profile.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\UserFactor\PushUserFactorProfile
     */
    function getProfile(array $options = []) : \Okta\UserFactor\PushUserFactorProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\UserFactor\PushUserFactorProfile::class,
            $options
        );
    }

    /**
     * Get the ExpiresAt.
     *
     * @param mixed $expiresAt The expiresAt to set.
     * @return \Carbon\Carbon
     */
    function getExpiresAt() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::EXPIRES_AT
        );
    
        return $this;
    }

    /**
     * Get the FactorResult.
     *
     * @param mixed $factorResult The factorResult to set.
     * @return \Okta\UserFactor\FactorResultType
     */
    function getFactorResult() : \Okta\UserFactor\FactorResultType
    {
        return $this->getProperty(
            self::FACTOR_RESULT
        );
    }
    

}