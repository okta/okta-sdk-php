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

use Okta\Applications\SwaApplicationSettingsApplication;
use PHPUnit\Framework\TestCase;

class SwaApplicationSettingsApplicationTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\SwaApplicationSettingsApplication */
    protected $testable;

    protected $model = '{
      "buttonField": "btn-login",
      "passwordField": "txtbox-password",
      "usernameField": "txtbox-username",
      "url": "https://example.com/login.html",
      "loginUrlRegex": "REGEX_EXPRESSION"
    }';
    protected $modelType = \Okta\Applications\SwaApplicationSettingsApplication::class;

    /** @test */
    public function url_is_accessible()
    {
        $this->assertEquals($this->properties->url, $this->testable->getUrl());
        $this->assertEquals($this->properties->url, $this->testable->url);
    }

    /** @test */
    public function url_is_settable()
    {
        $this->testable->setUrl("http://example.com");
        $this->assertEquals("http://example.com", $this->testable->getUrl());

        $this->testable->url = "http://example.org";
        $this->assertEquals("http://example.org", $this->testable->getUrl());
    }

    /** @test */
    public function button_field_is_accessible()
    {
        $this->assertEquals($this->properties->buttonField, $this->testable->getButtonField());
        $this->assertEquals($this->properties->buttonField, $this->testable->buttonField);
    }

    /** @test */
    public function button_field_is_settable()
    {
        $this->testable->setButtonField('field1');
        $this->assertEquals('field1', $this->testable->getButtonField());

        $this->testable->buttonField = 'field2';
        $this->assertEquals('field2', $this->testable->getButtonField());
    }

    /** @test */
    public function login_url_regex_is_accessible()
    {
        $this->assertEquals($this->properties->loginUrlRegex, $this->testable->getLoginUrlRegex());
        $this->assertEquals($this->properties->loginUrlRegex, $this->testable->loginUrlRegex);
    }

    /** @test */
    public function login_url_regex_is_settable()
    {
        $this->testable->setLoginUrlRegex('regex1');
        $this->assertEquals('regex1', $this->testable->getLoginUrlRegex());

        $this->testable->loginUrlRegex = 'regex2';
        $this->assertEquals('regex2', $this->testable->getLoginUrlRegex());
    }

    /** @test */
    public function password_field_is_accessible()
    {
        $this->assertEquals($this->properties->passwordField, $this->testable->getPasswordField());
        $this->assertEquals($this->properties->passwordField, $this->testable->passwordField);
    }

    /** @test */
    public function password_field_is_settable()
    {
        $this->testable->setPasswordField('field1');
        $this->assertEquals('field1', $this->testable->getPasswordField());

        $this->testable->passwordField = 'field2';
        $this->assertEquals('field2', $this->testable->getPasswordField());
    }

    /** @test */
    public function username_field_is_accessible()
    {
        $this->assertEquals($this->properties->usernameField, $this->testable->getUsernameField());
        $this->assertEquals($this->properties->usernameField, $this->testable->usernameField);
    }

    /** @test */
    public function username_field_is_settable()
    {
        $this->testable->setUsernameField('field1');
        $this->assertEquals('field1', $this->testable->getUsernameField());

        $this->testable->usernameField = 'field2';
        $this->assertEquals('field2', $this->testable->getUsernameField());
    }

}
