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

class PushFactorProfileTest extends BaseUnitTestCase
{

    protected $model = '/UserFactors/factorProfilePush.json';
    protected $modelType = \Okta\UserFactors\PushFactorProfile::class;

    /** @test */
    public function name_is_gettable()
    {
        $this->assertEquals($this->properties->name, $this->testable->getName());
        $this->assertEquals($this->properties->name, $this->testable->name);
    }

    /** @test */
    public function name_is_settable()
    {
        $this->testable->setName('some name');
        static::assertEquals('some name', $this->testable->getName());

        $this->testable->name = 'some name 2';
        static::assertEquals('some name 2', $this->testable->getName());
    }

    /** @test */
    public function version_is_gettable()
    {
        $this->assertEquals($this->properties->version, $this->testable->getVersion());
        $this->assertEquals($this->properties->version, $this->testable->version);
    }

    /** @test */
    public function version_is_settable()
    {
        $this->testable->setVersion('some version');
        static::assertEquals('some version', $this->testable->getVersion());

        $this->testable->version = 'some version 2';
        static::assertEquals('some version 2', $this->testable->getVersion());
    }

    /** @test */
    public function platform_is_gettable()
    {
        $this->assertEquals($this->properties->platform, $this->testable->getPlatform());
        $this->assertEquals($this->properties->platform, $this->testable->platform);
    }

    /** @test */
    public function device_type_is_accessible()
    {
        $this->assertEquals($this->properties->deviceType, $this->testable->getDeviceType());
        $this->assertEquals($this->properties->deviceType, $this->testable->deviceType);
    }

    /** @test */
    public function credential_id_is_accessible()
    {
        $this->assertEquals($this->properties->credentialId, $this->testable->getCredentialId());
        $this->assertEquals($this->properties->credentialId, $this->testable->credentialId);
    }

    /** @test */
    public function credential_id_is_settable()
    {
        $this->testable->setCredentialId('test@mailinator.com');
        static::assertEquals('test@mailinator.com', $this->testable->getCredentialId());

        $this->testable->credentialId = 'test2@mailinator.com';
        static::assertEquals('test2@mailinator.com', $this->testable->getCredentialId());
    }


}
