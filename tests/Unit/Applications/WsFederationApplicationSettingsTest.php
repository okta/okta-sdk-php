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

use Okta\Applications\WsFederationApplicationSettings;
use PHPUnit\Framework\TestCase;

class WsFederationApplicationSettingsTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\WsFederationApplicationSettings */
    protected $testable;

    protected $model = '{
    "app": {
      "audienceRestriction": "urn:example:app",
      "groupName": null,
      "groupValueFormat": "windowsDomainQualifiedName",
      "realm": "urn:example:app",
      "wReplyURL": "https://example.com/",
      "attributeStatements": null,
      "nameIDFormat": "urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified",
      "authnContextClassRef": "urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport",
      "siteURL": "https://example.com",
      "wReplyOverride": false,
      "groupFilter": null,
      "usernameAttribute": "username"
    }
  }';
    protected $modelType = \Okta\Applications\WsFederationApplicationSettings::class;

    /** @test */
    public function app_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\WsFederationApplicationSettingsApplication::class, $this->testable->getApp
        ());
        $this->assertInstanceOf(\Okta\Applications\WsFederationApplicationSettingsApplication::class, $this->testable->app);
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
