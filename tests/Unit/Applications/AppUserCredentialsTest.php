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

use Okta\Applications\AppUserCredentials;
use PHPUnit\Framework\TestCase;

class AppUserCredentialsTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\AppUserCredentials */
    protected $testable;

    protected $model = '{"userName": "test", "password": {"value": "abc123"}}';
    protected $modelType = \Okta\Applications\AppUserCredentials::class;

    /** @test */
    public function password_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\AppUserPasswordCredential::class, $this->testable->getPassword());
        $this->assertInstanceOf(\Okta\Applications\AppUserPasswordCredential::class, $this->testable->password);
    }

    /** @test */
    public function password_is_settable()
    {
        $password = $this->testable->getPassword();
        $password->value = '123abc';
        $this->testable->setPassword($password);
        $this->assertEquals('123abc', $this->testable->getPassword()->value);

        $password->value = '789xyz';
        $this->testable->password = $password;
        $this->assertEquals('789xyz', $this->testable->getPassword()->value);
    }

    /** @test */
    public function user_name_is_accessible()
    {
        $this->assertEquals($this->properties->userName, $this->testable->getUserName());
        $this->assertEquals($this->properties->userName, $this->testable->userName);
    }

    /** @test */
    public function user_name_is_settable()
    {
        $this->testable->setUserName('abc');
        $this->assertEquals('abc', $this->testable->getUserName());

        $this->testable->userName = 'xyz';
        $this->assertEquals('xyz', $this->testable->getUserName());
    }


}
