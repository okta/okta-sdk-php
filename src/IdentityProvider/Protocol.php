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
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : Protocol
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Issuer.
     *
     * @param mixed $issuer The issuer to set.
     * @return self
     */
    function setIssuer(\Okta\IdentityProvider\ProtocolEndpoint $issuer) : Protocol
    {
        $this->setResourceProperty(
            self::ISSUER,
            $issuer
        );
    
        return $this;
    }

    /**
     * Set the Scopes.
     *
     * @param mixed $scopes The scopes to set.
     * @return self
     */
    function setScopes($scopes) : Protocol
    {
        $this->setProperty(
            self::SCOPES,
            $scopes
        );
    
        return $this;
    }
    
    /**
     * Set the Settings.
     *
     * @param mixed $settings The settings to set.
     * @return self
     */
    function setSettings(\Okta\IdentityProvider\ProtocolSettings $settings) : Protocol
    {
        $this->setResourceProperty(
            self::SETTINGS,
            $settings
        );
    
        return $this;
    }

    /**
     * Set the Endpoints.
     *
     * @param mixed $endpoints The endpoints to set.
     * @return self
     */
    function setEndpoints(\Okta\IdentityProvider\ProtocolEndpoints $endpoints) : Protocol
    {
        $this->setResourceProperty(
            self::ENDPOINTS,
            $endpoints
        );
    
        return $this;
    }

    /**
     * Set the Algorithms.
     *
     * @param mixed $algorithms The algorithms to set.
     * @return self
     */
    function setAlgorithms(\Okta\IdentityProvider\ProtocolAlgorithms $algorithms) : Protocol
    {
        $this->setResourceProperty(
            self::ALGORITHMS,
            $algorithms
        );
    
        return $this;
    }

    /**
     * Set the RelayState.
     *
     * @param mixed $relayState The relayState to set.
     * @return self
     */
    function setRelayState(\Okta\IdentityProvider\ProtocolRelayState $relayState) : Protocol
    {
        $this->setResourceProperty(
            self::RELAY_STATE,
            $relayState
        );
    
        return $this;
    }

    /**
     * Set the Credentials.
     *
     * @param mixed $credentials The credentials to set.
     * @return self
     */
    function setCredentials(\Okta\IdentityProvider\IdentityProviderCredentials $credentials) : Protocol
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );
    
        return $this;
    }

    /**
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return string
     */
    function getType() : string
    {
        return $this->getProperty(
            self::TYPE
        );
    }
    
    /**
     * Get the Issuer.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolEndpoint
     */
    function getIssuer(array $options = []) : \Okta\IdentityProvider\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::ISSUER,
            \Okta\IdentityProvider\ProtocolEndpoint::class,
            $options
        );
    }

    /**
     * Get the Scopes.
     *
     * @param mixed $scopes The scopes to set.
     * @return array
     */
    function getScopes() : array
    {
        return $this->getProperty(
            self::SCOPES
        );
    }
    
    /**
     * Get the Settings.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolSettings
     */
    function getSettings(array $options = []) : \Okta\IdentityProvider\ProtocolSettings
    {
        return $this->getResourceProperty(
            self::SETTINGS,
            \Okta\IdentityProvider\ProtocolSettings::class,
            $options
        );
    }

    /**
     * Get the Endpoints.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolEndpoints
     */
    function getEndpoints(array $options = []) : \Okta\IdentityProvider\ProtocolEndpoints
    {
        return $this->getResourceProperty(
            self::ENDPOINTS,
            \Okta\IdentityProvider\ProtocolEndpoints::class,
            $options
        );
    }

    /**
     * Get the Algorithms.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolAlgorithms
     */
    function getAlgorithms(array $options = []) : \Okta\IdentityProvider\ProtocolAlgorithms
    {
        return $this->getResourceProperty(
            self::ALGORITHMS,
            \Okta\IdentityProvider\ProtocolAlgorithms::class,
            $options
        );
    }

    /**
     * Get the RelayState.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolRelayState
     */
    function getRelayState(array $options = []) : \Okta\IdentityProvider\ProtocolRelayState
    {
        return $this->getResourceProperty(
            self::RELAY_STATE,
            \Okta\IdentityProvider\ProtocolRelayState::class,
            $options
        );
    }

    /**
     * Get the Credentials.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\IdentityProviderCredentials
     */
    function getCredentials(array $options = []) : \Okta\IdentityProvider\IdentityProviderCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\IdentityProvider\IdentityProviderCredentials::class,
            $options
        );
    }


}