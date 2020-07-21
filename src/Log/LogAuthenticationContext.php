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

namespace Okta\Log;

class LogAuthenticationContext extends \Okta\Resource\AbstractResource
{
    const ISSUER = 'issuer';
    const INTERFACE = 'interface';
    const CREDENTIAL_TYPE = 'credentialType';
    const EXTERNAL_SESSION_ID = 'externalSessionId';
    const AUTHENTICATION_STEP = 'authenticationStep';
    const CREDENTIAL_PROVIDER = 'credentialProvider';
    const AUTHENTICATION_PROVIDER = 'authenticationProvider';


    /**
     * Set the CredentialType.
     *
     * @return self
     */
    function setCredentialType(\Okta\Log\LogCredentialType $credentialType) : LogAuthenticationContext
    {
        $this->setEnumProperty(
            self::CREDENTIAL_TYPE,
            $credentialType
        );
    
        return $this;
    }

    /**
     * Set the CredentialProvider.
     *
     * @return self
     */
    function setCredentialProvider(\Okta\Log\LogCredentialProvider $credentialProvider) : LogAuthenticationContext
    {
        $this->setEnumProperty(
            self::CREDENTIAL_PROVIDER,
            $credentialProvider
        );
    
        return $this;
    }

    /**
     * Get the Issuer.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogIssuer
     */
    function getIssuer(array $options = []) : \Okta\Log\LogIssuer
    {
        return $this->getResourceProperty(
            self::ISSUER,
            \Okta\Log\LogIssuer::class,
            $options
        );
    }

    /**
     * Get the Interface.
     *
     * @param mixed $interface The interface to set.
     * @return string
     */
    function getInterface() : string
    {
        return $this->getProperty(
            self::INTERFACE,
        );
    }
    
    /**
     * Get the CredentialType.
     *
     * @return \Okta\Log\LogCredentialType
     */
    function getCredentialType() : \Okta\Log\LogCredentialType
    {
        return $this->getEnumProperty(
            self::CREDENTIAL_TYPE,
            \Okta\Log\LogCredentialType::class,
        );
    }

    /**
     * Get the ExternalSessionId.
     *
     * @param mixed $externalSessionId The externalSessionId to set.
     * @return string
     */
    function getExternalSessionId() : string
    {
        return $this->getProperty(
            self::EXTERNAL_SESSION_ID,
        );
    }
    
    /**
     * Get the AuthenticationStep.
     *
     * @param mixed $authenticationStep The authenticationStep to set.
     * @return int
     */
    function getAuthenticationStep() : int
    {
        return $this->getProperty(
            self::AUTHENTICATION_STEP,
        );
    }
    
    /**
     * Get the CredentialProvider.
     *
     * @return \Okta\Log\LogCredentialProvider
     */
    function getCredentialProvider() : \Okta\Log\LogCredentialProvider
    {
        return $this->getEnumProperty(
            self::CREDENTIAL_PROVIDER,
            \Okta\Log\LogCredentialProvider::class,
        );
    }

    /**
     * Get the AuthenticationProvider.
     *
     * @return \Okta\Log\LogAuthenticationProvider
     */
    function getAuthenticationProvider() : \Okta\Log\LogAuthenticationProvider
    {
        return $this->getEnumProperty(
            self::AUTHENTICATION_PROVIDER,
            \Okta\Log\LogAuthenticationProvider::class,
        );
    }


}