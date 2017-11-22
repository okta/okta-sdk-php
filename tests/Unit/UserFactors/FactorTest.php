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

use Okta\UserFactors\Factor;
use PHPUnit\Framework\TestCase;

class FactorTest extends BaseUnitTestCase
{
    protected $model = '/UserFactors/generalFactor.json';
    protected $modelType = \Okta\UserFactors\Factor::class;

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals($this->properties->id, $this->testable->getId());
        $this->assertEquals($this->properties->id, $this->testable->id);
    }

    /** @test */
    public function links_is_accessible()
    {
        $this->assertEquals($this->properties->_links, $this->testable->getLinks());
        $this->assertEquals($this->properties->_links, $this->testable->links);
    }

    /** @test */
    public function device_is_accessible()
    {
        $this->assertEquals($this->properties->device, $this->testable->getDevice());
        $this->assertEquals($this->properties->device, $this->testable->device);
    }

    /** @test */
    public function device_is_settable()
    {
        $this->testable->setDevice('test1');
        static::assertEquals('test1', $this->testable->getDevice());

        $this->testable->device = 'test2';
        static::assertEquals('test2', $this->testable->getDevice());
    }

    /** @test */
    public function status_is_accessible()
    {
        $this->assertEquals($this->properties->status, $this->testable->getStatus());
        $this->assertEquals($this->properties->status, $this->testable->status);
    }

    /** @test */
    public function user_id_is_accessible()
    {
        $this->assertEquals($this->properties->userId, $this->testable->getUserId());
        $this->assertEquals($this->properties->userId, $this->testable->userId);
    }

    /** @test */
    public function user_id_is_settable()
    {
        $this->testable->setUserId('123');
        static::assertEquals('123', $this->testable->getUserId());

        $this->testable->userId = '456';
        static::assertEquals('456', $this->testable->getUserId());
    }

}
