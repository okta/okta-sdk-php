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

class CallFactorProfileTest extends BaseTestCase
{

    protected static $properties;
    protected static $testable;

    public function setUp()
    {
        parent::setUp();
        $this->createNewHttpClient();
        $model = '/UserFactors/factorProfileCall.json';
        static::$properties = json_decode($this->getModelJson($model));
        static::$testable = $this->createModel($model, \Okta\UserFactors\CallFactorProfile::class);
    }

    /** @test */
    public function phone_number_is_gettable()
    {
        $this->assertEquals(static::$properties->phoneNumber, static::$testable->getPhoneNumber());
        $this->assertEquals(static::$properties->phoneNumber, static::$testable->phoneNumber);
    }

    /** @test */
    public function phone_number_is_settable()
    {
        static::$testable->setPhoneNumber('5555551212');
        static::assertEquals('5555551212', static::$testable->getPhoneNumber());

        static::$testable->phoneNumber = '5551112222';
        static::assertEquals('5551112222', static::$testable->getPhoneNumber());
    }

    /** @test */
    public function extension_is_gettable()
    {
        $this->assertEquals(static::$properties->phoneExtension, static::$testable->getPhoneExtension());
        $this->assertEquals(static::$properties->phoneExtension, static::$testable->phoneExtension);
    }

    /** @test */
    public function extension_is_settable()
    {
        static::$testable->setPhoneExtension('123');
        static::assertEquals('123', static::$testable->getPhoneExtension());

        static::$testable->phoneExtension = '789';
        static::assertEquals('789', static::$testable->getPhoneExtension());
    }

    
}
