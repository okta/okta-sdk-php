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

class WebAuthnUserFactorProfile extends \Okta\Resource\AbstractResource
{
    const CREDENTIAL_ID = 'credentialId';
    const AUTHENTICATOR_NAME = 'authenticatorName';


    /**
     * Set the CredentialId.
     *
     * @param mixed $credentialId The credentialId to set.
     * @return self
     */
    function setCredentialId($credentialId) : WebAuthnUserFactorProfile
    {
        $this->setProperty(
            self::CREDENTIAL_ID,
            $credentialId
        );
    
        return $this;
    }
    
    /**
     * Set the AuthenticatorName.
     *
     * @param mixed $authenticatorName The authenticatorName to set.
     * @return self
     */
    function setAuthenticatorName($authenticatorName) : WebAuthnUserFactorProfile
    {
        $this->setProperty(
            self::AUTHENTICATOR_NAME,
            $authenticatorName
        );
    
        return $this;
    }
    
    /**
     * Get the CredentialId.
     *
     * @param mixed $credentialId The credentialId to set.
     * @return string
     */
    function getCredentialId() : string
    {
        return $this->getProperty(
            self::CREDENTIAL_ID,
        );
    }
    
    /**
     * Get the AuthenticatorName.
     *
     * @param mixed $authenticatorName The authenticatorName to set.
     * @return string
     */
    function getAuthenticatorName() : string
    {
        return $this->getProperty(
            self::AUTHENTICATOR_NAME,
        );
    }
    

}