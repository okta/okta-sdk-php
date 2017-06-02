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

use Okta\Client;
use Okta\ClientBuilder;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Parser;

class ClientBuilderTest extends TestCase
{
    /** @test */
    public function it_returns_self_when_setting_the_token()
    {
         $clientBuilder = new ClientBuilder();
         $response = $clientBuilder->setToken('someToken');

         $this->assertInstanceOf(
             ClientBuilder::class,
             $response,
             "Setting the token does not return an instance of " . ClientBuilder::class
         );
    }
    
    /** @test */
    public function it_returns_self_when_setting_the_org_url()
    {
        $clientBuilder = new ClientBuilder();
        $response = $clientBuilder->setOrganizationUrl('http://example.com');

        $this->assertInstanceOf(
            ClientBuilder::class,
            $response,
            "Setting the organization url does not return an instance of " . ClientBuilder::class
        );
    }

    /** @test */
    public function it_returns_self_when_setting_the_config_file_location()
    {
        $clientBuilder = new ClientBuilder();
        $response = $clientBuilder->setConfigFileLocation(__FILE__);

        $this->assertInstanceOf(
            ClientBuilder::class,
            $response,
            "Setting the config file location does not return an instance of " . ClientBuilder::class
        );
    }

    /** @test */
    public function it_throws_exception_when_config_file_location_could_not_be_read()
    {
        $this->expectException(\InvalidArgumentException::class);

        $clientBuilder = new ClientBuilder();
        $clientBuilder->setConfigFileLocation('/some/file/that/does/not/exist.yaml');
    }

    /** @test */
    public function it_returns_self_when_setting_the_http_client()
    {
        $clientBuilder = new ClientBuilder();
        $response = $clientBuilder->setHttpClient(new \Http\Mock\Client());

        $this->assertInstanceOf(
            ClientBuilder::class,
            $response,
            "Setting the http client does not return an instance of " . ClientBuilder::class
        );
    }

    /** @test */
    public function it_returns_self_when_setting_the_integration_user_agent()
    {
        $clientBuilder = new ClientBuilder();
        $response = $clientBuilder->setIntegrationUserAgent('integration/1.0.0');

        $this->assertInstanceOf(
            ClientBuilder::class,
            $response,
            "Setting the integration user agent does not return an instance of " . ClientBuilder::class
        );
    }

    /** @test */
    public function a_client_instance_is_returned_when_building()
    {
        $clientBuilder = (new ClientBuilder())
            ->setToken('someTome')
            ->setOrganizationUrl('http://example.com')
            ->build();

        $this->assertInstanceOf(
            Client::class,
            $clientBuilder,
            'Client Builder build method does not return an instance of ' . Client::class
        );
    }

    /** @test */
    public function it_builds_a_client_with_the_default_configuration()
    {
        $oldToken = getenv('OKTA_CLIENT_TOKEN');
        $oldOrgUrl = getenv('OKTA_CLIENT_ORGURL');

        putenv('OKTA_CLIENT_TOKEN');
        putenv('OKTA_CLIENT_ORGURL');

        $parser = $this->createMock(Parser::class);
        $parser->method('parse')->willReturn([
            'okta' => [
                'client' => [
                    'token' => 'abc123',
                    'orgUrl' => 'https://example.com'
                ]
            ]
        ]);

        $clientBuilder = new ClientBuilder($parser);

        $this->assertContains('Token: abc123', (string)$clientBuilder);
        $this->assertContains('OrgUrl: https://example.com', (string)$clientBuilder);

        putenv("OKTA_CLIENT_TOKEN={$oldToken}");
        putenv("OKTA_CLIENT_ORGURL={$oldOrgUrl}");

    }

    /** @test */
    public function it_lets_you_override_defaults_by_setting_config_file_location()
    {
        $parser = $this->createMock(Parser::class);
        $parser->expects($this->at(0))
            ->method('parse')
            ->will($this->returnValue([
                'okta' => [
                    'client' => [
                        'token' => 'abc123',
                        'orgUrl' => 'https://example.com'
                    ]
                ]
            ]));

        $parser->expects($this->at(1))
            ->method('parse')
            ->will($this->returnValue([
                'okta' => [
                    'client' => [
                        'token' => 'xyz789',
                        'orgUrl' => 'https://okta.com'
                    ]
                ]
            ]));

        $clientBuilder = new ClientBuilder($parser);
        $clientBuilder->setConfigFileLocation(__FILE__);
        $clientBuilder->build();

        $this->assertContains('Token: xyz789', (string)$clientBuilder);
        $this->assertContains('OrgUrl: https://okta.com', (string)$clientBuilder);

    }

    /** @test */
    public function it_builds_and_overrides_default_settings_with_items_from_setter()
    {
        $parser = $this->createMock(Parser::class);
        $parser->expects($this->at(0))
            ->method('parse')
            ->will($this->returnValue([
                'okta' => [
                    'client' => [
                        'token' => 'abc123',
                        'orgUrl' => 'https://example.com'
                    ]
                ]
            ]));

        $clientBuilder = new ClientBuilder($parser);
        $clientBuilder->setToken('TokenSetByMethod');
        $clientBuilder->setOrganizationurl('https://okta.com');
        $clientBuilder->build();

        $this->assertContains('Token: TokenSetByMethod', (string)$clientBuilder);
        $this->assertContains('OrgUrl: https://okta.com', (string)$clientBuilder);

    }

    /** @test */
    public function an_invalid_config_file_will_throw_exception()
    {
        $this->expectException(UnexpectedValueException::class);
        $parser = $this->createMock(Parser::class);
        $parser->expects($this->at(0))
            ->method('parse')
            ->will($this->returnValue([
                'invalid' => [
                    'file' => [
                        'properties' => 'here'
                    ]
                ]
            ]));

        $clientBuilder = new ClientBuilder($parser);
    }

}
