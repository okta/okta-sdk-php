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

class ActivateFactorRequest extends \Okta\Resource\AbstractResource
{
    const PASS_CODE = 'passCode';
    const CLIENT_DATA = 'clientData';
    const STATE_TOKEN = 'stateToken';
    const ATTESTATION = 'attestation';
    const REGISTRATION_DATA = 'registrationData';



    /**
     * Get the passCode.
     *
     * @return string
     */
    public function getPassCode()
    {
        return $this->getProperty(self::PASS_CODE);
    }

    /**
    * Set the passCode.
    *
    * @param mixed $passCode The value to set.
    * @return self
    */
    public function setPassCode($passCode)
    {
        $this->setProperty(
            self::PASS_CODE,
            $passCode
        );

        return $this;
    }

    /**
     * Get the clientData.
     *
     * @return string
     */
    public function getClientData()
    {
        return $this->getProperty(self::CLIENT_DATA);
    }

    /**
    * Set the clientData.
    *
    * @param mixed $clientData The value to set.
    * @return self
    */
    public function setClientData($clientData)
    {
        $this->setProperty(
            self::CLIENT_DATA,
            $clientData
        );

        return $this;
    }

    /**
     * Get the stateToken.
     *
     * @return string
     */
    public function getStateToken()
    {
        return $this->getProperty(self::STATE_TOKEN);
    }

    /**
    * Set the stateToken.
    *
    * @param mixed $stateToken The value to set.
    * @return self
    */
    public function setStateToken($stateToken)
    {
        $this->setProperty(
            self::STATE_TOKEN,
            $stateToken
        );

        return $this;
    }

    /**
     * Get the attestation.
     *
     * @return string
     */
    public function getAttestation()
    {
        return $this->getProperty(self::ATTESTATION);
    }

    /**
    * Set the attestation.
    *
    * @param mixed $attestation The value to set.
    * @return self
    */
    public function setAttestation($attestation)
    {
        $this->setProperty(
            self::ATTESTATION,
            $attestation
        );

        return $this;
    }

    /**
     * Get the registrationData.
     *
     * @return string
     */
    public function getRegistrationData()
    {
        return $this->getProperty(self::REGISTRATION_DATA);
    }

    /**
    * Set the registrationData.
    *
    * @param mixed $registrationData The value to set.
    * @return self
    */
    public function setRegistrationData($registrationData)
    {
        $this->setProperty(
            self::REGISTRATION_DATA,
            $registrationData
        );

        return $this;
    }
}
