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

namespace Okta\IdentityProvider;

class IdentityProviderCredentialsClient extends \Okta\Resource\AbstractResource
{
    const CLIENT_ID = 'client_id';
    const CLIENT_SECRET = 'client_secret';


    /**
     * Set the ClientId.
     *
     * @param mixed $client_id The client_id to set.
     * @return self
     */
    function setClientId($client_id) : IdentityProviderCredentialsClient
    {
        $this->setProperty(
            self::CLIENT_ID,
            $client_id
        );
    
        return $this;
    }
    
    /**
     * Set the ClientSecret.
     *
     * @param mixed $client_secret The client_secret to set.
     * @return self
     */
    function setClientSecret($client_secret) : IdentityProviderCredentialsClient
    {
        $this->setProperty(
            self::CLIENT_SECRET,
            $client_secret
        );
    
        return $this;
    }
    
    /**
     * Get the ClientId.
     *
     * @param mixed $client_id The client_id to set.
     * @return string
     */
    function getClientId() : string
    {
        return $this->getProperty(
            self::CLIENT_ID,
        );
    }
    
    /**
     * Get the ClientSecret.
     *
     * @param mixed $client_secret The client_secret to set.
     * @return string
     */
    function getClientSecret() : string
    {
        return $this->getProperty(
            self::CLIENT_SECRET,
        );
    }
    

}