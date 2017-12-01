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

use Carbon\Carbon;
use Okta\Applications\ApplicationCredentialsSigning;
use PHPUnit\Framework\TestCase;

class ApplicationCredentialsSigningTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\ApplicationCredentialsSigning */
    protected $testable;

    protected $model = '{
    "kid": "SIMcCQNY3uwXoW3y0vf6VxiBb5n9pf8L2fK8d",
    "lastRotated": "2016-08-09T20:12:19.000Z",
    "nextRotation": "2016-08-09T20:12:19.000Z",
    "rotationMode": "simple"
    }';
    protected $modelType = \Okta\Applications\ApplicationCredentialsSigning::class;

    /** @test */
    public function kid_is_accessible()
    {
        $this->assertEquals($this->properties->kid, $this->testable->getKid());
        $this->assertEquals($this->properties->kid, $this->testable->kid);
    }

    /** @test */
    public function kid_is_settable()
    {
        $this->testable->setKid('abc');
        $this->assertEquals('abc', $this->testable->getKid());

        $this->testable->kid = '123';
        $this->assertEquals('123', $this->testable->getKid());
    }

    /** @test */
    public function last_rotated_is_accessible()
    {
        $ts = Carbon::parse($this->properties->lastRotated)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->lastRotated);
        $this->assertEquals($ts, $this->testable->getLastRotated()->timestamp);
        $this->assertEquals($ts, $this->testable->lastRotated->timestamp);
    }

    /** @test */
    public function next_Rotation_is_accessible()
    {
        $ts = Carbon::parse($this->properties->nextRotation)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->nextRotation);
        $this->assertEquals($ts, $this->testable->getNextRotation()->timestamp);
        $this->assertEquals($ts, $this->testable->nextRotation->timestamp);
    }

    /** @test */
    public function rotation_mode_is_accessible()
    {
        $this->assertEquals($this->properties->rotationMode, $this->testable->getRotationMode());
        $this->assertEquals($this->properties->rotationMode, $this->testable->rotationMode);
    }

    /** @test */
    public function rotation_mode_is_settable()
    {
        $this->testable->setRotationMode('example');
        $this->assertEquals('example', $this->testable->getRotationMode());

        $this->testable->rotationMode = 'something';
        $this->assertEquals('something', $this->testable->getRotationMode());
    }

}
