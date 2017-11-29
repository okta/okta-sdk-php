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

use Okta\Applications\AutoLoginApplicationSettingsSignOn;
use PHPUnit\Framework\TestCase;

class AutoLoginApplicationSettingsSignOnTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\AutoLoginApplicationSettingsSignOn */
    protected $testable;

    protected $model = '{
          "redirectUrl": "http://swasecondaryredirecturl.okta.com",
          "loginUrl": "http://swaprimaryloginurl.okta.com"
        }';
    protected $modelType = \Okta\Applications\AutoLoginApplicationSettingsSignOn::class;

    /** @test */
    public function login_url_is_accessible()
    {
        $this->assertEquals($this->properties->loginUrl, $this->testable->getLoginUrl());
        $this->assertEquals($this->properties->loginUrl, $this->testable->loginUrl);
    }

    /** @test */
    public function login_url_is_settable()
    {
        $this->testable->setLoginUrl('http://example.com');
        $this->assertEquals('http://example.com', $this->testable->getLoginUrl());

        $this->testable->loginUrl = 'http://example.org';
        $this->assertEquals('http://example.org', $this->testable->getLoginUrl());
    }

    /** @test */
    public function redirect_url_is_accessible()
    {
        $this->assertEquals($this->properties->redirectUrl, $this->testable->getRedirectUrl());
        $this->assertEquals($this->properties->redirectUrl, $this->testable->redirectUrl);
    }

    /** @test */
    public function redirect_url_is_settable()
    {
        $this->testable->setRedirectUrl('http://example.com');
        $this->assertEquals('http://example.com', $this->testable->getRedirectUrl());

        $this->testable->redirectUrl = 'http://example.org';
        $this->assertEquals('http://example.org', $this->testable->getRedirectUrl());
    }

    
}
