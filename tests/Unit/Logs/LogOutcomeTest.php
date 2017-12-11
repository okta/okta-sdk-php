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

use Okta\Logs\LogOutcome;
use PHPUnit\Framework\TestCase;

class LogOutcomeTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Logs\LogOutcome */
    protected $testable;

    protected $model = '/Logs/outcome.json';
    protected $modelType = \Okta\Logs\LogOutcome::class;

    /** @test */
    public function reason_is_accessible()
    {
        $this->assertEquals($this->properties->reason, $this->testable->getReason());
        $this->assertEquals($this->properties->reason, $this->testable->reason);
    }

    /** @test */
    public function result_is_accessible()
    {
        $this->assertEquals($this->properties->result, $this->testable->getResult());
        $this->assertEquals($this->properties->result, $this->testable->result);
    }

}
