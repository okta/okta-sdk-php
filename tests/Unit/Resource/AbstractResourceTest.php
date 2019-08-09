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

use Okta\ClientBuilder;
use Okta\Resource\AbstractResource;
use PHPUnit\Framework\TestCase;

class AbstractResourceTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
        "id": "abc123",
        "testCast": "123",
        "propToChange": "Change Me",
        "_links": {
            "self": {
                "href": "http://example.com"
            }
        }
        }
        ');

        self::$testable = new StubResource(null, static::$properties);
    }

    public function tearDown(): void
    {
        self::$testable->clearOptions();
    }

    /** @test */
    public function can_get_href()
    {
        $this->assertEquals(
            'http://example.com',
            self::$testable->getHref()
        );
    }

    /** @test */
    public function can_cast_a_property()
    {
        $this->assertIsInt(
            self::$testable->getProperty('testCast', 'int')
        );

    }

    /** @test */
    public function throws_exception_if_link_property_does_not_exist()
    {
        $this->expectException(\InvalidArgumentException::class);
        self::$testable->getLinkProperty('non-exist');
    }

    /** @test */
    public function returns_null_if_date_property_does_not_exist()
    {
        $this->assertNull(
            self::$testable->getDateProperty('non-exist')
        );
    }

    /** @test */
    public function can_get_dirty_property_names()
    {
         $orig = self::$testable->propToChange;
         self::$testable->propToChange = 'I\'m Changed';
         $propertyNames = self::$testable->getPropertyNames(true);

         $this->assertCount(
             2,
             $propertyNames
         );
         self::$testable->propToChange = $orig;
    }

    /** @test */
    public function setting_options_returns_instance()
    {
        $resource = self::$testable->setOptions(['option'=>'1']);

        $this->assertInstanceOf(StubResource::class, $resource);
    }

    /** @test */
    public function can_get_set_options()
    {
        $resource = self::$testable->setOptions('hello');

        $this->assertEquals(
            'hello',
            $resource->getOptions()
        );
    }

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals(static::$properties->id, static::$testable->getId());
        $this->assertEquals(static::$properties->id, static::$testable->id);
    }

    /** @test */
    public function returns_null_for_property_that_doesnt_exist()
    {
        $this->assertNull(static::$testable->non_exist);
    }

    /** @test */
    public function can_cast_to_string()
    {
         $this->assertEquals(
             json_encode(static::$properties),
             (string)static::$testable
         );
    }


}

class StubResource extends AbstractResource
{

}
