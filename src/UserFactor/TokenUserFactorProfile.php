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

class TokenUserFactorProfile extends \Okta\Resource\AbstractResource
{
    const CREDENTIAL_ID = 'credentialId';

    /**
     * Set the CredentialId.
     *
     * @param mixed $credentialId The credentialId to set.
     * @return self
     */
    function setCredentialId($credentialId) : TokenUserFactorProfile
    {
        $this->setProperty(
            self::CREDENTIAL_ID,
            $credentialId
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
            self::CREDENTIAL_ID
        );
    }
    

}