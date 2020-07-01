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

class ActivateFactorRequest extends \Okta\Resource\AbstractResource
{
    const PASS_CODE = 'passCode';
    const CLIENT_DATA = 'clientData';
    const STATE_TOKEN = 'stateToken';
    const ATTESTATION = 'attestation';
    const REGISTRATION_DATA = 'registrationData';

    /**
     * Set the PassCode.
     *
     * @param mixed $passCode The passCode to set.
     * @return self
     */
    function setPassCode($passCode) : ActivateFactorRequest
    {
        $this->setProperty(
            self::PASS_CODE,
            $passCode
        );
    
        return $this;
    }
    
    /**
     * Set the ClientData.
     *
     * @param mixed $clientData The clientData to set.
     * @return self
     */
    function setClientData($clientData) : ActivateFactorRequest
    {
        $this->setProperty(
            self::CLIENT_DATA,
            $clientData
        );
    
        return $this;
    }
    
    /**
     * Set the StateToken.
     *
     * @param mixed $stateToken The stateToken to set.
     * @return self
     */
    function setStateToken($stateToken) : ActivateFactorRequest
    {
        $this->setProperty(
            self::STATE_TOKEN,
            $stateToken
        );
    
        return $this;
    }
    
    /**
     * Set the Attestation.
     *
     * @param mixed $attestation The attestation to set.
     * @return self
     */
    function setAttestation($attestation) : ActivateFactorRequest
    {
        $this->setProperty(
            self::ATTESTATION,
            $attestation
        );
    
        return $this;
    }
    
    /**
     * Set the RegistrationData.
     *
     * @param mixed $registrationData The registrationData to set.
     * @return self
     */
    function setRegistrationData($registrationData) : ActivateFactorRequest
    {
        $this->setProperty(
            self::REGISTRATION_DATA,
            $registrationData
        );
    
        return $this;
    }
    
    /**
     * Get the PassCode.
     *
     * @param mixed $passCode The passCode to set.
     * @return string
     */
    function getPassCode() : string
    {
        return $this->getProperty(
            self::PASS_CODE
        );
    }
    
    /**
     * Get the ClientData.
     *
     * @param mixed $clientData The clientData to set.
     * @return string
     */
    function getClientData() : string
    {
        return $this->getProperty(
            self::CLIENT_DATA
        );
    }
    
    /**
     * Get the StateToken.
     *
     * @param mixed $stateToken The stateToken to set.
     * @return string
     */
    function getStateToken() : string
    {
        return $this->getProperty(
            self::STATE_TOKEN
        );
    }
    
    /**
     * Get the Attestation.
     *
     * @param mixed $attestation The attestation to set.
     * @return string
     */
    function getAttestation() : string
    {
        return $this->getProperty(
            self::ATTESTATION
        );
    }
    
    /**
     * Get the RegistrationData.
     *
     * @param mixed $registrationData The registrationData to set.
     * @return string
     */
    function getRegistrationData() : string
    {
        return $this->getProperty(
            self::REGISTRATION_DATA
        );
    }
    

}