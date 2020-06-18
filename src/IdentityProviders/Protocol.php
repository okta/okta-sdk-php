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

class Protocol extends \Okta\Resource\AbstractResource
{
    const TYPE = 'type';
    const ISSUER = 'issuer';
    const SCOPES = 'scopes';
    const SETTINGS = 'settings';
    const ENDPOINTS = 'endpoints';
    const ALGORITHMS = 'algorithms';
    const RELAY_STATE = 'relayState';
    const CREDENTIALS = 'credentials';



    /**
     * Get the type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->getProperty(self::TYPE);
    }

    /**
    * Set the type.
    *
    * @param mixed $type The value to set.
    * @return self
    */
    public function setType($type)
    {
        $this->setProperty(
            self::TYPE,
            $type
        );

        return $this;
    }

    /**
     * Get the issuer.
     *
     * @return \Okta\IdentityProviders\ProtocolEndpoint
     */
    public function getIssuer(array $options = []): \Okta\IdentityProviders\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::ISSUER,
            \Okta\IdentityProviders\ProtocolEndpoint::class,
            $options
        );
    }


    /**
     * Set the issuer.
     *
     * @param \Okta\IdentityProviders\ProtocolEndpoint $issuer The ProtocolEndpoint instance.
     * @return self
     */
    public function setIssuer(\Okta\IdentityProviders\ProtocolEndpoint $issuer)
    {
        $this->setResourceProperty(
            self::ISSUER,
            $issuer
        );

        return $this;
    }

    /**
     * Get the scopes.
     *
     * @return array
     */
    public function getScopes()
    {
        return $this->getProperty(self::SCOPES);
    }

    /**
    * Set the scopes.
    *
    * @param mixed $scopes The value to set.
    * @return self
    */
    public function setScopes($scopes)
    {
        $this->setProperty(
            self::SCOPES,
            $scopes
        );

        return $this;
    }

    /**
     * Get the settings.
     *
     * @return \Okta\IdentityProviders\ProtocolSettings
     */
    public function getSettings(array $options = []): \Okta\IdentityProviders\ProtocolSettings
    {
        return $this->getResourceProperty(
            self::SETTINGS,
            \Okta\IdentityProviders\ProtocolSettings::class,
            $options
        );
    }


    /**
     * Set the settings.
     *
     * @param \Okta\IdentityProviders\ProtocolSettings $settings The ProtocolSettings instance.
     * @return self
     */
    public function setSettings(\Okta\IdentityProviders\ProtocolSettings $settings)
    {
        $this->setResourceProperty(
            self::SETTINGS,
            $settings
        );

        return $this;
    }

    /**
     * Get the endpoints.
     *
     * @return \Okta\IdentityProviders\ProtocolEndpoints
     */
    public function getEndpoints(array $options = []): \Okta\IdentityProviders\ProtocolEndpoints
    {
        return $this->getResourceProperty(
            self::ENDPOINTS,
            \Okta\IdentityProviders\ProtocolEndpoints::class,
            $options
        );
    }


    /**
     * Set the endpoints.
     *
     * @param \Okta\IdentityProviders\ProtocolEndpoints $endpoints The ProtocolEndpoints instance.
     * @return self
     */
    public function setEndpoints(\Okta\IdentityProviders\ProtocolEndpoints $endpoints)
    {
        $this->setResourceProperty(
            self::ENDPOINTS,
            $endpoints
        );

        return $this;
    }

    /**
     * Get the algorithms.
     *
     * @return \Okta\IdentityProviders\ProtocolAlgorithms
     */
    public function getAlgorithms(array $options = []): \Okta\IdentityProviders\ProtocolAlgorithms
    {
        return $this->getResourceProperty(
            self::ALGORITHMS,
            \Okta\IdentityProviders\ProtocolAlgorithms::class,
            $options
        );
    }


    /**
     * Set the algorithms.
     *
     * @param \Okta\IdentityProviders\ProtocolAlgorithms $algorithms The ProtocolAlgorithms instance.
     * @return self
     */
    public function setAlgorithms(\Okta\IdentityProviders\ProtocolAlgorithms $algorithms)
    {
        $this->setResourceProperty(
            self::ALGORITHMS,
            $algorithms
        );

        return $this;
    }

    /**
     * Get the relayState.
     *
     * @return \Okta\IdentityProviders\ProtocolRelayState
     */
    public function getRelayState(array $options = []): \Okta\IdentityProviders\ProtocolRelayState
    {
        return $this->getResourceProperty(
            self::RELAY_STATE,
            \Okta\IdentityProviders\ProtocolRelayState::class,
            $options
        );
    }


    /**
     * Set the relayState.
     *
     * @param \Okta\IdentityProviders\ProtocolRelayState $relayState The ProtocolRelayState instance.
     * @return self
     */
    public function setRelayState(\Okta\IdentityProviders\ProtocolRelayState $relayState)
    {
        $this->setResourceProperty(
            self::RELAY_STATE,
            $relayState
        );

        return $this;
    }

    /**
     * Get the credentials.
     *
     * @return \Okta\IdentityProviders\IdentityProviderCredentials
     */
    public function getCredentials(array $options = []): \Okta\IdentityProviders\IdentityProviderCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\IdentityProviders\IdentityProviderCredentials::class,
            $options
        );
    }


    /**
     * Set the credentials.
     *
     * @param \Okta\IdentityProviders\IdentityProviderCredentials $credentials The IdentityProviderCredentials instance.
     * @return self
     */
    public function setCredentials(\Okta\IdentityProviders\IdentityProviderCredentials $credentials)
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );

        return $this;
    }
}
