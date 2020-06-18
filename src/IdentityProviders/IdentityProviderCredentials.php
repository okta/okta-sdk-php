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

namespace Okta\IdentityProviders;

class IdentityProviderCredentials extends \Okta\Resource\AbstractResource
{
    const TRUST = 'trust';
    const CLIENT = 'client';
    const SIGNING = 'signing';



    /**
     * Get the trust.
     *
     * @return \Okta\IdentityProviders\IdentityProviderCredentialsTrust
     */
    public function getTrust(array $options = []): \Okta\IdentityProviders\IdentityProviderCredentialsTrust
    {
        return $this->getResourceProperty(
            self::TRUST,
            \Okta\IdentityProviders\IdentityProviderCredentialsTrust::class,
            $options
        );
    }


    /**
     * Set the trust.
     *
     * @param \Okta\IdentityProviders\IdentityProviderCredentialsTrust $trust The IdentityProviderCredentialsTrust instance.
     * @return self
     */
    public function setTrust(\Okta\IdentityProviders\IdentityProviderCredentialsTrust $trust)
    {
        $this->setResourceProperty(
            self::TRUST,
            $trust
        );

        return $this;
    }

    /**
     * Get the client.
     *
     * @return \Okta\IdentityProviders\IdentityProviderCredentialsClient
     */
    public function getClient(array $options = []): \Okta\IdentityProviders\IdentityProviderCredentialsClient
    {
        return $this->getResourceProperty(
            self::CLIENT,
            \Okta\IdentityProviders\IdentityProviderCredentialsClient::class,
            $options
        );
    }


    /**
     * Set the client.
     *
     * @param \Okta\IdentityProviders\IdentityProviderCredentialsClient $client The IdentityProviderCredentialsClient instance.
     * @return self
     */
    public function setClient(\Okta\IdentityProviders\IdentityProviderCredentialsClient $client)
    {
        $this->setResourceProperty(
            self::CLIENT,
            $client
        );

        return $this;
    }

    /**
     * Get the signing.
     *
     * @return \Okta\IdentityProviders\IdentityProviderCredentialsSigning
     */
    public function getSigning(array $options = []): \Okta\IdentityProviders\IdentityProviderCredentialsSigning
    {
        return $this->getResourceProperty(
            self::SIGNING,
            \Okta\IdentityProviders\IdentityProviderCredentialsSigning::class,
            $options
        );
    }


    /**
     * Set the signing.
     *
     * @param \Okta\IdentityProviders\IdentityProviderCredentialsSigning $signing The IdentityProviderCredentialsSigning instance.
     * @return self
     */
    public function setSigning(\Okta\IdentityProviders\IdentityProviderCredentialsSigning $signing)
    {
        $this->setResourceProperty(
            self::SIGNING,
            $signing
        );

        return $this;
    }
}
