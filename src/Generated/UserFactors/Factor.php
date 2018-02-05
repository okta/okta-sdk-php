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

namespace Okta\Generated\UserFactors;


class Factor extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const LINKS = '_links';
    const DEVICE = 'device';
    const STATUS = 'status';
    const USER_ID = 'userId';
    const VERIFY = 'verify';
    const PROFILE = 'profile';
    const PROVIDER = 'provider';
    const EMBEDDED = '_embedded';
    const SESSION_ID = 'sessionId';
    const DEVICE_TYPE = 'deviceType';
    const FACTOR_TYPE = 'factorType';
    const MFA_STATE_TOKEN_ID = 'mfaStateTokenId';
    const RECHALLENGE_EXISTING_FACTOR = 'rechallengeExistingFactor';


        
    /**
     * Get the id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }

    /**
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }

    /**
     * Get the device.
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->getProperty(self::DEVICE);
    }

    /**
    * Set the device.
    *
    * @param mixed $device The value to set.
    * @return self
    */
    public function setDevice($device)
    {
        $this->setProperty(
            self::DEVICE,
            $device
        );

        return $this;
    }

    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
     * Get the userId.
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->getProperty(self::USER_ID);
    }

    /**
    * Set the userId.
    *
    * @param mixed $userId The value to set.
    * @return self
    */
    public function setUserId($userId)
    {
        $this->setProperty(
            self::USER_ID,
            $userId
        );

        return $this;
    }

    /**
     * Get the verify.
     *
     * @return \Okta\UserFactors\VerifyFactorRequest
     */
    public function getVerify(array $options = []): \Okta\UserFactors\VerifyFactorRequest
    {
        return $this->getResourceProperty(
            self::VERIFY,
            \Okta\UserFactors\VerifyFactorRequest::class,
            $options
        );
    }


    /**
     * Set the verify.
     *
     * @param \Okta\UserFactors\VerifyFactorRequest $verify The VerifyFactorRequest instance.
     * @return self
     */
    public function setVerify(\Okta\UserFactors\VerifyFactorRequest $verify)
    {
        $this->setResourceProperty(
            self::VERIFY,
            $verify
        );
        
        return $this;
    }

    /**
     * Get the profile.
     *
     * @return \Okta\UserFactors\FactorProfile
     */
    public function getProfile(array $options = []): \Okta\UserFactors\FactorProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\UserFactors\FactorProfile::class,
            $options
        );
    }


    /**
     * Set the profile.
     *
     * @param \Okta\UserFactors\FactorProfile $profile The FactorProfile instance.
     * @return self
     */
    public function setProfile(\Okta\UserFactors\FactorProfile $profile)
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
        );
        
        return $this;
    }

    /**
     * Get the provider.
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->getProperty(self::PROVIDER);
    }

    /**
    * Set the provider.
    *
    * @param mixed $provider The value to set.
    * @return self
    */
    public function setProvider($provider)
    {
        $this->setProperty(
            self::PROVIDER,
            $provider
        );

        return $this;
    }

    /**
     * Get the _embedded.
     *
     * @return \stdClass
     */
    public function getEmbedded()
    {
        return $this->getProperty(self::EMBEDDED);
    }

    /**
     * Get the sessionId.
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->getProperty(self::SESSION_ID);
    }

    /**
    * Set the sessionId.
    *
    * @param mixed $sessionId The value to set.
    * @return self
    */
    public function setSessionId($sessionId)
    {
        $this->setProperty(
            self::SESSION_ID,
            $sessionId
        );

        return $this;
    }

    /**
     * Get the deviceType.
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->getProperty(self::DEVICE_TYPE);
    }

    /**
     * Get the factorType.
     *
     * @return string
     */
    public function getFactorType()
    {
        return $this->getProperty(self::FACTOR_TYPE);
    }

    /**
    * Set the factorType.
    *
    * @param mixed $factorType The value to set.
    * @return self
    */
    public function setFactorType($factorType)
    {
        $this->setProperty(
            self::FACTOR_TYPE,
            $factorType
        );

        return $this;
    }

    /**
     * Get the mfaStateTokenId.
     *
     * @return string
     */
    public function getMfaStateTokenId()
    {
        return $this->getProperty(self::MFA_STATE_TOKEN_ID);
    }

    /**
    * Set the mfaStateTokenId.
    *
    * @param mixed $mfaStateTokenId The value to set.
    * @return self
    */
    public function setMfaStateTokenId($mfaStateTokenId)
    {
        $this->setProperty(
            self::MFA_STATE_TOKEN_ID,
            $mfaStateTokenId
        );

        return $this;
    }

    /**
     * Get the rechallengeExistingFactor.
     *
     * @return bool
     */
    public function getRechallengeExistingFactor()
    {
        return $this->getProperty(self::RECHALLENGE_EXISTING_FACTOR);
    }

    /**
    * Set the rechallengeExistingFactor.
    *
    * @param mixed $rechallengeExistingFactor The value to set.
    * @return self
    */
    public function setRechallengeExistingFactor($rechallengeExistingFactor)
    {
        $this->setProperty(
            self::RECHALLENGE_EXISTING_FACTOR,
            $rechallengeExistingFactor
        );

        return $this;
    }


    /**
    * The &#x60;sms&#x60; and &#x60;token:software:totp&#x60; [factor types](#factor-type) require activation to complete the enrollment process.
    *
    *
    * @return mixed|null
    */
    public function activate(VerifyFactorRequest $verifyFactorRequest)
    {
        $uri = "/api/v1/users/{$this->get()}/factors/{$this->getId()}/lifecycle/activate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $verifyFactorRequest);

        $response =  new \Okta\UserFactors\Factor(null, $body);
        return $response->convertFromGenericFactor();
    }


    /**
    * Verifies an OTP for a &#x60;token&#x60; or &#x60;token:hardware&#x60; factor
    *
    *
    * @return mixed|null
    */
    public function verify(VerifyFactorRequest $verifyFactorRequest)
    {
        $uri = "/api/v1/users/{$this->get()}/factors/{$this->getId()}/verify";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $verifyFactorRequest);

        return new \Okta\UserFactors\VerifyFactorResponse(null, $body);
    }
}
