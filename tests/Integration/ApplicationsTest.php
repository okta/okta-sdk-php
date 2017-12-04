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

class ApplicationsTest extends BaseTestCase
{

    /** @test */
    public function an_application_can_be_retrieved_by_id()
    {
        $client = $this->createNewHttpClient([
            'getBody' => file_get_contents(__DIR__ . '/../responses/applications/samlApplication.json')
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\SamlApplication::class, $app);
        $this->assertequals('application/json', $requests[0]->getHeaderLine('Accept'));
        $this->assertEmpty($requests[0]->getHeaderLine('Content-Type'));
        $this->assertEquals("SSWS {$this->token}", $requests[0]->getHeaderLine('Authorization'));

    }

    /** @test */
    public function an_swa_application_can_be_retrieved_by_id()
    {
        $client = $this->createNewHttpClient([
            'getBody' => file_get_contents(__DIR__ . '/../responses/applications/swaApplication.json')
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\SwaApplication::class, $app);
        $this->assertequals('application/json', $requests[0]->getHeaderLine('Accept'));
        $this->assertEmpty($requests[0]->getHeaderLine('Content-Type'));
        $this->assertEquals("SSWS {$this->token}", $requests[0]->getHeaderLine('Authorization'));

    }

    /** @test */
    public function a_bookmark_application_returns_correct_application()
    {
        $client = $this->createNewHttpClient([
            'getBody' => '{"id":"abc123", "signOnMode": "BOOKMARK"}'
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\BookmarkApplication::class, $app);
    }

    /** @test */
    public function a_basic_auth_application_returns_correct_application()
    {
        $client = $this->createNewHttpClient([
            'getBody' => '{"id":"abc123", "signOnMode": "BASIC_AUTH"}'
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\BasicAuthApplication::class, $app);
    }

    /** @test */
    public function a_swa_application_returns_correct_application()
    {
        $client = $this->createNewHttpClient([
            'getBody' => '{"id":"abc123", "signOnMode": "BROWSER_PLUGIN", "name": "template_swa"}'
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\SwaApplication::class, $app);
    }

    /** @test */
    public function a_swa_3_field_application_returns_correct_application()
    {
        $client = $this->createNewHttpClient([
            'getBody' => '{"id":"abc123", "signOnMode": "BROWSER_PLUGIN", "name": "template_swa3field"}'
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\SwaThreeFieldApplication::class, $app);
    }

    /** @test */
    public function a_secure_password_store_application_returns_correct_application()
    {
        $client = $this->createNewHttpClient([
            'getBody' => '{"id":"abc123", "signOnMode": "SECURE_PASSWORD_STORE"}'
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\SecurePasswordStoreApplication::class, $app);
    }

    /** @test */
    public function a_auto_login_application_returns_correct_application()
    {
        $client = $this->createNewHttpClient([
            'getBody' => '{"id":"abc123", "signOnMode": "AUTO_LOGIN"}'
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\AutoLoginApplication::class, $app);
    }

    /** @test */
    public function a_ws_federation_application_returns_correct_application()
    {
        $client = $this->createNewHttpClient([
            'getBody' => '{"id":"abc123", "signOnMode": "WS_FEDERATION"}'
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\WsFederationApplication::class, $app);
    }

    /** @test */
    public function a_saml_2_0_application_returns_correct_application()
    {
        $client = $this->createNewHttpClient([
            'getBody' => '{"id":"abc123", "signOnMode": "SAML_2_0"}'
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\SamlApplication::class, $app);
    }

    /** @test */
    public function a_openid_connect_application_returns_correct_application()
    {
        $client = $this->createNewHttpClient([
            'getBody' => '{"id":"abc123", "signOnMode": "OPENID_CONNECT"}'
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\OpenIdConnectApplication::class, $app);
    }
}
