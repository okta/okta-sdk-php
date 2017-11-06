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

class FactorTest extends BaseTestCase
{
    protected static $properties;
    protected static $testable;

    public function setUp()
    {
        parent::setUp();
        $this->createNewHttpClient();
        $model = '/UserFactors/generalFactor.json';
        static::$properties = json_decode($this->getModelJson($model));
        static::$testable = $this->createModel($model, \Okta\UserFactors\Factor::class);
    }

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals(static::$properties->id, static::$testable->getId());
        $this->assertEquals(static::$properties->id, static::$testable->id);
    }

    /** @test */
    public function links_is_accessible()
    {
        $this->assertEquals(static::$properties->_links, static::$testable->getLinks());
        $this->assertEquals(static::$properties->_links, static::$testable->links);
    }

    /** @test */
    public function device_is_accessible()
    {
        $this->assertEquals(static::$properties->device, static::$testable->getDevice());
        $this->assertEquals(static::$properties->device, static::$testable->device);
    }

    /** @test */
    public function device_is_settable()
    {
        static::$testable->setDevice('test1');
        static::assertEquals('test1', static::$testable->getDevice());

        static::$testable->device = 'test2';
        static::assertEquals('test2', static::$testable->getDevice());
    }

    /** @test */
    public function status_is_accessible()
    {
        $this->assertEquals(static::$properties->status, static::$testable->getStatus());
        $this->assertEquals(static::$properties->status, static::$testable->status);
    }

    /** @test */
    public function user_id_is_accessible()
    {
        $this->assertEquals(static::$properties->userId, static::$testable->getUserId());
        $this->assertEquals(static::$properties->userId, static::$testable->userId);
    }

    /** @test */
    public function user_id_is_settable()
    {
        static::$testable->setUserId('123');
        static::assertEquals('123', static::$testable->getUserId());

        static::$testable->userId = '456';
        static::assertEquals('456', static::$testable->getUserId());
    }

}
