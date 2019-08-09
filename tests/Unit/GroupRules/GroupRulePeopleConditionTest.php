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
use Okta\GroupRules\GroupRulePeopleCondition;
use PHPUnit\Framework\TestCase;

class GroupRulePeopleConditionTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
            "users": {
                "exclude": [],
                "include": []
            },
            "groups": {
                "exclude": [],
                "include": []
            }
        }
        ');

        $class = new \stdClass();
        foreach (static::$properties as $prop => $value) {
            $class->{$prop} = $value;
        }
        self::$testable = new GroupRulePeopleCondition(NULL, $class);
    }

    /** @test */
    public function users_is_accessible()
    {
        $this->assertInstanceOf(\Okta\GroupRules\GroupRuleUserCondition::class, static::$testable->getUsers());
        $this->assertInstanceOf(\Okta\GroupRules\GroupRuleUserCondition::class, static::$testable->users);
    }

    /** @test */
    public function users_is_settable()
    {
        $stub = new \stdClass();
        $stub->exclude = ['abc123'];
        $userCondition = new \Okta\GroupRules\GroupRuleUserCondition(null, $stub);

        static::$testable->setUsers($userCondition);

        $testableUsers = static::$testable->getUsers();

        $this->assertEquals($userCondition, $testableUsers);
        $this->assertCount(1, $testableUsers->getExclude());
    }


    /** @test */
    public function groups_is_accessible()
    {
        $this->assertInstanceOf(\Okta\GroupRules\GroupRuleGroupCondition::class, static::$testable->getGroups());
        $this->assertInstanceOf(\Okta\GroupRules\GroupRuleGroupCondition::class, static::$testable->groups);
    }

    /** @test */
    public function groups_is_settable()
    {
        $stub = new \stdClass();
        $stub->exclude = ['abc123'];
        $groupCondition = new \Okta\GroupRules\GroupRuleGroupCondition(null, $stub);

        static::$testable->setGroups($groupCondition);

        $testableGroups = static::$testable->getGroups();
        $this->assertEquals($groupCondition, $testableGroups);
        $this->assertCount(1, $testableGroups->getExclude());
    }


}
