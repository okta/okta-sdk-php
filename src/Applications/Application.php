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

namespace Okta\Applications;

class Application extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const LABEL = 'label';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
    const PROFILE = 'profile';
    const FEATURES = 'features';
    const SETTINGS = 'settings';
    const EMBEDDED = '_embedded';
    const LICENSING = 'licensing';
    const SIGN_ON_MODE = 'signOnMode';
    const VISIBILITY = 'visibility';
    const CREDENTIALS = 'credentials';
    const LAST_UPDATED = 'lastUpdated';
    const ACCESSIBILITY = 'accessibility';


    public function get($query)
    {
        $application = \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\Applications\Application::class,
                        "/apps"
                    );
        return $application->convertFromGenericApplication();
    }

    public function save()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->saveResource(
                    "/apps",
                    $this,
                    \Okta\Applications\Application::class
                );
    }

    public function delete()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    "/apps",
                    $this
                );
    }
        
    /**
     * Get the id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->getProperty(self::NAME);
    }

    /**
     * Get the label.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->getProperty(self::LABEL);
    }

    /**
    * Set the label.
    *
    * @param mixed $label The value to set.
    * @return self
    */
    public function setLabel($label)
    {
        $this->setProperty(
            self::LABEL,
            $label
        );

        return $this;
    }

    /**
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }

    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
     * Get the created.
     *
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
    }

    /**
     * Get the profile.
     *
     * @return \stdClass
     */
    public function getProfile()
    {
        return $this->getProperty(self::PROFILE);
    }

    /**
    * Set the profile.
    *
    * @param mixed $profile The value to set.
    * @return self
    */
    public function setProfile($profile)
    {
        $this->setProperty(
            self::PROFILE,
            $profile
        );

        return $this;
    }

    /**
     * Get the features.
     *
     * @return array
     */
    public function getFeatures()
    {
        return $this->getProperty(self::FEATURES);
    }

    /**
    * Set the features.
    *
    * @param mixed $features The value to set.
    * @return self
    */
    public function setFeatures($features)
    {
        $this->setProperty(
            self::FEATURES,
            $features
        );

        return $this;
    }

    /**
     * Get the settings.
     *
     * @return \Okta\Applications\ApplicationSettings
     */
    public function getSettings(array $options = []): \Okta\Applications\ApplicationSettings
    {
        return $this->getResourceProperty(
            self::SETTINGS,
            \Okta\Applications\ApplicationSettings::class,
            $options
        );
    }


    /**
     * Set the settings.
     *
     * @param \Okta\Applications\ApplicationSettings $settings The ApplicationSettings instance.
     * @return self
     */
    public function setSettings(\Okta\Applications\ApplicationSettings $settings)
    {
        $this->setResourceProperty(
            self::SETTINGS,
            $settings
        );

        return $this;
    }

    /**
     * Get the _embedded.
     *
     * @return \stdClass
     */
    public function getEmbedded()
    {
        return $this->getProperty(self::EMBEDDED);
    }

    /**
     * Get the licensing.
     *
     * @return \Okta\Applications\ApplicationLicensing
     */
    public function getLicensing(array $options = []): \Okta\Applications\ApplicationLicensing
    {
        return $this->getResourceProperty(
            self::LICENSING,
            \Okta\Applications\ApplicationLicensing::class,
            $options
        );
    }


    /**
     * Set the licensing.
     *
     * @param \Okta\Applications\ApplicationLicensing $licensing The ApplicationLicensing instance.
     * @return self
     */
    public function setLicensing(\Okta\Applications\ApplicationLicensing $licensing)
    {
        $this->setResourceProperty(
            self::LICENSING,
            $licensing
        );

        return $this;
    }

    /**
     * Get the signOnMode.
     *
     * @return string
     */
    public function getSignOnMode()
    {
        return $this->getProperty(self::SIGN_ON_MODE);
    }

    /**
    * Set the signOnMode.
    *
    * @param mixed $signOnMode The value to set.
    * @return self
    */
    public function setSignOnMode($signOnMode)
    {
        $this->setProperty(
            self::SIGN_ON_MODE,
            $signOnMode
        );

        return $this;
    }

    /**
     * Get the visibility.
     *
     * @return \Okta\Applications\ApplicationVisibility
     */
    public function getVisibility(array $options = []): \Okta\Applications\ApplicationVisibility
    {
        return $this->getResourceProperty(
            self::VISIBILITY,
            \Okta\Applications\ApplicationVisibility::class,
            $options
        );
    }


    /**
     * Set the visibility.
     *
     * @param \Okta\Applications\ApplicationVisibility $visibility The ApplicationVisibility instance.
     * @return self
     */
    public function setVisibility(\Okta\Applications\ApplicationVisibility $visibility)
    {
        $this->setResourceProperty(
            self::VISIBILITY,
            $visibility
        );

        return $this;
    }

    /**
     * Get the credentials.
     *
     * @return \Okta\Applications\ApplicationCredentials
     */
    public function getCredentials(array $options = []): \Okta\Applications\ApplicationCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\Applications\ApplicationCredentials::class,
            $options
        );
    }


    /**
     * Set the credentials.
     *
     * @param \Okta\Applications\ApplicationCredentials $credentials The ApplicationCredentials instance.
     * @return self
     */
    public function setCredentials(\Okta\Applications\ApplicationCredentials $credentials)
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );

        return $this;
    }

    /**
     * Get the lastUpdated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }

    /**
     * Get the accessibility.
     *
     * @return \Okta\Applications\ApplicationAccessibility
     */
    public function getAccessibility(array $options = []): \Okta\Applications\ApplicationAccessibility
    {
        return $this->getResourceProperty(
            self::ACCESSIBILITY,
            \Okta\Applications\ApplicationAccessibility::class,
            $options
        );
    }


    /**
     * Set the accessibility.
     *
     * @param \Okta\Applications\ApplicationAccessibility $accessibility The ApplicationAccessibility instance.
     * @return self
     */
    public function setAccessibility(\Okta\Applications\ApplicationAccessibility $accessibility)
    {
        $this->setResourceProperty(
            self::ACCESSIBILITY,
            $accessibility
        );

        return $this;
    }


    /**
    * Activates an inactive application.
    *
    *
    * @return mixed|null
    */
    public function activate()
    {
        $uri = "/api/v1/apps/{$this->getId()}/lifecycle/activate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return $body;
    }


    /**
    * Deactivates an active application.
    *
    *
    * @return mixed|null
    */
    public function deactivate()
    {
        $uri = "/api/v1/apps/{$this->getId()}/lifecycle/deactivate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return $body;
    }


    /**
    * Get the AppUser object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Applications\Collection
    */
    public function getApplicationUsers(array $options = []): \Okta\Applications\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/apps/{$this->getId()}/users",
                    \Okta\Applications\AppUser::class,
                    \Okta\Applications\Collection::class,
                    $options
                );
    }


    /**
    * Assigns an user to an application with [credentials](#application-user-credentials-object) and an app-specific [profile](#application-user-profile-object). Profile mappings defined for the application are first applied before applying any profile properties specified in the request.
    *
    *
    * @return mixed|null
    */
    public function assignUserToApplication(AppUser $appUser)
    {
        $uri = "/api/v1/apps/{$this->getId()}/users";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $appUser);

        return new \Okta\Applications\AppUser(null, $body);
    }


    /**
    * Fetches a specific user assignment for application by &#x60;id&#x60;.
    *
    *
    * @return mixed|null
    */
    public function getApplicationUser($userId)
    {
        $uri = "/api/v1/apps/{$this->getId()}/users/{$userId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\Applications\AppUser(null, $body);
    }


    /**
    * Assigns a group to an application
    *
    *
    * @return mixed|null
    */
    public function createApplicationGroupAssignment($groupId, ApplicationGroupAssignment $applicationGroupAssignment)
    {
        $uri = "/api/v1/apps/{$this->getId()}/groups/{$groupId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri, $applicationGroupAssignment);

        return new \Okta\Applications\ApplicationGroupAssignment(null, $body);
    }


    /**
    * Fetches an application group assignment
    *
    *
    * @return mixed|null
    */
    public function getApplicationGroupAssignment($groupId)
    {
        $uri = "/api/v1/apps/{$this->getId()}/groups/{$groupId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\Applications\ApplicationGroupAssignment(null, $body);
    }


    /**
    * Clones a X.509 certificate for an application key credential from a source application to target application.
    *
    *
    * @return mixed|null
    */
    public function cloneApplicationKey($keyId)
    {
        $uri = "/api/v1/apps/{$this->getId()}/credentials/keys/{$keyId}/clone";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\Applications\JsonWebKey(null, $body);
    }


    /**
    * Gets a specific application key credential by kid
    *
    *
    * @return mixed|null
    */
    public function getApplicationKey($keyId)
    {
        $uri = "/api/v1/apps/{$this->getId()}/credentials/keys/{$keyId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\Applications\JsonWebKey(null, $body);
    }


    /**
    * Get the ApplicationGroupAssignment object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Applications\Collection
    */
    public function getGroupAssignments(array $options = []): \Okta\Applications\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/apps/{$this->getId()}/groups",
                    \Okta\Applications\ApplicationGroupAssignment::class,
                    \Okta\Applications\Collection::class,
                    $options
                );
    }


    /**
    * Get the JsonWebKey object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Applications\Collection
    */
    public function getKeys(array $options = []): \Okta\Applications\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/apps/{$this->getId()}/credentials/keys",
                    \Okta\Applications\JsonWebKey::class,
                    \Okta\Applications\Collection::class,
                    $options
                );
    }


    /**
    * Generates a new X.509 certificate for an application key credential
    *
    *
    * @return mixed|null
    */
    public function generateKey()
    {
        $uri = "/api/v1/apps/{$this->getId()}/credentials/keys/generate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\Applications\JsonWebKey(null, $body);
    }


    /**
    * Generates a new key pair and returns the Certificate Signing Request for it.
    *
    *
    * @return mixed|null
    */
    public function generateCsr(CsrMetadata $csrMetadata)
    {
        $uri = "/api/v1/apps/{$this->getId()}/credentials/csrs";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $csrMetadata);

        return new \Okta\Applications\Csr(null, $body);
    }


    /**
    *
    *
    *
    * @return mixed|null
    */
    public function getCsr($csrId)
    {
        $uri = "/api/v1/apps/{$this->getId()}/credentials/csrs/{$csrId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\Applications\Csr(null, $body);
    }


    /**
    *
    *
    *
    * @return mixed|null
    */
    public function revokeCsr($csrId)
    {
        $uri = "/api/v1/apps/{$this->getId()}/credentials/csrs/{$csrId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Get the Csr object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Applications\Collection
    */
    public function getCsrs(array $options = []): \Okta\Applications\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/apps/{$this->getId()}/credentials/csrs",
                    \Okta\Applications\Csr::class,
                    \Okta\Applications\Collection::class,
                    $options
                );
    }


    /**
    *
    *
    *
    * @return mixed|null
    */
    public function publishCerCert($csrId, string $string)
    {
        $uri = "/api/v1/apps/{$this->getId()}/credentials/csrs/{$csrId}/lifecycle/publish";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $string);

        return new \Okta\Applications\JsonWebKey(null, $body);
    }


    /**
    *
    *
    *
    * @return mixed|null
    */
    public function publishBinaryCerCert($csrId, string $string)
    {
        $uri = "/api/v1/apps/{$this->getId()}/credentials/csrs/{$csrId}/lifecycle/publish";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $string);

        return new \Okta\Applications\JsonWebKey(null, $body);
    }


    /**
    *
    *
    *
    * @return mixed|null
    */
    public function publishDerCert($csrId, string $string)
    {
        $uri = "/api/v1/apps/{$this->getId()}/credentials/csrs/{$csrId}/lifecycle/publish";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $string);

        return new \Okta\Applications\JsonWebKey(null, $body);
    }


    /**
    *
    *
    *
    * @return mixed|null
    */
    public function publishBinaryDerCert($csrId, string $string)
    {
        $uri = "/api/v1/apps/{$this->getId()}/credentials/csrs/{$csrId}/lifecycle/publish";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $string);

        return new \Okta\Applications\JsonWebKey(null, $body);
    }


    /**
    *
    *
    *
    * @return mixed|null
    */
    public function publishBinaryPemCert($csrId, string $string)
    {
        $uri = "/api/v1/apps/{$this->getId()}/credentials/csrs/{$csrId}/lifecycle/publish";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $string);

        return new \Okta\Applications\JsonWebKey(null, $body);
    }


    /**
    * Get the OAuth2Token object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Applications\Collection
    */
    public function getOAuth2Tokens(array $options = []): \Okta\Applications\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/apps/{$this->getId()}/tokens",
                    \Okta\Applications\OAuth2Token::class,
                    \Okta\Applications\Collection::class,
                    $options
                );
    }


    /**
    * Revokes the specified token for the specified application
    *
    *
    * @return mixed|null
    */
    public function revokeOAuth2TokenForApplication($tokenId)
    {
        $uri = "/api/v1/apps/{$this->getId()}/tokens/{$tokenId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Gets a token for the specified application
    *
    *
    * @return mixed|null
    */
    public function getOAuth2Token($tokenId)
    {
        $uri = "/api/v1/apps/{$this->getId()}/tokens/{$tokenId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\Applications\OAuth2Token(null, $body);
    }


    /**
    * Revokes all tokens for the specified application
    *
    *
    * @return mixed|null
    */
    public function revokeOAuth2Tokens()
    {
        $uri = "/api/v1/apps/{$this->getId()}/tokens";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Get the OAuth2ScopeConsentGrant object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Applications\Collection
    */
    public function getScopeConsentGrants(array $options = []): \Okta\Applications\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/apps/{$this->getId()}/grants",
                    \Okta\Applications\OAuth2ScopeConsentGrant::class,
                    \Okta\Applications\Collection::class,
                    $options
                );
    }


    /**
    * Grants consent for the application to request an OAuth 2.0 Okta scope
    *
    *
    * @return mixed|null
    */
    public function grantConsentToScope(OAuth2ScopeConsentGrant $oAuth2ScopeConsentGrant)
    {
        $uri = "/api/v1/apps/{$this->getId()}/grants";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $oAuth2ScopeConsentGrant);

        return new \Okta\Applications\OAuth2ScopeConsentGrant(null, $body);
    }


    /**
    * Revokes permission for the application to request the given scope
    *
    *
    * @return mixed|null
    */
    public function revokeScopeConsentGrant($grantId)
    {
        $uri = "/api/v1/apps/{$this->getId()}/grants/{$grantId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Fetches a single scope consent grant for the application
    *
    *
    * @return mixed|null
    */
    public function getScopeConsentGrant($grantId)
    {
        $uri = "/api/v1/apps/{$this->getId()}/grants/{$grantId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\Applications\OAuth2ScopeConsentGrant(null, $body);
    }

    public function convertFromGenericApplication()
    {
        switch ($this->getSignOnMode()) {
            case "BOOKMARK":
                $appClass = \Okta\Applications\BookmarkApplication::class;
                break;
            case "BASIC_AUTH":
                $appClass = \Okta\Applications\BasicAuthApplication::class;
                break;
            case "BROWSER_PLUGIN":
                switch ($this->getName()) {
                    case "template_swa":
                        $appClass = \Okta\Applications\SwaApplication::class;
                        break;
                    case "template_swa3field":
                        $appClass = \Okta\Applications\SwaThreeFieldApplication::class;
                        break;
                }
                break;
            case "SECURE_PASSWORD_STORE":
                $appClass = \Okta\Applications\SecurePasswordStoreApplication::class;
                break;
            case "AUTO_LOGIN":
                $appClass = \Okta\Applications\AutoLoginApplication::class;
                break;
            case "WS_FEDERATION":
                $appClass = \Okta\Applications\WsFederationApplication::class;
                break;
            case "SAML_2_0":
                $appClass = \Okta\Applications\SamlApplication::class;
                break;
            case "OPENID_CONNECT":
                $appClass = \Okta\Applications\OpenIdConnectApplication::class;
                break;
        }
    
        $properties = new \stdClass();
        foreach ($this->getPropertyNames() as $name) {
            $properties->$name = $this->getProperty($name);
        }
    
        return new $appClass(null, $properties);
    }
}
