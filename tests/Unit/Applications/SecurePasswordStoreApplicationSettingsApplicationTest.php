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

use Okta\Applications\SecurePasswordStoreApplicationSettingsApplication;
use PHPUnit\Framework\TestCase;

class SecurePasswordStoreApplicationSettingsApplicationTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\SecurePasswordStoreApplicationSettingsApplication */
    protected $testable;

    protected $model = '{
      "url": "https://example.com/login.html",
      "passwordField": "#txtbox-password",
      "usernameField": "#txtbox-username",
      "optionalField1": "param1",
      "optionalField1Value": "somevalue",
      "optionalField2": "param2",
      "optionalField2Value": "yetanothervalue",
      "optionalField3": "param3",
      "optionalField3Value": "finalvalue"
    }';
    protected $modelType = \Okta\Applications\SecurePasswordStoreApplicationSettingsApplication::class;

    /** @test */
    public function url_is_accessible()
    {
        $this->assertEquals($this->properties->url, $this->testable->getUrl());
        $this->assertEquals($this->properties->url, $this->testable->url);
    }
    
    /** @test */
    public function url_is_settable()
    {
        $this->testable->setUrl('http://example.com');
        $this->assertEquals('http://example.com', $this->testable->getUrl());

        $this->testable->url = 'http://example.org';
        $this->assertEquals('http://example.org', $this->testable->getUrl());
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
        $this->testable->setPasswordField('abc');
        $this->assertEquals('abc', $this->testable->getPasswordField());

        $this->testable->passwordField = '123';
        $this->assertEquals('123', $this->testable->getPasswordField());
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
        $this->testable->setUsernameField('abc');
        $this->assertEquals('abc', $this->testable->getUsernameField());

        $this->testable->usernameField = '123';
        $this->assertEquals('123', $this->testable->getUsernameField());
    }

    /** @test */
    public function optional_field_1_is_accessible()
    {
        $this->assertEquals($this->properties->optionalField1, $this->testable->getOptionalField1());
        $this->assertEquals($this->properties->optionalField1, $this->testable->optionalField1);
    }

    /** @test */
    public function optional_field_1_is_settable()
    {
        $this->testable->setOptionalField1('abc');
        $this->assertEquals('abc', $this->testable->getOptionalField1());

        $this->testable->optionalField1 = '123';
        $this->assertEquals('123', $this->testable->getOptionalField1());
    }

    /** @test */
    public function options_field_2_is_accessible()
    {
        $this->assertEquals($this->properties->optionalField2, $this->testable->getOptionalField2());
        $this->assertEquals($this->properties->optionalField2, $this->testable->optionalField2);
    }

    /** @test */
    public function options_field_2_is_settable()
    {
        $this->testable->setOptionalField2('abc');
        $this->assertEquals('abc', $this->testable->getOptionalField2());

        $this->testable->optionalField2 = '123';
        $this->assertEquals('123', $this->testable->getOptionalField2());
    }

    /** @test */
    public function options_field_3_is_accessible()
    {
        $this->assertEquals($this->properties->optionalField3, $this->testable->getOptionalField3());
        $this->assertEquals($this->properties->optionalField3, $this->testable->optionalField3);
    }

    /** @test */
    public function options_field_3_is_settable()
    {
        $this->testable->setOptionalField3('abc');
        $this->assertEquals('abc', $this->testable->getOptionalField3());

        $this->testable->optionalField3 = '123';
        $this->assertEquals('123', $this->testable->getOptionalField3());
    }

    /** @test */
    public function optional_field_1_value_is_accessible()
    {
        $this->assertEquals($this->properties->optionalField1Value, $this->testable->getOptionalField1Value());
        $this->assertEquals($this->properties->optionalField1Value, $this->testable->optionalField1Value);
    }

    /** @test */
    public function optional_field_1_value_is_settable()
    {
        $this->testable->setOptionalField1Value('abc');
        $this->assertEquals('abc', $this->testable->getOptionalField1Value());

        $this->testable->optionalField1Value = '123';
        $this->assertEquals('123', $this->testable->getOptionalField1Value());
    }

    /** @test */
    public function optional_field_2_value_is_accessible()
    {
        $this->assertEquals($this->properties->optionalField2Value, $this->testable->getOptionalField2Value());
        $this->assertEquals($this->properties->optionalField2Value, $this->testable->optionalField2Value);
    }

    /** @test */
    public function optional_field_2_value_is_settable()
    {
        $this->testable->setOptionalField2Value('abc');
        $this->assertEquals('abc', $this->testable->getOptionalField2Value());

        $this->testable->optionalField2Value = '123';
        $this->assertEquals('123', $this->testable->getOptionalField2Value());
    }

    /** @test */
    public function optional_field_3_value_is_accessible()
    {
        $this->assertEquals($this->properties->optionalField3Value, $this->testable->getOptionalField3Value());
        $this->assertEquals($this->properties->optionalField3Value, $this->testable->optionalField3Value);
    }

    /** @test */
    public function optional_field_3_value_is_settable()
    {
        $this->testable->setOptionalField3Value('abc');
        $this->assertEquals('abc', $this->testable->getOptionalField3Value());

        $this->testable->optionalField3Value = '123';
        $this->assertEquals('123', $this->testable->getOptionalField3Value());
    }



}
