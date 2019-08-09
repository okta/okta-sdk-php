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
use Okta\GroupRules\GroupRuleGroupAssignment;
use PHPUnit\Framework\TestCase;

class GroupRuleGroupAssignmentTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
        "groupIds": [
            "00gjitX9HqABSoqTB0g3"
        ]
        }
        ');

        $class = new \stdClass();
        foreach (static::$properties as $prop => $value) {
            $class->{$prop} = $value;
        }
        self::$testable = new GroupRuleGroupAssignment(NULL, $class);
    }

    /** @test */
    public function group_ids_is_accessible()
    {
        $this->assertEquals(static::$properties->groupIds, static::$testable->getGroupIds());
        $this->assertEquals(static::$properties->groupIds, static::$testable->groupIds);
        $this->assertTrue(is_array(static::$testable->groupIds));
    }

    /** @test */
    public function group_ids_is_settable()
    {
        static::$testable->setGroupIds(['123','456']);
        static::assertEquals(['123','456'], static::$testable->getGroupIds());

        static::$testable->groupIds = ['789'];
        static::assertEquals(['789'], static::$testable->getGroupIds());
    }



}
