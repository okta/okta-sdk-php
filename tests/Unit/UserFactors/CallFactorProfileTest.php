<?php

use Okta\UserFactors\CallFactorProfile;

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

class CallFactorProfileTest extends BaseUnitTestCase
{

    protected $model = '/UserFactors/factorProfileCall.json';
    protected $modelType = CallFactorProfile::class;

    /** @test */
    public function phone_number_is_gettable()
    {
        $this->assertEquals($this->properties->phoneNumber, $this->testable->getPhoneNumber());
        $this->assertEquals($this->properties->phoneNumber, $this->testable->phoneNumber);
    }

    /** @test */
    public function phone_number_is_settable()
    {
        $this->testable->setPhoneNumber('5555551212');
        static::assertEquals('5555551212', $this->testable->getPhoneNumber());

        $this->testable->phoneNumber = '5551112222';
        static::assertEquals('5551112222', $this->testable->getPhoneNumber());
    }

    /** @test */
    public function extension_is_gettable()
    {
        $this->assertEquals($this->properties->phoneExtension, $this->testable->getPhoneExtension());
        $this->assertEquals($this->properties->phoneExtension, $this->testable->phoneExtension);
    }

    /** @test */
    public function extension_is_settable()
    {
        $this->testable->setPhoneExtension('123');
        static::assertEquals('123', $this->testable->getPhoneExtension());

        $this->testable->phoneExtension = '789';
        static::assertEquals('789', $this->testable->getPhoneExtension());
    }

    
}
