<?php
/******************************************************************************
 * Copyright 2017 - Present Okta, Inc.                                        *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

 namespace Okta\Tests\Integration;

use Okta\Okta;
use Okta\Group\Group;
use Okta\Role\RoleType;
use Okta\User\UserProfile;
use Okta\Group\GroupProfile;
use Okta\GroupRule\GroupRule;
use Okta\User\UserCredentials;
use Okta\Role\AssignRoleRequest;
use Okta\User\CreateUserRequest;
use Okta\User\PasswordCredential;
use Okta\GroupRule\GroupRuleAction;
use Okta\Application\SwaApplication;
use Okta\GroupRule\GroupRuleConditions;
use Okta\GroupRule\GroupRuleExpression;
use Tightenco\Collect\Support\Collection;
use Okta\GroupRule\GroupRuleUserCondition;
use Okta\GroupRule\GroupRuleGroupCondition;
use Okta\Application\SwaApplicationSettings;
use Okta\GroupRule\GroupRuleGroupAssignment;
use Okta\GroupRule\GroupRulePeopleCondition;
use Okta\Application\SwaApplicationSettingsApplication;

class GroupsTest extends \BaseIntegrationTestCase
{
    /** @var \Okta\Okta */
    private $okta;

    protected function setup(): void
    {
        parent::setup();

        $this->okta = new Okta;
    }
    /** @test */
    public function get_group()
    {
        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} GetGroup Test")
                        ->setDescription("{$this->sdkPrefix} GetGroup Description")
                )
            );

        try {
            $foundGroup = $this->okta->group->getGroup($group->id);
            $this->assertInstanceOf(Group::class, $foundGroup, "Returned group was not an instance of " . Group::class);
            $this->assertEquals($group->id, $foundGroup->id, "Returned group was not the created group");
        }
        finally {
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function list_groups()
    {
        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} ListGroups Test")
                        ->setDescription("{$this->sdkPrefix} ListGroups Description")
                )
            );

        try {
            $groups = $this->okta->group->listGroups();
            $this->assertInstanceOf(Collection::class, $groups, "Returned group was not an instance of " . Collection::class);
            $this->assertInstanceOf(Group::class, $groups->first(), "First item in collection was not an instance of " . Group::class);

            $this->assertTrue($groups->contains(function ($obj) use ($group) {
                return $obj->id == $group->id;
            }));
        }
        finally {
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function search_groups()
    {
        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} searchGroups Test")
                        ->setDescription("{$this->sdkPrefix} searchGroups Description")
                )
            );

        try {
            $groups = $this->okta->group->listGroups(['q'=>"{$this->sdkPrefix} searchGroups Test"]);
            $this->assertInstanceOf(Collection::class, $groups, "Returned group was not an instance of " . Collection::class);
            $this->assertInstanceOf(Group::class, $groups->first(), "First item in collection was not an instance of " . Group::class);
            $this->assertCount(1, $groups, "Listgroups search returned more than one item");
            $this->assertEquals($group->id, $groups->first()->id, "Returned group was not correct");
        }
        finally {
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function update_group()
    {
        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} updateGroup Test")
                        ->setDescription("{$this->sdkPrefix} updateGroup Description")
                )
            );

        try {

            $profile = $group->getProfile();
            $profile->setDescription("{$this->sdkPrefix} UpdatedGroup Description");
            $group->setProfile($profile);

            $updatedGroup = $this->okta->group->updateGroup($group->id, $group);
            $this->assertInstanceOf(Group::class, $updatedGroup, "Returned group was not an instance of " . Group::class);
            $this->assertEquals("{$this->sdkPrefix} UpdatedGroup Description", $updatedGroup->profile->description, "Returned group was not correct");
        }
        finally {
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function add_user_to_group()
    {
        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} addUserToGroup Test")
                        ->setDescription("{$this->sdkPrefix} addUserToGroup Description")
                )
            );

        $user = $this->okta->user->createUser(
            (new CreateUserRequest())
                ->setProfile((new UserProfile())
                    ->setFirstName("{$this->sdkPrefix}")
                    ->setLastName("AddUserToGroup")
                    ->setEmail("addusertogroup@example.com")
                    ->setLogin("addUserToGroup@example.com"))
                ->setCredentials((new UserCredentials())
                    ->setPassword((new PasswordCredential())
                        ->setValue("Abcd1234")))
        );

        try {
            $this->okta->group->addUserToGroup($group->id, $user->id);
            sleep(1);
            $groupUsersList = $this->okta->group->listGroupUsers($group->id);
            $this->assertInstanceOf(Collection::class, $groupUsersList, "Returned group users list was not an instance of " . Collection::class);
            $this->assertCount(1, $groupUsersList, "Group Users should contain exactly 1 user");
            $groupUser = $groupUsersList->first();
            $this->assertEquals($user->id, $groupUser->id, "Group user was not correct");
        }
        finally {
            $this->okta->group->deleteGroup($group->id);
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function remove_user_from_group()
    {
        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} RemoveUserFromGroup Test")
                        ->setDescription("{$this->sdkPrefix} RemoveUserFromGroup Description")
                )
            );

        $user = $this->okta->user->createUser(
            (new CreateUserRequest())
                ->setProfile((new UserProfile())
                    ->setFirstName("{$this->sdkPrefix}")
                    ->setLastName("RemoveUserFromGroup")
                    ->setEmail("RemoveUserFromGroup@example.com")
                    ->setLogin("RemoveUserFromGroup@example.com"))
                ->setCredentials((new UserCredentials())
                    ->setPassword((new PasswordCredential())
                        ->setValue("Abcd1234")))
        );

        try {
            $this->okta->group->addUserToGroup($group->id, $user->id);
            sleep(1);
            $groupUsersList = $this->okta->group->listGroupUsers($group->id);
            $this->assertInstanceOf(Collection::class, $groupUsersList, "Returned group users list was not an instance of " . Collection::class);
            $this->assertCount(1, $groupUsersList, "Group Users should contain exactly 1 user");
            $groupUser = $groupUsersList->first();
            $this->assertEquals($user->id, $groupUser->id, "Group user was not correct");

            $this->okta->group->removeUserFromGroup($group->id, $user->id);
            sleep(1);
            $groupUsersList = $this->okta->group->listGroupUsers($group->id);
            $this->assertCount(0, $groupUsersList, "Group Users should not contain any users");

        }
        finally {
            $this->okta->group->deleteGroup($group->id);
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function remove_deleted_user_from_group()
    {
        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} removeDeletedUserFromGroup Test")
                        ->setDescription("{$this->sdkPrefix} removeDeletedUserFromGroup Description")
                )
            );

        $user = $this->okta->user->createUser(
            (new CreateUserRequest())
                ->setProfile((new UserProfile())
                    ->setFirstName("{$this->sdkPrefix}")
                    ->setLastName("removeDeletedUserFromGroup")
                    ->setEmail("removeDeletedUserFromGroup@example.com")
                    ->setLogin("removeDeletedUserFromGroup@example.com"))
                ->setCredentials((new UserCredentials())
                    ->setPassword((new PasswordCredential())
                        ->setValue("Abcd1234")))
        );

        try {
            $this->okta->group->addUserToGroup($group->id, $user->id);

            $groupUsersList = $this->okta->group->listGroupUsers($group->id);
            $this->assertInstanceOf(Collection::class, $groupUsersList, "Returned group users list was not an instance of " . Collection::class);
            $this->assertCount(1, $groupUsersList, "Group Users should contain exactly 1 user");
            $groupUser = $groupUsersList->first();
            $this->assertEquals($user->id, $groupUser->id, "Group user was not correct");

            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);

            $groupUsersList = $this->okta->group->listGroupUsers($group->id);
            $this->assertCount(0, $groupUsersList, "Group Users should not contain any users");

        }
        finally {
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function remove_group()
    {
        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} deleteGroup Test")
                        ->setDescription("{$this->sdkPrefix} deleteGroup Description")
                )
            );



        $this->assertInstanceOf(Group::class, $group, "Returned group was not an instance of " . Group::class);

        $this->okta->group->deleteGroup($group->id);

        $this->expectException(\Okta\Exceptions\ResourceException::class);
        $this->okta->group->getGroup($group->id);
    }

    /** @test */
    public function create_group()
    {
        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} GetGroup Test")
                        ->setDescription("{$this->sdkPrefix} GetGroup Description")
                )
            );

        try {
            $this->assertInstanceOf(Group::class, $group, "Returned group was not an instance of " . Group::class);
            $this->assertEquals("{$this->sdkPrefix} GetGroup Test", $group->profile->name, "Returned group was not the created group");
        }
        finally {
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function list_roles_assigned_to_group()
    {
        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} listRolesAssignedToGroup
                         Test")
                        ->setDescription("{$this->sdkPrefix} listRolesAssignedToGroup
                         Description")
                )
            );

        try {
            $role1 = $this->okta->group->assignRoleToGroup(
                (new AssignRoleRequest())
                    ->setType(new RoleType(RoleType::USER_ADMIN)),
                $group->id
            );

            $role2 = $this->okta->group->assignRoleToGroup(
                (new AssignRoleRequest())
                    ->setType(new RoleType(RoleType::APP_ADMIN)),
                $group->id
            );

            $roles = $this->okta->group->listGroupAssignedRoles($group->id);
            $this->assertInstanceOf(Collection::class, $roles, "Listed group assigned roles did not return " . Collection::class);

            $this->assertTrue($roles->contains(function ($obj) use ($role1) {
                return $obj->id == $role1->id;
            }));
            $this->assertTrue($roles->contains(function ($obj) use ($role2) {
                return $obj->id == $role2->id;
            }));
        }
        finally {
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function unassign_role_for_group()
    {
        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} unassignRoleForGroup
                         Test")
                        ->setDescription("{$this->sdkPrefix} unassignRoleForGroup
                         Description")
                )
            );

        try {
            $role = $this->okta->group->assignRoleToGroup(
                (new AssignRoleRequest())
                    ->setType(new RoleType(RoleType::USER_ADMIN)),
                $group->id
            );

            $roles = $this->okta->group->listGroupAssignedRoles($group->id);
            $this->assertInstanceOf(Collection::class, $roles, "Listed group assigned roles did not return " . Collection::class);

            $this->assertTrue($roles->contains(function ($obj) use ($role) {
                return $obj->id == $role->id;
            }));

            $this->okta->group->removeRoleFromGroup($group->id, $role->id);
            $roles = $this->okta->group->listGroupAssignedRoles($group->id);
            $this->assertFalse($roles->contains(function ($obj) use ($role) {
                return $obj->id == $role->id;
            }));
        }
        finally {
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function list_group_targets_for_group()
    {
        $group1 = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} ListGroupTargetsForGroup1 Test")
                        ->setDescription("{$this->sdkPrefix} ListGroupTargetsForGroup1 Description")
                )
            );

        $group2 = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} ListGroupTargetsForGroup2 Test")
                        ->setDescription("{$this->sdkPrefix} ListGroupTargetsForGroup2 Description")
                )
            );



        try {
            $role = $this->okta->group->assignRoleToGroup(
                (new AssignRoleRequest())
                    ->setType(new RoleType(RoleType::USER_ADMIN)),
                $group1->id
            );

            $this->okta->group->addGroupTargetToGroupAdministratorRoleForGroup($group1->id, $role->id, $group2->id);

            $groups = $this->okta->group->listGroupTargetsForGroupRole($group1->id, $role->id);
            $this->assertInstanceOf(Collection::class, $groups, "Listed groups did not return " . Collection::class);
            $this->assertNotEmpty($groups, "Groups list should not be empty");

            $this->assertTrue($groups->contains(function ($obj) use ($group2) {
                return $obj->id == $group2->id;
            }));
        }
        finally {
            $this->okta->group->deleteGroup($group1->id);
            $this->okta->group->deleteGroup($group2->id);
        }
    }

    /** @test */
    public function remove_group_target_from_group_administrator_role_given_to_group()
    {
        $group1 = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} removeGroupTargetFromGroupAdminRoleGivenToGroup1 Test")
                        ->setDescription("{$this->sdkPrefix} removeGroupTargetFromGroupAdminRoleGivenToGroup1 Description")
                )
            );

        $group2 = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} removeGroupTargetFromGroupAdminRoleGivenToGroup2 Test")
                        ->setDescription("{$this->sdkPrefix} removeGroupTargetFromGroupAdminRoleGivenToGroup2 Description")
                )
            );

        $group3 = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} removeGroupTargetFromGroupAdminRoleGivenToGroup3 Test")
                        ->setDescription("{$this->sdkPrefix} removeGroupTargetFromGroupAdminRoleGivenToGroup3 Description")
                )
            );

        try {
            $role = $this->okta->group->assignRoleToGroup(
                (new AssignRoleRequest())
                    ->setType(new RoleType(RoleType::USER_ADMIN)),
                $group1->id
            );

            $this->okta->group->addGroupTargetToGroupAdministratorRoleForGroup($group1->id, $role->id, $group2->id);
            $this->okta->group->addGroupTargetToGroupAdministratorRoleForGroup($group1->id, $role->id, $group3->id);

            $groups = $this->okta->group->listGroupTargetsForGroupRole($group1->id, $role->id);
            $this->assertInstanceOf(Collection::class, $groups, "Listed groups did not return " . Collection::class);
            $this->assertNotEmpty($groups, "Groups list should not be empty");

            $this->assertTrue($groups->contains(function ($obj) use ($group2) {
                return $obj->id == $group2->id;
            }));

            $this->assertTrue($groups->contains(function ($obj) use ($group3) {
                return $obj->id == $group3->id;
            }));

            $this->okta->group->removeGroupTargetFromGroupAdministratorRoleGivenToGroup($group1->id, $role->id, $group2->id);
            $groups = $this->okta->group->listGroupTargetsForGroupRole($group1->id, $role->id);
            $this->assertFalse($groups->contains(function ($obj) use ($group2) {
                return $obj->id == $group2->id;
            }));

        }
        finally {
            $this->okta->group->deleteGroup($group1->id);
            $this->okta->group->deleteGroup($group2->id);
            $this->okta->group->deleteGroup($group3->id);
        }
    }

    /** @test */
    public function create_group_rule()
    {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest())
                ->setProfile((new UserProfile())
                    ->setFirstName("{$this->sdkPrefix}")
                    ->setLastName("createGroupRule")
                    ->setEmail("createGroupRule@example.com")
                    ->setLogin("createGroupRule@example.com"))
                ->setCredentials((new UserCredentials())
                    ->setPassword((new PasswordCredential())
                        ->setValue("Abcd1234")))
        );

        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} createGroupRule Test")
                        ->setDescription("{$this->sdkPrefix} createGroupRule Description")
                )
        );

        $groupRule = $this->okta->group->createGroupRule(
            (new GroupRule())
                ->setType("group_rule")
                ->setName("{$this->sdkPrefix} US Group Rule")
                ->setConditions(
                    (new GroupRuleConditions())
                        ->setPeople(
                            (new GroupRulePeopleCondition())
                                ->setUsers(
                                    (new GroupRuleUserCondition())
                                        ->setExclude([
                                            $user->id
                                        ])
                                )
                                ->setGroups(
                                    (new GroupRuleGroupCondition())
                                        ->setExclude([])
                                )
                        )
                        ->setExpression(
                            (new GroupRuleExpression())
                                ->setValue("user.countryCode==\"US\"")
                                ->setType("urn:okta:expression:1.0")
                        )
                )
                ->setActions(
                    (new GroupRuleAction())
                        ->setAssignUserToGroups(
                            (new GroupRuleGroupAssignment())
                                ->setGroupIds([
                                    $group->id
                                ])
                        )
                )
        );

        try {
            $this->assertNotNull($groupRule, "Group Rule should not be null");
            $this->assertNotNull($groupRule->id, "Group Rule did not create");
            $this->assertEquals("group_rule", $groupRule->getType(), "Group Rule Type not correct");
            $this->assertEquals("{$this->sdkPrefix} US Group Rule", $groupRule->getName(), "Group Rule Name not correct");
        }
        finally {
            $this->okta->group->deactivateGroupRule($groupRule->id);
            $this->okta->group->deleteGroupRule($groupRule->id);
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
            $this->okta->group->deleteGroup($group->id);
        }

    }

    /** @test */
    public function update_group_rule()
    {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest())
                ->setProfile((new UserProfile())
                    ->setFirstName("{$this->sdkPrefix}")
                    ->setLastName("updateGroupRule")
                    ->setEmail("updateGroupRule@example.com")
                    ->setLogin("updateGroupRule@example.com"))
                ->setCredentials((new UserCredentials())
                    ->setPassword((new PasswordCredential())
                        ->setValue("Abcd1234")))
        );

        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} updateGroupRule Test")
                        ->setDescription("{$this->sdkPrefix} updateGroupRule Description")
                )
        );

        $groupRule = $this->okta->group->createGroupRule(
            (new GroupRule())
                ->setType("group_rule")
                ->setName("{$this->sdkPrefix} US Group Rule")
                ->setConditions(
                    (new GroupRuleConditions())
                        ->setPeople(
                            (new GroupRulePeopleCondition())
                                ->setUsers(
                                    (new GroupRuleUserCondition())
                                        ->setExclude([
                                            $user->id
                                        ])
                                )
                                ->setGroups(
                                    (new GroupRuleGroupCondition())
                                        ->setExclude([])
                                )
                        )
                        ->setExpression(
                            (new GroupRuleExpression())
                                ->setValue("user.countryCode==\"US\"")
                                ->setType("urn:okta:expression:1.0")
                        )
                )
                ->setActions(
                    (new GroupRuleAction())
                        ->setAssignUserToGroups(
                            (new GroupRuleGroupAssignment())
                                ->setGroupIds([
                                    $group->id
                                ])
                        )
                )
        );



        try {
            $groupRule = $this->okta->group->getGroupRule($groupRule->id);
            $groupRule->setName("{$groupRule->name} updated");
            $updatedGroupRule = $this->okta->group->updateGroupRule($groupRule->id, $groupRule);
            $this->assertEquals("{$this->sdkPrefix} US Group Rule updated", $updatedGroupRule->getName(), "Group Rule Name not correct");
        }
        finally {
            $this->okta->group->deactivateGroupRule($groupRule->id);
            $this->okta->group->deleteGroupRule($groupRule->id);
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function list_group_rules()
    {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest())
                ->setProfile((new UserProfile())
                    ->setFirstName("{$this->sdkPrefix}")
                    ->setLastName("listGroupRules")
                    ->setEmail("listGroupRules@example.com")
                    ->setLogin("listGroupRules@example.com"))
                ->setCredentials((new UserCredentials())
                    ->setPassword((new PasswordCredential())
                        ->setValue("Abcd1234")))
        );

        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} listGroupRules Test")
                        ->setDescription("{$this->sdkPrefix} listGroupRules Description")
                )
        );

        $groupRule = $this->okta->group->createGroupRule(
            (new GroupRule())
                ->setType("group_rule")
                ->setName("{$this->sdkPrefix} US Group Rule")
                ->setConditions(
                    (new GroupRuleConditions())
                        ->setPeople(
                            (new GroupRulePeopleCondition())
                                ->setUsers(
                                    (new GroupRuleUserCondition())
                                        ->setExclude([
                                            $user->id
                                        ])
                                )
                                ->setGroups(
                                    (new GroupRuleGroupCondition())
                                        ->setExclude([])
                                )
                        )
                        ->setExpression(
                            (new GroupRuleExpression())
                                ->setValue("user.countryCode==\"US\"")
                                ->setType("urn:okta:expression:1.0")
                        )
                )
                ->setActions(
                    (new GroupRuleAction())
                        ->setAssignUserToGroups(
                            (new GroupRuleGroupAssignment())
                                ->setGroupIds([
                                    $group->id
                                ])
                        )
                )
        );



        try {
            $groupRules = $this->okta->group->listGroupRules();
            $this->assertNotNull($groupRules, "Group Rules should not be null");
            $this->assertInstanceOf(Collection::class, $groupRules, "Listed group rules assigned roles did not return " . Collection::class);
            $this->assertTrue($groupRules->count() > 0);
            $this->assertTrue($groupRules->contains(function ($obj) use ($groupRule) {
                return $obj->id == $groupRule->id;
            }));

        }
        finally {
            $this->okta->group->deactivateGroupRule($groupRule->id);
            $this->okta->group->deleteGroupRule($groupRule->id);
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function get_group_rule()
    {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest())
                ->setProfile((new UserProfile())
                    ->setFirstName("{$this->sdkPrefix}")
                    ->setLastName("getGroupRule")
                    ->setEmail("getGroupRule@example.com")
                    ->setLogin("getGroupRule@example.com"))
                ->setCredentials((new UserCredentials())
                    ->setPassword((new PasswordCredential())
                        ->setValue("Abcd1234")))
        );

        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} getGroupRule Test")
                        ->setDescription("{$this->sdkPrefix} getGroupRule Description")
                )
        );

        $groupRule = $this->okta->group->createGroupRule(
            (new GroupRule())
                ->setType("group_rule")
                ->setName("{$this->sdkPrefix} US Group Rule")
                ->setConditions(
                    (new GroupRuleConditions())
                        ->setPeople(
                            (new GroupRulePeopleCondition())
                                ->setUsers(
                                    (new GroupRuleUserCondition())
                                        ->setExclude([
                                            $user->id
                                        ])
                                )
                                ->setGroups(
                                    (new GroupRuleGroupCondition())
                                        ->setExclude([])
                                )
                        )
                        ->setExpression(
                            (new GroupRuleExpression())
                                ->setValue("user.countryCode==\"US\"")
                                ->setType("urn:okta:expression:1.0")
                        )
                )
                ->setActions(
                    (new GroupRuleAction())
                        ->setAssignUserToGroups(
                            (new GroupRuleGroupAssignment())
                                ->setGroupIds([
                                    $group->id
                                ])
                        )
                )
        );



        try {
            $foundGroupRule = $this->okta->group->getGroupRule($groupRule->id);
            $this->assertNotNull($foundGroupRule, "Found group rule should not be null");
            $this->assertInstanceOf(GroupRule::class, $foundGroupRule, "Found group rule was not an instance of " . GroupRule::class);
            $this->assertEquals($groupRule->id, $foundGroupRule->id, "Did not return the correct group rule");
        }
        finally {
            $this->okta->group->deactivateGroupRule($groupRule->id);
            $this->okta->group->deleteGroupRule($groupRule->id);
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function delete_group_rule()
    {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest())
                ->setProfile((new UserProfile())
                    ->setFirstName("{$this->sdkPrefix}")
                    ->setLastName("deleteGroupRule")
                    ->setEmail("deleteGroupRule@example.com")
                    ->setLogin("deleteGroupRule@example.com"))
                ->setCredentials((new UserCredentials())
                    ->setPassword((new PasswordCredential())
                        ->setValue("Abcd1234")))
        );

        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} deleteGroupRule Test")
                        ->setDescription("{$this->sdkPrefix} deleteGroupRule Description")
                )
        );

        $groupRule = $this->okta->group->createGroupRule(
            (new GroupRule())
                ->setType("group_rule")
                ->setName("{$this->sdkPrefix} US Group Rule")
                ->setConditions(
                    (new GroupRuleConditions())
                        ->setPeople(
                            (new GroupRulePeopleCondition())
                                ->setUsers(
                                    (new GroupRuleUserCondition())
                                        ->setExclude([
                                            $user->id
                                        ])
                                )
                                ->setGroups(
                                    (new GroupRuleGroupCondition())
                                        ->setExclude([])
                                )
                        )
                        ->setExpression(
                            (new GroupRuleExpression())
                                ->setValue("user.countryCode==\"US\"")
                                ->setType("urn:okta:expression:1.0")
                        )
                )
                ->setActions(
                    (new GroupRuleAction())
                        ->setAssignUserToGroups(
                            (new GroupRuleGroupAssignment())
                                ->setGroupIds([
                                    $group->id
                                ])
                        )
                )
        );



        try {
            $foundGroupRule = $this->okta->group->getGroupRule($groupRule->id);
            $this->assertNotNull($foundGroupRule, "Found group rule should not be null");

            $this->okta->group->deleteGroupRule($groupRule->id);
            sleep(3);
            $this->expectException(\Okta\Exceptions\ResourceException::class);
            $foundGroupRule = $this->okta->group->getGroupRule($groupRule->id);
        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function activate_group_rule()
    {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest())
                ->setProfile((new UserProfile())
                    ->setFirstName("{$this->sdkPrefix}")
                    ->setLastName("activateGroupRule")
                    ->setEmail("activateGroupRule@example.com")
                    ->setLogin("activateGroupRule@example.com"))
                ->setCredentials((new UserCredentials())
                    ->setPassword((new PasswordCredential())
                        ->setValue("Abcd1234")))
        );

        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} activateGroupRule Test")
                        ->setDescription("{$this->sdkPrefix} activateGroupRule Description")
                )
        );

        $groupRule = $this->okta->group->createGroupRule(
            (new GroupRule())
                ->setType("group_rule")
                ->setName("{$this->sdkPrefix} US Group Rule")
                ->setConditions(
                    (new GroupRuleConditions())
                        ->setPeople(
                            (new GroupRulePeopleCondition())
                                ->setUsers(
                                    (new GroupRuleUserCondition())
                                        ->setExclude([
                                            $user->id
                                        ])
                                )
                                ->setGroups(
                                    (new GroupRuleGroupCondition())
                                        ->setExclude([])
                                )
                        )
                        ->setExpression(
                            (new GroupRuleExpression())
                                ->setValue("user.countryCode==\"US\"")
                                ->setType("urn:okta:expression:1.0")
                        )
                )
                ->setActions(
                    (new GroupRuleAction())
                        ->setAssignUserToGroups(
                            (new GroupRuleGroupAssignment())
                                ->setGroupIds([
                                    $group->id
                                ])
                        )
                )
        );



        try {
            $this->assertTrue($groupRule->status == "INACTIVE", "Group Rule was not inactive");

            $this->okta->group->activateGroupRule($groupRule->id);
            sleep(3);
            $foundGroupRule = $this->okta->group->getGroupRule($groupRule->id);
            $this->assertTrue($foundGroupRule->status == "ACTIVE", "Group Rule was not active");
        }
        finally {
            $this->okta->group->deactivateGroupRule($groupRule->id);
            $this->okta->group->deleteGroupRule($groupRule->id);
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
            $this->okta->group->deleteGroup($group->id);
        }
    }

    /** @test */
    public function deactivate_group_rule()
    {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest())
                ->setProfile((new UserProfile())
                    ->setFirstName("{$this->sdkPrefix}")
                    ->setLastName("deactivateGroupRule")
                    ->setEmail("deactivateGroupRule@example.com")
                    ->setLogin("deactivateGroupRule@example.com"))
                ->setCredentials((new UserCredentials())
                    ->setPassword((new PasswordCredential())
                        ->setValue("Abcd1234")))
        );

        $group = $this->okta->group->createGroup(
            (new Group())
                ->setProfile(
                    (new GroupProfile())
                        ->setName("{$this->sdkPrefix} deactivateGroupRule Test")
                        ->setDescription("{$this->sdkPrefix} deactivateGroupRule Description")
                )
        );

        $groupRule = $this->okta->group->createGroupRule(
            (new GroupRule())
                ->setType("group_rule")
                ->setName("{$this->sdkPrefix} US Group Rule")
                ->setConditions(
                    (new GroupRuleConditions())
                        ->setPeople(
                            (new GroupRulePeopleCondition())
                                ->setUsers(
                                    (new GroupRuleUserCondition())
                                        ->setExclude([
                                            $user->id
                                        ])
                                )
                                ->setGroups(
                                    (new GroupRuleGroupCondition())
                                        ->setExclude([])
                                )
                        )
                        ->setExpression(
                            (new GroupRuleExpression())
                                ->setValue("user.countryCode==\"US\"")
                                ->setType("urn:okta:expression:1.0")
                        )
                )
                ->setActions(
                    (new GroupRuleAction())
                        ->setAssignUserToGroups(
                            (new GroupRuleGroupAssignment())
                                ->setGroupIds([
                                    $group->id
                                ])
                        )
                )
        );



        try {
            $this->okta->group->activateGroupRule($groupRule->id);
            $foundGroupRule = $this->okta->group->getGroupRule($groupRule->id);
            $this->assertTrue($foundGroupRule->status == "ACTIVE", "Group Rule was not active");

            $this->okta->group->deactivateGroupRule($groupRule->id);
            $foundGroupRule = $this->okta->group->getGroupRule($groupRule->id);
            $this->assertTrue($foundGroupRule->status == "INACTIVE", "Group Rule was not inactive");
        }
        finally {
            $this->okta->group->deactivateGroupRule($groupRule->id);
            $this->okta->group->deleteGroupRule($groupRule->id);
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
            $this->okta->group->deleteGroup($group->id);
        }
    }
}