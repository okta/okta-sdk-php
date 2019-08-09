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
use Okta\GroupRules\GroupRuleUserCondition;
use PHPUnit\Framework\TestCase;

class GroupRuleUserConditionTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
        "exclude": [
            "00u22w79JPMEeeuLr0g4"
        ],
        "include": [
            "0pr3f7zMZZHPgUoWO0g4"
        ]
        }
        ');

        $class = new \stdClass();
        foreach (static::$properties as $prop => $value) {
            $class->{$prop} = $value;
        }
        self::$testable = new GroupRuleUserCondition(NULL, $class);
    }

    /** @test */
    public function exclude_is_accessible()
    {
        $this->assertEquals(static::$properties->exclude, static::$testable->getExclude());
        $this->assertEquals(static::$properties->exclude, static::$testable->exclude);
        $this->assertTrue(is_array(static::$testable->getExclude()));
        $this->assertCount(1, static::$testable->getExclude());
    }

    /** @test */
    public function exclude_is_settable()
    {
        static::$testable->setExclude(['123']);
        static::assertEquals(['123'], static::$testable->getExclude());

        static::$testable->exclude = ['4564'];
        static::assertEquals(['4564'], static::$testable->getExclude());
    }


    /** @test */
    public function include_is_accessible()
    {
        $this->assertEquals(static::$properties->include, static::$testable->getInclude());
        $this->assertEquals(static::$properties->include, static::$testable->include);
        $this->assertTrue(is_array(static::$testable->getInclude()));
        $this->assertCount(1, static::$testable->getInclude());
    }

    /** @test */
    public function include_is_settable()
    {
        static::$testable->setInclude(['abc']);
        static::assertEquals(['abc'], static::$testable->getInclude());

        static::$testable->include = ['def'];
        static::assertEquals(['def'], static::$testable->getInclude());
    }


}
