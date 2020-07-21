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

class SmsUserFactor extends \Okta\UserFactor\UserFactor
{
    const PROFILE = 'profile';


    /**
     * Set the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return self
     */
    function setProfile(\Okta\UserFactor\SmsUserFactorProfile $profile) : SmsUserFactor
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
        );
    
        return $this;
    }

    /**
     * Set the FactorType.
     *
     * @return self
     */
    function setFactorType(\Okta\UserFactor\FactorType $factorType) : SmsUserFactor
    {
        $this->setEnumProperty(
            self::FACTOR_TYPE,
            $factorType
        );
    
        return $this;
    }

    /**
     * Set the Provider.
     *
     * @return self
     */
    function setProvider(\Okta\UserFactor\FactorProvider $provider) : SmsUserFactor
    {
        $this->setEnumProperty(
            self::PROVIDER,
            $provider
        );
    
        return $this;
    }

    /**
     * Set the Verify.
     *
     * @param mixed $verify The verify to set.
     * @return self
     */
    function setVerify(\Okta\UserFactor\VerifyFactorRequest $verify) : SmsUserFactor
    {
        $this->setResourceProperty(
            self::VERIFY,
            $verify
        );
    
        return $this;
    }

    /**
     * Get the Profile.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\UserFactor\SmsUserFactorProfile
     */
    function getProfile(array $options = []) : \Okta\UserFactor\SmsUserFactorProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\UserFactor\SmsUserFactorProfile::class,
            $options
        );
    }

    /**
     * Get the Embedded.
     *
     * @param mixed $_embedded The _embedded to set.
     * @return \stdClass
     */
    function getEmbedded() : \stdClass
    {
        return $this->getProperty(
            self::EMBEDDED,
        );
    }
    
    /**
     * Get the Links.
     *
     * @param mixed $_links The _links to set.
     * @return \stdClass
     */
    function getLinks() : \stdClass
    {
        return $this->getProperty(
            self::LINKS,
        );
    }
    
    /**
     * Get the Created.
     *
     * @param mixed $created The created to set.
     * @return \Carbon\Carbon
     */
    function getCreated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::CREATED
        );
    
        return $this;
    }

    /**
     * Get the FactorType.
     *
     * @return \Okta\UserFactor\FactorType
     */
    function getFactorType() : \Okta\UserFactor\FactorType
    {
        return $this->getEnumProperty(
            self::FACTOR_TYPE,
            \Okta\UserFactor\FactorType::class,
        );
    }

    /**
     * Get the Id.
     *
     * @param mixed $id The id to set.
     * @return string
     */
    function getId() : string
    {
        return $this->getProperty(
            self::ID,
        );
    }
    
    /**
     * Get the LastUpdated.
     *
     * @param mixed $lastUpdated The lastUpdated to set.
     * @return \Carbon\Carbon
     */
    function getLastUpdated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_UPDATED
        );
    
        return $this;
    }

    /**
     * Get the Provider.
     *
     * @return \Okta\UserFactor\FactorProvider
     */
    function getProvider() : \Okta\UserFactor\FactorProvider
    {
        return $this->getEnumProperty(
            self::PROVIDER,
            \Okta\UserFactor\FactorProvider::class,
        );
    }

    /**
     * Get the Status.
     *
     * @return string
     */
    function getStatus() : string
    {
        return $this->getEnumProperty(
            self::STATUS,
            \Okta\UserFactor\FactorStatus::class,
        );
    }

    /**
     * Get the Verify.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\UserFactor\VerifyFactorRequest
     */
    function getVerify(array $options = []) : \Okta\UserFactor\VerifyFactorRequest
    {
        return $this->getResourceProperty(
            self::VERIFY,
            \Okta\UserFactor\VerifyFactorRequest::class,
            $options
        );
    }


}