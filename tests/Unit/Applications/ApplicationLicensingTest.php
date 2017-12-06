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

use Okta\Applications\ApplicationLicensing;
use PHPUnit\Framework\TestCase;

class ApplicationLicensingTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\ApplicationLicensing */
    protected $testable;

    protected $model = '{"seatCount": "1"}';
    protected $modelType = \Okta\Applications\ApplicationLicensing::class;

    /** @test */
    public function seat_count_is_accessible()
    {
        $this->assertEquals($this->properties->seatCount, $this->testable->getSeatCount());
        $this->assertEquals($this->properties->seatCount, $this->testable->seatCount);
    }

    /** @test */
    public function seat_count_is_settable()
    {
        $this->testable->setSeatCount(5);
        $this->assertEquals(5, $this->testable->getSeatCount());

        $this->testable->seatCount = 10;
        $this->assertEquals(10, $this->testable->getSeatCount());
    }

}
