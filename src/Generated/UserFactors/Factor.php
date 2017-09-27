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

use Okta\Resource\AbstractResource;

class Factor extends AbstractResource
{
    const ID = 'id';
    const DEVICE = 'device';
    const USER_ID = 'userId';
    const VERIFY = 'verify';
    const PROFILE = 'profile';
    const PROVIDER = 'provider';
    const SESSION_ID = 'sessionId';
    const DEVICE_TYPE = 'deviceType';
    const FACTOR_TYPE = 'factorType';
    const MFA_STATE_TOKEN_ID = 'mfaStateTokenId';
    const RECHALLENGE_EXISTING_FACTOR = 'rechallengeExistingFactor';

    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\UserFactors\Factor::class,
                        '/users'
                    );
    }

    public function delete()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    '/users',
                    $this
                );
    }

    /**
     * Get the id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->getProperty(self::ID);
    }
    /**
    * Set the id.
    *
    * @param mixed $id The value to set.
    * @return self
    */
    public function setId($id)
    {
        $this->setProperty(
            self::ID,
            $id
        );

        return $this;
    }
    /**
     * Get the device.
     *
     * @return string
     */
    public function getDevice(): string
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
     * Get the userId.
     *
     * @return string
     */
    public function getUserId(): string
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
     * @param VerifyFactorRequest $verify The VerifyFactorRequest instance.
     * @return self
     */
    public function setVerify(VerifyFactorRequest $verify)
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
     * @param FactorProfile $profile The FactorProfile instance.
     * @return self
     */
    public function setProfile(FactorProfile $profile)
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
    public function getProvider(): string
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
     * Get the sessionId.
     *
     * @return string
     */
    public function getSessionId(): string
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
    public function getDeviceType(): string
    {
        return $this->getProperty(self::DEVICE_TYPE);
    }
    /**
     * Get the factorType.
     *
     * @return string
     */
    public function getFactorType(): string
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
    public function getMfaStateTokenId(): string
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
    public function getRechallengeExistingFactor(): bool
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
    public function activate($userId, VerifyFactorRequest $verifyFactorRequest)
    {
        $uri = "/api/v1/users/{$userId}/factors/{$this->getId()}/lifecycle/activate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $verifyFactorRequest);
    }

    /**
    * Verifies an OTP for a &#x60;token&#x60; or &#x60;token:hardware&#x60; factor
    *
    *
    * @return mixed|null
    */
    public function verify($userId, VerifyFactorRequest $verifyFactorRequest)
    {
        $uri = "/api/v1/users/{$userId}/factors/{$this->getId()}/verify";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $verifyFactorRequest);
    }
}
