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
     * Get the acs.
     *
     * @return \Okta\IdentityProviders\ProtocolEndpoint
     */
    public function getAcs(array $options = []): \Okta\IdentityProviders\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::ACS,
            \Okta\IdentityProviders\ProtocolEndpoint::class,
            $options
        );
    }


    /**
     * Set the acs.
     *
     * @param \Okta\IdentityProviders\ProtocolEndpoint $acs The ProtocolEndpoint instance.
     * @return self
     */
    public function setAcs(\Okta\IdentityProviders\ProtocolEndpoint $acs)
    {
        $this->setResourceProperty(
            self::ACS,
            $acs
        );

        return $this;
    }

    /**
     * Get the slo.
     *
     * @return \Okta\IdentityProviders\ProtocolEndpoint
     */
    public function getSlo(array $options = []): \Okta\IdentityProviders\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::SLO,
            \Okta\IdentityProviders\ProtocolEndpoint::class,
            $options
        );
    }


    /**
     * Set the slo.
     *
     * @param \Okta\IdentityProviders\ProtocolEndpoint $slo The ProtocolEndpoint instance.
     * @return self
     */
    public function setSlo(\Okta\IdentityProviders\ProtocolEndpoint $slo)
    {
        $this->setResourceProperty(
            self::SLO,
            $slo
        );

        return $this;
    }

    /**
     * Get the sso.
     *
     * @return \Okta\IdentityProviders\ProtocolEndpoint
     */
    public function getSso(array $options = []): \Okta\IdentityProviders\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::SSO,
            \Okta\IdentityProviders\ProtocolEndpoint::class,
            $options
        );
    }


    /**
     * Set the sso.
     *
     * @param \Okta\IdentityProviders\ProtocolEndpoint $sso The ProtocolEndpoint instance.
     * @return self
     */
    public function setSso(\Okta\IdentityProviders\ProtocolEndpoint $sso)
    {
        $this->setResourceProperty(
            self::SSO,
            $sso
        );

        return $this;
    }

    /**
     * Get the jwks.
     *
     * @return \Okta\IdentityProviders\ProtocolEndpoint
     */
    public function getJwks(array $options = []): \Okta\IdentityProviders\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::JWKS,
            \Okta\IdentityProviders\ProtocolEndpoint::class,
            $options
        );
    }


    /**
     * Set the jwks.
     *
     * @param \Okta\IdentityProviders\ProtocolEndpoint $jwks The ProtocolEndpoint instance.
     * @return self
     */
    public function setJwks(\Okta\IdentityProviders\ProtocolEndpoint $jwks)
    {
        $this->setResourceProperty(
            self::JWKS,
            $jwks
        );

        return $this;
    }

    /**
     * Get the token.
     *
     * @return \Okta\IdentityProviders\ProtocolEndpoint
     */
    public function getToken(array $options = []): \Okta\IdentityProviders\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::TOKEN,
            \Okta\IdentityProviders\ProtocolEndpoint::class,
            $options
        );
    }


    /**
     * Set the token.
     *
     * @param \Okta\IdentityProviders\ProtocolEndpoint $token The ProtocolEndpoint instance.
     * @return self
     */
    public function setToken(\Okta\IdentityProviders\ProtocolEndpoint $token)
    {
        $this->setResourceProperty(
            self::TOKEN,
            $token
        );

        return $this;
    }

    /**
     * Get the metadata.
     *
     * @return \Okta\IdentityProviders\ProtocolEndpoint
     */
    public function getMetadata(array $options = []): \Okta\IdentityProviders\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::METADATA,
            \Okta\IdentityProviders\ProtocolEndpoint::class,
            $options
        );
    }


    /**
     * Set the metadata.
     *
     * @param \Okta\IdentityProviders\ProtocolEndpoint $metadata The ProtocolEndpoint instance.
     * @return self
     */
    public function setMetadata(\Okta\IdentityProviders\ProtocolEndpoint $metadata)
    {
        $this->setResourceProperty(
            self::METADATA,
            $metadata
        );

        return $this;
    }

    /**
     * Get the userInfo.
     *
     * @return \Okta\IdentityProviders\ProtocolEndpoint
     */
    public function getUserInfo(array $options = []): \Okta\IdentityProviders\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::USER_INFO,
            \Okta\IdentityProviders\ProtocolEndpoint::class,
            $options
        );
    }


    /**
     * Set the userInfo.
     *
     * @param \Okta\IdentityProviders\ProtocolEndpoint $userInfo The ProtocolEndpoint instance.
     * @return self
     */
    public function setUserInfo(\Okta\IdentityProviders\ProtocolEndpoint $userInfo)
    {
        $this->setResourceProperty(
            self::USER_INFO,
            $userInfo
        );

        return $this;
    }

    /**
     * Get the authorization.
     *
     * @return \Okta\IdentityProviders\ProtocolEndpoint
     */
    public function getAuthorization(array $options = []): \Okta\IdentityProviders\ProtocolEndpoint
    {
        return $this->getResourceProperty(
            self::AUTHORIZATION,
            \Okta\IdentityProviders\ProtocolEndpoint::class,
            $options
        );
    }


    /**
     * Set the authorization.
     *
     * @param \Okta\IdentityProviders\ProtocolEndpoint $authorization The ProtocolEndpoint instance.
     * @return self
     */
    public function setAuthorization(\Okta\IdentityProviders\ProtocolEndpoint $authorization)
    {
        $this->setResourceProperty(
            self::AUTHORIZATION,
            $authorization
        );

        return $this;
    }
}
