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

use Okta\Applications\OpenIdConnectApplicationSettingsClient;
use PHPUnit\Framework\TestCase;

class OpenIdConnectApplicationSettingsClientTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\OpenIdConnectApplicationSettingsClient */
    protected $testable;

    protected $model = '{
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
        "policy_uri":"https://example.com/client/policy",
        "consent_method": "REQUIRED"
    }';
    protected $modelType = \Okta\Applications\OpenIdConnectApplicationSettingsClient::class;

    /** @test */
    public function tos_uri_is_accessible()
    {
        $this->assertEquals($this->properties->tos_uri, $this->testable->getTosUri());
        $this->assertEquals($this->properties->tos_uri, $this->testable->tosUri);
    }

    /** @test */
    public function tos_uri_is_settable()
    {
        $this->testable->setTosUri('http://example.com');
        $this->assertEquals('http://example.com', $this->testable->getTosUri());

        $this->testable->tosUri = 'http://example.net';
        $this->assertEquals('http://example.net', $this->testable->getTosUri());
    }

    /** @test */
    public function logo_uri_is_accessible()
    {
        $this->assertEquals($this->properties->logo_uri, $this->testable->getLogoUri());
        $this->assertEquals($this->properties->logo_uri, $this->testable->logoUri);
    }

    /** @test */
    public function logo_uri_is_settable()
    {
        $this->testable->setLogoUri('http://example.com');
        $this->assertEquals('http://example.com', $this->testable->getLogoUri());

        $this->testable->logoUri = 'http://example.net';
        $this->assertEquals('http://example.net', $this->testable->getLogoUri());
    }

    /** @test */
    public function client_uri_is_accessible()
    {
        $this->assertEquals($this->properties->client_uri, $this->testable->getClientUri());
        $this->assertEquals($this->properties->client_uri, $this->testable->clientUri);
    }

    /** @test */
    public function client_uri_is_settable()
    {
        $this->testable->setClientUri('http://example.com');
        $this->assertEquals('http://example.com', $this->testable->getClientUri());

        $this->testable->clientUri = 'http://example.org';
        $this->assertEquals('http://example.org', $this->testable->getClientUri());
    }

    /** @test */
    public function policy_uri_is_accessible()
    {
        $this->assertEquals($this->properties->policy_uri, $this->testable->getPolicyUri());
        $this->assertEquals($this->properties->policy_uri, $this->testable->policyUri);
    }

    /** @test */
    public function policy_uri_is_settable()
    {
        $this->testable->setPolicyUri('http://example.com');
        $this->assertEquals('http://example.com', $this->testable->getPolicyUri());

        $this->testable->policyUri = 'http://example.net';
        $this->assertEquals('http://example.net', $this->testable->getPolicyUri());
    }

    /** @test */
    public function grant_types_is_accessible()
    {
        $this->assertEquals($this->properties->grant_types, $this->testable->getGrantTypes());
        $this->assertEquals($this->properties->grant_types, $this->testable->grantTypes);
    }

    /** @test */
    public function grant_types_is_settable()
    {
        $this->testable->setGrantTypes(['code']);
        $this->assertEquals(['code'], $this->testable->getGrantTypes());

        $this->testable->grantTypes = ['client_cred'];
        $this->assertEquals(['client_cred'], $this->testable->getGrantTypes());
    }

    /** @test */
    public function redirect_uris_is_accessible()
    {
        $this->assertEquals($this->properties->redirect_uris, $this->testable->getRedirectUris());
        $this->assertEquals($this->properties->redirect_uris, $this->testable->redirectUris);
    }

    /** @test */
    public function redirect_uris_is_settable()
    {
        $this->testable->setRedirectUris(['http://example.com']);
        $this->assertEquals(['http://example.com'], $this->testable->getRedirectUris());

        $this->testable->redirectUris = ['http://example.net'];
        $this->assertEquals(['http://example.net'], $this->testable->getRedirectUris());
    }

    /** @test */
    public function consent_method_is_accessible()
    {
        $this->assertEquals($this->properties->consent_method, $this->testable->getConsentMethod());
        $this->assertEquals($this->properties->consent_method, $this->testable->consentMethod);
    }

    /** @test */
    public function consent_method_is_settable()
    {
        $this->testable->setConsentMethod('REQUIRED');
        $this->assertEquals('REQUIRED', $this->testable->getConsentMethod());

        $this->testable->consentMethod = 'OPTIONAL';
        $this->assertEquals('OPTIONAL', $this->testable->getConsentMethod());
    }

    /** @test */
    public function response_types_is_accessible()
    {
        $this->assertEquals($this->properties->response_types, $this->testable->getResponseTypes());
        $this->assertEquals($this->properties->response_types, $this->testable->responseTypes);
    }

    /** @test */
    public function response_types_is_settable()
    {
        $this->testable->setResponseTypes(['token']);
        $this->assertEquals(['token'], $this->testable->getResponseTypes());

        $this->testable->responseTypes = ['code'];
        $this->assertEquals(['code'], $this->testable->getResponseTypes());
    }

    /** @test */
    public function application_type_is_accessible()
    {
        $this->assertEquals($this->properties->application_type, $this->testable->getApplicationType());
        $this->assertEquals($this->properties->application_type, $this->testable->applicationType);
    }

    /** @test */
    public function application_type_is_settable()
    {
        $this->testable->setApplicationType('native');
        $this->assertEquals('native', $this->testable->getApplicationType());

        $this->testable->applicationType = 'web';
        $this->assertEquals('web', $this->testable->getApplicationType());
    }


}
