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
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
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
     * Get the created.
     *
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
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
     * Get the lastUpdated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }


    /**
    * The &#x60;sms&#x60; and &#x60;token:software:totp&#x60; factor types require activation to complete the enrollment process.
    *
    *
    * @return mixed|null
    */
    public function activate(ActivateFactorRequest $activateFactorRequest)
    {
        $uri = "/api/v1/users/{$this->get()}/factors/{$this->getId()}/lifecycle/activate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $activateFactorRequest);

        return new \Okta\UserFactors\UserFactor(null, $body);
    }


    /**
    * Verifies an OTP for a &#x60;token&#x60; or &#x60;token:hardware&#x60; factor
    *

    * @return mixed|null
    */
    public function verify(VerifyFactorRequest $verifyFactorRequest, $tokenLifetimeSeconds = 300)
    {
        $uri = "/api/v1/users/{$this->get()}/factors/{$this->getId()}/verify";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $verifyFactorRequest, ['query' => ['tokenLifetimeSeconds' => $tokenLifetimeSeconds]]);

        return new \Okta\UserFactors\VerifyUserFactorResponse(null, $body);
    }

    public function convertFromGenericFactor()
    {
        $factorType = $this->getFactorType();
    
        $factorEnum = (new FactorType($factorType));
    
        $realFactor = $factorEnum->mapToFactorType();
    
        $properties = new \stdClass();
        foreach ($this->getPropertyNames() as $name) {
            $properties->$name = $this->getProperty($name);
        }
    
        return new $realFactor(null, $properties);
    }
}
