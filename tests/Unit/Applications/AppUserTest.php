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
use Okta\Applications\AppUser;
use PHPUnit\Framework\TestCase;

class AppUserTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\AppUser */
    protected $testable;

    protected $model = '/Applications/applicationUser.json';
    protected $modelType = \Okta\Applications\AppUser::class;

    /** @test */
    public function saving_an_application_user_makes_requests_to_correct_endpoint()
    {
        $client = $this->createNewHttpClient();
        $this->testable->save('application1123');

        $requests = $client->getRequests();

        $this->assertEquals(
            "/api/v1/apps/application1123/users/{$this->testable->getId()}",
            $requests[0]->getUri()->getPath()
        );
        $this->assertEquals('POST', $requests[0]->getMethod());
    }

    /** @test */
    public function saving_an_application_user_will_return_correct_type()
    {
        $client = $this->createNewHttpClient();

        $app = $this->testable->save('application1123');

        $this->assertInstanceOf(AppUser::class, $app);
    }

    /** @test */
    public function deleting_an_application_makes_requests_to_correct_endpoint()
    {
        $client = $this->createNewHttpClient();
        $this->testable->delete('application123');

        $requests = $client->getRequests();

        $this->assertEquals("/api/v1/apps/application123/users/{$this->testable->getId()}", $requests[0]->getUri()->getPath());
        $this->assertEquals('DELETE', $requests[0]->getMethod());
    }

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals($this->properties->id, $this->testable->getId());
        $this->assertEquals($this->properties->id, $this->testable->id);
    }

    /** @test */
    public function id_is_settable()
    {
        $this->testable->setId('abc');
        $this->assertEquals('abc', $this->testable->getId());

        $this->testable->id = '123';
        $this->assertEquals('123', $this->testable->getId());
    }

    /** @test */
    public function scope_is_accessible()
    {
        $this->assertEquals($this->properties->scope, $this->testable->getScope());
        $this->assertEquals($this->properties->scope, $this->testable->scope);
    }

    /** @test */
    public function scope_is_settable()
    {
        $this->testable->setScope('USER');
        $this->assertEquals('USER', $this->testable->getScope());

        $this->testable->scope = 'GROUP';
        $this->assertEquals('GROUP', $this->testable->getScope());
    }

    /** @test */
    public function links_is_accessible()
    {
        $this->assertEquals($this->properties->_links, $this->testable->getLinks());
        $this->assertEquals($this->properties->_links, $this->testable->links);
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
    public function profile_is_accessible()
    {
        $this->assertEquals($this->properties->profile, $this->testable->getProfile());
        $this->assertEquals($this->properties->profile, $this->testable->profile);
    }

    /** @test */
    public function last_sync_is_accessible()
    {
        $ts = Carbon::parse($this->properties->lastSync)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->lastSync);
        $this->assertEquals($ts, $this->testable->getLastSync()->timestamp);
        $this->assertEquals($ts, $this->testable->lastSync->timestamp);
    }

    /** @test */
    public function embedded_is_accessible()
    {
        $this->assertEquals($this->properties->_embedded, $this->testable->getEmbedded());
        $this->assertEquals($this->properties->_embedded, $this->testable->embedded);
    }

    /** @test */
    public function sync_state_is_accessible()
    {
        $this->assertEquals($this->properties->syncState, $this->testable->getSyncState());
        $this->assertEquals($this->properties->syncState, $this->testable->syncState);
    }

    /** @test */
    public function external_id_is_accessible()
    {
        $this->assertEquals($this->properties->externalId, $this->testable->getExternalId());
        $this->assertEquals($this->properties->externalId, $this->testable->externalId);
    }

    /** @test */
    public function credentials_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\AppUserCredentials::class, $this->testable->getCredentials());
        $this->assertInstanceOf(\Okta\Applications\AppUserCredentials::class, $this->testable->credentials);
    }

    /** @test */
    public function credentials_is_settable()
    {
        $credentials = $this->testable->getCredentials();
        $credentials->username = "username";
        $this->testable->setCredentials($credentials);
        $this->assertEquals('username', $this->testable->getCredentials()->username);

        $credentials->username = "login";
        $this->testable->credentials = $credentials;
        $this->assertEquals('login', $this->testable->getCredentials()->username);
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
    public function status_changed_is_accessible()
    {
        $ts = Carbon::parse($this->properties->statusChanged)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->statusChanged);
        $this->assertEquals($ts, $this->testable->getStatusChanged()->timestamp);
        $this->assertEquals($ts, $this->testable->statusChanged->timestamp);
    }

    /** @test */
    public function password_changed_is_accessible()
    {
        $ts = Carbon::parse($this->properties->passwordChanged)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->passwordChanged);
        $this->assertEquals($ts, $this->testable->getPasswordChanged()->timestamp);
        $this->assertEquals($ts, $this->testable->passwordChanged->timestamp);
    }




}
