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
use Okta\Sessions\Session;
use PHPUnit\Framework\TestCase;

class SessionTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Sessions\Session */
    protected $testable;

    protected $model = '/Sessions/session.json';
    protected $modelType = \Okta\Sessions\Session::class;

    /** @test */
    public function getting_a_session_will_make_request_to_correct_endpoint()
    {
        $httpClient = $this->createNewHttpClient([
            "getBody" => '{"id":"abc123", "signOnMode": "BOOKMARK"}'
        ]);

        $this->testable->get('abc123');

        $requests = $httpClient->getRequests();

        $this->assertEquals('/api/v1/sessions/abc123', $requests[0]->getUri()->getPath());
        $this->assertEquals('GET', $requests[0]->getMethod());
    }

    /** @test */
    public function getting_a_session_will_return_session_object()
    {
        $client = $this->createNewHttpClient([
            "getBody" => '{"id":"abc123", "signOnMode": "BOOKMARK"}'
        ]);

        $app = $this->testable->get('abc123');

        $this->assertInstanceOf(\Okta\Sessions\Session::class, $app);
    }

    /** @test */
    public function deleting_a_session_will_make_request_to_correct_endpoint()
    {
        $httpClient = $this->createNewHttpClient();

        $this->testable->delete();

        $requests = $httpClient->getRequests();

        $this->assertEquals('/api/v1/sessions/'.$this->testable->getId(), $requests[0]->getUri()->getPath());
        $this->assertEquals('DELETE', $requests[0]->getMethod());
    }

    /** @test */
    public function links_is_accessible()
    {
        $this->assertEquals($this->properties->_links, $this->testable->getLinks());
        $this->assertEquals($this->properties->_links, $this->testable->links);
    }

    /** @test */
    public function amr_is_accessible()
    {
        $this->assertEquals($this->properties->amr, $this->testable->getAmr());
        $this->assertEquals($this->properties->amr, $this->testable->amr);
    }



    /** @test */
    public function created_at_is_accessible()
    {
        $ts = Carbon::parse($this->properties->createdAt)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->createdAt);
        $this->assertEquals($ts, $this->testable->getCreatedAt()->timestamp);
        $this->assertEquals($ts, $this->testable->createdAt->timestamp);
    }

    /** @test */
    public function expires_at_is_accessible()
    {
        $ts = Carbon::parse($this->properties->expiresAt)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->expiresAt);
        $this->assertEquals($ts, $this->testable->getExpiresAt()->timestamp);
        $this->assertEquals($ts, $this->testable->expiresAt->timestamp);
    }

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals($this->properties->id, $this->testable->getId());
        $this->assertEquals($this->properties->id, $this->testable->id);
    }

    /** @test */
    public function idp_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Sessions\SessionIdentityProvider::class, $this->testable->getIdp());
        $this->assertInstanceOf(\Okta\Sessions\SessionIdentityProvider::class, $this->testable->idp);
    }

    /** @test */
    public function last_factor_verification_is_accessible()
    {
        $ts = Carbon::parse($this->properties->lastFactorVerification)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->lastFactorVerification);
        $this->assertEquals($ts, $this->testable->getLastFactorVerification()->timestamp);
        $this->assertEquals($ts, $this->testable->lastFactorVerification->timestamp);
    }

    /** @test */
    public function last_password_verification_is_accessible()
    {
        $ts = Carbon::parse($this->properties->lastPasswordVerification)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->lastPasswordVerification);
        $this->assertEquals($ts, $this->testable->getLastPasswordVerification()->timestamp);
        $this->assertEquals($ts, $this->testable->lastPasswordVerification->timestamp);
    }

    /** @test */
    public function login_is_accessible()
    {
        $this->assertEquals($this->properties->login, $this->testable->getLogin());
        $this->assertEquals($this->properties->login, $this->testable->login);
    }

    /** @test */
    public function status_is_accessible()
    {
        $this->assertEquals($this->properties->status, $this->testable->getStatus());
        $this->assertEquals($this->properties->status, $this->testable->status);
    }

    /** @test */
    public function user_id_is_accessible()
    {
        $this->assertEquals($this->properties->userId, $this->testable->getUserId());
        $this->assertEquals($this->properties->userId, $this->testable->userId);
    }

    /** @test */
    public function refresh_makes_request_to_correct_location()
    {
        $httpClient = $this->createNewHttpClient([
            "getBody" => '{"id": "abc123"}'
        ]);
        $session = (new Session())->get('abc123');
        $session->refresh();

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[1]->getMethod());
        $this->assertEquals(
            "/api/v1/sessions/abc123/lifecycle/refresh",
            $request[1]->getUri()->getPath()
        );

    }







}
