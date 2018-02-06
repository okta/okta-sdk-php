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

use Okta\Logs\LogIpAddress;
use PHPUnit\Framework\TestCase;

class LogIpAddressTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Logs\LogIpAddress */
    protected $testable;

    protected $model = '/Logs/ipAddress.json';
    protected $modelType = \Okta\Logs\LogIpAddress::class;
    
    /** @test */
    public function ip_is_accessible()
    {
        $this->assertEquals($this->properties->ip, $this->testable->getIp());
        $this->assertEquals($this->properties->ip, $this->testable->ip);
    }
    
    /** @test */
    public function source_is_accessible()
    {
        $this->assertEquals($this->properties->source, $this->testable->getSource());
        $this->assertEquals($this->properties->source, $this->testable->source);
    }

    /** @test */
    public function version_is_accessible()
    {
        $this->assertEquals($this->properties->version, $this->testable->getVersion());
        $this->assertEquals($this->properties->version, $this->testable->version);
    }

    /** @test */
    public function geographical_context_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogGeographicalContext::class, $this->testable->getGeographicalContext());
        $this->assertInstanceOf(\Okta\Logs\LogGeographicalContext::class, $this->testable->geographicalContext);
    }

}
