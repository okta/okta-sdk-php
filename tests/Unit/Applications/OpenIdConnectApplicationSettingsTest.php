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

use Okta\Applications\OpenIdConnectApplicationSettings;
use PHPUnit\Framework\TestCase;

class OpenIdConnectApplicationSettingsTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\OpenIdConnectApplicationSettings */
    protected $testable;

    protected $model = '{
      "oauthClient": {
        "client_uri": "https://example.com/client",
        "logo_uri": "https://example.com/assets/images/logo-new.png",
        "redirect_uris": [
          "https://example.com/oauth2/callback",
          "myapp://callback"
        ],
        "response_types": [
          "token",
          "id_token",
          "code"
        ],
        "grant_types": [
          "implicit",
          "authorization_code"
        ],
        "application_type": "native",
        "tos_uri":"https://example.com/client/tos",
        "policy_uri":"https://example.com/client/policy"
      }
    }';
    protected $modelType = \Okta\Applications\OpenIdConnectApplicationSettings::class;

    /** @test */
    public function oauth_client_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\OpenIdConnectApplicationSettingsClient::class, $this->testable->getOauthClient());
        $this->assertInstanceOf(\Okta\Applications\OpenIdConnectApplicationSettingsClient::class, $this->testable->oauthClient);
    }

    /** @test */
    public function oauth_client_is_settable()
    {
        $oauthClient = $this->testable->getOauthClient();

        $oauthClient->tos_uri = 'http://example.com';
        $this->testable->setOauthClient($oauthClient);
        $this->assertEquals('http://example.com', $this->testable->getOauthClient()->tos_uri);

        $oauthClient->tos_uri = 'http://example.org';
        $this->testable->oauthClient = $oauthClient;
        $this->assertEquals('http://example.org', $this->testable->getOauthClient()->tos_uri);
    }

}
