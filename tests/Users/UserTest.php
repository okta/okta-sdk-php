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
use Okta\Users\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected static $properties;
    /** @var User */
    protected static $testable;

    public static function setUpBeforeClass()
    {
        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode(
            '{
  "id": "00ub0oNGTSWTBKOLGLNR",
  "status": "ACTIVE",
  "transitioningToStatus": "ACTIVE",
  "created": "2013-06-24T16:39:18.000Z",
  "activated": "2013-06-24T16:39:19.000Z",
  "statusChanged": "2013-06-24T16:39:19.000Z",
  "lastLogin": "2013-06-24T17:39:19.000Z",
  "lastUpdated": "2013-06-27T16:35:28.000Z",
  "passwordChanged": "2013-06-24T16:39:19.000Z",
  "profile": {
    "login": "isaac.brock@example.com",
    "firstName": "Isaac",
    "lastName": "Brock",
    "nickName": "issac",
    "displayName": "Isaac Brock",
    "email": "isaac.brock@example.com",
    "secondEmail": "isaac@example.org",
    "profileUrl": "http://www.example.com/profile",
    "preferredLanguage": "en-US",
    "userType": "Employee",
    "organization": "Okta",
    "title": "Director",
    "division": "R&D",
    "department": "Engineering",
    "costCenter": "10",
    "employeeNumber": "187",
    "mobilePhone": "+1-555-415-1337",
    "primaryPhone": "+1-555-514-1337",
    "streetAddress": "301 Brannan St.",
    "city": "San Francisco",
    "state": "CA",
    "zipCode": "94107",
    "countryCode": "US"
  },
  "credentials": {
    "password": {},
    "recovery_question": {
      "question": "Who\'s a major player in the cowboy scene?"
    },
    "provider": {
      "type": "OKTA",
      "name": "OKTA"
    }
  },
  "_links": {
    "resetPassword": {
      "href": "https://your-domain.okta.com/api/v1/users/00ub0oNGTSWTBKOLGLNR/lifecycle/reset_password"
    },
    "resetFactors": {
      "href": "https://your-domain.okta.com/api/v1/users/00ub0oNGTSWTBKOLGLNR/lifecycle/reset_factors"
    },
    "expirePassword": {
      "href": "https://your-domain.okta.com/api/v1/users/00ub0oNGTSWTBKOLGLNR/lifecycle/expire_password"
    },
    "forgotPassword": {
      "href": "https://your-domain.okta.com/api/v1/users/00ub0oNGTSWTBKOLGLNR/credentials/forgot_password"
    },
    "changeRecoveryQuestion": {
      "href": "https://your-domain.okta.com/api/v1/users/00ub0oNGTSWTBKOLGLNR/credentials/change_recovery_question"
    },
    "deactivate": {
      "href": "https://your-domain.okta.com/api/v1/users/00ub0oNGTSWTBKOLGLNR/lifecycle/deactivate"
    },
    "changePassword": {
      "href": "https://your-domain.okta.com/api/v1/users/00ub0oNGTSWTBKOLGLNR/credentials/change_password"
    }
  }
}'
        );

        $class = new \stdClass();
        foreach(static::$properties as $prop=>$value)
        {
            $class->{$prop} = $value;
        }
        self::$testable = new User(null, $class);

    }

    /** @test */
    public function can_get_id_property()
    {
        $this->assertEquals(static::$properties->id, static::$testable->getId());
        $this->assertEquals(static::$properties->id, static::$testable->id);
    }

    /** @test */
    public function status_is_accessible()
    {
        $this->assertEquals(static::$properties->status, static::$testable->getStatus());
        $this->assertEquals(static::$properties->status, static::$testable->status);
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
    public function activated_is_accessible()
    {
        $ts = Carbon::parse(static::$properties->activated)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, static::$testable->activated);
        $this->assertEquals($ts, static::$testable->getActivated()->timestamp);
        $this->assertEquals($ts, static::$testable->activated->timestamp);
    }

    /** @test */
    public function status_changed_is_accessible()
    {
        $ts = Carbon::parse(static::$properties->statusChanged)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, static::$testable->statusChanged);
        $this->assertEquals($ts, static::$testable->getStatusChanged()->timestamp);
        $this->assertEquals($ts, static::$testable->statusChanged->timestamp);
    }

    /** @test */
    public function last_login_is_accessible()
    {
        $ts = Carbon::parse(static::$properties->lastLogin)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, static::$testable->lastLogin);
        $this->assertEquals($ts, static::$testable->getLastLogin()->timestamp);
        $this->assertEquals($ts, static::$testable->lastLogin->timestamp);
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
    public function password_changed_is_accessible()
    {
        $ts = Carbon::parse(static::$properties->passwordChanged)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, static::$testable->passwordChanged);
        $this->assertEquals($ts, static::$testable->getPasswordChanged()->timestamp);
        $this->assertEquals($ts, static::$testable->passwordChanged->timestamp);
    }

    /** @test */
    public function profile_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Users\UserProfile::class, static::$testable->getProfile());
        $this->assertInstanceOf(\Okta\Users\UserProfile::class, static::$testable->profile);
    }

    /** @test */
    public function credentials_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Users\UserCredentials::class, static::$testable->getCredentials());
        $this->assertInstanceOf(\Okta\Users\UserCredentials::class, static::$testable->credentials);
    }

    /** @test */
    public function transitioning_to_status_is_accessible()
    {
        $this->assertEquals(static::$properties->transitioningToStatus, static::$testable->getTransitioningToStatus());
        $this->assertEquals(static::$properties->transitioningToStatus, static::$testable->transitioningToStatus);
    }

    /** @test */
    public function get_groups_makes_request_to_correct_location()
    {
        list($httpClient, $user) = $this->createNewUser();

        $user->getGroups();

        $request = $httpClient->getRequests();

        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            $request[0]->getUri()->getPath(),
            "/api/v1/users/{$user->getId()}/groups"
        );

    }

    /** @test */
    public function activate_makes_request_to_correct_location()
    {
        list($httpClient, $user) = $this->createNewUser();

        $user->activate();
        $user->activate(false);

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            $request[0]->getUri()->getPath(),
            "/api/v1/users/{$user->getId()}/lifecycle/activate"
        );
        $this->assertEquals(
            $request[0]->getUri()->getQuery(),
            'sendEmail=true'
        );

        $this->assertEquals(
            $request[1]->getUri()->getPath(),
            "/api/v1/users/{$user->getId()}/lifecycle/activate"
        );
        $this->assertEquals(
            $request[1]->getUri()->getQuery(),
            'sendEmail=false'
        );

    }

    /** @test */
    public function deactivate_makes_request_to_correct_location()
    {
        list($httpClient, $user) = $this->createNewUser();

        $user->deactivate();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            $request[0]->getUri()->getPath(),
            "/api/v1/users/{$user->getId()}/lifecycle/deactivate"
        );
        $this->assertEquals(
            $request[0]->getUri()->getQuery(),
            ''
        );


    }

    /** @test */
    public function suspend_makes_request_to_correct_location()
    {
        list($httpClient, $user) = $this->createNewUser();

        $user->suspend();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            $request[0]->getUri()->getPath(),
            "/api/v1/users/{$user->getId()}/lifecycle/suspend"
        );
        $this->assertEquals(
            $request[0]->getUri()->getQuery(),
            ''
        );

    }

    /** @test */
    public function unsuspend_makes_request_to_correct_location()
    {
        list($httpClient, $user) = $this->createNewUser();

        $user->unsuspend();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            $request[0]->getUri()->getPath(),
            "/api/v1/users/{$user->getId()}/lifecycle/unsuspend"
        );
        $this->assertEquals(
            $request[0]->getUri()->getQuery(),
            ''
        );

    }

    /** @test */
    public function unlock_makes_request_to_correct_location()
    {
        list($httpClient, $user) = $this->createNewUser();

        $user->unlock();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            $request[0]->getUri()->getPath(),
            "/api/v1/users/{$user->getId()}/lifecycle/unlock"
        );
        $this->assertEquals(
            $request[0]->getUri()->getQuery(),
            ''
        );

    }

    /** @test */
    public function forgot_password_makes_request_to_correct_location()
    {
        list($httpClient, $user) = $this->createNewUser();

        $user->forgotPassword();
        $user->forgotPassword(false);

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            $request[0]->getUri()->getPath(),
            "/api/v1/users/{$user->getId()}/lifecycle/forgot_password"
        );
        $this->assertEquals(
            $request[0]->getUri()->getQuery(),
            'sendEmail=true'
        );

        $this->assertEquals(
            $request[1]->getUri()->getPath(),
            "/api/v1/users/{$user->getId()}/lifecycle/forgot_password"
        );
        $this->assertEquals(
            $request[1]->getUri()->getQuery(),
            'sendEmail=false'
        );

    }

    /** @test */
    public function reset_factors_makes_request_to_correct_location()
    {
        list($httpClient, $user) = $this->createNewUser();

        $user->resetFactors();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            $request[0]->getUri()->getPath(),
            "/api/v1/users/{$user->getId()}/lifecycle/reset_factors"
        );
        $this->assertEquals(
            $request[0]->getUri()->getQuery(),
            ''
        );

    }

    /**
     * @return array
     */
    private function createNewUser(): array
    {
        $response = $this->createMock('Psr\Http\Message\ResponseInterface');
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn('[]');
        $httpClient = new \Http\Mock\Client;
        $httpClient->addResponse($response);

        (new \Okta\ClientBuilder())
            ->setOrganizationUrl('https://dev.okta.com')
            ->setToken('abc123')
            ->setHttpClient($httpClient)
            ->build();


        $class = new \stdClass();
        foreach (static::$properties as $prop => $value) {
            $class->{$prop} = $value;
        }
        $user = new User(NULL, $class);
        return array($httpClient, $user);
    }


}
