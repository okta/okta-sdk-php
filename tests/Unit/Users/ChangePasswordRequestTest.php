<?php
/******************************************************************************
 * Copyright 2017 Okta, Inc.                                                  *
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

use Okta\ClientBuilder;
use Okta\Users\ChangePasswordRequest;
use PHPUnit\Framework\TestCase;

class ChangePasswordRequestTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
            "newPassword": {},
            "oldPassword": {}
        }
        ');

        self::$testable = new ChangePasswordRequest(null,static::$properties);
    }

    /** @test */
    public function new_password_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Users\PasswordCredential::class, static::$testable->getNewPassword());
        $this->assertInstanceOf(\Okta\Users\PasswordCredential::class, static::$testable->newPassword);
    }

    /** @test */
    public function new_password_is_settable()
    {
        $newPassword = (new \Okta\Users\PasswordCredential(null, json_decode('{"value": "newPassword"}')));

        $newTestable = static::$testable->setNewPassword($newPassword);

        $this->assertInstanceOf(ChangePasswordRequest::class,$newTestable);

        $this->assertEquals(
            $newPassword,
            $newTestable->getNewPassword()
        );
    }

    /** @test */
    public function old_password_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Users\PasswordCredential::class, static::$testable->getOldPassword());
        $this->assertInstanceOf(\Okta\Users\PasswordCredential::class, static::$testable->oldPassword);
    }

    /** @test */
    public function old_password_is_settable()
    {
        $oldPassword = (new \Okta\Users\PasswordCredential(null, json_decode('{"value": "oldPassword"}')));

        $newTestable = static::$testable->setOldPassword($oldPassword);

        $this->assertInstanceOf(ChangePasswordRequest::class,$newTestable);

        $this->assertEquals(
            $oldPassword,
            $newTestable->getOldPassword()
        );


    }



}
