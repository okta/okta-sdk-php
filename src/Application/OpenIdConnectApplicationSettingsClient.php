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

namespace Okta\Application;

class OpenIdConnectApplicationSettingsClient extends \Okta\Resource\AbstractResource
{
    const TOS_URI = 'tos_uri';
    const LOGO_URI = 'logo_uri';
    const CLIENT_URI = 'client_uri';
    const POLICY_URI = 'policy_uri';
    const GRANT_TYPES = 'grant_types';
    const ISSUER_MODE = 'issuer_mode';
    const REDIRECT_URIS = 'redirect_uris';
    const CONSENT_METHOD = 'consent_method';
    const RESPONSE_TYPES = 'response_types';
    const APPLICATION_TYPE = 'application_type';
    const INITIATE_LOGIN_URI = 'initiate_login_uri';
    const POST_LOGOUT_REDIRECT_URIS = 'post_logout_redirect_uris';


    /**
     * Set the TosUri.
     *
     * @param mixed $tos_uri The tos_uri to set.
     * @return self
     */
    function setTosUri($tos_uri) : OpenIdConnectApplicationSettingsClient
    {
        $this->setProperty(
            self::TOS_URI,
            $tos_uri
        );
    
        return $this;
    }
    
    /**
     * Set the LogoUri.
     *
     * @param mixed $logo_uri The logo_uri to set.
     * @return self
     */
    function setLogoUri($logo_uri) : OpenIdConnectApplicationSettingsClient
    {
        $this->setProperty(
            self::LOGO_URI,
            $logo_uri
        );
    
        return $this;
    }
    
    /**
     * Set the ClientUri.
     *
     * @param mixed $client_uri The client_uri to set.
     * @return self
     */
    function setClientUri($client_uri) : OpenIdConnectApplicationSettingsClient
    {
        $this->setProperty(
            self::CLIENT_URI,
            $client_uri
        );
    
        return $this;
    }
    
    /**
     * Set the PolicyUri.
     *
     * @param mixed $policy_uri The policy_uri to set.
     * @return self
     */
    function setPolicyUri($policy_uri) : OpenIdConnectApplicationSettingsClient
    {
        $this->setProperty(
            self::POLICY_URI,
            $policy_uri
        );
    
        return $this;
    }
    
    /**
     * Set the GrantTypes.
     *
     * @param mixed $grant_types The grant_types to set.
     * @return self
     */
    function setGrantTypes($grant_types) : OpenIdConnectApplicationSettingsClient
    {
        $this->setProperty(
            self::GRANT_TYPES,
            $grant_types
        );
    
        return $this;
    }
    
    /**
     * Set the IssuerMode.
     *
     * @return self
     */
    function setIssuerMode(\Okta\Application\OpenIdConnectApplicationIssuerMode $issuer_mode) : OpenIdConnectApplicationSettingsClient
    {
        $this->setEnumProperty(
            self::ISSUER_MODE,
            $issuer_mode
        );
    
        return $this;
    }

    /**
     * Set the RedirectUris.
     *
     * @param mixed $redirect_uris The redirect_uris to set.
     * @return self
     */
    function setRedirectUris($redirect_uris) : OpenIdConnectApplicationSettingsClient
    {
        $this->setProperty(
            self::REDIRECT_URIS,
            $redirect_uris
        );
    
        return $this;
    }
    
    /**
     * Set the ConsentMethod.
     *
     * @return self
     */
    function setConsentMethod(\Okta\Application\OpenIdConnectApplicationConsentMethod $consent_method) : OpenIdConnectApplicationSettingsClient
    {
        $this->setEnumProperty(
            self::CONSENT_METHOD,
            $consent_method
        );
    
        return $this;
    }

    /**
     * Set the ResponseTypes.
     *
     * @param mixed $response_types The response_types to set.
     * @return self
     */
    function setResponseTypes($response_types) : OpenIdConnectApplicationSettingsClient
    {
        $this->setProperty(
            self::RESPONSE_TYPES,
            $response_types
        );
    
        return $this;
    }
    
    /**
     * Set the ApplicationType.
     *
     * @return self
     */
    function setApplicationType(\Okta\Application\OpenIdConnectApplicationType $application_type) : OpenIdConnectApplicationSettingsClient
    {
        $this->setEnumProperty(
            self::APPLICATION_TYPE,
            $application_type
        );
    
        return $this;
    }

    /**
     * Set the InitiateLoginUri.
     *
     * @param mixed $initiate_login_uri The initiate_login_uri to set.
     * @return self
     */
    function setInitiateLoginUri($initiate_login_uri) : OpenIdConnectApplicationSettingsClient
    {
        $this->setProperty(
            self::INITIATE_LOGIN_URI,
            $initiate_login_uri
        );
    
        return $this;
    }
    
    /**
     * Set the PostLogoutRedirectUris.
     *
     * @param mixed $post_logout_redirect_uris The post_logout_redirect_uris to set.
     * @return self
     */
    function setPostLogoutRedirectUris($post_logout_redirect_uris) : OpenIdConnectApplicationSettingsClient
    {
        $this->setProperty(
            self::POST_LOGOUT_REDIRECT_URIS,
            $post_logout_redirect_uris
        );
    
        return $this;
    }
    
    /**
     * Get the TosUri.
     *
     * @param mixed $tos_uri The tos_uri to set.
     * @return string
     */
    function getTosUri() : string
    {
        return $this->getProperty(
            self::TOS_URI,
        );
    }
    
    /**
     * Get the LogoUri.
     *
     * @param mixed $logo_uri The logo_uri to set.
     * @return string
     */
    function getLogoUri() : string
    {
        return $this->getProperty(
            self::LOGO_URI,
        );
    }
    
    /**
     * Get the ClientUri.
     *
     * @param mixed $client_uri The client_uri to set.
     * @return string
     */
    function getClientUri() : string
    {
        return $this->getProperty(
            self::CLIENT_URI,
        );
    }
    
    /**
     * Get the PolicyUri.
     *
     * @param mixed $policy_uri The policy_uri to set.
     * @return string
     */
    function getPolicyUri() : string
    {
        return $this->getProperty(
            self::POLICY_URI,
        );
    }
    
    /**
     * Get the GrantTypes.
     *
     * @param mixed $grant_types The grant_types to set.
     * @return array
     */
    function getGrantTypes() : array
    {
        return $this->getProperty(
            self::GRANT_TYPES,
        );
    }
    
    /**
     * Get the IssuerMode.
     *
     * @return \Okta\Application\OpenIdConnectApplicationIssuerMode
     */
    function getIssuerMode() : \Okta\Application\OpenIdConnectApplicationIssuerMode
    {
        return $this->getEnumProperty(
            self::ISSUER_MODE,
            \Okta\Application\OpenIdConnectApplicationIssuerMode::class,
        );
    }

    /**
     * Get the RedirectUris.
     *
     * @param mixed $redirect_uris The redirect_uris to set.
     * @return array
     */
    function getRedirectUris() : array
    {
        return $this->getProperty(
            self::REDIRECT_URIS,
        );
    }
    
    /**
     * Get the ConsentMethod.
     *
     * @return \Okta\Application\OpenIdConnectApplicationConsentMethod
     */
    function getConsentMethod() : \Okta\Application\OpenIdConnectApplicationConsentMethod
    {
        return $this->getEnumProperty(
            self::CONSENT_METHOD,
            \Okta\Application\OpenIdConnectApplicationConsentMethod::class,
        );
    }

    /**
     * Get the ResponseTypes.
     *
     * @param mixed $response_types The response_types to set.
     * @return array
     */
    function getResponseTypes() : array
    {
        return $this->getProperty(
            self::RESPONSE_TYPES,
        );
    }
    
    /**
     * Get the ApplicationType.
     *
     * @return \Okta\Application\OpenIdConnectApplicationType
     */
    function getApplicationType() : \Okta\Application\OpenIdConnectApplicationType
    {
        return $this->getEnumProperty(
            self::APPLICATION_TYPE,
            \Okta\Application\OpenIdConnectApplicationType::class,
        );
    }

    /**
     * Get the InitiateLoginUri.
     *
     * @param mixed $initiate_login_uri The initiate_login_uri to set.
     * @return string
     */
    function getInitiateLoginUri() : string
    {
        return $this->getProperty(
            self::INITIATE_LOGIN_URI,
        );
    }
    
    /**
     * Get the PostLogoutRedirectUris.
     *
     * @param mixed $post_logout_redirect_uris The post_logout_redirect_uris to set.
     * @return array
     */
    function getPostLogoutRedirectUris() : array
    {
        return $this->getProperty(
            self::POST_LOGOUT_REDIRECT_URIS,
        );
    }
    

}