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

class PushFactorProfileTest extends BaseTestCase
{

    protected static $properties;
    protected static $testable;

    public function setUp()
    {
        parent::setUp();
        $this->createNewHttpClient();
        $model = '/UserFactors/factorProfilePush.json';
        static::$properties = json_decode($this->getModel($model));
        static::$testable = $this->createModel($model, \Okta\UserFactors\PushFactorProfile::class);
    }

    /** @test */
    public function name_is_gettable()
    {
        $this->assertEquals(static::$properties->name, static::$testable->getName());
        $this->assertEquals(static::$properties->name, static::$testable->name);
    }

    /** @test */
    public function name_is_settable()
    {
        static::$testable->setName('some name');
        static::assertEquals('some name', static::$testable->getName());

        static::$testable->name = 'some name 2';
        static::assertEquals('some name 2', static::$testable->getName());
    }

    /** @test */
    public function version_is_gettable()
    {
        $this->assertEquals(static::$properties->version, static::$testable->getVersion());
        $this->assertEquals(static::$properties->version, static::$testable->version);
    }

    /** @test */
    public function version_is_settable()
    {
        static::$testable->setVersion('some version');
        static::assertEquals('some version', static::$testable->getVersion());

        static::$testable->version = 'some version 2';
        static::assertEquals('some version 2', static::$testable->getVersion());
    }

    /** @test */
    public function platform_is_gettable()
    {
        $this->assertEquals(static::$properties->platform, static::$testable->getPlatform());
        $this->assertEquals(static::$properties->platform, static::$testable->platform);
    }

    /** @test */
    public function device_type_is_accessible()
    {
        $this->assertEquals(static::$properties->deviceType, static::$testable->getDeviceType());
        $this->assertEquals(static::$properties->deviceType, static::$testable->deviceType);
    }

    /** @test */
    public function credential_id_is_accessible()
    {
        $this->assertEquals(static::$properties->credentialId, static::$testable->getCredentialId());
        $this->assertEquals(static::$properties->credentialId, static::$testable->credentialId);
    }

    /** @test */
    public function credential_id_is_settable()
    {
        static::$testable->setCredentialId('test@mailinator.com');
        static::assertEquals('test@mailinator.com', static::$testable->getCredentialId());

        static::$testable->credentialId = 'test2@mailinator.com';
        static::assertEquals('test2@mailinator.com', static::$testable->getCredentialId());
    }


}
