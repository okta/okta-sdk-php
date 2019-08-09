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

use Okta\Cache\MemoryManager;
use Okta\Client;
use Okta\ClientBuilder;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Parser;

class ClientBuilderTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        file_put_contents(
            'okta.yaml',
            '{okta: { client: { token: "defaultToken", orgUrl: "https://default-org.okta.com"}}}');
    }

    public static function tearDownAfterClass(): void
    {
        unlink('okta.yaml');
        parent::tearDownAfterClass();
    }

    /** @test */
    public function it_returns_self_when_setting_the_token()
    {
         $clientBuilder = new ClientBuilder(null, 'okta.yaml');
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
        $clientBuilder = new ClientBuilder(null, 'okta.yaml');
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
        $clientBuilder = new ClientBuilder(null, 'okta.yaml');
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

        $clientBuilder = new ClientBuilder(null, 'okta.yaml');
        $clientBuilder->setConfigFileLocation('/some/file/that/does/not/exist.yaml');
    }

    /** @test */
    public function it_returns_self_when_setting_the_http_client()
    {
        $clientBuilder = new ClientBuilder(null, 'okta.yaml');
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
        $clientBuilder = new ClientBuilder(null, 'okta.yaml');
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
        $clientBuilder = (new ClientBuilder(null, 'okta.yaml'))
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

        $clientBuilder = new ClientBuilder($parser, 'okta.yaml');

        $this->assertStringContainsStringIgnoringCase('Token: abc123', (string)$clientBuilder);
        $this->assertStringContainsStringIgnoringCase('OrgUrl: https://example.com', (string)$clientBuilder);

        putenv("OKTA_CLIENT_TOKEN={$oldToken}");
        putenv("OKTA_CLIENT_ORGURL={$oldOrgUrl}");

    }

    /** @test */
    public function it_lets_you_override_defaults_by_setting_config_file_location()
    {
        $oldToken = getenv('OKTA_CLIENT_TOKEN');
        $oldOrgUrl = getenv('OKTA_CLIENT_ORGURL');

        putenv('OKTA_CLIENT_TOKEN');
        putenv('OKTA_CLIENT_ORGURL');

        $parser = $this->createMock(Parser::class);

        $parser->expects($this->at(0))
            ->method('parse')
            ->will($this->returnValue([
                'okta' => [
                    'client' => [
                        'token' => 'abc123',
                        'orgUrl' => 'https://okta.com'
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

        $clientBuilderDefault = new ClientBuilder($parser, 'okta.yaml');
        $clientBuilder = new ClientBuilder($parser);
        $clientBuilder->setConfigFileLocation(__FILE__);
        $clientBuilder->build();

        $this->assertStringContainsStringIgnoringCase('Token: abc123', (string)$clientBuilderDefault);
        $this->assertStringContainsStringIgnoringCase('Token: xyz789', (string)$clientBuilder);
        $this->assertStringContainsStringIgnoringCase('OrgUrl: https://okta.com', (string)$clientBuilder);

        putenv("OKTA_CLIENT_TOKEN={$oldToken}");
        putenv("OKTA_CLIENT_ORGURL={$oldOrgUrl}");
    }

    /** @test */
    public function it_builds_and_overrides_default_settings_with_items_from_setter()
    {
        $parser = $this->createMock(Parser::class);

        $parser->method('parse')
            ->will($this->returnValue([
                'okta' => [
                    'client' => [
                        'token' => 'abc123',
                        'orgUrl' => 'https://okta.com'
                    ]
                ]
            ]));

        $clientBuilder = new ClientBuilder($parser);
        $clientBuilder->setToken('TokenSetByMethod');
        $clientBuilder->setOrganizationurl('https://okta.com');
        $clientBuilder->build();

        $this->assertStringContainsStringIgnoringCase('Token: TokenSetByMethod', (string)$clientBuilder);
        $this->assertStringContainsStringIgnoringCase('OrgUrl: https://okta.com', (string)$clientBuilder);
    }

    /** @test */
    public function an_invalid_config_file_will_throw_exception()
    {
        $this->expectException(UnexpectedValueException::class);
        $parser = $this->createMock(Parser::class);
        $parser->method('parse')
            ->will($this->returnValue([
                'invalid' => [
                    'file' => [
                        'properties' => 'here'
                    ]
                ]
            ]));

        $clientBuilder = new ClientBuilder($parser, __FILE__);
    }

    /** @test */
    public function cache_manager_is_defaulted_to_memory_manager()
    {
        $clientBuilder = new ClientBuilder();
        $client = $clientBuilder->build();

        $this->assertInstanceOf(MemoryManager::class, $client->getCacheManager(), 'The client did not default to the Memory Cache Manager.');
    }

    /** @test */
    public function the_cache_manager_can_be_set_on_the_client_builder()
    {
        $clientBuilder = new ClientBuilder();
        $clientBuilder->setCacheManager(new TestCacheManager());
        $client = $clientBuilder->build();

        $this->assertInstanceOf(TestCacheManager::class, $client->getCacheManager(), 'The client did not set to the Test Cache Manager.');
    }



}
