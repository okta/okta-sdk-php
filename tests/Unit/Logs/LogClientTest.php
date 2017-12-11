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

use Okta\Logs\LogClient;
use PHPUnit\Framework\TestCase;

class LogClientTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Logs\LogClient */
    protected $testable;

    protected $model = '/Logs/client.json';
    protected $modelType = \Okta\Logs\LogClient::class;

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals($this->properties->id, $this->testable->getId());
        $this->assertEquals($this->properties->id, $this->testable->id);
    }

    /** @test */
    public function zone_is_accessible()
    {
        $this->assertEquals($this->properties->zone, $this->testable->getZone());
        $this->assertEquals($this->properties->zone, $this->testable->zone);
    }

    /** @test */
    public function device_is_accessible()
    {
        $this->assertEquals($this->properties->device, $this->testable->getDevice());
        $this->assertEquals($this->properties->device, $this->testable->device);
    }

     /** @test */
    public function ip_address_is_accessible()
    {
        $this->assertEquals($this->properties->ipAddress, $this->testable->getIpAddress());
        $this->assertEquals($this->properties->ipAddress, $this->testable->ipAddress);
    }
    
    /** @test */
    public function user_agent_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogUserAgent::class, $this->testable->getUserAgent());
        $this->assertInstanceOf(\Okta\Logs\LogUserAgent::class, $this->testable->userAgent);
    }

    /** @test */
    public function geographical_context_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogGeographicalContext::class, $this->testable->getGeographicalContext());
        $this->assertInstanceOf(\Okta\Logs\LogGeographicalContext::class, $this->testable->geographicalContext);
    }

}
