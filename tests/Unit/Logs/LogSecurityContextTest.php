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

use Okta\Logs\LogSecurityContext;
use PHPUnit\Framework\TestCase;

class LogSecurityContextTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Logs\LogSecurityContext */
    protected $testable;

    protected $model = '/Logs/securityContext.json';
    protected $modelType = \Okta\Logs\LogSecurityContext::class;

    /** @test */
    public function isp_is_accessible()
    {
        $this->assertEquals($this->properties->isp, $this->testable->getIsp());
        $this->assertEquals($this->properties->isp, $this->testable->isp);
    }

    /** @test */
    public function as_org_is_accessible()
    {
        $this->assertEquals($this->properties->asOrg, $this->testable->getAsOrg());
        $this->assertEquals($this->properties->asOrg, $this->testable->asOrg);
    }

    /** @test */
    public function domain_is_accessible()
    {
        $this->assertEquals($this->properties->domain, $this->testable->getDomain());
        $this->assertEquals($this->properties->domain, $this->testable->domain);
    }

    /** @test */
    public function is_proxy_is_accessible()
    {
        $this->assertEquals($this->properties->isProxy, $this->testable->getIsProxy());
        $this->assertEquals($this->properties->isProxy, $this->testable->isProxy);
    }

    /** @test */
    public function as_number_is_accessible()
    {
        $this->assertEquals($this->properties->asNumber, $this->testable->getAsNumber());
        $this->assertEquals($this->properties->asNumber, $this->testable->asNumber);
    }

}
