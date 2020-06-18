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

use Okta\Roles\AssignRoleRequest;
use Okta\Groups\Group;
use Okta\Applications\OAuth2ScopeConsentGrant;
use Okta\Applications\OAuth2RefreshToken;
use Okta\Applications\OAuth2Client;
use Okta\UserFactors\UserFactor;
use Okta\UserFactors\SecurityQuestion;
use Okta\IdentityProviders\IdentityProvider;

class User extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const TYPE = 'type';
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


    public function create($query = [])
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->createResource(
                    "/users",
                    $this,
                    \Okta\Users\User::class,
                    $query
                );
    }

    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\Users\User::class,
                        "/users"
                    );
    }
        
    public function save()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->saveResource(
                    "/users",
                    $this,
                    \Okta\Users\User::class
                );
    }

    public function delete()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    "/users",
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
     * Get the type.
     *
     * @return \Okta\UserTypes\UserType
     */
    public function getType(array $options = []): \Okta\UserTypes\UserType
    {
        return $this->getResourceProperty(
            self::TYPE,
            \Okta\UserTypes\UserType::class,
            $options
        );
    }


    /**
     * Set the type.
     *
     * @param \Okta\UserTypes\UserType $type The UserType instance.
     * @return self
     */
    public function setType(\Okta\UserTypes\UserType $type)
    {
        $this->setResourceProperty(
            self::TYPE,
            $type
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
     * @return \Okta\Users\UserProfile
     */
    public function getProfile(array $options = []): \Okta\Users\UserProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\Users\UserProfile::class,
            $options
        );
    }


    /**
     * Set the profile.
     *
     * @param \Okta\Users\UserProfile $profile The UserProfile instance.
     * @return self
     */
    public function setProfile(\Okta\Users\UserProfile $profile)
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
    public function getEmbedded()
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
     * @return \Okta\Users\UserCredentials
     */
    public function getCredentials(array $options = []): \Okta\Users\UserCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\Users\UserCredentials::class,
            $options
        );
    }


    /**
     * Set the credentials.
     *
     * @param \Okta\Users\UserCredentials $credentials The UserCredentials instance.
     * @return self
     */
    public function setCredentials(\Okta\Users\UserCredentials $credentials)
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
    public function getTransitioningToStatus()
    {
        return $this->getProperty(self::TRANSITIONING_TO_STATUS);
    }


    /**
    * Get the AppLink object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Users\Collection
    */
    public function getAppLinks(array $options = []): \Okta\Users\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/appLinks",
                    \Okta\Users\AppLink::class,
                    \Okta\Users\Collection::class,
                    $options
                );
    }


    /**
    * Changes a user&#x27;s password by validating the user&#x27;s current password. This operation can only be performed on users in &#x60;STAGED&#x60;, &#x60;ACTIVE&#x60;, &#x60;PASSWORD_EXPIRED&#x60;, or &#x60;RECOVERY&#x60; status that have a valid password credential
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
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $changePasswordRequest);

        return new \Okta\Users\UserCredentials(null, $body);
    }


    /**
    * Changes a user&#x27;s recovery question &amp; answer credential by validating the user&#x27;s current password.  This operation can only be performed on users in **STAGED**, **ACTIVE** or **RECOVERY** &#x60;status&#x60; that have a valid password credential
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
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $userCredentials);

        return new \Okta\Users\UserCredentials(null, $body);
    }


    /**
    * Sets a new password for a user by validating the user&#x27;s answer to their current recovery question
    *
    * @param bool $sendEmail Sets the sendEmail flag.
    * @return mixed|null
    */
    public function forgotPasswordSetNewPassword(UserCredentials $userCredentials, $sendEmail = true)
    {
        $uri = "/api/v1/users/{$this->getId()}/credentials/forgot_password";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $userCredentials, ['query' => ['sendEmail' => $sendEmail]]);

        return new \Okta\Users\ForgotPasswordResponse(null, $body);
    }


    /**
    * Generates a one-time token (OTT) that can be used to reset a user&#x27;s password
    *
    * @param bool $sendEmail Sets the sendEmail flag.
    * @return mixed|null
    */
    public function forgotPasswordGenerateOneTimeToken($sendEmail = true)
    {
        $uri = "/api/v1/users/{$this->getId()}/credentials/forgot_password";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, '', ['query' => ['sendEmail' => $sendEmail]]);

        return new \Okta\Users\ForgotPasswordResponse(null, $body);
    }


    /**
    * Assigns a role to a user.
    *
    *
    * @return mixed|null
    */
    public function assignRole(AssignRoleRequest $assignRoleRequest)
    {
        $uri = "/api/v1/users/{$this->getId()}/roles";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $assignRoleRequest);

        return new \Okta\Users\Role(null, $body);
    }


    /**
    * Unassigns a role from a user.
    *
    *
    * @return mixed|null
    */
    public function removeRole($roleId)
    {
        $uri = "/api/v1/users/{$this->getId()}/roles/{$roleId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Get the Group object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Groups\Collection
    */
    public function getGroupTargets($roleId, array $options = []): \Okta\Groups\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/roles/{$roleId}/targets/groups",
                    \Okta\Groups\Group::class,
                    \Okta\Groups\Collection::class,
                    $options
                );
    }


    /**
    * Success
    *
    *
    * @return mixed|null
    */
    public function removeGroupTarget($roleId, $groupId)
    {
        $uri = "/api/v1/users/{$this->getId()}/roles/{$roleId}/targets/groups/{$groupId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Success
    *
    *
    * @return mixed|null
    */
    public function addGroupTarget($roleId, $groupId)
    {
        $uri = "/api/v1/users/{$this->getId()}/roles/{$roleId}/targets/groups/{$groupId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri);

        return $body;
    }


    /**
    * Get the Role object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Users\Collection
    */
    public function getAssignedRoles(array $options = []): \Okta\Users\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/roles",
                    \Okta\Users\Role::class,
                    \Okta\Users\Collection::class,
                    $options
                );
    }


    /**
    * Success
    *
    *
    * @return mixed|null
    */
    public function addAllAppsAsTarget($roleId)
    {
        $uri = "/api/v1/users/{$this->getId()}/roles/{$roleId}/targets/catalog/apps";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri);

        return $body;
    }


    /**
    * Get the Group object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Groups\Collection
    */
    public function getGroups(array $options = []): \Okta\Groups\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/groups",
                    \Okta\Groups\Group::class,
                    \Okta\Groups\Collection::class,
                    $options
                );
    }


    /**
    * Get the OAuth2ScopeConsentGrant object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Users\Collection
    */
    public function getGrants(array $options = []): \Okta\Users\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/grants",
                    \Okta\Users\OAuth2ScopeConsentGrant::class,
                    \Okta\Users\Collection::class,
                    $options
                );
    }


    /**
    * Revokes all grants for a specified user
    *
    *
    * @return mixed|null
    */
    public function revokeGrants()
    {
        $uri = "/api/v1/users/{$this->getId()}/grants";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Revokes one grant for a specified user
    *
    *
    * @return mixed|null
    */
    public function revokeGrant($grantId)
    {
        $uri = "/api/v1/users/{$this->getId()}/grants/{$grantId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Revokes all grants for the specified user and client
    *
    *
    * @return mixed|null
    */
    public function revokeGrantsForUserAndClient($clientId)
    {
        $uri = "/api/v1/users/{$this->getId()}/clients/{$clientId}/grants";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Get the OAuth2RefreshToken object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Users\Collection
    */
    public function getRefreshTokensForUserAndClient($clientId, array $options = []): \Okta\Users\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/clients/{$clientId}/tokens",
                    \Okta\Users\OAuth2RefreshToken::class,
                    \Okta\Users\Collection::class,
                    $options
                );
    }


    /**
    * Revokes the specified refresh token.
    *
    *
    * @return mixed|null
    */
    public function revokeTokenForUserAndClient($clientId, $tokenId)
    {
        $uri = "/api/v1/users/{$this->getId()}/clients/{$clientId}/tokens/{$tokenId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Gets a refresh token issued for the specified User and Client.
    *

    * @return mixed|null
    */
    public function getRefreshTokenForUserAndClient($clientId, $tokenId, $limit = 20)
    {
        $uri = "/api/v1/users/{$this->getId()}/clients/{$clientId}/tokens/{$tokenId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri, '', ['query' => ['limit' => $limit]]);

        return new \Okta\Users\OAuth2RefreshToken(null, $body);
    }


    /**
    * Revokes all refresh tokens issued for the specified User and Client.
    *
    *
    * @return mixed|null
    */
    public function revokeTokensForUserAndClient($clientId)
    {
        $uri = "/api/v1/users/{$this->getId()}/clients/{$clientId}/tokens";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Get the OAuth2Client object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Users\Collection
    */
    public function getClients(array $options = []): \Okta\Users\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/clients",
                    \Okta\Users\OAuth2Client::class,
                    \Okta\Users\Collection::class,
                    $options
                );
    }


    /**
    * Activates a user.  This operation can only be performed on users with a &#x60;STAGED&#x60; status.  Activation of a user is an asynchronous operation. The user will have the &#x60;transitioningToStatus&#x60; property with a value of &#x60;ACTIVE&#x60; during activation to indicate that the user hasn&#x27;t completed the asynchronous operation.  The user will have a status of &#x60;ACTIVE&#x60; when the activation process is complete.
    *
    * @param bool $sendEmail Sets the sendEmail flag.
    * @return mixed|null
    */
    public function activate($sendEmail = true)
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/activate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, '', ['query' => ['sendEmail' => $sendEmail]]);

        return new \Okta\Users\UserActivationToken(null, $body);
    }


    /**
    * Reactivates a user.  This operation can only be performed on users with a &#x60;PROVISIONED&#x60; status.  This operation restarts the activation workflow if for some reason the user activation was not completed when using the activationToken from [Activate User](#activate-user).
    *
    *
    * @return mixed|null
    */
    public function reactivate($sendEmail = false)
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/reactivate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, '', ['query' => ['sendEmail' => $sendEmail]]);

        return new \Okta\Users\UserActivationToken(null, $body);
    }


    /**
    * Deactivates a user.  This operation can only be performed on users that do not have a &#x60;DEPROVISIONED&#x60; status.  Deactivation of a user is an asynchronous operation.  The user will have the &#x60;transitioningToStatus&#x60; property with a value of &#x60;DEPROVISIONED&#x60; during deactivation to indicate that the user hasn&#x27;t completed the asynchronous operation.  The user will have a status of &#x60;DEPROVISIONED&#x60; when the deactivation process is complete.
    *
    *
    * @return mixed|null
    */
    public function deactivate($sendEmail = false)
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/deactivate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, '', ['query' => ['sendEmail' => $sendEmail]]);

        return $body;
    }


    /**
    * Suspends a user.  This operation can only be performed on users with an &#x60;ACTIVE&#x60; status.  The user will have a status of &#x60;SUSPENDED&#x60; when the process is complete.
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
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return $body;
    }


    /**
    * Unsuspends a user and returns them to the &#x60;ACTIVE&#x60; state.  This operation can only be performed on users that have a &#x60;SUSPENDED&#x60; status.
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
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return $body;
    }


    /**
    * Generates a one-time token (OTT) that can be used to reset a user&#x27;s password.  The OTT link can be automatically emailed to the user or returned to the API caller and distributed using a custom flow.
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
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\Users\ResetPasswordToken(null, $body);
    }


    /**
    * This operation transitions the user to the status of &#x60;PASSWORD_EXPIRED&#x60; so that the user is required to change their password at their next login.
    *
    *
    * @return mixed|null
    */
    public function expirePassword()
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/expire_password?tempPassword=false";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\Users\User(null, $body);
    }


    /**
    * This operation transitions the user to the status of &#x60;PASSWORD_EXPIRED&#x60; and the user&#x27;s password is reset to a temporary password that is returned.
    *
    *
    * @return mixed|null
    */
    public function expirePasswordAndGetTemporaryPassword()
    {
        $uri = "/api/v1/users/{$this->getId()}/lifecycle/expire_password?tempPassword=true";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\Users\TempPassword(null, $body);
    }


    /**
    * Unlocks a user with a &#x60;LOCKED_OUT&#x60; status and returns them to &#x60;ACTIVE&#x60; status.  Users will be able to login with their current password.
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
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return $body;
    }


    /**
    * This operation resets all factors for the specified user. All MFA factor enrollments returned to the unenrolled state. The user&#x27;s status remains ACTIVE. This link is present only if the user is currently enrolled in one or more MFA factors.
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
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return $body;
    }


    /**
    * Unenrolls an existing factor for the specified user, allowing the user to enroll a new factor.
    *
    *
    * @return mixed|null
    */
    public function deleteFactor($factorId)
    {
        $uri = "/api/v1/users/{$this->getId()}/factors/{$factorId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }


    /**
    * Adds a user to a group with &#x27;OKTA_GROUP&#x27; type.
    *
    *
    * @return mixed|null
    */
    public function addToGroup($groupId)
    {
        $uri = "/api/v1/groups/{$groupId}/users/{$this->getId()}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri);

        return $body;
    }


    /**
    * Enrolls a user with a supported factor.
    *

    * @return mixed|null
    */
    public function enrollFactor(UserFactor $userFactor, $activate = false, $tokenLifetimeSeconds = 300, $updatePhone = false)
    {
        $uri = "/api/v1/users/{$this->getId()}/factors";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $userFactor, ['query' => ['activate' => $activate,'tokenLifetimeSeconds' => $tokenLifetimeSeconds,'updatePhone' => $updatePhone]]);

        return new \Okta\UserFactors\UserFactor(null, $body);
    }


    /**
    * Get the UserFactor object.
    *
    * @param array $options The options for the request.
    * @return \Okta\UserFactors\Collection
    */
    public function getSupportedFactors(array $options = []): \Okta\UserFactors\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/factors/catalog",
                    \Okta\UserFactors\UserFactor::class,
                    \Okta\UserFactors\Collection::class,
                    $options
                );
    }


    /**
    * Get the UserFactor object.
    *
    * @param array $options The options for the request.
    * @return \Okta\UserFactors\Collection
    */
    public function getFactors(array $options = []): \Okta\UserFactors\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/factors",
                    \Okta\UserFactors\UserFactor::class,
                    \Okta\UserFactors\Collection::class,
                    $options
                );
    }


    /**
    * Get the SecurityQuestion object.
    *
    * @param array $options The options for the request.
    * @return \Okta\UserFactors\Collection
    */
    public function getSupportedSecurityQuestions(array $options = []): \Okta\UserFactors\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/factors/questions",
                    \Okta\UserFactors\SecurityQuestion::class,
                    \Okta\UserFactors\Collection::class,
                    $options
                );
    }


    /**
    * Fetches a factor for the specified user
    *
    *
    * @return mixed|null
    */
    public function getFactor($factorId)
    {
        $uri = "/api/v1/users/{$this->getId()}/factors/{$factorId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('GET', $uri);

        return new \Okta\UserFactors\UserFactor(null, $body);
    }


    /**
    *
    *
    *
    * @return mixed|null
    */
    public function setLinkedObject($primaryRelationshipName, $primaryUserId)
    {
        $uri = "/api/v1/users/{$this->getId()}/linkedObjects/{$primaryRelationshipName}/{$primaryUserId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri);

        return $body;
    }


    /**
    * Get the IdentityProvider object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Users\Collection
    */
    public function getIdentityProviders(array $options = []): \Okta\Users\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/idps",
                    \Okta\Users\IdentityProvider::class,
                    \Okta\Users\Collection::class,
                    $options
                );
    }


    /**
    * Get the ResponseLinks object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Users\Collection
    */
    public function getLinkedObjects($relationshipName, array $options = []): \Okta\Users\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/users/{$this->getId()}/linkedObjects/{$relationshipName}",
                    \Okta\Users\ResponseLinks::class,
                    \Okta\Users\Collection::class,
                    $options
                );
    }


    /**
    * Removes all active identity provider sessions. This forces the user to authenticate on the next operation. Optionally revokes OpenID Connect and OAuth refresh and access tokens issued to the user.
    *
    *
    * @return mixed|null
    */
    public function clearSessions($oauthTokens = false)
    {
        $uri = "/api/v1/users/{$this->getId()}/sessions";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri, '', ['query' => ['oauthTokens' => $oauthTokens]]);

        return $body;
    }


    /**
    * Delete linked objects for a user, relationshipName can be ONLY a primary relationship name
    *
    *
    * @return mixed|null
    */
    public function removeLinkedObject($relationshipName)
    {
        $uri = "/api/v1/users/{$this->getId()}/linkedObjects/{$relationshipName}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('DELETE', $uri);

        return $body;
    }
}
