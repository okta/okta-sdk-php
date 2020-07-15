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

class UserClient {

    /**
     * Lists users in your organization with pagination in most cases.  A subset of users can be returned that match a supported filter expression or search criteria.
     */
    function listUsers()
    {

    }

    /**
     * Creates a new user in your Okta organization with or without credentials.
     */
    function createUser()
    {

    }

    /**
     * 
     */
    function setLinkedObjectForUser()
    {

    }

    /**
     * Deletes a user permanently.  This operation can only be performed on users that have a &#x60;DEPROVISIONED&#x60; status.  **This action cannot be recovered!**
     */
    function deactivateOrDeleteUser()
    {

    }

    /**
     * Fetches a user from your Okta organization.
     */
    function getUser()
    {

    }

    /**
     * Fetch a user by &#x60;id&#x60;, &#x60;login&#x60;, or &#x60;login shortname&#x60; if the short name is unambiguous.
     */
    function partialUpdateUser()
    {

    }

    /**
     * Update a user&#x27;s profile and/or credentials using strict-update semantics.
     */
    function updateUser()
    {

    }

    /**
     * Fetches appLinks for all direct or indirect (via group membership) assigned applications.
     */
    function listAppLinks()
    {

    }

    /**
     * Lists all client resources for which the specified user has grants or tokens.
     */
    function listUserClients()
    {

    }

    /**
     * Revokes all grants for the specified user and client
     */
    function revokeGrantsForUserAndClient()
    {

    }

    /**
     * Lists all grants for a specified user and client
     */
    function listGrantsForUserAndClient()
    {

    }

    /**
     * Revokes all refresh tokens issued for the specified User and Client.
     */
    function revokeTokensForUserAndClient()
    {

    }

    /**
     * Lists all refresh tokens issued for the specified User and Client.
     */
    function listRefreshTokensForUserAndClient()
    {

    }

    /**
     * Revokes the specified refresh token.
     */
    function revokeTokenForUserAndClient()
    {

    }

    /**
     * Gets a refresh token issued for the specified User and Client.
     */
    function getRefreshTokenForUserAndClient()
    {

    }

    /**
     * Changes a user&#x27;s password by validating the user&#x27;s current password. This operation can only be performed on users in &#x60;STAGED&#x60;, &#x60;ACTIVE&#x60;, &#x60;PASSWORD_EXPIRED&#x60;, or &#x60;RECOVERY&#x60; status that have a valid password credential
     */
    function changePassword()
    {

    }

    /**
     * Changes a user&#x27;s recovery question &amp; answer credential by validating the user&#x27;s current password.  This operation can only be performed on users in **STAGED**, **ACTIVE** or **RECOVERY** &#x60;status&#x60; that have a valid password credential
     */
    function changeRecoveryQuestion()
    {

    }

    /**
     * Generates a one-time token (OTT) that can be used to reset a user&#x27;s password
     */
    function forgotPasswordGenerateOneTimeToken()
    {

    }

    /**
     * Sets a new password for a user by validating the user&#x27;s answer to their current recovery question
     */
    function forgotPasswordSetNewPassword()
    {

    }

    /**
     * Revokes all grants for a specified user
     */
    function revokeUserGrants()
    {

    }

    /**
     * Lists all grants for the specified user
     */
    function listUserGrants()
    {

    }

    /**
     * Revokes one grant for a specified user
     */
    function revokeUserGrant()
    {

    }

    /**
     * Gets a grant for the specified user
     */
    function getUserGrant()
    {

    }

    /**
     * Fetches the groups of which the user is a member.
     */
    function listUserGroups()
    {

    }

    /**
     * Lists the IdPs associated with the user.
     */
    function listUserIdentityProviders()
    {

    }

    /**
     * Activates a user.  This operation can only be performed on users with a &#x60;STAGED&#x60; status.  Activation of a user is an asynchronous operation. The user will have the &#x60;transitioningToStatus&#x60; property with a value of &#x60;ACTIVE&#x60; during activation to indicate that the user hasn&#x27;t completed the asynchronous operation.  The user will have a status of &#x60;ACTIVE&#x60; when the activation process is complete.
     */
    function activateUser()
    {

    }

    /**
     * Deactivates a user.  This operation can only be performed on users that do not have a &#x60;DEPROVISIONED&#x60; status.  Deactivation of a user is an asynchronous operation.  The user will have the &#x60;transitioningToStatus&#x60; property with a value of &#x60;DEPROVISIONED&#x60; during deactivation to indicate that the user hasn&#x27;t completed the asynchronous operation.  The user will have a status of &#x60;DEPROVISIONED&#x60; when the deactivation process is complete.
     */
    function deactivateUser()
    {

    }

    /**
     * This operation transitions the user to the status of &#x60;PASSWORD_EXPIRED&#x60; so that the user is required to change their password at their next login.
     */
    function expirePassword()
    {

    }

    /**
     * This operation transitions the user to the status of &#x60;PASSWORD_EXPIRED&#x60; and the user&#x27;s password is reset to a temporary password that is returned.
     */
    function expirePasswordAndGetTemporaryPassword()
    {

    }

    /**
     * Reactivates a user.  This operation can only be performed on users with a &#x60;PROVISIONED&#x60; status.  This operation restarts the activation workflow if for some reason the user activation was not completed when using the activationToken from [Activate User](#activate-user).
     */
    function reactivateUser()
    {

    }

    /**
     * This operation resets all factors for the specified user. All MFA factor enrollments returned to the unenrolled state. The user&#x27;s status remains ACTIVE. This link is present only if the user is currently enrolled in one or more MFA factors.
     */
    function resetFactors()
    {

    }

    /**
     * Generates a one-time token (OTT) that can be used to reset a user&#x27;s password.  The OTT link can be automatically emailed to the user or returned to the API caller and distributed using a custom flow.
     */
    function resetPassword()
    {

    }

    /**
     * Suspends a user.  This operation can only be performed on users with an &#x60;ACTIVE&#x60; status.  The user will have a status of &#x60;SUSPENDED&#x60; when the process is complete.
     */
    function suspendUser()
    {

    }

    /**
     * Unlocks a user with a &#x60;LOCKED_OUT&#x60; status and returns them to &#x60;ACTIVE&#x60; status.  Users will be able to login with their current password.
     */
    function unlockUser()
    {

    }

    /**
     * Unsuspends a user and returns them to the &#x60;ACTIVE&#x60; state.  This operation can only be performed on users that have a &#x60;SUSPENDED&#x60; status.
     */
    function unsuspendUser()
    {

    }

    /**
     * Delete linked objects for a user, relationshipName can be ONLY a primary relationship name
     */
    function removeLinkedObjectForUser()
    {

    }

    /**
     * Get linked objects for a user, relationshipName can be a primary or associated relationship name
     */
    function getLinkedObjectsForUser()
    {

    }

    /**
     * Lists all roles assigned to a user.
     */
    function listAssignedRolesForUser()
    {

    }

    /**
     * Assigns a role to a user.
     */
    function assignRoleToUser()
    {

    }

    /**
     * Unassigns a role from a user.
     */
    function removeRoleFromUser()
    {

    }

    /**
     * Lists all App targets for an &#x60;APP_ADMIN&#x60; Role assigned to a User. This methods return list may include full Applications or Instances. The response for an instance will have an &#x60;ID&#x60; value, while Application will not have an ID.
     */
    function listApplicationTargetsForApplicationAdministratorRoleForUser()
    {

    }

    /**
     * Success
     */
    function addAllAppsAsTargetToRole()
    {

    }

    /**
     * Success
     */
    function removeApplicationTargetFromApplicationAdministratorRoleForUser()
    {

    }

    /**
     * Success
     */
    function addApplicationTargetToAdminRoleForUser()
    {

    }

    /**
     * Remove App Instance Target to App Administrator Role given to a User
     */
    function removeApplicationTargetFromAdministratorRoleForUser()
    {

    }

    /**
     * Add App Instance Target to App Administrator Role given to a User
     */
    function addApplicationTargetToAppAdminRoleForUser()
    {

    }

    /**
     * Success
     */
    function listGroupTargetsForRole()
    {

    }

    /**
     * Success
     */
    function removeGroupTargetFromRole()
    {

    }

    /**
     * Success
     */
    function addGroupTargetToRole()
    {

    }

    /**
     * Removes all active identity provider sessions. This forces the user to authenticate on the next operation. Optionally revokes OpenID Connect and OAuth refresh and access tokens issued to the user.
     */
    function clearUserSessions()
    {

    }

}