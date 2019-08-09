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
use Okta\GroupRules\GroupRuleConditions;
use PHPUnit\Framework\TestCase;

class GroupRuleConditionsTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
          "people": {
            "users": {
              "exclude": [
                "00u22w79JPMEeeuLr0g4"
              ]
            },
            "groups": {
              "exclude": []
            }
          },
          "expression": {
            "value": "user.role==\"Engineer\"",
            "type": "urn:okta:expression:1.0"
          }
        
        }
        ');

        $class = new \stdClass();
        foreach (static::$properties as $prop => $value) {
            $class->{$prop} = $value;
        }
        self::$testable = new GroupRuleConditions(NULL, $class);
    }

    /** @test */
    public function people_is_accessible()
    {
        $this->assertInstanceOf(\Okta\GroupRules\GroupRulePeopleCondition::class, static::$testable->getPeople());
        $this->assertInstanceOf(\Okta\GroupRules\GroupRulePeopleCondition::class, static::$testable->people);
    }

    /** @test */
    public function people_is_settable()
    {
        $stub = new \stdClass();
        $stub->people = '{
            "users": {},
            "groups": {}
        }';
        $groupRulePeopleCondition = new \Okta\GroupRules\GroupRulePeopleCondition(null, $stub);

        static::$testable->setPeople($groupRulePeopleCondition);

        $localTestable = static::$testable->getPeople();
        $this->assertEquals($groupRulePeopleCondition, $localTestable);
    }

    /** @test */
    public function expression_is_accessible()
    {
        $this->assertInstanceOf(\Okta\GroupRules\GroupRuleExpression::class, static::$testable->getExpression());
        $this->assertInstanceOf(\Okta\GroupRules\GroupRuleExpression::class, static::$testable->expression);
    }

    /** @test */
    public function expression_is_settable()
    {
        $stub = new \stdClass();
        $stub->expression = '{
            "value": "",
            "type": ""
        }';
        $groupRuleExpression = new \Okta\GroupRules\GroupRuleExpression(null, $stub);

        static::$testable->setExpression($groupRuleExpression);

        $localTestable = static::$testable->getExpression();
        $this->assertEquals($groupRuleExpression, $localTestable);
    }


}
