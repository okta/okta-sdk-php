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

class UserTest extends BaseUnitTestCase
{
    protected $model = '{
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
    },
    "self": {
      "href": "https://your-domain.okta.com/api/v1/users/00ub0oNGTSWTBKOLGLNR"
    }
  },
  "_embedded": {
      "someProperty": {
        "withValue": 30
      }
    }
}';
    protected $modelType = \Okta\Users\User::class;

    /** @test */
    public function can_get_id_property()
    {
        $this->assertEquals($this->properties->id, $this->testable->getId());
        $this->assertEquals($this->properties->id, $this->testable->id);
    }

    /** @test */
    public function status_is_accessible()
    {
        $this->assertEquals($this->properties->status, $this->testable->getStatus());
        $this->assertEquals($this->properties->status, $this->testable->status);
    }

    /** @test */
    public function created_is_accessible()
    {
        $ts = Carbon::parse($this->properties->created)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->created);
        $this->assertEquals($ts, $this->testable->getCreated()->timestamp);
        $this->assertEquals($ts, $this->testable->created->timestamp);
    }

    /** @test */
    public function activated_is_accessible()
    {
        $ts = Carbon::parse($this->properties->activated)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->activated);
        $this->assertEquals($ts, $this->testable->getActivated()->timestamp);
        $this->assertEquals($ts, $this->testable->activated->timestamp);
    }

    /** @test */
    public function status_changed_is_accessible()
    {
        $ts = Carbon::parse($this->properties->statusChanged)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->statusChanged);
        $this->assertEquals($ts, $this->testable->getStatusChanged()->timestamp);
        $this->assertEquals($ts, $this->testable->statusChanged->timestamp);
    }

    /** @test */
    public function last_login_is_accessible()
    {
        $ts = Carbon::parse($this->properties->lastLogin)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->lastLogin);
        $this->assertEquals($ts, $this->testable->getLastLogin()->timestamp);
        $this->assertEquals($ts, $this->testable->lastLogin->timestamp);
    }

    /** @test */
    public function last_updated_is_accessible()
    {
        $ts = Carbon::parse($this->properties->lastUpdated)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->lastUpdated);
        $this->assertEquals($ts, $this->testable->getLastUpdated()->timestamp);
        $this->assertEquals($ts, $this->testable->lastUpdated->timestamp);
    }

    /** @test */
    public function password_changed_is_accessible()
    {
        $ts = Carbon::parse($this->properties->passwordChanged)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->passwordChanged);
        $this->assertEquals($ts, $this->testable->getPasswordChanged()->timestamp);
        $this->assertEquals($ts, $this->testable->passwordChanged->timestamp);
    }

    /** @test */
    public function profile_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Users\UserProfile::class, $this->testable->getProfile());
        $this->assertInstanceOf(\Okta\Users\UserProfile::class, $this->testable->profile);
    }

    /** @test */
    public function credentials_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Users\UserCredentials::class, $this->testable->getCredentials());
        $this->assertInstanceOf(\Okta\Users\UserCredentials::class, $this->testable->credentials);
    }

    /** @test */
    public function transitioning_to_status_is_accessible()
    {
        $this->assertEquals($this->properties->transitioningToStatus, $this->testable->getTransitioningToStatus());
        $this->assertEquals($this->properties->transitioningToStatus, $this->testable->transitioningToStatus);
    }

    /** @test */
    public function links_is_accessible()
    {
        $this->assertEquals($this->properties->_links, $this->testable->getLinks());
        $this->assertEquals($this->properties->_links, $this->testable->links);
    }

    /** @test */
    public function embedded_is_accessible()
    {
        $this->assertEquals($this->properties->_embedded, $this->testable->getEmbedded());
        $this->assertEquals($this->properties->_embedded, $this->testable->embedded);
    }

    /** @test */
    public function credentials_is_settable()
    {
        $credentials = $this->testable->getCredentials();
        $credentials->testProp = 'Hello';

        $this->testable->setCredentials($credentials);
        static::assertInstanceOf(\Okta\Users\UserCredentials::class, $this->testable->getCredentials());
        static::assertEquals('Hello', $this->testable->getCredentials()->testProp);

        $this->testable->credentials = $credentials;
        static::assertInstanceOf(\Okta\Users\UserCredentials::class, $this->testable->credentials);
        static::assertEquals('Hello', $this->testable->credentials->testProp);

    }

    /** @test */
    public function profile_is_settable()
    {
        $profile = $this->testable->getProfile();
        $profile->firstName = 'Test';

        $this->testable->setProfile($profile);
        static::assertInstanceOf(\Okta\Users\UserProfile::class, $this->testable->getProfile());
        static::assertEquals('Test', $this->testable->getProfile()->getFirstName());

        $this->testable->profile = $profile;
        static::assertInstanceOf(\Okta\Users\UserProfile::class, $this->testable->profile);
        static::assertEquals('Test', $this->testable->profile->firstName);
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
        $userResponse = $user->activate(false);

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
    public function end_user_session_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient();
        $user = $this->createNewUser();

        $user->endAllSessions();

        $request = $httpClient->getRequests();

        $this->assertEquals('DELETE', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/sessions",
            $request[0]->getUri()->getPath()
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

    /** @test */
    public function adding_factor_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient([
            "getBody" => '{"id": "abc123", "factorType": "sms"}'
        ]);
        $user = $this->createNewUser();

        $factor = new\Okta\UserFactors\Factor;
        $factor->setUserId($user->getId());

        $user->addFactor($factor);

        $request = $httpClient->getRequests();
        $this->assertEquals('POST', $request[0]->getMethod());

        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/factors",
            $request[0]->getUri()->getPath()
        );

        $this->assertEquals(
            (string)$factor,
            $request[0]->getBody()->getContents()
        );
    }

    /** @test */
    public function get_supported_factors_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient([
            'getBody' => '[{"factorType":"question"}, {"factorType": "token:software:totp"}]'
        ]);
        $user = $this->createNewUser();

        $supportedFactors = $user->getSupportedFactors();

        $request = $httpClient->getRequests();
        $this->assertEquals('GET', $request[0]->getMethod());

        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/factors/catalog",
            $request[0]->getUri()->getPath()
        );

        $this->assertCount(2, $supportedFactors);

        $this->assertInstanceOf(
            \Okta\UserFactors\Collection::class,
            $supportedFactors
        );

        $this->assertInstanceOf(
            \Okta\UserFactors\SecurityQuestionFactor::class,
            $supportedFactors->first()
        );

        $this->assertInstanceOf(
            \Okta\UserFactors\TotpFactor::class,
            $supportedFactors[1]
        );

    }


    /** @test */
    public function getting_factors_makes_request_to_correct_endpoint()
    {
        $httpClient = $this->createNewHttpClient([
            'getBody' => '[{"id":"ufs2bysphxKODSZKWVCT","factorType":"question"}]'
        ]);
        $user = $this->createNewUser();

        $factors = $user->getFactors();

        $request = $httpClient->getRequests();
        $this->assertEquals('GET', $request[0]->getMethod());

        $this->assertEquals(
            "/api/v1/users/{$user->getId()}/factors",
            $request[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(
            \Okta\UserFactors\Collection::class,
            $factors
        );
    }

    /** @test */
    public function can_get_supported_security_questions()
    {
        $httpClient = $this->createNewHttpClient([
            'getBody' => $this->getModel('UserFactors/supportedSecurityQuestions.json')
        ]);
        $user = $this->createNewUser();

        $securityQuestions = $user->getSupportedSecurityQuestions();

        $this->assertInstanceOf(\Okta\UserFactors\SecurityQuestionsCollection::class, $securityQuestions);

    }


}
