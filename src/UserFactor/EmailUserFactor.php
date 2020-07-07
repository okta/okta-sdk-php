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

class EmailUserFactor extends \Okta\UserFactor\UserFactor
{
    const PROFILE = 'profile';


    /**
     * Set the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return self
     */
    function setProfile(\Okta\UserFactor\EmailUserFactorProfile $profile) : EmailUserFactor
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
     * @param mixed $factorType The factorType to set.
     * @return self
     */
    function setFactorType(\Okta\UserFactor\FactorType $factorType) : EmailUserFactor
    {
        $this->setResourceProperty(
            self::FACTOR_TYPE,
            $factorType
        );
    
        return $this;
    }

    /**
     * Set the Provider.
     *
     * @param mixed $provider The provider to set.
     * @return self
     */
    function setProvider(\Okta\UserFactor\FactorProvider $provider) : EmailUserFactor
    {
        $this->setResourceProperty(
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
    function setVerify(\Okta\UserFactor\VerifyFactorRequest $verify) : EmailUserFactor
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
     * @return \Okta\UserFactor\EmailUserFactorProfile
     */
    function getProfile(array $options = []) : \Okta\UserFactor\EmailUserFactorProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\UserFactor\EmailUserFactorProfile::class,
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
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\UserFactor\FactorType
     */
    function getFactorType(array $options = []) : \Okta\UserFactor\FactorType
    {
        return $this->getResourceProperty(
            self::FACTOR_TYPE,
            \Okta\UserFactor\FactorType::class,
            $options
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
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\UserFactor\FactorProvider
     */
    function getProvider(array $options = []) : \Okta\UserFactor\FactorProvider
    {
        return $this->getResourceProperty(
            self::PROVIDER,
            \Okta\UserFactor\FactorProvider::class,
            $options
        );
    }

    /**
     * Get the Status.
     *
     * @param mixed $status The status to set.
     * @return string
     */
    function getStatus() : string
    {
        return $this->getProperty(
            self::STATUS,
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