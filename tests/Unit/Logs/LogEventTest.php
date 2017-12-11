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
use Okta\Logs\LogEvent;
use PHPUnit\Framework\TestCase;

class LogEventTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Logs\LogEvent */
    protected $testable;

    protected $model = '/Logs/log.json';
    protected $modelType = \Okta\Logs\LogEvent::class;

    /** @test */
    public function uuid_is_accessible()
    {
        $this->assertEquals($this->properties->uuid, $this->testable->getUuid());
        $this->assertEquals($this->properties->uuid, $this->testable->uuid);
    }

    /** @test */
    public function actor_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogActor::class, $this->testable->getActor());
        $this->assertInstanceOf(\Okta\Logs\LogActor::class, $this->testable->actor);
    }

    /** @test */
    public function client_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogClient::class, $this->testable->getClient());
        $this->assertInstanceOf(\Okta\Logs\LogClient::class, $this->testable->client);
    }

    /** @test */
    public function target_is_accessible()
    {
        $this->assertEquals($this->properties->target, $this->testable->getTarget());
        $this->assertEquals($this->properties->target, $this->testable->target);
    }

    /** @test */
    public function outcome_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogOutcome::class, $this->testable->getOutcome());
        $this->assertInstanceOf(\Okta\Logs\LogOutcome::class, $this->testable->outcome);
    }

    /** @test */
    public function version_is_accessible()
    {
        $this->assertEquals($this->properties->version, $this->testable->getVersion());
        $this->assertEquals($this->properties->version, $this->testable->version);
    }

    /** @test */
    public function severity_is_accessible()
    {
        $this->assertEquals($this->properties->severity, $this->testable->getSeverity());
        $this->assertEquals($this->properties->severity, $this->testable->severity);
    }

    /** @test */
    public function event_type_is_accessible()
    {
        $this->assertEquals($this->properties->eventType, $this->testable->getEventType());
        $this->assertEquals($this->properties->eventType, $this->testable->eventType);
    }

    /** @test */
    public function published_is_accessible()
    {
        $ts = Carbon::parse($this->properties->published)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->published);
        $this->assertEquals($ts, $this->testable->getPublished()->timestamp);
        $this->assertEquals($ts, $this->testable->published->timestamp);
    }

    /** @test */
    public function transaction_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogTransaction::class, $this->testable->getTransaction());
        $this->assertInstanceOf(\Okta\Logs\LogTransaction::class, $this->testable->transaction);
    }

    /** @test */
    public function debug_context_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogDebugContext::class, $this->testable->getDebugContext());
        $this->assertInstanceOf(\Okta\Logs\LogDebugContext::class, $this->testable->debugContext);
    }

    /** @test */
    public function display_message_is_accessible()
    {
        $this->assertEquals($this->properties->displayMessage, $this->testable->getDisplayMessage());
        $this->assertEquals($this->properties->displayMessage, $this->testable->displayMessage);
    }

    /** @test */
    public function legacy_event_type_is_accessible()
    {
        $this->assertEquals($this->properties->legacyEventType, $this->testable->getLegacyEventType());
        $this->assertEquals($this->properties->legacyEventType, $this->testable->legacyEventType);
    }

    /** @test */
    public function security_context_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogSecurityContext::class, $this->testable->getSecurityContext());
        $this->assertInstanceOf(\Okta\Logs\LogSecurityContext::class, $this->testable->securityContext);
    }

    /** @test */
    public function authentication_context_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogAuthenticationContext::class, $this->testable->getAuthenticationContext());
        $this->assertInstanceOf(\Okta\Logs\LogAuthenticationContext::class, $this->testable->authenticationContext);
    }

    /** @test */
    public function request_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogRequest::class, $this->testable->getRequest());
        $this->assertInstanceOf(\Okta\Logs\LogRequest::class, $this->testable->request);
    }

}
