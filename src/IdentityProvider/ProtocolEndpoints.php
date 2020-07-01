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

class ProtocolEndpoints extends \Okta\Resource\AbstractResource
{
    const ACS = 'acs';
    const SLO = 'slo';
    const SSO = 'sso';
    const JWKS = 'jwks';
    const TOKEN = 'token';
    const METADATA = 'metadata';
    const USER_INFO = 'userInfo';
    const AUTHORIZATION = 'authorization';

    /**
     * Set the Acs.
     *
     * @param mixed $acs The acs to set.
     * @return self
     */
    function setAcs(\Okta\IdentityProvider\ProtocolEndpoint $acs) : ProtocolEndpoints
    {
        $this->setResourceProperty(
            self::ACS,
            $acs
        );
    
        return $this;
    }

    /**
     * Set the Slo.
     *
     * @param mixed $slo The slo to set.
     * @return self
     */
    function setSlo(\Okta\IdentityProvider\ProtocolEndpoint $slo) : ProtocolEndpoints
    {
        $this->setResourceProperty(
            self::SLO,
            $slo
        );
    
        return $this;
    }

    /**
     * Set the Sso.
     *
     * @param mixed $sso The sso to set.
     * @return self
     */
    function setSso(\Okta\IdentityProvider\ProtocolEndpoint $sso) : ProtocolEndpoints
    {
        $this->setResourceProperty(
            self::SSO,
            $sso
        );
    
        return $this;
    }

    /**
     * Set the Jwks.
     *
     * @param mixed $jwks The jwks to set.
     * @return self
     */
    function setJwks(\Okta\IdentityProvider\ProtocolEndpoint $jwks) : ProtocolEndpoints
    {
        $this->setResourceProperty(
            self::JWKS,
            $jwks
        );
    
        return $this;
    }

    /**
     * Set the Token.
     *
     * @param mixed $token The token to set.
     * @return self
     */
    function setToken(\Okta\IdentityProvider\ProtocolEndpoint $token) : ProtocolEndpoints
    {
        $this->setResourceProperty(
            self::TOKEN,
            $token
        );
    
        return $this;
    }

    /**
     * Set the Metadata.
     *
     * @param mixed $metadata The metadata to set.
     * @return self
     */
    function setMetadata(\Okta\IdentityProvider\ProtocolEndpoint $metadata) : ProtocolEndpoints
    {
        $this->setResourceProperty(
            self::METADATA,
            $metadata
        );
    
        return $this;
    }

    /**
     * Set the UserInfo.
     *
     * @param mixed $userInfo The userInfo to set.
     * @return self
     */
    function setUserInfo(\Okta\IdentityProvider\ProtocolEndpoint $userInfo) : ProtocolEndpoints
    {
        $this->setResourceProperty(
            self::USER_INFO,
            $userInfo
        );
    
        return $this;
    }

    /**
     * Set the Authorization.
     *
     * @param mixed $authorization The authorization to set.
     * @return self
     */
    function setAuthorization(\Okta\IdentityProvider\ProtocolEndpoint $authorization) : ProtocolEndpoints
    {
        $this->setResourceProperty(
            self::AUTHORIZATION,
            $authorization
        );
    
        return $this;
    }

    /**
     * Get the Acs.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolEndpoint
     */
    function getAcs(array $options = []) : \Okta\IdentityProvider\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::ACS,
            \Okta\IdentityProvider\ProtocolEndpoint::class,
            $options
        );
    }

    /**
     * Get the Slo.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolEndpoint
     */
    function getSlo(array $options = []) : \Okta\IdentityProvider\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::SLO,
            \Okta\IdentityProvider\ProtocolEndpoint::class,
            $options
        );
    }

    /**
     * Get the Sso.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolEndpoint
     */
    function getSso(array $options = []) : \Okta\IdentityProvider\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::SSO,
            \Okta\IdentityProvider\ProtocolEndpoint::class,
            $options
        );
    }

    /**
     * Get the Jwks.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolEndpoint
     */
    function getJwks(array $options = []) : \Okta\IdentityProvider\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::JWKS,
            \Okta\IdentityProvider\ProtocolEndpoint::class,
            $options
        );
    }

    /**
     * Get the Token.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolEndpoint
     */
    function getToken(array $options = []) : \Okta\IdentityProvider\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::TOKEN,
            \Okta\IdentityProvider\ProtocolEndpoint::class,
            $options
        );
    }

    /**
     * Get the Metadata.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolEndpoint
     */
    function getMetadata(array $options = []) : \Okta\IdentityProvider\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::METADATA,
            \Okta\IdentityProvider\ProtocolEndpoint::class,
            $options
        );
    }

    /**
     * Get the UserInfo.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolEndpoint
     */
    function getUserInfo(array $options = []) : \Okta\IdentityProvider\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::USER_INFO,
            \Okta\IdentityProvider\ProtocolEndpoint::class,
            $options
        );
    }

    /**
     * Get the Authorization.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolEndpoint
     */
    function getAuthorization(array $options = []) : \Okta\IdentityProvider\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::AUTHORIZATION,
            \Okta\IdentityProvider\ProtocolEndpoint::class,
            $options
        );
    }


}