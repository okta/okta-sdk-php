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

use Okta\Applications\AutoLoginApplication;
use PHPUnit\Framework\TestCase;

class OpenIdConnectApplicationTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\OpenIdConnectApplication */
    protected $testable;

    protected $model = '{"settings": {"test":"this"}, "credentials": {"test":"this"}}';
    protected $modelType = \Okta\Applications\OpenIdConnectApplication::class;

    /** @test */
    public function settings_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\OpenIdConnectApplicationSettings::class, $this->testable->getSettings());
        $this->assertInstanceOf(\Okta\Applications\OpenIdConnectApplicationSettings::class, $this->testable->settings);
    }

    /** @test */
    public function settings_is_settable()
    {
        $settings = $this->testable->getSettings();

        $settings->abc = '123';
        $this->testable->setSettings($settings);
        $this->assertEquals('123', $this->testable->getSettings()->abc);

        $settings->abc = '456';
        $this->testable->settings = $settings;
        $this->assertEquals('456', $this->testable->getSettings()->abc);
    }

    /** @test */
    public function credentials_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\OAuthApplicationCredentials::class,$this->testable->getCredentials());
        $this->assertInstanceOf(\Okta\Applications\OAuthApplicationCredentials::class,$this->testable->credentials);
    }

    /** @test */
    public function credentials_is_settable()
    {
        $credentials = $this->testable->getCredentials();

        $credentials->abc = '123';
        $this->testable->setCredentials($credentials);
        $this->assertEquals('123', $this->testable->getCredentials()->abc);

        $credentials->abc = '456';
        $this->testable->credentials = $credentials;
        $this->assertEquals('456', $this->testable->getCredentials()->abc);
    }

}
