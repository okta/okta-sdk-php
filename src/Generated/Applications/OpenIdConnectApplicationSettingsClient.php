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

namespace Okta\Generated\Applications;


class OpenIdConnectApplicationSettingsClient extends \Okta\Resource\AbstractResource
{
    const TOS_URI = 'tos_uri';
    const LOGO_URI = 'logo_uri';
    const CLIENT_URI = 'client_uri';
    const POLICY_URI = 'policy_uri';
    const GRANT_TYPES = 'grant_types';
    const REDIRECT_URIS = 'redirect_uris';
    const CONSENT_METHOD = 'consent_method';
    const RESPONSE_TYPES = 'response_types';
    const APPLICATION_TYPE = 'application_type';



    /**
     * Get the tos_uri.
     *
     * @return string
     */
    public function getTosUri()
    {
        return $this->getProperty(self::TOS_URI);
    }

    /**
    * Set the tos_uri.
    *
    * @param mixed $tos_uri The value to set.
    * @return self
    */
    public function setTosUri($tos_uri)
    {
        $this->setProperty(
            self::TOS_URI,
            $tos_uri
        );

        return $this;
    }

    /**
     * Get the logo_uri.
     *
     * @return string
     */
    public function getLogoUri()
    {
        return $this->getProperty(self::LOGO_URI);
    }

    /**
    * Set the logo_uri.
    *
    * @param mixed $logo_uri The value to set.
    * @return self
    */
    public function setLogoUri($logo_uri)
    {
        $this->setProperty(
            self::LOGO_URI,
            $logo_uri
        );

        return $this;
    }

    /**
     * Get the client_uri.
     *
     * @return string
     */
    public function getClientUri()
    {
        return $this->getProperty(self::CLIENT_URI);
    }

    /**
    * Set the client_uri.
    *
    * @param mixed $client_uri The value to set.
    * @return self
    */
    public function setClientUri($client_uri)
    {
        $this->setProperty(
            self::CLIENT_URI,
            $client_uri
        );

        return $this;
    }

    /**
     * Get the policy_uri.
     *
     * @return string
     */
    public function getPolicyUri()
    {
        return $this->getProperty(self::POLICY_URI);
    }

    /**
    * Set the policy_uri.
    *
    * @param mixed $policy_uri The value to set.
    * @return self
    */
    public function setPolicyUri($policy_uri)
    {
        $this->setProperty(
            self::POLICY_URI,
            $policy_uri
        );

        return $this;
    }

    /**
     * Get the grant_types.
     *
     * @return array
     */
    public function getGrantTypes()
    {
        return $this->getProperty(self::GRANT_TYPES);
    }

    /**
    * Set the grant_types.
    *
    * @param mixed $grant_types The value to set.
    * @return self
    */
    public function setGrantTypes($grant_types)
    {
        $this->setProperty(
            self::GRANT_TYPES,
            $grant_types
        );

        return $this;
    }

    /**
     * Get the redirect_uris.
     *
     * @return array
     */
    public function getRedirectUris()
    {
        return $this->getProperty(self::REDIRECT_URIS);
    }

    /**
    * Set the redirect_uris.
    *
    * @param mixed $redirect_uris The value to set.
    * @return self
    */
    public function setRedirectUris($redirect_uris)
    {
        $this->setProperty(
            self::REDIRECT_URIS,
            $redirect_uris
        );

        return $this;
    }

    /**
     * Get the consent_method.
     *
     * @return string
     */
    public function getConsentMethod()
    {
        return $this->getProperty(self::CONSENT_METHOD);
    }

    /**
    * Set the consent_method.
    *
    * @param mixed $consent_method The value to set.
    * @return self
    */
    public function setConsentMethod($consent_method)
    {
        $this->setProperty(
            self::CONSENT_METHOD,
            $consent_method
        );

        return $this;
    }

    /**
     * Get the response_types.
     *
     * @return array
     */
    public function getResponseTypes()
    {
        return $this->getProperty(self::RESPONSE_TYPES);
    }

    /**
    * Set the response_types.
    *
    * @param mixed $response_types The value to set.
    * @return self
    */
    public function setResponseTypes($response_types)
    {
        $this->setProperty(
            self::RESPONSE_TYPES,
            $response_types
        );

        return $this;
    }

    /**
     * Get the application_type.
     *
     * @return string
     */
    public function getApplicationType()
    {
        return $this->getProperty(self::APPLICATION_TYPE);
    }

    /**
    * Set the application_type.
    *
    * @param mixed $application_type The value to set.
    * @return self
    */
    public function setApplicationType($application_type)
    {
        $this->setProperty(
            self::APPLICATION_TYPE,
            $application_type
        );

        return $this;
    }
}
