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

class VerifyFactorRequest extends \Okta\Resource\AbstractResource
{
    const ANSWER = 'answer';
    const PASS_CODE = 'passCode';
    const CLIENT_DATA = 'clientData';
    const STATE_TOKEN = 'stateToken';
    const ATTESTATION = 'attestation';
    const NEXT_PASS_CODE = 'nextPassCode';
    const ACTIVATION_TOKEN = 'activationToken';
    const REGISTRATION_DATA = 'registrationData';

    /**
     * Set the Answer.
     *
     * @param mixed $answer The answer to set.
     * @return self
     */
    function setAnswer($answer) : VerifyFactorRequest
    {
        $this->setProperty(
            self::ANSWER,
            $answer
        );
    
        return $this;
    }
    
    /**
     * Set the PassCode.
     *
     * @param mixed $passCode The passCode to set.
     * @return self
     */
    function setPassCode($passCode) : VerifyFactorRequest
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
    function setClientData($clientData) : VerifyFactorRequest
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
    function setStateToken($stateToken) : VerifyFactorRequest
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
    function setAttestation($attestation) : VerifyFactorRequest
    {
        $this->setProperty(
            self::ATTESTATION,
            $attestation
        );
    
        return $this;
    }
    
    /**
     * Set the NextPassCode.
     *
     * @param mixed $nextPassCode The nextPassCode to set.
     * @return self
     */
    function setNextPassCode($nextPassCode) : VerifyFactorRequest
    {
        $this->setProperty(
            self::NEXT_PASS_CODE,
            $nextPassCode
        );
    
        return $this;
    }
    
    /**
     * Set the ActivationToken.
     *
     * @param mixed $activationToken The activationToken to set.
     * @return self
     */
    function setActivationToken($activationToken) : VerifyFactorRequest
    {
        $this->setProperty(
            self::ACTIVATION_TOKEN,
            $activationToken
        );
    
        return $this;
    }
    
    /**
     * Set the RegistrationData.
     *
     * @param mixed $registrationData The registrationData to set.
     * @return self
     */
    function setRegistrationData($registrationData) : VerifyFactorRequest
    {
        $this->setProperty(
            self::REGISTRATION_DATA,
            $registrationData
        );
    
        return $this;
    }
    
    /**
     * Get the Answer.
     *
     * @param mixed $answer The answer to set.
     * @return string
     */
    function getAnswer() : string
    {
        return $this->getProperty(
            self::ANSWER
        );
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
     * Get the NextPassCode.
     *
     * @param mixed $nextPassCode The nextPassCode to set.
     * @return string
     */
    function getNextPassCode() : string
    {
        return $this->getProperty(
            self::NEXT_PASS_CODE
        );
    }
    
    /**
     * Get the ActivationToken.
     *
     * @param mixed $activationToken The activationToken to set.
     * @return string
     */
    function getActivationToken() : string
    {
        return $this->getProperty(
            self::ACTIVATION_TOKEN
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