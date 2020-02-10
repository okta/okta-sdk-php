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
use Okta\GroupRules\GroupRule;
use PHPUnit\Framework\TestCase;

class GroupRuleTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode(
            '{
  "type": "group_rule",
  "id": "0pr3f7zMZZHPgUoWO0g4",
  "status": "INACTIVE",
  "name": "Engineers Group Rule",
  "created": "2016-12-01T14:40:04.000Z",
  "lastUpdated": "2016-12-01T14:40:04.000Z",
  "conditions": {
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
    },
  "actions": {
    "assignUserToGroups": {
      "groupIds": [
        "00gjitX9HqABSoqTB0g3"
      ]
    }
  }
}'
        );

        $class = new \stdClass();
        foreach (static::$properties as $prop => $value) {
            $class->{$prop} = $value;
        }
        self::$testable = new GroupRule(NULL, $class);
    }

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals(static::$properties->id, static::$testable->getId());
        $this->assertEquals(static::$properties->id, static::$testable->id);
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
    public function status_is_accessible()
    {
        $this->assertEquals(static::$properties->status, static::$testable->getStatus());
        $this->assertEquals(static::$properties->status, static::$testable->status);
    }

    /** @test */
    public function actions_is_accessible()
    {
        $this->assertInstanceOf(\Okta\GroupRules\GroupRuleAction::class, static::$testable->getActions());
        $this->assertInstanceOf(\Okta\GroupRules\GroupRuleAction::class, static::$testable->actions);
    }

    /** @test */
    public function actions_is_settable()
    {
        $stub = new \stdClass();
        $stub->groupIds = '{"assignUserToGroups": {},}';
        $groupRuleAction = new \Okta\GroupRules\GroupRuleAction(null, $stub);

        static::$testable->setActions($groupRuleAction);

        $localTestable = static::$testable->getActions();
        $this->assertEquals($groupRuleAction, $localTestable);
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
    public function conditions_is_accessible()
    {
        $this->assertInstanceOf(\Okta\GroupRules\GroupRuleConditions::class, static::$testable->getConditions());
        $this->assertInstanceOf(\Okta\GroupRules\GroupRuleConditions::class, static::$testable->conditions);
    }

    /** @test */
    public function conditions_is_settable()
    {
        $stub = new \stdClass();
        $stub->groupIds = '{"people": {}, "expression": {}}';
        $groupRuleConditions = new \Okta\GroupRules\GroupRuleConditions(null, $stub);

        static::$testable->setConditions($groupRuleConditions);

        $localTestable = static::$testable->getConditions();
        $this->assertEquals($groupRuleConditions, $localTestable);

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
    public function save_makes_a_request_to_save_endpoint()
    {
        $httpClient = $this->createNewHttpClient();
        $groupRule = $this->createNewGroupRule();

        $response = $groupRule->save();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());

        $this->assertEquals(
            "/api/v1/groups/{$groupRule->getId()}",
            $request[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(GroupRule::class, $response);
    }

    /** @test */
    public function delete_makes_a_request_to_delete_endpoint()
    {
        $httpClient = $this->createNewHttpClient();
        $groupRule = $this->createNewGroupRule();

        $groupRule->delete();

        $request = $httpClient->getRequests();

        $this->assertEquals('DELETE', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/groups/{$groupRule->getId()}",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function activate_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $groupRule = $this->createNewGroupRule();

        $groupRule->activate();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/groups/rules/{$groupRule->getId()}/lifecycle/activate",
            $request[0]->getUri()->getPath()
        );

    }

    /** @test */
    public function deactivate_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $groupRule = $this->createNewGroupRule();

        $groupRule->deactivate();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/groups/rules/{$groupRule->getId()}/lifecycle/deactivate",
            $request[0]->getUri()->getPath()
        );

    }


    /**
     * @return GroupRule
     */
    private function createNewGroupRule(): GroupRule
    {
        $class = new \stdClass();
        foreach (static::$properties as $prop => $value) {
            $class->{$prop} = $value;
        }
        return new GroupRule(NULL, $class);

    }

    /**
     * @param array $returns
     *
     * @return \Http\Mock\Client
     */
    private function createNewHttpClient($returns = []): \Http\Mock\Client
    {
        $defaults = [
            'getStatusCode' => 200,
            'getBody' => '{}'
        ];

        $mockReturns = array_replace_recursive($defaults, $returns);

        $response = $this->createMock('Psr\Http\Message\ResponseInterface');
        foreach($mockReturns as $method=>$return) {
            $response->method($method)->willReturn($return);
        }
        $httpClient = new \Http\Mock\Client;
        $httpClient->addResponse($response);

        (new \Okta\ClientBuilder())
            ->setOrganizationUrl('https://dev.okta.com')
            ->setToken('abc123')
            ->setHttpClient($httpClient)
            ->build();
        return $httpClient;
    }



}
