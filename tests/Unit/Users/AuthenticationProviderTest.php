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
use Okta\Users\AuthenticationProvider;
use PHPUnit\Framework\TestCase;

class AuthenticationProviderTest extends TestCase
{
    protected static $properties;

    /** @var \Okta\Users\AuthenticationProvider */
    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode(
            '{
  "type": "Okta",
  "name": "Okta"
}'
        );

        $class = new \stdClass();
        foreach(static::$properties as $prop=>$value)
        {
            $class->{$prop} = $value;
        }
        self::$testable = new AuthenticationProvider(null, $class);

    }

    /** @test */
    public function type_is_accessible()
    {
        $this->assertEquals(static::$properties->type, static::$testable->getType());
        $this->assertEquals(static::$properties->type, static::$testable->type);
    }

    /** @test */
    public function type_is_settable()
    {
        static::$testable->setType('type1');
        static::assertEquals('type1', static::$testable->getType());

        static::$testable->type = 'type2';
        static::assertEquals('type2', static::$testable->getType());
    }

    /** @test */
    public function name_is_accessible()
    {
        $this->assertEquals(static::$properties->name, static::$testable->getName());
        $this->assertEquals(static::$properties->name, static::$testable->name);
    }

    /** @test */
    public function name_is_settable()
    {
        static::$testable->setName('name1');
        static::assertEquals('name1', static::$testable->getName());

        static::$testable->name = 'name2';
        static::assertEquals('name2', static::$testable->getName());
    }




}
