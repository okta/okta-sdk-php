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

namespace Okta\Clients;

class User {

    /**
     * The DataStore we are going to use for our Client
     * @var \Okta\DataStore\DefaultDataStore
     */
    protected $dataStore;

    public function __construct(\Okta\DataStore\DefaultDataStore $dataStore)
    {
        $this->dataStore = $dataStore;
    }

    /**
     * Lists users in your organization with pagination in most cases.  A subset of users can be returned that match a supported filter expression or search criteria.
     */
    function listUsers(array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\User\User(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Creates a new user in your Okta organization with or without credentials.
     */
    function createUser(\Okta\User\CreateUserRequest $body, array $queryParameters = []) : \Okta\User\User 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($body)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\User\User(null, $body);
        return $responseModel;
    }

    /**
     * 
     */
    function setLinkedObjectForUser($associatedUserId, $primaryRelationshipName, $primaryUserId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${associatedUserId}/linkedObjects/${primaryRelationshipName}/${primaryUserId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Deletes a user permanently.  This operation can only be performed on users that have a &#x60;DEPROVISIONED&#x60; status.  **This action cannot be recovered!**
     */
    function deactivateOrDeleteUser($userId, array $queryParameters = [])
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

    }

    /**
     * Fetches a user from your Okta organization.
     */
    function getUser($userId) : \Okta\User\User 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\User\User(null, $body);
        return $responseModel;
    }

    /**
     * Fetch a user by &#x60;id&#x60;, &#x60;login&#x60;, or &#x60;login shortname&#x60; if the short name is unambiguous.
     */
    function partialUpdateUser(\Okta\User\User $user, $userId, array $queryParameters = []) : \Okta\User\User 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($user)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\User\User(null, $body);
        return $responseModel;
    }

    /**
     * Update a user&#x27;s profile and/or credentials using strict-update semantics.
     */
    function updateUser(\Okta\User\User $user, $userId, array $queryParameters = []) : \Okta\User\User 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($user)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\User\User(null, $body);
        return $responseModel;
    }

    /**
     * Fetches appLinks for all direct or indirect (via group membership) assigned applications.
     */
    function listAppLinks($userId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/appLinks"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\User\AppLink(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Lists all client resources for which the specified user has grants or tokens.
     */
    function listUserClients($userId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/clients"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\OAuth2Client(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Revokes all grants for the specified user and client
     */
    function revokeGrantsForUserAndClient($userId, $clientId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/clients/${clientId}/grants"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Lists all grants for a specified user and client
     */
    function listGrantsForUserAndClient($userId, $clientId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/clients/${clientId}/grants"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\OAuth2ScopeConsentGrant(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Revokes all refresh tokens issued for the specified User and Client.
     */
    function revokeTokensForUserAndClient($userId, $clientId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/clients/${clientId}/tokens"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Lists all refresh tokens issued for the specified User and Client.
     */
    function listRefreshTokensForUserAndClient($userId, $clientId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/clients/${clientId}/tokens"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\OAuth2RefreshToken(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Revokes the specified refresh token.
     */
    function revokeTokenForUserAndClient($userId, $clientId, $tokenId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/clients/${clientId}/tokens/${tokenId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Gets a refresh token issued for the specified User and Client.
     */
    function getRefreshTokenForUserAndClient($userId, $clientId, $tokenId, array $queryParameters = []) : \Okta\Application\OAuth2RefreshToken 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/clients/${clientId}/tokens/${tokenId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Application\OAuth2RefreshToken(null, $body);
        return $responseModel;
    }

    /**
     * Changes a user&#x27;s password by validating the user&#x27;s current password. This operation can only be performed on users in &#x60;STAGED&#x60;, &#x60;ACTIVE&#x60;, &#x60;PASSWORD_EXPIRED&#x60;, or &#x60;RECOVERY&#x60; status that have a valid password credential
     */
    function changePassword(\Okta\User\ChangePasswordRequest $changePasswordRequest, $userId, array $queryParameters = []) : \Okta\User\UserCredentials 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/credentials/change_password"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($changePasswordRequest)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\User\UserCredentials(null, $body);
        return $responseModel;
    }

    /**
     * Changes a user&#x27;s recovery question &amp; answer credential by validating the user&#x27;s current password.  This operation can only be performed on users in **STAGED**, **ACTIVE** or **RECOVERY** &#x60;status&#x60; that have a valid password credential
     */
    function changeRecoveryQuestion(\Okta\User\UserCredentials $userCredentials, $userId) : \Okta\User\UserCredentials 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/credentials/change_recovery_question"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($userCredentials)
            ->executeRequest();

        $responseModel = new \Okta\User\UserCredentials(null, $body);
        return $responseModel;
    }

    /**
     * Generates a one-time token (OTT) that can be used to reset a user&#x27;s password
     */
    function forgotPasswordGenerateOneTimeToken($userId, array $queryParameters = []) : \Okta\User\ForgotPasswordResponse 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/credentials/forgot_password"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\User\ForgotPasswordResponse(null, $body);
        return $responseModel;
    }

    /**
     * Sets a new password for a user by validating the user&#x27;s answer to their current recovery question
     */
    function forgotPasswordSetNewPassword(\Okta\User\UserCredentials $user, $userId, array $queryParameters = []) : \Okta\User\ForgotPasswordResponse 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/credentials/forgot_password"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($user)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\User\ForgotPasswordResponse(null, $body);
        return $responseModel;
    }

    /**
     * Revokes all grants for a specified user
     */
    function revokeUserGrants($userId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/grants"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Lists all grants for the specified user
     */
    function listUserGrants($userId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/grants"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\OAuth2ScopeConsentGrant(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Revokes one grant for a specified user
     */
    function revokeUserGrant($userId, $grantId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/grants/${grantId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Gets a grant for the specified user
     */
    function getUserGrant($userId, $grantId, array $queryParameters = []) : \Okta\Application\OAuth2ScopeConsentGrant 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/grants/${grantId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Application\OAuth2ScopeConsentGrant(null, $body);
        return $responseModel;
    }

    /**
     * Fetches the groups of which the user is a member.
     */
    function listUserGroups($userId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/groups"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Group\Group(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Lists the IdPs associated with the user.
     */
    function listUserIdentityProviders($userId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/idps"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\IdentityProvider\IdentityProvider(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Activates a user.  This operation can only be performed on users with a &#x60;STAGED&#x60; status.  Activation of a user is an asynchronous operation. The user will have the &#x60;transitioningToStatus&#x60; property with a value of &#x60;ACTIVE&#x60; during activation to indicate that the user hasn&#x27;t completed the asynchronous operation.  The user will have a status of &#x60;ACTIVE&#x60; when the activation process is complete.
     */
    function activateUser($userId, array $queryParameters = []) : \Okta\User\UserActivationToken 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/lifecycle/activate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\User\UserActivationToken(null, $body);
        return $responseModel;
    }

    /**
     * Deactivates a user.  This operation can only be performed on users that do not have a &#x60;DEPROVISIONED&#x60; status.  Deactivation of a user is an asynchronous operation.  The user will have the &#x60;transitioningToStatus&#x60; property with a value of &#x60;DEPROVISIONED&#x60; during deactivation to indicate that the user hasn&#x27;t completed the asynchronous operation.  The user will have a status of &#x60;DEPROVISIONED&#x60; when the deactivation process is complete.
     */
    function deactivateUser($userId, array $queryParameters = [])
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/lifecycle/deactivate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

    }

    /**
     * This operation transitions the user to the status of &#x60;PASSWORD_EXPIRED&#x60; so that the user is required to change their password at their next login.
     */
    function expirePassword($userId) : \Okta\User\User 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/lifecycle/expire_password?tempPassword=false"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\User\User(null, $body);
        return $responseModel;
    }

    /**
     * This operation transitions the user to the status of &#x60;PASSWORD_EXPIRED&#x60; and the user&#x27;s password is reset to a temporary password that is returned.
     */
    function expirePasswordAndGetTemporaryPassword($userId) : \Okta\User\TempPassword 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/lifecycle/expire_password?tempPassword=true"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\User\TempPassword(null, $body);
        return $responseModel;
    }

    /**
     * Reactivates a user.  This operation can only be performed on users with a &#x60;PROVISIONED&#x60; status.  This operation restarts the activation workflow if for some reason the user activation was not completed when using the activationToken from [Activate User](#activate-user).
     */
    function reactivateUser($userId, array $queryParameters = []) : \Okta\User\UserActivationToken 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/lifecycle/reactivate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\User\UserActivationToken(null, $body);
        return $responseModel;
    }

    /**
     * This operation resets all factors for the specified user. All MFA factor enrollments returned to the unenrolled state. The user&#x27;s status remains ACTIVE. This link is present only if the user is currently enrolled in one or more MFA factors.
     */
    function resetFactors($userId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/lifecycle/reset_factors"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Generates a one-time token (OTT) that can be used to reset a user&#x27;s password.  The OTT link can be automatically emailed to the user or returned to the API caller and distributed using a custom flow.
     */
    function resetPassword($userId, array $queryParameters = []) : \Okta\User\ResetPasswordToken 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/lifecycle/reset_password"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\User\ResetPasswordToken(null, $body);
        return $responseModel;
    }

    /**
     * Suspends a user.  This operation can only be performed on users with an &#x60;ACTIVE&#x60; status.  The user will have a status of &#x60;SUSPENDED&#x60; when the process is complete.
     */
    function suspendUser($userId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/lifecycle/suspend"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Unlocks a user with a &#x60;LOCKED_OUT&#x60; status and returns them to &#x60;ACTIVE&#x60; status.  Users will be able to login with their current password.
     */
    function unlockUser($userId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/lifecycle/unlock"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Unsuspends a user and returns them to the &#x60;ACTIVE&#x60; state.  This operation can only be performed on users that have a &#x60;SUSPENDED&#x60; status.
     */
    function unsuspendUser($userId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/lifecycle/unsuspend"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Delete linked objects for a user, relationshipName can be ONLY a primary relationship name
     */
    function removeLinkedObjectForUser($userId, $relationshipName)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/linkedObjects/${relationshipName}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Get linked objects for a user, relationshipName can be a primary or associated relationship name
     */
    function getLinkedObjectsForUser($userId, $relationshipName, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/linkedObjects/${relationshipName}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\User\ResponseLinks(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Lists all roles assigned to a user.
     */
    function listAssignedRolesForUser($userId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/roles"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\User\Role(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Assigns a role to a user.
     */
    function assignRoleToUser(\Okta\Role\AssignRoleRequest $assignRoleRequest, $userId, array $queryParameters = []) : \Okta\User\Role 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/roles"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($assignRoleRequest)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\User\Role(null, $body);
        return $responseModel;
    }

    /**
     * Unassigns a role from a user.
     */
    function removeRoleFromUser($userId, $roleId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/roles/${roleId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Lists all App targets for an &#x60;APP_ADMIN&#x60; Role assigned to a User. This methods return list may include full Applications or Instances. The response for an instance will have an &#x60;ID&#x60; value, while Application will not have an ID.
     */
    function listApplicationTargetsForApplicationAdministratorRoleForUser($userId, $roleId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/roles/${roleId}/targets/catalog/apps"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Role\CatalogApplication(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Success
     */
    function addAllAppsAsTargetToRole($userId, $roleId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/roles/${roleId}/targets/catalog/apps"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function removeApplicationTargetFromApplicationAdministratorRoleForUser($userId, $roleId, $appName)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/roles/${roleId}/targets/catalog/apps/${appName}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function addApplicationTargetToAdminRoleForUser($userId, $roleId, $appName)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/roles/${roleId}/targets/catalog/apps/${appName}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Remove App Instance Target to App Administrator Role given to a User
     */
    function removeApplicationTargetFromAdministratorRoleForUser($userId, $roleId, $appName, $applicationId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/roles/${roleId}/targets/catalog/apps/${appName}/${applicationId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Add App Instance Target to App Administrator Role given to a User
     */
    function addApplicationTargetToAppAdminRoleForUser($userId, $roleId, $appName, $applicationId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/roles/${roleId}/targets/catalog/apps/${appName}/${applicationId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function listGroupTargetsForRole($userId, $roleId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/roles/${roleId}/targets/groups"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Group\Group(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Success
     */
    function removeGroupTargetFromRole($userId, $roleId, $groupId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/roles/${roleId}/targets/groups/${groupId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function addGroupTargetToRole($userId, $roleId, $groupId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/roles/${roleId}/targets/groups/${groupId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Removes all active identity provider sessions. This forces the user to authenticate on the next operation. Optionally revokes OpenID Connect and OAuth refresh and access tokens issued to the user.
     */
    function clearUserSessions($userId, array $queryParameters = [])
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/sessions"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

    }

}