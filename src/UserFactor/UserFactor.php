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

class UserFactor extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const LINKS = '_links';
    const STATUS = 'status';
    const VERIFY = 'verify';
    const CREATED = 'created';
    const PROVIDER = 'provider';
    const EMBEDDED = '_embedded';
    const FACTOR_TYPE = 'factorType';
    const LAST_UPDATED = 'lastUpdated';

    /**
     * Set the Verify.
     *
     * @param mixed $verify The verify to set.
     * @return self
     */
    function setVerify(\Okta\UserFactor\VerifyFactorRequest $verify) : UserFactor
    {
        $this->setResourceProperty(
            self::VERIFY,
            $verify
        );
    
        return $this;
    }

    /**
     * Set the Provider.
     *
     * @param mixed $provider The provider to set.
     * @return self
     */
    function setProvider($provider) : UserFactor
    {
        $this->setProperty(
            self::PROVIDER,
            $provider
        );
    
        return $this;
    }
    
    /**
     * Set the FactorType.
     *
     * @param mixed $factorType The factorType to set.
     * @return self
     */
    function setFactorType($factorType) : UserFactor
    {
        $this->setProperty(
            self::FACTOR_TYPE,
            $factorType
        );
    
        return $this;
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
            self::ID
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
            self::LINKS
        );
    }
    
    /**
     * Get the Status.
     *
     * @param mixed $status The status to set.
     * @return \Okta\UserFactor\FactorStatus
     */
    function getStatus() : \Okta\UserFactor\FactorStatus
    {
        return $this->getProperty(
            self::STATUS
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
     * Get the Provider.
     *
     * @param mixed $provider The provider to set.
     * @return \Okta\UserFactor\FactorProvider
     */
    function getProvider() : \Okta\UserFactor\FactorProvider
    {
        return $this->getProperty(
            self::PROVIDER
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
            self::EMBEDDED
        );
    }
    
    /**
     * Get the FactorType.
     *
     * @param mixed $factorType The factorType to set.
     * @return \Okta\UserFactor\FactorType
     */
    function getFactorType() : \Okta\UserFactor\FactorType
    {
        return $this->getProperty(
            self::FACTOR_TYPE
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
     * Unenrolls an existing factor for the specified user, allowing the user to enroll a new factor.
     */
    function delete($userId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/${userId}/factors/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * The `sms` and `token:software:totp` factor types require activation to complete the enrollment process.
     */
    function activate($userId) : \Okta\UserFactor\UserFactor 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/${userId}/factors/".$this->id."/lifecycle/activate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->executeRequest();
        return new \Okta\UserFactor\UserFactor(null, $body);
    }
    /**
     * Verifies an OTP for a `token` or `token:hardware` factor
     */
    function verify($userId, array $queryParameters = []) : \Okta\UserFactor\VerifyUserFactorResponse 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/${userId}/factors/".$this->id."/verify"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\UserFactor\VerifyUserFactorResponse(null, $body);
    }

}