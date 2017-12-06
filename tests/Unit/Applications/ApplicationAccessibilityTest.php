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
use Okta\Applications\Application;
use Okta\ClientBuilder;
use PHPUnit\Framework\TestCase;

class ApplicationAccessibilityTest extends BaseUnitTestCase
{
    protected $properties;
    
    /** @var  \Okta\Applications\ApplicationAccessibility */
    protected $testable;

    protected $model = '{
    "selfService": false,
    "errorRedirectUrl": "http://example.org/error",
    "loginRedirectUrl": "http://example.org/login"
    }';
    protected $modelType = \Okta\Applications\ApplicationAccessibility::class;
    
    
    /** @test */
    public function self_service_is_accessible()
    {
        $this->assertEquals($this->properties->selfService, $this->testable->getSelfService());
        $this->assertEquals($this->properties->selfService, $this->testable->selfService);
    }
    
    /** @test */
    public function self_service_is_settable()
    {
        $this->testable->setSelfService(true);
        $this->assertEquals(true, $this->testable->getSelfService());
    
        $this->testable->selfService = false;
        $this->assertEquals(false, $this->testable->getSelfService());
    }

    /** @test */
    public function error_redirect_url_is_accessible()
    {
        $this->assertEquals($this->properties->errorRedirectUrl, $this->testable->getErrorRedirectUrl());
        $this->assertEquals($this->properties->errorRedirectUrl, $this->testable->errorRedirectUrl);
    }

    /** @test */
    public function error_redirect_url_is_settable()
    {
        $this->testable->setErrorRedirectUrl('http://example.com');
        $this->assertEquals('http://example.com', $this->testable->getErrorRedirectUrl());

        $this->testable->errorRedirectUrl = 'http://example.net';
        $this->assertEquals('http://example.net', $this->testable->getErrorRedirectUrl());
    }

    /** @test */
    public function login_redirect_url_is_accessible()
    {
        $this->assertEquals($this->properties->loginRedirectUrl, $this->testable->getLoginRedirectUrl());
        $this->assertEquals($this->properties->loginRedirectUrl, $this->testable->loginRedirectUrl);
    }

    /** @test */
    public function login_redirect_url_is_settable()
    {
        $this->testable->setLoginRedirectUrl('http://test.com');
        $this->assertEquals('http://test.com', $this->testable->getLoginRedirectUrl());

        $this->testable->loginRedirectUrl = 'http://example.com';
        $this->assertEquals('http://example.com', $this->testable->getLoginRedirectUrl());
    }

}