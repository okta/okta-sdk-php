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
use Okta\Groups\Group;
use PHPUnit\Framework\TestCase;

class GroupTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode(
            '{
  "id": "00g1emaKYZTWRYYRRTSK",
  "created": "2015-02-06T10:11:28.000Z",
  "lastUpdated": "2015-10-05T19:16:43.000Z",
  "lastMembershipUpdated": "2015-11-28T19:15:32.000Z",
  "objectClass": [
    "okta:user_group"
  ],
  "type": "OKTA_GROUP",
  "profile": {
    "name": "West Coast Users",
    "description": "Straight Outta Compton"
  },
  "_links": {
    "logo": [
      {
        "name": "medium",
        "href": "https://your-domain.okta.com/img/logos/groups/okta-medium.png",
        "type": "image/png"
      },
      {
        "name": "large",
        "href": "https://your-domain.okta.com/img/logos/groups/okta-large.png",
        "type": "image/png"
      }
    ],
    "users": {
      "href": "https://your-domain.okta.com/api/v1/groups/00g1emaKYZTWRYYRRTSK/users"
    },
    "apps": {
      "href": "https://your-domain.okta.com/api/v1/groups/00g1emaKYZTWRYYRRTSK/apps"
    }
  },
  "_embedded": {
      "someProperty": {
        "withValue": 30
      }
    }
}'
        );

        $class = new \stdClass();
        foreach(static::$properties as $prop=>$value)
        {
            $class->{$prop} = $value;
        }
        self::$testable = new Group(null, $class);
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
    public function links_is_accessible()
    {
        $this->assertEquals(static::$properties->_links, static::$testable->getLinks());
        $this->assertEquals(static::$properties->_links, static::$testable->links);
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
    public function profile_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Groups\GroupProfile::class, static::$testable->getProfile());
        $this->assertInstanceOf(\Okta\Groups\GroupProfile::class, static::$testable->profile);
    }

    /** @test */
    public function profile_is_settable()
    {
        $profile = static::$testable->getProfile();
        $profile->name = 'Test';
        $profile->description = 'Test Description';

        static::$testable->setProfile($profile);
        static::assertInstanceOf(\Okta\Groups\GroupProfile::class, static::$testable->getProfile());
        static::assertEquals('Test', static::$testable->getProfile()->getName());
        static::assertEquals('Test Description', static::$testable->getProfile()->getDescription());

        static::$testable->profile = $profile;
        static::assertInstanceOf(\Okta\Groups\GroupProfile::class, static::$testable->profile);
        static::assertEquals('Test', static::$testable->profile->name);
        static::assertEquals('Test Description', static::$testable->profile->description);

    }

    /** @test */
    public function embedded_is_accessible()
    {
        $this->assertEquals(static::$properties->_embedded, static::$testable->getEmbedded());
        $this->assertEquals(static::$properties->_embedded, static::$testable->embedded);
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
    public function object_class_is_accessible()
    {
        $this->assertEquals(static::$properties->objectClass, static::$testable->getObjectClass());
        $this->assertEquals(static::$properties->objectClass, static::$testable->objectClass);
    }

    /** @test */
    public function last_membership_updated_is_accessible()
    {
        $ts = Carbon::parse(static::$properties->lastMembershipUpdated)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, static::$testable->lastMembershipUpdated);
        $this->assertEquals($ts, static::$testable->getLastMembershipUpdated()->timestamp);
        $this->assertEquals($ts, static::$testable->lastMembershipUpdated->timestamp);
    }

    /** @test */
    public function remove_user_makes_correct_request()
    {
        $httpClient = $this->createNewHttpClient();
        $group = $this->createNewGroup();

        $group->removeUser('12345');

        $request = $httpClient->getRequests();

        $this->assertEquals('DELETE', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/groups/{$group->getId()}/users/12345",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function get_users_makes_correct_request()
    {
        $httpClient = $this->createNewHttpClient([
            'getBody' => '[{"id":"abc123"}]'
        ]);
        $group = $this->createNewGroup();

        $groupUsers = $group->getUsers();

        $request = $httpClient->getRequests();

        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/groups/{$group->getId()}/users",
            $request[0]->getUri()->getPath()
        );
        $this->assertInstanceOf(
            \Okta\Users\Collection::class,
            $groupUsers
        );

        $this->assertInstanceOf(
            \Okta\Users\User::class,
            $groupUsers->first()
        );
    }

    /** @test */
    public function save_makes_a_request_to_save_endpoint()
    {
        $httpClient = $this->createNewHttpClient();
        $group = $this->createNewGroup();

        $group->save();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/groups/{$group->getId()}",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function delete_makes_a_request_to_delete_endpoint()
    {
        $httpClient = $this->createNewHttpClient();
        $group = $this->createNewGroup();

        $group->delete();

        $request = $httpClient->getRequests();

        $this->assertEquals('DELETE', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/groups/{$group->getId()}",
            $request[0]->getUri()->getPath()
        );
    }



    /**
     * @return Group
     */
    private function createNewGroup(): Group
    {
        $class = new \stdClass();
        foreach (static::$properties as $prop => $value) {
            $class->{$prop} = $value;
        }
        return new Group(NULL, $class);

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
