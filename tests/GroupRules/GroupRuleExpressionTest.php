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
use Okta\GroupRules\GroupRuleExpression;
use PHPUnit\Framework\TestCase;

class GroupRuleExpressionTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
            "value": "user.role==\"Engineer\"",
            "type": "urn:okta:expression:1.0"
        }
      ');

        $class = new \stdClass();
        foreach (static::$properties as $prop => $value) {
            $class->{$prop} = $value;
        }
        self::$testable = new GroupRuleExpression(NULL, $class);
    }

    /** @test */
    public function value_is_accessible()
    {
        $this->assertEquals(static::$properties->value, static::$testable->getValue());
        $this->assertEquals(static::$properties->value, static::$testable->value);
    }

    /** @test */
    public function type_is_accessible()
    {
        $this->assertEquals(static::$properties->type, static::$testable->getType());
        $this->assertEquals(static::$properties->type, static::$testable->type);
    }


}
