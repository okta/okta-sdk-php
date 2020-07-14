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

class Group {

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
     * Enumerates groups in your organization with pagination. A subset of groups can be returned that match a supported filter expression or query.
     */
    function listGroups(array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups"
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
     * Adds a new group with &#x60;OKTA_GROUP&#x60; type to your organization.
     */
    function createGroup(\Okta\Group\Group $group) : \Okta\Group\Group 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($group)
            ->executeRequest();

        $responseModel = new \Okta\Group\Group(null, $body);
        return $responseModel;
    }

    /**
     * Lists all group rules for your organization.
     */
    function listGroupRules(array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/rules"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\GroupRule\GroupRule(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Creates a group rule to dynamically add users to the specified group if they match the condition
     */
    function createGroupRule(\Okta\GroupRule\GroupRule $groupRule) : \Okta\GroupRule\GroupRule 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/rules"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($groupRule)
            ->executeRequest();

        $responseModel = new \Okta\GroupRule\GroupRule(null, $body);
        return $responseModel;
    }

    /**
     * Removes a specific group rule by id from your organization
     */
    function deleteGroupRule($ruleId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/rules/${ruleId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Fetches a specific group rule by id from your organization
     */
    function getGroupRule($ruleId, array $queryParameters = []) : \Okta\GroupRule\GroupRule 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/rules/${ruleId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\GroupRule\GroupRule(null, $body);
        return $responseModel;
    }

    /**
     * Updates a group rule. Only &#x60;INACTIVE&#x60; rules can be updated.
     */
    function updateGroupRule($ruleId, \Okta\GroupRule\GroupRule $groupRule) : \Okta\GroupRule\GroupRule 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/rules/${ruleId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($groupRule)
            ->executeRequest();

        $responseModel = new \Okta\GroupRule\GroupRule(null, $body);
        return $responseModel;
    }

    /**
     * Activates a specific group rule by id from your organization
     */
    function activateGroupRule($ruleId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/rules/${ruleId}/lifecycle/activate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Deactivates a specific group rule by id from your organization
     */
    function deactivateGroupRule($ruleId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/rules/${ruleId}/lifecycle/deactivate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Removes a group with &#x60;OKTA_GROUP&#x60; type from your organization.
     */
    function deleteGroup($groupId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Lists all group rules for your organization.
     */
    function getGroup($groupId) : \Okta\Group\Group 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\Group\Group(null, $body);
        return $responseModel;
    }

    /**
     * Updates the profile for a group with &#x60;OKTA_GROUP&#x60; type from your organization.
     */
    function updateGroup($groupId, \Okta\Group\Group $group) : \Okta\Group\Group 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($group)
            ->executeRequest();

        $responseModel = new \Okta\Group\Group(null, $body);
        return $responseModel;
    }

    /**
     * Enumerates all applications that are assigned to a group.
     */
    function listAssignedApplicationsForGroup($groupId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/apps"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Application\Application(null, $item);
            $responseModel = $responseModel->resolve();
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

    /**
     * Success
     */
    function listGroupAssignedRoles($groupId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/roles"
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
     * Assigns a Role to a Group
     */
    function assignRoleToGroup(\Okta\Role\AssignRoleRequest $assignRoleRequest, $groupId, array $queryParameters = []) : \Okta\User\Role 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/roles"
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
     * Unassigns a Role from a Group
     */
    function removeRoleFromGroup($groupId, $roleId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/roles/${roleId}"
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
    function getRole($groupId, $roleId) : \Okta\User\Role 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/roles/${roleId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\User\Role(null, $body);
        return $responseModel;
    }

    /**
     * Lists all App targets for an &#x60;APP_ADMIN&#x60; Role assigned to a Group. This methods return list may include full Applications or Instances. The response for an instance will have an &#x60;ID&#x60; value, while Application will not have an ID.
     */
    function listApplicationTargetsForApplicationAdministratorRoleForGroup($groupId, $roleId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/roles/${roleId}/targets/catalog/apps"
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
    function removeApplicationTargetFromApplicationAdministratorRoleGivenToGroup($groupId, $roleId, $appName)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/roles/${roleId}/targets/catalog/apps/${appName}"
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
    function addApplicationTargetToAdminRoleGivenToGroup($groupId, $roleId, $appName)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/roles/${roleId}/targets/catalog/apps/${appName}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Remove App Instance Target to App Administrator Role given to a Group
     */
    function removeApplicationTargetFromAdministratorRoleGivenToGroup($groupId, $roleId, $appName, $applicationId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/roles/${roleId}/targets/catalog/apps/${appName}/${applicationId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Add App Instance Target to App Administrator Role given to a Group
     */
    function addApplicationInstanceTargetToAppAdminRoleGivenToGroup($groupId, $roleId, $appName, $applicationId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/roles/${roleId}/targets/catalog/apps/${appName}/${applicationId}"
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
    function listGroupTargetsForGroupRole($groupId, $roleId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/roles/${roleId}/targets/groups"
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
     * 
     */
    function removeGroupTargetFromGroupAdministratorRoleGivenToGroup($groupId, $roleId, $targetGroupId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/roles/${roleId}/targets/groups/${targetGroupId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * 
     */
    function addGroupTargetToGroupAdministratorRoleForGroup($groupId, $roleId, $targetGroupId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/roles/${roleId}/targets/groups/${targetGroupId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Enumerates all users that are a member of a group.
     */
    function listGroupUsers($groupId, array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/users"
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
     * Removes a user from a group with &#x27;OKTA_GROUP&#x27; type.
     */
    function removeUserFromGroup($groupId, $userId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/users/${userId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Adds a user to a group with &#x27;OKTA_GROUP&#x27; type.
     */
    function addUserToGroup($groupId, $userId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/groups/${groupId}/users/${userId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->executeRequest();

    }

}