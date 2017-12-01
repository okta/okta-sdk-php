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

use Okta\Applications\BasicApplicationSettings;
use PHPUnit\Framework\TestCase;

class BasicApplicationSettingsTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\BasicApplicationSettings */
    protected $testable;

    protected $model = '{"app": {
      "url": "https://example.com/login.html",
      "authURL": "https://example.com/auth.html"
    }}';
    protected $modelType = \Okta\Applications\BasicApplicationSettings::class;

    /** @test */
    public function app_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\BasicApplicationSettingsApplication::class, $this->testable->getApp());
        $this->assertInstanceOf(\Okta\Applications\BasicApplicationSettingsApplication::class, $this->testable->app);
    }

    /** @test */
    public function app_is_settable()
    {
        $app = $this->testable->getApp();
        $app->url = "http://example.com";
        $this->testable->setApp($app);
        $this->assertEquals("http://example.com", $this->testable->getApp()->url);

        $app->url = "http://example.org";
        $this->testable->app = $app;
        $this->assertEquals("http://example.org", $this->testable->getApp()->url);
    }

}
