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

use Okta\Logs\LogAuthenticationContext;
use PHPUnit\Framework\TestCase;

class LogAuthenticationContextTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Logs\LogAuthenticationContext */
    protected $testable;

    protected $model = '/Logs/authenticationContext.json';
    protected $modelType = \Okta\Logs\LogAuthenticationContext::class;
    
    /** @test */
    public function issuer_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogIssuer::class, $this->testable->getIssuer());
        $this->assertInstanceOf(\Okta\Logs\LogIssuer::class, $this->testable->issuer);
    }
    
    /** @test */
    public function interface_is_accessible()
    {
        $this->assertEquals($this->properties->interface, $this->testable->getInterface());
        $this->assertEquals($this->properties->interface, $this->testable->interface);
    }
    
    /** @test */
    public function credential_type_is_accessible()
    {
        $this->assertEquals($this->properties->credentialType, $this->testable->getCredentialType());
        $this->assertEquals($this->properties->credentialType, $this->testable->credentialType);
    }
    
    /** @test */
    public function external_session_id_is_accessible()
    {
        $this->assertEquals($this->properties->externalSessionId, $this->testable->getExternalSessionId());
        $this->assertEquals($this->properties->externalSessionId, $this->testable->externalSessionId);
    }
    
    /** @test */
    public function authentication_step_is_accessible()
    {
        $this->assertEquals($this->properties->authenticationStep, $this->testable->getAuthenticationStep());
        $this->assertEquals($this->properties->authenticationStep, $this->testable->authenticationStep);
    }

    /** @test */
    public function credential_provider_is_accessible()
    {
        $this->assertEquals($this->properties->credentialProvider, $this->testable->getCredentialProvider());
        $this->assertEquals($this->properties->credentialProvider, $this->testable->credentialProvider);
    }
    
    /** @test */
    public function authentication_provider_is_accessible()
    {
        $this->assertEquals($this->properties->authenticationProvider, $this->testable->getAuthenticationProvider());
        $this->assertEquals($this->properties->authenticationProvider, $this->testable->authenticationProvider);
    }

}
