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

namespace Okta\Users;

use Okta\Groups\Group;
use Okta\Resource\AbstractResource;

class User extends AbstractResource
{
    const ID = 'id';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
    const PROFILE = 'profile';
    const EMBEDDED = '_embedded';
    const ACTIVATED = 'activated';
    const LAST_LOGIN = 'lastLogin';
    const CREDENTIALS = 'credentials';
    const LAST_UPDATED = 'lastUpdated';
    const STATUS_CHANGED = 'statusChanged';
    const PASSWORD_CHANGED = 'passwordChanged';
    const TRANSITIONING_TO_STATUS = 'transitioningToStatus';

    public function create()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->createResource(
                    '/users',
                    $this,
                    self::class
                );
    }

    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        self::class,
                        '/users'
                    );
    }

    public function save()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->saveResource(
                    '/users',
                    $this,
                    self::class
                );
    }

    public function delete()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    '/users',
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
     * Get the profile.
     *
     * @return UserProfile
     */
    public function getProfile(array $options = []): UserProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            UserProfile::class,
            $options
        );
    }

    /**
     * Set the profile.
     *
     * @param UserProfile $profile The UserProfile instance.
     * @return self
     */
    public function setProfile(UserProfile $profile)
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
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
     * Get the activated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getActivated()
    {
        return $this->getDateProperty(self::ACTIVATED);
    }
    /**
     * Get the lastLogin.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastLogin()
    {
        return $this->getDateProperty(self::LAST_LOGIN);
    }
    /**
     * Get the credentials.
     *
     * @return UserCredentials
     */
    public function getCredentials(array $options = []): UserCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            UserCredentials::class,
            $options
        );
    }

    /**
     * Set the credentials.
     *
     * @param UserCredentials $credentials The UserCredentials instance.
     * @return self
     */
    public function setCredentials(UserCredentials $credentials)
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
     * Get the statusChanged.
     *
     * @return \Carbon\Carbon|null
     */
    public function getStatusChanged()
    {
        return $this->getDateProperty(self::STATUS_CHANGED);
    }
    /**
     * Get the passwordChanged.
     *
     * @return \Carbon\Carbon|null
     */
    public function getPasswordChanged()
    {
        return $this->getDateProperty(self::PASSWORD_CHANGED);
    }
    /**
     * Get the transitioningToStatus.
     *
     * @return string
     */
    public function getTransitioningToStatus(): string
    {
        return $this->getProperty(self::TRANSITIONING_TO_STATUS);
    }
    /**
    * Get the AppLink object.
    *
    * @param array $options The options for the request.
    * @return Collection
    */
    public function getAppLinks(array $options = []): Collection
    {
        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/appLinks",
                    AppLink::class,
                    Collection::class,
                    $options
                );
    }
    /**
    * Sends a request to the changePassword endpoint.
    *
    *
    * @return mixed|null
    */
    public function changePassword(ChangePasswordRequest $changePasswordRequest)
    {
        $uri = "/api/v1/users/{$this->getId()}/credentials/change_password";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'POST',
                    $uri
                );
    }
    /**
    * Sends a request to the changeRecoveryQuestion endpoint.
    *
    *
    * @return mixed|null
    */
    public function changeRecoveryQuestion(UserCredentials $userCredentials)
    {
        $uri = "/api/v1/users/{$this->getId()}/credentials/change_recovery_question";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'POST',
                    $uri
                );
    }
    /**
    * Sends a request to the forgotPassword endpoint.
    *
    * @param bool $sendEmail Sets the sendEmail flag.
    * @return mixed|null
    */
    public function forgotPassword(UserCredentials $userCredentials)
    {
        $uri = "/api/v1/users/{$this->getId()}/credentials/forgot_password";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'POST',
                    $uri,
                    '',
                    ['query' => ['sendEmail' => $sendEmail]]
                );
    }
    /**
    * Get the Role object.
    *
    * @param array $options The options for the request.
    * @return Collection
    */
    public function getRoles(array $options = []): Collection
    {
        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/roles",
                    Role::class,
                    Collection::class,
                    $options
                );
    }
    /**
    * Sends a request to the addRole endpoint.
    *
    *
    * @return mixed|null
    */
    public function addRole(Role $role)
    {
        $uri = "/api/v1/users/{$this->getId()}/roles";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'POST',
                    $uri
                );
    }
    /**
    * Sends a request to the removeRole endpoint.
    *
    *
    * @return mixed|null
    */
    public function removeRole()
    {
        $uri = "/api/v1/users/{$this->getId()}/roles/{$roleId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'DELETE',
                    $uri
                );
    }
    /**
    * Get the Group object.
    *
    * @param array $options The options for the request.
    * @return Collection
    */
    public function getGroupTargetsForRole(array $options = []): Collection
    {
        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/roles/{$roleId}/targets/groups",
                    Group::class,
                    Collection::class,
                    $options
                );
    }
    /**
    * Sends a request to the removeGroupTargetFromRole endpoint.
    *
    *
    * @return mixed|null
    */
    public function removeGroupTargetFromRole()
    {
        $uri = "/api/v1/users/{$this->getId()}/roles/{$roleId}/targets/groups/{$groupId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'DELETE',
                    $uri
                );
    }
    /**
    * Sends a request to the addGroupTargetToRole endpoint.
    *
    *
    * @return mixed|null
    */
    public function addGroupTargetToRole()
    {
        $uri = "/api/v1/users/{$this->getId()}/roles/{$roleId}/targets/groups/{$groupId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'PUT',
                    $uri
                );
    }
    /**
    * Get the Group object.
    *
    * @param array $options The options for the request.
    * @return Collection
    */
    public function getGroups(array $options = []): Collection
    {
        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/groups",
                    Group::class,
                    Collection::class,
                    $options
                );
    }
    /**
    * Sends a request to the activate endpoint.
    *
    * @param bool $sendEmail Sets the sendEmail flag.
    * @return mixed|null
    */
    public function activate()
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/activate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'POST',
                    $uri,
                    '',
                    ['query' => ['sendEmail' => $sendEmail]]
                );
    }
    /**
    * Sends a request to the deactivate endpoint.
    *
    *
    * @return mixed|null
    */
    public function deactivate()
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/deactivate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'POST',
                    $uri
                );
    }
    /**
    * Sends a request to the suspend endpoint.
    *
    *
    * @return mixed|null
    */
    public function suspend()
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/suspend";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'POST',
                    $uri
                );
    }
    /**
    * Sends a request to the unsuspend endpoint.
    *
    *
    * @return mixed|null
    */
    public function unsuspend()
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/unsuspend";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'POST',
                    $uri
                );
    }
    /**
    * Sends a request to the resetPassword endpoint.
    *
    *
    * @return mixed|null
    */
    public function resetPassword()
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/reset_password";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'POST',
                    $uri
                );
    }
    /**
    * Sends a request to the expirePassword endpoint.
    *
    *
    * @return mixed|null
    */
    public function expirePassword()
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/expire_password";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'POST',
                    $uri
                );
    }
    /**
    * Sends a request to the unlock endpoint.
    *
    *
    * @return mixed|null
    */
    public function unlock()
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/unlock";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'POST',
                    $uri
                );
    }
    /**
    * Sends a request to the resetFactors endpoint.
    *
    *
    * @return mixed|null
    */
    public function resetFactors()
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/reset_factors";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'POST',
                    $uri
                );
    }
    /**
    * Sends a request to the addToGroup endpoint.
    *
    *
    * @return mixed|null
    */
    public function addToGroup()
    {
        $uri = "/api/v1/groups/{$groupId}/users/{$this->getId()}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        return $this
                ->getDataStore()
                ->executeRequest(
                    'PUT',
                    $uri
                );
    }
}
