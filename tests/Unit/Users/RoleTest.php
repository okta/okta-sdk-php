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
use Okta\ClientBuilder;
use Okta\Users\Role;
use PHPUnit\Framework\TestCase;

class RoleTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
          "id": "ra1b8anIk7rx7em7L0g4",
          "label": "Super Organization Administrator",
          "type": "SUPER_ADMIN",
          "description": "The Description",
          "status": "ACTIVE",
          "created": "2015-09-06T15:28:47.000Z",
          "lastUpdated": "2015-09-06T15:28:47.000Z",
          "_embedded": {}
        }
        ');

        self::$testable = new Role(null, static::$properties);
    }

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals(static::$properties->id, static::$testable->getId());
        $this->assertEquals(static::$properties->id, static::$testable->id);
    }

    /** @test */
    public function type_is_accessible()
    {
        $this->assertEquals(static::$properties->type, static::$testable->getType());
        $this->assertEquals(static::$properties->type, static::$testable->type);
    }

    /** @test */
    public function label_is_accessible()
    {
        $this->assertEquals(static::$properties->label, static::$testable->getLabel());
        $this->assertEquals(static::$properties->label, static::$testable->label);
    }

    /** @test */
    public function status_is_accessible()
    {
        $this->assertEquals(static::$properties->status, static::$testable->getStatus());
        $this->assertEquals(static::$properties->status, static::$testable->status);
    }

    /** @test */
    public function created_is_accessible()
    {
        $ts = Carbon::parse(static::$properties->created)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, static::$testable->created);
        $this->assertEquals($ts, static::$testable->getCreated()->timestamp);
        $this->assertEquals($ts, static::$testable->created->timestamp);
    }

    /** @test */
    public function description_is_accessible()
    {
        $this->assertEquals(static::$properties->description, static::$testable->getDescription());
        $this->assertEquals(static::$properties->description, static::$testable->description);
    }

    /** @test */
    public function description_is_settable()
    {
        static::$testable->setDescription('Description 1');
        static::assertEquals('Description 1', static::$testable->getDescription());

        static::$testable->description = 'Description 2';
        static::assertEquals('Description 2', static::$testable->getDescription());
    }


    /** @test */
    public function last_updated_is_accessible()
    {
        $ts = Carbon::parse(static::$properties->lastUpdated)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, static::$testable->lastUpdated);
        $this->assertEquals($ts, static::$testable->getLastUpdated()->timestamp);
        $this->assertEquals($ts, static::$testable->lastUpdated->timestamp);
    }

    /** @test */
    public function embedded_is_accessible()
    {
        $this->assertEquals(static::$properties->_embedded, static::$testable->getEmbedded());
        $this->assertEquals(static::$properties->_embedded, static::$testable->embedded);
    }

}
