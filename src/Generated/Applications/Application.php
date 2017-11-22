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


class Application extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const LABEL = 'label';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
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
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\Applications\Application::class,
                        "/apps"
                    );
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
    public function getId(): string
    {
        return $this->getProperty(self::ID);
    }
    /**
     * Get the name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getProperty(self::NAME);
    }
    /**
     * Get the label.
     *
     * @return string
     */
    public function getLabel(): string
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
    public function getLinks(): \stdClass
    {
        return $this->getProperty(self::LINKS);
    }
    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus(): string
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
     * Get the features.
     *
     * @return array
     */
    public function getFeatures(): array
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
    public function setSettings(ApplicationSettings $settings)
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
    public function getEmbedded(): \stdClass
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
    public function setLicensing(ApplicationLicensing $licensing)
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
    public function getSignOnMode(): string
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
    public function setVisibility(ApplicationVisibility $visibility)
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
    public function setCredentials(ApplicationCredentials $credentials)
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
    public function setAccessibility(ApplicationAccessibility $accessibility)
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
        return $this
                ->getDataStore()
                ->executeRequest('POST', $uri);
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
        return $this
                ->getDataStore()
                ->executeRequest('POST', $uri);
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
        return $this
                ->getDataStore()
                ->post($uri, $appUser, \Okta\Applications\AppUser::class);
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
        $response = $this
            ->getDataStore()
            ->getResource();

        return $response;
    }

    /**
    * Updates a user&#x27;s profile for an application
    *
    *
    * @return mixed|null
    */
    public function updateApplicationUser($userId, AppUser $appUser)
    {
        $uri = "/api/v1/apps/{$this->getId()}/users/{$userId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $appUser);
    }

    /**
    * Removes an assignment for a user from an application.
    *
    *
    * @return mixed|null
    */
    public function deleteApplicationUser($userId)
    {
        $uri = "/api/v1/apps/{$this->getId()}/users/{$userId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);
    }

    /**
    * Assigns a group to an application
    *
    *
    * @return mixed|null
    */
    public function updateApplicationGroupAssignment($groupId, ApplicationGroupAssignment $applicationGroupAssignment)
    {
        $uri = "/api/v1/apps/{$this->getId()}/groups/{$groupId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest('PUT', $uri, $applicationGroupAssignment);
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
        $response = $this
            ->getDataStore()
            ->getResource();

        return $response;
    }

    /**
    * Removes a group assignment from an application.
    *
    *
    * @return mixed|null
    */
    public function deleteApplicationGroupAssignment($groupId)
    {
        $uri = "/api/v1/apps/{$this->getId()}/groups/{$groupId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);
    }

    /**
    * Generates a new X.509 certificate for an application key credential
    *
    *
    * @return mixed|null
    */
    public function generateApplicationKey()
    {
        $uri = "/api/v1/apps/{$this->getId()}/credentials/keys/generate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest('POST', $uri);
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
        return $this
                ->getDataStore()
                ->executeRequest('POST', $uri);
    }

    /**
    * Gets a specific [application key credential](#application-key-credential-model) by &#x60;kid&#x60;
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
        $response = $this
            ->getDataStore()
            ->getResource();

        return $response;
    }

    /**
    * Get the ApplicationGroupAssignment object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Applications\Collection
    */
    public function getApplicationGroupAssignments(array $options = []): \Okta\Applications\Collection
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
    public function getApplicationKeys(array $options = []): \Okta\Applications\Collection
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
}
