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

namespace Okta\User;

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


    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType(\Okta\UserType\UserType $type) : User
    {
        $this->setResourceProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }

    /**
     * Set the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return self
     */
    function setProfile(\Okta\User\UserProfile $profile) : User
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
        );
    
        return $this;
    }

    /**
     * Set the Credentials.
     *
     * @param mixed $credentials The credentials to set.
     * @return self
     */
    function setCredentials(\Okta\User\UserCredentials $credentials) : User
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );
    
        return $this;
    }

    /**
     * Get the Id.
     *
     * @param mixed $id The id to set.
     * @return string
     */
    function getId() : string
    {
        return $this->getProperty(
            self::ID,
        );
    }
    
    /**
     * Get the Type.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\UserType\UserType
     */
    function getType(array $options = []) : \Okta\UserType\UserType
    {
        return $this->getResourceProperty(
            self::TYPE,
            \Okta\UserType\UserType::class,
            $options
        );
    }

    /**
     * Get the Links.
     *
     * @param mixed $_links The _links to set.
     * @return \stdClass
     */
    function getLinks() : \stdClass
    {
        return $this->getProperty(
            self::LINKS,
        );
    }
    
    /**
     * Get the Status.
     *
     * @return \Okta\User\UserStatus
     */
    function getStatus() : \Okta\User\UserStatus
    {
        return $this->getEnumProperty(
            self::STATUS,
            \Okta\User\UserStatus::class,
        );
    }

    /**
     * Get the Created.
     *
     * @param mixed $created The created to set.
     * @return \Carbon\Carbon
     */
    function getCreated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::CREATED
        );
    
        return $this;
    }

    /**
     * Get the Profile.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\UserProfile
     */
    function getProfile(array $options = []) : \Okta\User\UserProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\User\UserProfile::class,
            $options
        );
    }

    /**
     * Get the Embedded.
     *
     * @param mixed $_embedded The _embedded to set.
     * @return \stdClass
     */
    function getEmbedded() : \stdClass
    {
        return $this->getProperty(
            self::EMBEDDED,
        );
    }
    
    /**
     * Get the Activated.
     *
     * @param mixed $activated The activated to set.
     * @return \Carbon\Carbon
     */
    function getActivated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::ACTIVATED
        );
    
        return $this;
    }

    /**
     * Get the LastLogin.
     *
     * @param mixed $lastLogin The lastLogin to set.
     * @return \Carbon\Carbon
     */
    function getLastLogin() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_LOGIN
        );
    
        return $this;
    }

    /**
     * Get the Credentials.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\UserCredentials
     */
    function getCredentials(array $options = []) : \Okta\User\UserCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\User\UserCredentials::class,
            $options
        );
    }

    /**
     * Get the LastUpdated.
     *
     * @param mixed $lastUpdated The lastUpdated to set.
     * @return \Carbon\Carbon
     */
    function getLastUpdated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_UPDATED
        );
    
        return $this;
    }

    /**
     * Get the StatusChanged.
     *
     * @param mixed $statusChanged The statusChanged to set.
     * @return \Carbon\Carbon
     */
    function getStatusChanged() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::STATUS_CHANGED
        );
    
        return $this;
    }

    /**
     * Get the PasswordChanged.
     *
     * @param mixed $passwordChanged The passwordChanged to set.
     * @return \Carbon\Carbon
     */
    function getPasswordChanged() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::PASSWORD_CHANGED
        );
    
        return $this;
    }

    /**
     * Get the TransitioningToStatus.
     *
     * @return \Okta\User\UserStatus
     */
    function getTransitioningToStatus() : \Okta\User\UserStatus
    {
        return $this->getEnumProperty(
            self::TRANSITIONING_TO_STATUS,
            \Okta\User\UserStatus::class,
        );
    }

    /**
     * Creates a new user in your Okta organization with or without credentials.
     */
    function create(\Okta\User\CreateUserRequest $body, array $queryParameters = []) : \Okta\User\User 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($body)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\User(null, $body);
    }
    /**
     * Fetches a user from your Okta organization.
     */
    function read($userId) : \Okta\User\User 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/${userId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\User\User(null, $body);
    }
    /**
     * Update a user's profile and/or credentials using strict-update semantics.
     */
    function update(array $queryParameters = []) : \Okta\User\User 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($this)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\User(null, $body);
    }
    /**
     * Deletes a user permanently.  This operation can only be performed on users that have a `DEPROVISIONED` status.  **This action cannot be recovered!**
     */
    function delete(array $queryParameters = [])
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
    }
    /**
     * Fetches appLinks for all direct or indirect (via group membership) assigned applications.
     */
    function listAppLinks() : \Okta\User\AppLink 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/appLinks"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\User\AppLink(null, $body);
    }
    /**
     * Changes a user's password by validating the user's current password. This operation can only be performed on users in `STAGED`, `ACTIVE`, `PASSWORD_EXPIRED`, or `RECOVERY` status that have a valid password credential
     */
    function changePassword(\Okta\User\ChangePasswordRequest $changePasswordRequest, array $queryParameters = []) : \Okta\User\UserCredentials 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/credentials/change_password"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($changePasswordRequest)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\UserCredentials(null, $body);
    }
    /**
     * Changes a user's recovery question & answer credential by validating the user's current password.  This operation can only be performed on users in **STAGED**, **ACTIVE** or **RECOVERY** `status` that have a valid password credential
     */
    function changeRecoveryQuestion(\Okta\User\UserCredentials $userCredentials) : \Okta\User\UserCredentials 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/credentials/change_recovery_question"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($userCredentials)
                ->executeRequest();
        return new \Okta\User\UserCredentials(null, $body);
    }
    /**
     * Sets a new password for a user by validating the user's answer to their current recovery question
     */
    function forgotPasswordSetNewPassword(\Okta\User\UserCredentials $user, array $queryParameters = []) : \Okta\User\ForgotPasswordResponse 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/credentials/forgot_password"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($user)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\ForgotPasswordResponse(null, $body);
    }
    /**
     * Generates a one-time token (OTT) that can be used to reset a user's password
     */
    function forgotPasswordGenerateOneTimeToken(array $queryParameters = []) : \Okta\User\ForgotPasswordResponse 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/credentials/forgot_password"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\ForgotPasswordResponse(null, $body);
    }
    /**
     * Assigns a role to a user.
     */
    function assignRole(\Okta\Role\AssignRoleRequest $assignRoleRequest, array $queryParameters = []) : \Okta\User\Role 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/roles"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($assignRoleRequest)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\Role(null, $body);
    }
    /**
     * Unassigns a role from a user.
     */
    function removeRole($roleId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/roles/${roleId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function listGroupTargets($roleId, array $queryParameters = []) : \Okta\Group\Group 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/roles/${roleId}/targets/groups"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Group\Group(null, $body);
    }
    /**
     * Success
     */
    function removeGroupTarget($roleId, $groupId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/roles/${roleId}/targets/groups/${groupId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function addGroupTarget($roleId, $groupId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/roles/${roleId}/targets/groups/${groupId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Lists all roles assigned to a user.
     */
    function listAssignedRoles(array $queryParameters = []) : \Okta\User\Role 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/roles"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\Role(null, $body);
    }
    /**
     * Success
     */
    function addAllAppsAsTarget($roleId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/roles/${roleId}/targets/catalog/apps"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Fetches the groups of which the user is a member.
     */
    function listGroups() : \Okta\Group\Group 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/groups"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Group\Group(null, $body);
    }
    /**
     * Lists all grants for the specified user
     */
    function listGrants(array $queryParameters = []) : \Okta\Application\OAuth2ScopeConsentGrant 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/grants"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2ScopeConsentGrant(null, $body);
    }
    /**
     * Revokes all grants for a specified user
     */
    function revokeGrants()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/grants"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Revokes one grant for a specified user
     */
    function revokeGrant($grantId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/grants/${grantId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Revokes all grants for the specified user and client
     */
    function revokeGrantsForUserAndClient($clientId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/clients/${clientId}/grants"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Lists all refresh tokens issued for the specified User and Client.
     */
    function listRefreshTokensForUserAndClient($clientId, array $queryParameters = []) : \Okta\Application\OAuth2RefreshToken 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/clients/${clientId}/tokens"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2RefreshToken(null, $body);
    }
    /**
     * Revokes the specified refresh token.
     */
    function revokeTokenForUserAndClient($clientId, $tokenId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/clients/${clientId}/tokens/${tokenId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Gets a refresh token issued for the specified User and Client.
     */
    function getRefreshTokenForUserAndClient($clientId, $tokenId, array $queryParameters = []) : \Okta\Application\OAuth2RefreshToken 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/clients/${clientId}/tokens/${tokenId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\OAuth2RefreshToken(null, $body);
    }
    /**
     * Revokes all refresh tokens issued for the specified User and Client.
     */
    function revokeTokensForUserAndClient($clientId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/clients/${clientId}/tokens"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Lists all client resources for which the specified user has grants or tokens.
     */
    function listClients() : \Okta\Application\OAuth2Client 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/clients"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Application\OAuth2Client(null, $body);
    }
    /**
     * Activates a user.  This operation can only be performed on users with a `STAGED` status.  Activation of a user is an asynchronous operation. The user will have the `transitioningToStatus` property with a value of `ACTIVE` during activation to indicate that the user hasn't completed the asynchronous operation.  The user will have a status of `ACTIVE` when the activation process is complete.
     */
    function activate(array $queryParameters = []) : \Okta\User\UserActivationToken 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/lifecycle/activate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\UserActivationToken(null, $body);
    }
    /**
     * Reactivates a user.  This operation can only be performed on users with a `PROVISIONED` status.  This operation restarts the activation workflow if for some reason the user activation was not completed when using the activationToken from [Activate User](#activate-user).
     */
    function reactivate(array $queryParameters = []) : \Okta\User\UserActivationToken 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/lifecycle/reactivate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\UserActivationToken(null, $body);
    }
    /**
     * Deactivates a user.  This operation can only be performed on users that do not have a `DEPROVISIONED` status.  Deactivation of a user is an asynchronous operation.  The user will have the `transitioningToStatus` property with a value of `DEPROVISIONED` during deactivation to indicate that the user hasn't completed the asynchronous operation.  The user will have a status of `DEPROVISIONED` when the deactivation process is complete.
     */
    function deactivate(array $queryParameters = [])
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/lifecycle/deactivate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
    }
    /**
     * Suspends a user.  This operation can only be performed on users with an `ACTIVE` status.  The user will have a status of `SUSPENDED` when the process is complete.
     */
    function suspend()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/lifecycle/suspend"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Unsuspends a user and returns them to the `ACTIVE` state.  This operation can only be performed on users that have a `SUSPENDED` status.
     */
    function unsuspend()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/lifecycle/unsuspend"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Generates a one-time token (OTT) that can be used to reset a user's password.  The OTT link can be automatically emailed to the user or returned to the API caller and distributed using a custom flow.
     */
    function resetPassword(array $queryParameters = []) : \Okta\User\ResetPasswordToken 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/lifecycle/reset_password"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\ResetPasswordToken(null, $body);
    }
    /**
     * This operation transitions the user to the status of `PASSWORD_EXPIRED` so that the user is required to change their password at their next login.
     */
    function expirePassword() : \Okta\User\User 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/lifecycle/expire_password?tempPassword=false"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\User\User(null, $body);
    }
    /**
     * This operation transitions the user to the status of `PASSWORD_EXPIRED` and the user's password is reset to a temporary password that is returned.
     */
    function expirePasswordAndGetTemporaryPassword() : \Okta\User\TempPassword 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/lifecycle/expire_password?tempPassword=true"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\User\TempPassword(null, $body);
    }
    /**
     * Unlocks a user with a `LOCKED_OUT` status and returns them to `ACTIVE` status.  Users will be able to login with their current password.
     */
    function unlock()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/lifecycle/unlock"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * This operation resets all factors for the specified user. All MFA factor enrollments returned to the unenrolled state. The user's status remains ACTIVE. This link is present only if the user is currently enrolled in one or more MFA factors.
     */
    function resetFactors()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/lifecycle/reset_factors"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Unenrolls an existing factor for the specified user, allowing the user to enroll a new factor.
     */
    function deleteFactor($factorId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/factors/${factorId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Adds a user to a group with 'OKTA_GROUP' type.
     */
    function addToGroup($groupId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/${groupId}/users/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Enrolls a user with a supported factor.
     */
    function enrollFactor(\Okta\UserFactor\UserFactor $body, array $queryParameters = []) : \Okta\UserFactor\UserFactor 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/factors"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($body)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\UserFactor\UserFactor(null, $body);
    }
    /**
     * Enumerates all the supported factors that can be enrolled for the specified user
     */
    function listSupportedFactors() : \Okta\UserFactor\UserFactor 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/factors/catalog"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\UserFactor\UserFactor(null, $body);
    }
    /**
     * Enumerates all the enrolled factors for the specified user
     */
    function listFactors() : \Okta\UserFactor\UserFactor 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/factors"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\UserFactor\UserFactor(null, $body);
    }
    /**
     * Enumerates all available security questions for a user's `question` factor
     */
    function listSupportedSecurityQuestions() : \Okta\UserFactor\SecurityQuestion 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/factors/questions"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\UserFactor\SecurityQuestion(null, $body);
    }
    /**
     * Fetches a factor for the specified user
     */
    function getFactor($factorId) : \Okta\UserFactor\UserFactor 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/factors/${factorId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\UserFactor\UserFactor(null, $body);
    }
    /**
     * 
     */
    function setLinkedObject($primaryRelationshipName, $primaryUserId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/linkedObjects/${primaryRelationshipName}/${primaryUserId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Lists the IdPs associated with the user.
     */
    function listIdentityProviders() : \Okta\IdentityProvider\IdentityProvider 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/idps"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\IdentityProvider\IdentityProvider(null, $body);
    }
    /**
     * Get linked objects for a user, relationshipName can be a primary or associated relationship name
     */
    function getLinkedObjects($relationshipName, array $queryParameters = []) : \Okta\User\ResponseLinks 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/linkedObjects/${relationshipName}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\ResponseLinks(null, $body);
    }
    /**
     * Removes all active identity provider sessions. This forces the user to authenticate on the next operation. Optionally revokes OpenID Connect and OAuth refresh and access tokens issued to the user.
     */
    function clearSessions(array $queryParameters = [])
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/sessions"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
    }
    /**
     * Delete linked objects for a user, relationshipName can be ONLY a primary relationship name
     */
    function removeLinkedObject($relationshipName)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/".$this->id."/linkedObjects/${relationshipName}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }

}