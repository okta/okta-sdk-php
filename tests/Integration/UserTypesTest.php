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

use Okta\Resource\Collection;
use Okta\UserType\UserType;

class UserTypesTest extends \BaseIntegrationTestCase
 {
     /** @test */
     public function create_user_type()
     {
        $userTypeObj = (new UserType())
                        ->setDescription("{$this->sdkPrefix}_Test Description")
                        ->setDisplayName("{$this->sdkPrefix}_Test_DisplayName")
                        ->setName("{$this->sdkPrefix}_Test_User_Type");
        $userType = (new \Okta\Okta())->usertype->createUserType($userTypeObj);

        try {
            $this->assertInstanceOf(UserType::class, $userType, "Creating a userType did not return an instance of " . UserType::class);
            $this->assertNotEmpty($userType->id, "Did not create a userType. ID is empty");
            $this->assertEquals("{$this->sdkPrefix}_Test Description", $userType->getDescription(), "Description does not match what was set in the request");
            $this->assertEquals("{$this->sdkPrefix}_Test_DisplayName", $userType->getDisplayName(), "DisplayName does not match what was set in the request");
            $this->assertEquals("{$this->sdkPrefix}_Test_User_Type", $userType->getName(), "Name does not match what was set in the request");
        } finally {
            (new \Okta\Okta())->usertype->deleteUserType($userType->id);
        }
     }

     /** @test */
     public function get_user_type_by_id() {
        $userTypeObj = (new UserType())
                        ->setDescription("{$this->sdkPrefix}_Test Description")
                        ->setDisplayName("{$this->sdkPrefix}_Test_DisplayName")
                        ->setName("{$this->sdkPrefix}_Test_User_Type");
        $userType = (new \Okta\Okta())->usertype->createUserType($userTypeObj);

        try {
            $userTypeId = $userType->id;
            $foundUserType = (new \Okta\Okta())->usertype->getUserType($userTypeId);
            $this->assertInstanceOf(UserType::class, $foundUserType, "Creating a userType did not return an instance of " . UserType::class);
            $this->assertNotEmpty($foundUserType->id, "Did not create a userType. ID is empty");
            $this->assertEquals("{$this->sdkPrefix}_Test Description", $foundUserType->getDescription(), "Description was not as expected");
            $this->assertEquals("{$this->sdkPrefix}_Test_DisplayName", $foundUserType->getDisplayName(), "DisplayName was not as expected");
            $this->assertEquals("{$this->sdkPrefix}_Test_User_Type", $foundUserType->getName(), "Name was not as expected");
        } finally {
            (new \Okta\Okta())->usertype->deleteUserType($userType->id);
        }
     }

     /** @test */
     public function update_user_type() {
        $userTypeObj = (new UserType())
                        ->setDescription("{$this->sdkPrefix}_Test Description")
                        ->setDisplayName("{$this->sdkPrefix}_Test_DisplayName")
                        ->setName("{$this->sdkPrefix}_Test_User_Type");
        $userType = (new \Okta\Okta())->usertype->createUserType($userTypeObj);
        try {
            $this->assertInstanceOf(UserType::class, $userType, "Creating a userType did not return an instance of " . UserType::class);
            $updatedUserTypeObj = $userType->setDescription("{$this->sdkPrefix}_Updated")
                                        ->setDisplayName("{$this->sdkPrefix}_UpdatedDisplay");
            $updatedUserType = (new \Okta\Okta())->usertype->updateUserType($userType->id, $updatedUserTypeObj);

            $this->assertInstanceOf(UserType::class, $updatedUserType, "Creating a userType did not return an instance of " . UserType::class);
            $this->assertNotEmpty($updatedUserType->id, "Did not create a userType. ID is empty");
            $this->assertEquals($userType->id, $updatedUserType->id, "ID's do not match");
            $this->assertEquals("{$this->sdkPrefix}_Updated", $updatedUserType->getDescription(), "Description was not as expected");
            $this->assertEquals("{$this->sdkPrefix}_UpdatedDisplay", $updatedUserType->getDisplayName(), "DisplayName was not as expected");
            $this->assertEquals("{$this->sdkPrefix}_Test_User_Type", $updatedUserType->getName(), "Name was not as expected");

        } finally {
            (new \Okta\Okta())->usertype->deleteUserType($userType->id);
        }
     }

     /** @test */
     public function replace_user_type() {
        $userTypeObj = (new UserType())
                        ->setDescription("{$this->sdkPrefix}_Test_Description")
                        ->setDisplayName("{$this->sdkPrefix}_Test_DisplayName")
                        ->setName("{$this->sdkPrefix}_Test_User_Type");
        $userType = (new \Okta\Okta())->usertype->createUserType($userTypeObj);
        try {
            $this->assertInstanceOf(UserType::class, $userType, "Creating a userType did not return an instance of " . UserType::class);
            $replaceUserTypeObj = $userType->setDescription("{$this->sdkPrefix}_Replaced")
                                        ->setDisplayName("{$this->sdkPrefix}_ReplacedDisplay")
                                        ->setName("{$this->sdkPrefix}_Test_User_Type");
            $replacedUserType = (new \Okta\Okta())->usertype->replaceUserType($userType->id, $replaceUserTypeObj);
            $this->assertEquals($userType->id, $replacedUserType->id, "Replaced User Type Id is not the same as User Type");
            $this->assertEquals("{$this->sdkPrefix}_Replaced", $replacedUserType->getDescription(), "Description is not the replaced version");
            $this->assertEquals("{$this->sdkPrefix}_ReplacedDisplay", $replacedUserType->getDisplayName(), "Description is not the replaced version");

        } finally {
            (new \Okta\Okta())->usertype->deleteUserType($userType->id);
        }
     }

     /** @test */
     public function delete_user_type_by_id() {
        $userTypeObj = (new UserType())
                        ->setDescription("{$this->sdkPrefix}_Test Description")
                        ->setDisplayName("{$this->sdkPrefix}_Test_DisplayName")
                        ->setName("{$this->sdkPrefix}_Test_User_Type");
        $userType = (new \Okta\Okta())->usertype->createUserType($userTypeObj);

        $this->assertInstanceOf(UserType::class, $userType, "Creating a userType did not return an instance of " . UserType::class);
        $this->assertNotEmpty($userType->id, "Did not create a userType. ID is empty");
        $this->assertEquals("{$this->sdkPrefix}_Test Description", $userType->getDescription(), "Description does not match what was set in the request");
        $this->assertEquals("{$this->sdkPrefix}_Test_DisplayName", $userType->getDisplayName(), "DisplayName does not match what was set in the request");
        $this->assertEquals("{$this->sdkPrefix}_Test_User_Type", $userType->getName(), "Name does not match what was set in the request");

        (new \Okta\Okta())->usertype->deleteUserType($userType->id);

        $this->expectException(\Okta\Exceptions\ResourceException::class);
        $foundUserType = (new \Okta\Okta())->usertype->getUserType($userType->id);

     }

     /** @test */
     public function list_user_type() {
        $userTypeObj1 = (new UserType())
                        ->setDescription("{$this->sdkPrefix}_Test Description")
                        ->setDisplayName("{$this->sdkPrefix}_Test_DisplayName")
                        ->setName("{$this->sdkPrefix}_Test_User_Type1");
        $userType1 = (new \Okta\Okta())->usertype->createUserType($userTypeObj1);

        $userTypeObj2 = (new UserType())
                        ->setDescription("{$this->sdkPrefix}_Test Description")
                        ->setDisplayName("{$this->sdkPrefix}_Test_DisplayName")
                        ->setName("{$this->sdkPrefix}_Test_User_Type2");
        $userType2 = (new \Okta\Okta())->usertype->createUserType($userTypeObj2);
        try {
            $this->assertInstanceOf(UserType::class, $userType1, "Creating a userType did not return an instance of " . UserType::class);
            $this->assertInstanceOf(UserType::class, $userType2, "Creating a userType did not return an instance of " . UserType::class);

            $userTypes = (new \Okta\Okta())->usertype->listUserTypes();
            $this->assertInstanceOf(Collection::class, $userTypes, "Getting list of User Types did not return " . Collection::class);

            $this->assertTrue($userTypes->contains(function ($obj) use ($userType1) {
                return $obj->id == $userType1->id;
            }));
            $this->assertTrue($userTypes->contains(function ($obj) use ($userType2) {
                return $obj->id == $userType2->id;
            }));

        } finally {
            (new \Okta\Okta())->usertype->deleteUserType($userType1->id);
            (new \Okta\Okta())->usertype->deleteUserType($userType2->id);
        }
     }
 }