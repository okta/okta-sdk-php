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
use Okta\User\Role;
use Okta\User\User;
use Okta\Group\Group;
use Okta\Role\RoleType;
use Okta\User\UserStatus;
use Okta\User\UserProfile;
use Okta\User\TempPassword;
use Okta\Group\GroupProfile;
use Okta\Resource\Collection;
use Okta\User\UserCredentials;
use Okta\Role\AssignRoleRequest;
use Okta\User\CreateUserRequest;
use Okta\User\PasswordCredential;
use Okta\User\ResetPasswordToken;
use Okta\User\ChangePasswordRequest;
use Okta\User\AuthenticationProvider;
use Okta\User\ForgotPasswordResponse;
use Okta\User\AuthenticationProviderType;
use Okta\User\RecoveryQuestionCredential;

class UsersTest extends \BaseIntegrationTestCase
{
    /** @var \Okta\Okta */
    private $okta;

    protected function setup(): void
    {
        parent::setup();

        $this->okta = new Okta;
    }

    /** @test */
    public function list_users()
    {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("ListUsers")
                        ->setEmail("{$this->sdkPrefix}listUsers@example.com")
                        ->setLogin("{$this->sdkPrefix}listUsers@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                )
        );

        try {
            $foundUsers = $this->okta->user->listUsers();
            $this->assertInstanceOf(Collection::class, $foundUsers, "Listing user did not return instance of " . Collection::class);
            $this->assertTrue($foundUsers->count() > 0, "user count should be more than 0");

            $foundUsers->each(function($foundUser) {
                $this->assertInstanceOf(User::class, $foundUser, "foundUser is not an instance of " . User::class);
            });

        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function list_users_paged()
    {
        $user1 = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("ListUsers")
                        ->setEmail("{$this->sdkPrefix}listUsers1@example.com")
                        ->setLogin("{$this->sdkPrefix}listUsers1@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                )
        );

        $user2 = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("ListUsers")
                        ->setEmail("{$this->sdkPrefix}listUsers2@example.com")
                        ->setLogin("{$this->sdkPrefix}listUsers2@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                )
        );

        try {
            $foundUser = $this->okta->user->listUsers(['limit'=>'1']);
            $foundUser1 = $foundUser->first();
            $this->assertInstanceOf(Collection::class, $foundUser, "Listing user did not return instance of " . Collection::class);
            $this->assertInstanceOf(User::class, $foundUser1, "foundUser1 is not an instance of " . User::class);
            $this->assertTrue($foundUser->count() == 1, "user count should be 1");

            $foundUser = $foundUser->nextSet();
            $foundUser2 = $foundUser->first();
            $this->assertInstanceOf(User::class, $foundUser2, "foundUser2 is not an instance of " . User::class);
            $this->assertInstanceOf(Collection::class, $foundUser, "Listing user did not return instance of " . Collection::class);
            $this->assertTrue($foundUser->count() == 1, "user count should be 1");

        }
        finally {
            $this->okta->user->deactivateUser($user1->id);
            $this->okta->user->deactivateOrDeleteUser($user1->id);

            $this->okta->user->deactivateUser($user2->id);
            $this->okta->user->deactivateOrDeleteUser($user2->id);
        }
    }

    /** @test */
    public function get_user()
    {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("ListUsers")
                        ->setEmail("{$this->sdkPrefix}listUsers@example.com")
                        ->setLogin("{$this->sdkPrefix}listUsers@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                )
        );

        try {
            $foundUser = $this->okta->user->getUser($user->id);
            $this->assertInstanceOf(User::class, $foundUser, "foundUser is not an instance of " . User::class);
            $this->assertEquals($user->id, $foundUser->id, "User id did not match");
            $this->assertEquals("{$this->sdkPrefix}listUsers@example.com", $foundUser->getProfile()->getEmail(), "Email was not the same");

        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function activate_user() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("ListUsers")
                        ->setEmail("{$this->sdkPrefix}listUsers@example.com")
                        ->setLogin("{$this->sdkPrefix}listUsers@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                ),
            ["activate" => "false"]

        );

        try {
            $this->assertEquals(UserStatus::STAGED, $user->getStatus(), "User was not " . UserStatus::STAGED);

            $this->okta->user->activateUser($user->id);

            $foundUser = $this->okta->user->getUser($user->id);
            $this->assertEquals(UserStatus::ACTIVE, $foundUser->getStatus(), "User was not " . UserStatus::ACTIVE);
        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function update_user_profile() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("ListUsers")
                        ->setEmail("{$this->sdkPrefix}listUsers@example.com")
                        ->setLogin("{$this->sdkPrefix}listUsers@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                ),
            ["activate" => "false"]

        );

        try {
            $userProfile = $user->getProfile()->setNickName("updatedProfile");
            $user->setProfile($userProfile);

            $updatedUser = $this->okta->user->updateUser($user, $user->id);

            $this->assertInstanceOf(User::class, $updatedUser, "updatedUser is not an instance of " . User::class);

            $foundUser = $this->okta->user->getUser($user->id);
            $this->assertEquals("updatedProfile", $foundUser->getProfile()->getNickName(), "Nickname was not updated");

        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function update_user_profile_with_dynamic_property() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("updateProfileDynamicProp")
                        ->setEmail("{$this->sdkPrefix}updateProfileDynamicProp@example.com")
                        ->setLogin("{$this->sdkPrefix}updateProfileDynamicProp@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                ),
            ["activate" => "false"]

        );

        try {
            $userProfile = $user->getProfile();
            $userProfile->twitterUserName = "@okta";
            $user->setProfile($userProfile);

            $updatedUser = $this->okta->user->updateUser($user, $user->id);

            $this->assertInstanceOf(User::class, $updatedUser, "updatedUser is not an instance of " . User::class);

            $foundUser = $this->okta->user->getUser($user->id);
            $this->assertEquals("@okta", $foundUser->getProfile()->twitterUserName, "custom prop 1 was not correct");

        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function get_reset_password_url() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("getResetPasswordUrl")
                        ->setEmail("{$this->sdkPrefix}getResetPasswordUrl@example.com")
                        ->setLogin("{$this->sdkPrefix}getResetPasswordUrl@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                ),
            ["activate" => "true"]

        );

        try {
            $resetToken = $this->okta->user->resetPassword($user->id, ["sendEmail" => "false"]);
            $this->assertInstanceOf(ResetPasswordToken::class, $resetToken, "resetToken is not an instance of " . ResetPasswordToken::class);
            $this->assertNotNull($resetToken->getResetPasswordUrl(), "Reset Password URL was empty");

        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function suspend_user() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("suspendUser")
                        ->setEmail("{$this->sdkPrefix}suspendUser@example.com")
                        ->setLogin("{$this->sdkPrefix}suspendUser@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                ),
            ["activate" => "true"]

        );

        try {
            $this->okta->user->suspendUser($user->id);
            $foundUser = $this->okta->user->getUser($user->id);
            $this->assertEquals(UserStatus::SUSPENDED, $foundUser->getStatus(), "The user was not suspended");

            $this->okta->user->unsuspendUser($user->id);
            $foundUser = $this->okta->user->getUser($user->id);
            $this->assertEquals(UserStatus::ACTIVE, $foundUser->getStatus(), "The user was not active");

        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function change_user_password() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("changePassword")
                        ->setEmail("{$this->sdkPrefix}changePassword@example.com")
                        ->setLogin("{$this->sdkPrefix}changePassword@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                ),
            ["activate" => "true"]

        );

        try {
            sleep(1);
            $userCredentials = $this->okta->user->changePassword(
                (new ChangePasswordRequest)
                    ->setOldPassword(
                        (new PasswordCredential)
                            ->setValue("Abcd1234")
                    )
                    ->setNewPassword(
                        (new PasswordCredential)
                            ->setValue("1234Abcd")
                    ),
                $user->id
            );
            $this->assertInstanceOf(UserCredentials::class, $userCredentials, "userCredentials is not an instance of " . UserCredentials::class);

            $foundUser = $this->okta->user->getUser($user->id);
            $this->assertTrue($foundUser->getPasswordChanged()->isAfter($user->getPasswordChanged()), "Password chagned date was not after initial creation");

        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function expire_user_password() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("expireUserPassword")
                        ->setEmail("{$this->sdkPrefix}expireUserPassword@example.com")
                        ->setLogin("{$this->sdkPrefix}expireUserPassword@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                ),
            ["activate" => "true"]

        );

        try {
            $newUser = $this->okta->user->expirePassword($user->id);

            $this->assertEquals($user->id, $newUser->id, "User returned from expire password not same as created user");
        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function change_user_recovery_question() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("changeRecoveryQuestion")
                        ->setEmail("{$this->sdkPrefix}changeRecoveryQuestion@example.com")
                        ->setLogin("{$this->sdkPrefix}changeRecoveryQuestion@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                ),
            ["activate" => "true"]

        );

        try {
            $changedUser = $this->okta->user->changeRecoveryQuestion(
                (new UserCredentials)
                    ->setPassword(
                        (new PasswordCredential)
                            ->setValue("Abcd1234")
                    )
                    ->setRecoveryQuestion(
                        (new RecoveryQuestionCredential)
                            ->setQuestion("Answer to life, the universe, & everything")
                            ->setAnswer("42 of course")
                    ),
                $user->id
            );

            $this->assertInstanceOf(UserCredentials::class, $changedUser, "changedUser is not an instance of " . UserCredentials::class);
            $recoveryQuestion = $changedUser->getRecoveryQuestion();
            $this->assertEquals("Answer to life, the universe, & everything", $recoveryQuestion->getQuestion(), "question was not updated");
        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function create_user_with_provider() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("createUserWithProvider")
                        ->setEmail("{$this->sdkPrefix}createUserWithProvider@example.com")
                        ->setLogin("{$this->sdkPrefix}createUserWithProvider@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setProvider(
                            (new AuthenticationProvider)
                                ->setType(new AuthenticationProviderType(AuthenticationProviderType::FEDERATION))
                                ->setName("FEDERATION")
                        )
                        ),
            ["provider"=>"true"]

        );

        try {
            $foundUser = $this->okta->user->getUser($user->id);
            $this->assertEquals(AuthenticationProviderType::FEDERATION, $foundUser->getCredentials()->getProvider()->getType(), "Type of authentication provider was incorrect");
        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function assign_role_to_user() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("assignRoleToUser")
                        ->setEmail("{$this->sdkPrefix}assignRoleToUser@example.com")
                        ->setLogin("{$this->sdkPrefix}assignRoleToUser@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                ),
            ["activate" => "true"]

        );

        try {
            $role = $this->okta->user->assignRoleToUser(
                (new AssignRoleRequest)
                    ->setType(new RoleType(RoleType::SUPER_ADMIN)),
                $user->id
            );

            $this->assertInstanceOf(Role::class, $role, "role is not an instance of " . Role::class);
            $roles = $this->okta->user->listAssignedRolesForUser($user->id);

            $this->assertInstanceOf(Collection::class, $roles, "Listing roles did not return instance of " . Collection::class);

            $this->assertTrue($roles->contains(function ($obj) use ($role) {
                return $obj->id == $role->id;
            }));


        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function remove_role() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("removeRole")
                        ->setEmail("{$this->sdkPrefix}removeRole@example.com")
                        ->setLogin("{$this->sdkPrefix}removeRole@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                ),
            ["activate" => "true"]

        );

        try {
            $role1 = $this->okta->user->assignRoleToUser(
                (new AssignRoleRequest)
                    ->setType(new RoleType(RoleType::SUPER_ADMIN)),
                $user->id
            );

            $role2 = $this->okta->user->assignRoleToUser(
                (new AssignRoleRequest)
                    ->setType(new RoleType(RoleType::ORG_ADMIN)),
                $user->id
            );

            $roles = $this->okta->user->listAssignedRolesForUser($user->id);
            $this->assertInstanceOf(Collection::class, $roles, "Listing roles did not return instance of " . Collection::class);

            $this->assertTrue($roles->count() == 2, "roles count should be 2");

            $this->okta->user->removeRoleFromUser($user->id, $role1->id);
            $this->okta->user->removeRoleFromUser($user->id, $role2->id);

            $roles = $this->okta->user->listAssignedRolesForUser($user->id);
            $this->assertInstanceOf(Collection::class, $roles, "Listing roles did not return instance of " . Collection::class);

            $this->assertTrue($roles->count() == 0, "roles count should be 0");

        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function list_group_targets_for_role() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("listGroupTargets")
                        ->setEmail("{$this->sdkPrefix}listGroupTargets@example.com")
                        ->setLogin("{$this->sdkPrefix}listGroupTargets@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                ),
            ["activate" => "true"]

        );

        $group = $this->okta->group->createGroup(
            (new Group)
                ->setProfile(
                    (new GroupProfile)
                        ->setName("{$this->sdkPrefix}listGroupTargets")
                        ->setDescription("{$this->sdkPrefix}listGroupTargets")
                )
        );

        try {
            $role = $this->okta->user->assignRoleToUser(
                (new AssignRoleRequest)
                    ->setType(new RoleType(RoleType::USER_ADMIN)),
                $user->id
            );

            $this->okta->user->addGroupTargetToRole($user->id, $role->id, $group->id);

            $retrievedGroupsForRole = $this->okta->user->listGroupTargetsForRole($user->id, $role->id);
            $this->assertInstanceOf(Collection::class, $retrievedGroupsForRole, "Listing retrievedGroupsForRole did not return instance of " . Collection::class);

        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function forgot_password_generate_one_time_token() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("forgotPasswordOTT")
                        ->setEmail("{$this->sdkPrefix}forgotPasswordOTT@example.com")
                        ->setLogin("{$this->sdkPrefix}forgotPasswordOTT@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                        ->setRecoveryQuestion(
                            (new RecoveryQuestionCredential)
                                ->setQuestion("Answer to life, the universe, & everything")
                                ->setAnswer("42 of course")
                        )
                ),
            ["activate" => "true"]

        );
        sleep(5);
        try {
            $forgotPasswordResponse = $this->okta->user->forgotPasswordGenerateOneTimeToken($user->id, ["sendEmail"=>"false"]);
            $this->assertInstanceOf(ForgotPasswordResponse::class, $forgotPasswordResponse, "forgotPasswordResponse is not an instance of " . ForgotPasswordResponse::class);
            $this->assertNotNull($forgotPasswordResponse->getResetPasswordUrl(), "Reset password url was null");
        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function forgot_password_set_new_password() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("forgotPasswordSetNew")
                        ->setEmail("{$this->sdkPrefix}forgotPasswordSetNew@example.com")
                        ->setLogin("{$this->sdkPrefix}forgotPasswordSetNew@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                        ->setRecoveryQuestion(
                            (new RecoveryQuestionCredential)
                                ->setQuestion("Answer to life, the universe, & everything")
                                ->setAnswer("42 of course")
                        )
                ),
            ["activate" => "true"]

        );
        sleep(3);
        try {
            $forgotPasswordResponse = $this->okta->user->forgotPasswordSetNewPassword(
                (new UserCredentials)
                    ->setPassword(
                        (new PasswordCredential)
                            ->setValue("1234Abcd")
                    )
                    ->setRecoveryQuestion(
                        (new RecoveryQuestionCredential)
                            ->setQuestion("Answer to life, the universe, & everything")
                            ->setAnswer("42 of course")
                    ),
                $user->id
            );
            $this->assertInstanceOf(ForgotPasswordResponse::class, $forgotPasswordResponse, "forgotPasswordResponse is not an instance of " . ForgotPasswordResponse::class);
        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

    /** @test */
    public function expire_password_and_get_temporary_password() {
        $user = $this->okta->user->createUser(
            (new CreateUserRequest)
                ->setProfile(
                    (new UserProfile)
                        ->setFirstName("{$this->sdkPrefix}")
                        ->setLastName("expriePasswordTemp")
                        ->setEmail("{$this->sdkPrefix}expriePasswordTemp@example.com")
                        ->setLogin("{$this->sdkPrefix}expriePasswordTemp@example.com")
                )
                ->setCredentials(
                    (new UserCredentials)
                        ->setPassword(
                            (new PasswordCredential)
                                ->setValue("Abcd1234")
                        )
                        ->setRecoveryQuestion(
                            (new RecoveryQuestionCredential)
                                ->setQuestion("Answer to life, the universe, & everything")
                                ->setAnswer("42 of course")
                        )
                ),
            ["activate" => "true"]

        );
        sleep(3);
        try {
            $tempPassword = $this->okta->user->expirePasswordAndGetTemporaryPassword($user->id);
            $this->assertInstanceOf(TempPassword::class, $tempPassword, "tempPassword is not an instance of " . TempPassword::class);
            $this->assertNotNull($tempPassword->getTempPassword(), "Temp password url was null");
        }
        finally {
            $this->okta->user->deactivateUser($user->id);
            $this->okta->user->deactivateOrDeleteUser($user->id);
        }
    }

}


