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
    public function links_is_accessible()
    {
        $this->assertEquals(static::$properties->_links, static::$testable->getLinks());
        $this->assertEquals(static::$properties->_links, static::$testable->links);
    }

    /** @test */
    public function embedded_is_accessible()
    {
        $this->assertEquals(static::$properties->_embedded, static::$testable->getEmbedded());
        $this->assertEquals(static::$properties->_embedded, static::$testable->embedded);
    }

    /** @test */
    public function credentials_is_settable()
    {
        $credentials = static::$testable->getCredentials();
        $credentials->testProp = 'Hello';

        static::$testable->setCredentials($credentials);
        static::assertInstanceOf(\Okta\Users\UserCredentials::class, static::$testable->getCredentials());
        static::assertEquals('Hello', static::$testable->getCredentials()->testProp);

        static::$testable->credentials = $credentials;
        static::assertInstanceOf(\Okta\Users\UserCredentials::class, static::$testable->credentials);
        static::assertEquals('Hello', static::$testable->credentials->testProp);

    }




    /** @test */
    public function profile_is_settable()
    {
        $profile = static::$testable->getProfile();
        $profile->firstName = 'Test';

        static::$testable->setProfile($profile);
        static::assertInstanceOf(\Okta\Users\UserProfile::class, static::$testable->getProfile());
        static::assertEquals('Test', static::$testable->getProfile()->getFirstName());

        static::$testable->profile = $profile;
        static::assertInstanceOf(\Okta\Users\UserProfile::class, static::$testable->profile);
        static::assertEquals('Test', static::$testable->profile->firstName);
    }


    /** @test */
    public function get_app_links_requests_correct_location()
    {
        $httpClient = $this->createNewHttpClient([
            'getBody' => '[{"id":"0gabcd1234"}]'
        ]);
        $user = $this->createNewUser();
        $user->getAppLinks();
        $request = $httpClient->getRequests();
        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/appLinks",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function get_roles_requests_correct_location()
    {
        $httpClient = $this->createNewHttpClient([
            'getBody' => '[{"id":"0gabcd1234"}]'
        ]);
        $user = $this->createNewUser();
        $user->getRoles();
        $request = $httpClient->getRequests();
        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/roles",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function add_role_requests_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $role = new \Okta\Users\Role();
        $role->setDescription('description');

        $user->addRole($role);

        $request = $httpClient->getRequests();
        $this->assertEquals(
            '{"description":"description"}',
            $request[0]->getBody()->getContents()
        );
        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/roles",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function remove_role_requests_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->removeRole('123');

        $request = $httpClient->getRequests();

        $this->assertEquals('DELETE', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/roles/123",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function get_group_targets_for_role_requests_correct_location()
    {
        $httpClient = $this->createNewHttpClient([
            'getBody' => '[{
    "id": "00g1emaKYZTWRYYRRTSK"}]'
        ]);
        $user = $this->createNewUser();

        $user->getGroupTargetsForRole('123');

        $request = $httpClient->getRequests();
        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/roles/123/targets/groups",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function remove_group_targets_from_role_requests_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->removeGroupTargetFromRole('123', 'abc');

        $request = $httpClient->getRequests();
        $this->assertEquals('DELETE', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/roles/123/targets/groups/abc",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function add_group_target_role_requests_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->addGroupTargetToRole('123', 'abc');

        $request = $httpClient->getRequests();
        $this->assertEquals('PUT', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/roles/123/targets/groups/abc",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function change_recovery_question_requests_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $recoveryQuestion = new \Okta\Users\RecoveryQuestionCredential();
        $recoveryQuestion->setQuestion('Question');
        $recoveryQuestion->setAnswer('Answer');

        $userCredentials = new \Okta\Users\UserCredentials();
        $userCredentials->setRecoveryQuestion($recoveryQuestion);
        $user->changeRecoveryQuestion($userCredentials);

        $request = $httpClient->getRequests();
        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/credentials/change_recovery_question",
            $request[0]->getUri()->getPath()
        );
        $this->assertEquals(
            '{"recovery_question":{"question":"Question","answer":"Answer"}}',
            $request[0]->getBody()->getContents()
        );
    }


    /** @test */
    public function get_groups_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient([
            'getBody' => '[{"id":"0gabcd1234","profile":{"name":"Cloud App Users","description":"Users can access cloud apps"}},{"id":"0gefgh5678","profile":{"name":"Internal App Users","description":"Users can access internal apps"}}]'
        ]);
        $user = $this->createNewUser();

        $user->getGroups();

        $request = $httpClient->getRequests();

        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/groups",
            $request[0]->getUri()->getPath()
        );

    }

    /** @test */
    public function activate_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->activate();
        $user->activate(false);

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/lifecycle/activate",
            $request[0]->getUri()->getPath()
        );
        $this->assertEquals(
            'sendEmail=true',
            $request[0]->getUri()->getQuery()
        );

        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/lifecycle/activate",
            $request[1]->getUri()->getPath()
        );
        $this->assertEquals(
            'sendEmail=false',
            $request[1]->getUri()->getQuery()
        );

    }

    /** @test */
    public function deactivate_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->deactivate();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/lifecycle/deactivate",
            $request[0]->getUri()->getPath()
        );
        $this->assertEquals(
            '',
            $request[0]->getUri()->getQuery()
        );


    }

    /** @test */
    public function suspend_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->suspend();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/lifecycle/suspend",
            $request[0]->getUri()->getPath()
        );
        $this->assertEquals(
            '',
            $request[0]->getUri()->getQuery()
        );

    }

    /** @test */
    public function unsuspend_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->unsuspend();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/lifecycle/unsuspend",
            $request[0]->getUri()->getPath()
        );
        $this->assertEquals(
            '',
            $request[0]->getUri()->getQuery()
        );

    }

    /** @test */
    public function unlock_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->unlock();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/lifecycle/unlock",
            $request[0]->getUri()->getPath()
        );
        $this->assertEquals(
            '',
            $request[0]->getUri()->getQuery()
        );

    }

    /** @test */
    public function forgot_password_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();
        $password = new \Okta\Users\PasswordCredential(
            null,
            json_decode('{"value": "TestPassword"}')
        );
        $userCredentialsProperties = json_decode('{"password": {}}');
        $userCredentials = new \Okta\Users\UserCredentials(null, $userCredentialsProperties);
        $userCredentials->setPassword($password);

        $user->forgotPassword($userCredentials);
        $user->forgotPassword($userCredentials,false);

        $request = $httpClient->getRequests();
        $this->assertEquals(
            '{"password":{"value":"TestPassword"}}',
            $request[0]->getBody()->getContents()
        );
        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/credentials/forgot_password",
            $request[0]->getUri()->getPath()
        );
        $this->assertEquals(
            $request[0]->getUri()->getQuery(),
            'sendEmail=true'
        );

        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/credentials/forgot_password",
            $request[1]->getUri()->getPath()
        );
        $this->assertEquals(
            'sendEmail=false',
            $request[1]->getUri()->getQuery()
        );

    }

    /** @test */
    public function reset_factors_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->resetFactors();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/lifecycle/reset_factors",
            $request[0]->getUri()->getPath()
        );
        $this->assertEquals(
            '',
            $request[0]->getUri()->getQuery()
        );

    }

    /** @test */
    public function deleting_makes_a_request_to_delete_endpoint()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->delete();

        $request = $httpClient->getRequests();

        $this->assertEquals('DELETE', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function save_makes_a_request_to_save_endpoint()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->save();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function getting_a_user_makes_request_correctly()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        (new User())->get('abc123');

        $request = $httpClient->getRequests();

        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/abc123",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function create_a_user_makes_the_correct_request()
    {
        $httpClient = $this->createNewHttpClient();

        $user = new User();
        $profile = $user->getProfile();
        $profile->firstName = 'Okta';
        $user->setProfile($profile);
        $user->create();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users",
            $request[0]->getUri()->getPath()
        );

        $this->assertContains('application/json', $request[0]->getHeader('accept'));
        $this->assertEquals(
            '{"profile":{"firstName":"Okta"}}',
                $request[0]->getBody()->getContents()
        );
    }

    /** @test */
    public function a_user_can_be_added_to_a_group()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->addToGroup('abc123');

        $request = $httpClient->getRequests();

        $this->assertEquals('PUT', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/groups/abc123/users/{$user->getId()}",
            $request[0]->getUri()->getPath()
        );
    }
    
    /** @test */
    public function a_user_can_request_a_password_change()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $oldPassword = (new \Okta\Users\PasswordCredential())->setValue('oldPassword');
        $newPassword = (new \Okta\Users\PasswordCredential())->setValue('newPassword');

        $changePasswordRequest = (new \Okta\Users\ChangePasswordRequest())
            ->setOldPassword($oldPassword)
            ->setNewPassword($newPassword);

        $user->changePassword($changePasswordRequest);

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/credentials/change_password",
            $request[0]->getUri()->getPath()
        );

        $this->assertEquals(
            '{"oldPassword":{"value":"oldPassword"},"newPassword":{"value":"newPassword"}}',
                $request[0]->getBody()->getContents()
        );
    }

    /** @test */
    public function reset_password_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->resetPassword();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/lifecycle/reset_password",
            $request[0]->getUri()->getPath()
        );
        $this->assertEquals(
            '',
            $request[0]->getUri()->getQuery()
        );

    }

    /** @test */
    public function expire_password_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->expirePassword();
        $user->expirePassword(true);

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/lifecycle/expire_password",
            $request[0]->getUri()->getPath()
        );
        $this->assertEquals(
            'tempPassword=false',
            $request[0]->getUri()->getQuery()
        );

        $this->assertEquals(
            'tempPassword=true',
            $request[1]->getUri()->getQuery()
        );

    }


    /**
     * @return User
     */
    private function createNewUser(): User
    {
        $class = new \stdClass();
        foreach (static::$properties as $prop => $value) {
            $class->{$prop} = $value;
        }
        return new User(NULL, $class);

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