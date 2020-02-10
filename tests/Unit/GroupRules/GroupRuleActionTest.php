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
use Okta\GroupRules\GroupRuleAction;
use PHPUnit\Framework\TestCase;

class GroupRuleActionTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
        "assignUserToGroups": {
            "groupIds": []
        }
        }
        ');

        $class = new \stdClass();
        foreach (static::$properties as $prop => $value) {
            $class->{$prop} = $value;
        }
        self::$testable = new GroupRuleAction(NULL, $class);
    }

    /** @test */
    public function assign_user_to_groups_is_accessible()
    {
        $this->assertInstanceOf(
            \Okta\GroupRules\GroupRuleGroupAssignment::class,
            static::$testable->getAssignUserToGroups()
        );
        $this->assertInstanceOf(
            \Okta\GroupRules\GroupRuleGroupAssignment::class,
            static::$testable->assignUserToGroups
        );
    }

    /** @test */
    public function assign_user_to_groups_is_settable()
    {
        $stub = new \stdClass();
        $stub->groupIds = ['abc123'];
        $groupAssignments = new \Okta\GroupRules\GroupRuleGroupAssignment(null, $stub);

        static::$testable->setAssignUserToGroups($groupAssignments);

        $localTestable = static::$testable->getAssignUserToGroups();
        $this->assertEquals($groupAssignments, $localTestable);
        $this->assertCount(1, $localTestable->getGroupIds());
    }


}
