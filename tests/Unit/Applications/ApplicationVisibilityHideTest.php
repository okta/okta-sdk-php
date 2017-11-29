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

use Okta\Applications\ApplicationVisibilityHide;
use PHPUnit\Framework\TestCase;

class ApplicationVisibilityHideTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\ApplicationVisibilityHide */
    protected $testable;

    protected $model = '{
    "iOS": false,
    "web": false
    }';
    protected $modelType = \Okta\Applications\ApplicationVisibilityHide::class;
    /** @test */
    public function ios_is_accessible()
    {
        $this->assertEquals($this->properties->iOS, $this->testable->getIOs());
    }

    /** @test */
    public function ios_is_settable()
    {
        $this->testable->setIOs(true);
        $this->assertEquals(true, $this->testable->getIOs());
    }

    /** @test */
    public function web_is_accessible()
    {
        $this->assertEquals($this->properties->web, $this->testable->getWeb());
        $this->assertEquals($this->properties->web, $this->testable->web);
    }

    /** @test */
    public function web_is_settable()
    {
        $this->testable->setWeb(true);
        $this->assertEquals(true, $this->testable->getWeb());

        $this->testable->web = false;
        $this->assertEquals(false, $this->testable->getWeb());
    }

}
