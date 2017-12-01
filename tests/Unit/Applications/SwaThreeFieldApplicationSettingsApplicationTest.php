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

use Okta\Applications\SwaThreeFieldApplicationSettingsApplication;
use PHPUnit\Framework\TestCase;

class SwaThreeFieldApplicationSettingsApplicationTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\SwaThreeFieldApplicationSettingsApplication */
    protected $testable;

    protected $model = '{
      "buttonSelector": "#btn-login",
      "passwordSelector": "#txtbox-password",
      "userNameSelector": "#txtbox-username",
      "targetUrl": "https://example.com/login.html",
      "extraFieldSelector": ".login",
      "extraFieldValue": "SOMEVALUE",
      "loginUrlRegex": "REGEX_EXPRESSION"
    }';
    protected $modelType = \Okta\Applications\SwaThreeFieldApplicationSettingsApplication::class;

    /** @test */
    public function target_url_is_accessible()
    {
        $this->assertEquals($this->properties->targetUrl, $this->testable->getTargetUrl());
        $this->assertEquals($this->properties->targetUrl, $this->testable->targetUrl);
    }

    /** @test */
    public function target_url_is_settable()
    {
        $this->testable->setTargetUrl('http://example.com');
        $this->assertEquals('http://example.com', $this->testable->getTargetUrl());
    
        $this->testable->targetUrl = 'http://example.org';
        $this->assertEquals('http://example.org', $this->testable->getTargetUrl());
    }
    

    /** @test */
    public function button_selector_is_accessible()
    {
        $this->assertEquals($this->properties->buttonSelector, $this->testable->getButtonSelector());
        $this->assertEquals($this->properties->buttonSelector, $this->testable->buttonSelector);
    }

    /** @test */
    public function button_selector_is_settable()
    {
        $this->testable->setButtonSelector('sel1');
        $this->assertEquals('sel1', $this->testable->getButtonSelector());

        $this->testable->buttonSelector = 'sel2';
        $this->assertEquals('sel2', $this->testable->getButtonSelector());
    }

    /** @test */
    public function extra_field_value_is_accessible()
    {
        $this->assertEquals($this->properties->extraFieldValue, $this->testable->getExtraFieldValue());
        $this->assertEquals($this->properties->extraFieldValue, $this->testable->extraFieldValue);
    }

    /** @test */
    public function extra_field_value_is_settable()
    {
        $this->testable->setExtraFieldValue('val1');
        $this->assertEquals('val1', $this->testable->getExtraFieldValue());

        $this->testable->extraFieldValue = 'val2';
        $this->assertEquals('val2', $this->testable->getExtraFieldValue());
    }

    /** @test */
    public function password_selector_is_accessible()
    {
        $this->assertEquals($this->properties->passwordSelector, $this->testable->getPasswordSelector());
        $this->assertEquals($this->properties->passwordSelector, $this->testable->passwordSelector);
    }

    /** @test */
    public function password_selector_is_settable()
    {
        $this->testable->setPasswordSelector('pass1');
        $this->assertEquals('pass1', $this->testable->getPasswordSelector());

        $this->testable->passwordSelector = 'pass2';
        $this->assertEquals('pass2', $this->testable->getPasswordSelector());
    }

    /** @test */
    public function user_name_selector_is_accessible()
    {
        $this->assertEquals($this->properties->userNameSelector, $this->testable->getUserNameSelector());
        $this->assertEquals($this->properties->userNameSelector, $this->testable->userNameSelector);
    }

    /** @test */
    public function user_name_selector_is_settable()
    {
        $this->testable->setUserNameSelector('un1');
        $this->assertEquals('un1', $this->testable->getUserNameSelector());

        $this->testable->userNameSelector = 'un2';
        $this->assertEquals('un2', $this->testable->getUserNameSelector());
    }

    /** @test */
    public function extra_field_selector_is_accessible()
    {
        $this->assertEquals($this->properties->extraFieldSelector, $this->testable->getExtraFieldSelector());
        $this->assertEquals($this->properties->extraFieldSelector, $this->testable->extraFieldSelector);
    }

    /** @test */
    public function extra_field_selector_is_settable()
    {
        $this->testable->setExtraFieldSelector('sel1');
        $this->assertEquals('sel1', $this->testable->getExtraFieldSelector());

        $this->testable->extraFieldSelector = 'sel2';
        $this->assertEquals('sel2', $this->testable->getExtraFieldSelector());
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
    


}
