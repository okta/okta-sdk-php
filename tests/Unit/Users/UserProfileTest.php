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
use Okta\Users\UserProfile;
use PHPUnit\Framework\TestCase;

class UserProfileTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
        "login": "isaac.brock@example.com",
        "firstName": "Isaac",
        "lastName": "Brock",
        "email": "isaac.brock@example.com",
        "secondEmail": "isaac@example.org",
        "mobilePhone": "+1-555-415-1337",
        "extraProperty": "Hello"
      }
        ');


        self::$testable = new UserProfile(null, static::$properties);
    }

    /** @test */
    public function email_is_accessible()
    {
        $this->assertEquals(static::$properties->email, static::$testable->getEmail());
        $this->assertEquals(static::$properties->email, static::$testable->email);
    }

    /** @test */
    public function email_is_settable()
    {
        static::$testable->setEmail('email@mailinator.com');
        static::assertEquals('email@mailinator.com', static::$testable->getEmail());

        static::$testable->email = 'email2@mailinator.com';
        static::assertEquals('email2@mailinator.com', static::$testable->getEmail());
    }


    /** @test */
    public function login_is_accessible()
    {
        $this->assertEquals(static::$properties->login, static::$testable->getLogin());
        $this->assertEquals(static::$properties->login, static::$testable->login);
    }

    /** @test */
    public function login_is_settable()
    {
        static::$testable->setLogin('login');
        static::assertEquals('login', static::$testable->getLogin());

        static::$testable->login = 'username';
        static::assertEquals('username', static::$testable->getLogin());
    }


    /** @test */
    public function first_name_is_accessible()
    {
        $this->assertEquals(static::$properties->firstName, static::$testable->getFirstName());
        $this->assertEquals(static::$properties->firstName, static::$testable->firstName);
    }

    /** @test */
    public function first_name_is_settable()
    {
        static::$testable->setFirstName('first');
        static::assertEquals('first', static::$testable->getFirstName());

        static::$testable->firstName = 'name';
        static::assertEquals('name', static::$testable->getFirstName());
    }

    /** @test */
    public function last_name_is_accessible()
    {
        $this->assertEquals(static::$properties->lastName, static::$testable->getLastName());
        $this->assertEquals(static::$properties->lastName, static::$testable->lastName);
    }

    /** @test */
    public function last_name_is_settable()
    {
        static::$testable->setLastName('last');
        static::assertEquals('last', static::$testable->getLastName());

        static::$testable->lastName = 'name';
        static::assertEquals('name', static::$testable->getLastName());
    }

    /** @test */
    public function mobile_phone_is_accessible()
    {
        $this->assertEquals(static::$properties->mobilePhone, static::$testable->getMobilePhone());
        $this->assertEquals(static::$properties->mobilePhone, static::$testable->mobilePhone);
    }
    /** @test */
    public function mobile_phone_is_settable()
    {
        static::$testable->setMobilePhone('1234567890');
        static::assertEquals('1234567890', static::$testable->getMobilePhone());

        static::$testable->mobilePhone = '0987654321';
        static::assertEquals('0987654321', static::$testable->getMobilePhone());
    }

    /** @test */
    public function second_email_is_accessible()
    {
        $this->assertEquals(static::$properties->secondEmail, static::$testable->getSecondEmail());
        $this->assertEquals(static::$properties->secondEmail, static::$testable->secondEmail);
    }
    /** @test */
    public function second_email_is_settable()
    {
        static::$testable->setSecondEmail('second@mailinator.com');
        static::assertEquals('second@mailinator.com', static::$testable->getSecondEmail());

        static::$testable->secondEmail = 'second2@mailinator.com';
        static::assertEquals('second2@mailinator.com', static::$testable->getSecondEmail());
    }

    /** @test */
    public function extra_property_is_accessible()
    {
        $this->assertEquals(static::$properties->extraProperty, static::$testable->extraProperty);
    }


}
