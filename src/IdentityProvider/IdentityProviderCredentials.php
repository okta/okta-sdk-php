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

class IdentityProviderCredentials extends \Okta\Resource\AbstractResource
{
    const TRUST = 'trust';
    const CLIENT = 'client';
    const SIGNING = 'signing';

    /**
     * Set the Trust.
     *
     * @param mixed $trust The trust to set.
     * @return self
     */
    function setTrust(\Okta\IdentityProvider\IdentityProviderCredentialsTrust $trust) : IdentityProviderCredentials
    {
        $this->setResourceProperty(
            self::TRUST,
            $trust
        );
    
        return $this;
    }

    /**
     * Set the Client.
     *
     * @param mixed $client The client to set.
     * @return self
     */
    function setClient(\Okta\IdentityProvider\IdentityProviderCredentialsClient $client) : IdentityProviderCredentials
    {
        $this->setResourceProperty(
            self::CLIENT,
            $client
        );
    
        return $this;
    }

    /**
     * Set the Signing.
     *
     * @param mixed $signing The signing to set.
     * @return self
     */
    function setSigning(\Okta\IdentityProvider\IdentityProviderCredentialsSigning $signing) : IdentityProviderCredentials
    {
        $this->setResourceProperty(
            self::SIGNING,
            $signing
        );
    
        return $this;
    }

    /**
     * Get the Trust.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\IdentityProviderCredentialsTrust
     */
    function getTrust(array $options = []) : \Okta\IdentityProvider\IdentityProviderCredentialsTrust
    {
        return $this->getResourceProperty(
            self::TRUST,
            \Okta\IdentityProvider\IdentityProviderCredentialsTrust::class,
            $options
        );
    }

    /**
     * Get the Client.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\IdentityProviderCredentialsClient
     */
    function getClient(array $options = []) : \Okta\IdentityProvider\IdentityProviderCredentialsClient
    {
        return $this->getResourceProperty(
            self::CLIENT,
            \Okta\IdentityProvider\IdentityProviderCredentialsClient::class,
            $options
        );
    }

    /**
     * Get the Signing.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\IdentityProviderCredentialsSigning
     */
    function getSigning(array $options = []) : \Okta\IdentityProvider\IdentityProviderCredentialsSigning
    {
        return $this->getResourceProperty(
            self::SIGNING,
            \Okta\IdentityProvider\IdentityProviderCredentialsSigning::class,
            $options
        );
    }


}