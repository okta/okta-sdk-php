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

use Okta\Applications\SchemeApplicationCredentials;
use PHPUnit\Framework\TestCase;

class SchemeApplicationCredentialsTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\SchemeApplicationCredentials */
    protected $testable;

    protected $model = '{
    "scheme": "EDIT_USERNAME_AND_PASSWORD",
    "userNameTemplate": {
      "template": "${source.login}",
      "type": "BUILT_IN"
    },
    "revealPassword": false,
    "signing": {"test": "this"},
    "userName": "email@example.com",
    "password": {"value": "password"}
  }';
    protected $modelType = \Okta\Applications\SchemeApplicationCredentials::class;

    /** @test */
    public function scheme_is_accessible()
    {
        $this->assertEquals($this->properties->scheme, $this->testable->getScheme());
        $this->assertEquals($this->properties->scheme, $this->testable->scheme);
    }

    /** @test */
    public function scheme_is_settable()
    {
        $this->testable->setScheme('scheme1');
        $this->assertEquals('scheme1', $this->testable->getScheme());

        $this->testable->scheme = 'scheme2';
        $this->assertEquals('scheme2', $this->testable->getScheme());
    }

    /** @test */
    public function signing_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationCredentialsSigning::class, $this->testable->getSigning());
        $this->assertInstanceOf(\Okta\Applications\ApplicationCredentialsSigning::class, $this->testable->signing);
    }

    /** @test */
    public function signing_is_settable()
    {
        $signing = $this->testable->getSigning();

        $signing->signature = 'sign1';
        $this->testable->setSigning($signing);
        $this->assertEquals('sign1', $this->testable->getSigning()->signature);

        $signing->signature = 'sign2';
        $this->testable->signing = $signing;
        $this->assertEquals('sign2', $this->testable->getSigning()->signature);
    }
    
    /** @test */
    public function password_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Users\PasswordCredential::class, $this->testable->getPassword());
        $this->assertInstanceOf(\Okta\Users\PasswordCredential::class, $this->testable->password);
    }
    
    /** @test */
    public function password_is_settable()
    {
        $password = $this->testable->getPassword();
        
        $password->value = 'pass1';
        $this->testable->setPassword($password);
        $this->assertEquals('pass1', $this->testable->getPassword()->value);
    
        $password->value = 'pass2';
        $this->testable->password = $password;
        $this->assertEquals('pass2', $this->testable->getPassword()->value);
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
        $this->testable->setUserName('user');
        $this->assertEquals('user', $this->testable->getUserName());

        $this->testable->userName = 'name';
        $this->assertEquals('name', $this->testable->getUserName());
    }

    /** @test */
    public function reveal_password_is_accessible()
    {
        $this->assertEquals($this->properties->revealPassword, $this->testable->getRevealPassword());
        $this->assertEquals($this->properties->revealPassword, $this->testable->revealPassword);
    }

    /** @test */
    public function reveal_password_is_settable()
    {
        $this->testable->setRevealPassword(true);
        $this->assertEquals(true, $this->testable->getRevealPassword());

        $this->testable->revealPassword = false;
        $this->assertEquals(false, $this->testable->getRevealPassword());
    }



}
