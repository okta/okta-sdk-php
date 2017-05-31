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
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /** @test */
    public function it_throws_exception_if_client_is_not_yet_built()
    {
        Client::destroy();

        $this->expectException(\RuntimeException::class);

        Client::getInstance();
    }

    /** @test */
    public function getting_instance_returns_client()
    {
         (new \Okta\ClientBuilder())
             ->setToken('123')
             ->setOrganizationUrl('http://example.com')
             ->build();

         $client = Client::getInstance();

         $this->assertInstanceof(
             Client::class,
             $client,
             'Getting Instance did not return a Client'
         );
    }

    /** @test */
    public function destroying_the_client_will_remove_instance()
    {
        (new \Okta\ClientBuilder())
            ->setToken('123')
            ->setOrganizationUrl('http://example.com')
            ->build();

        $client = Client::getInstance();

        $this->assertInstanceof(
            Client::class,
            $client
        );

        Client::destroy();

        $this->expectException(\RuntimeException::class);

        Client::getInstance();
    }

    /** @test */
    public function it_allows_access_to_organization_url()
    {
        $client = (new \Okta\ClientBuilder())
            ->setToken('123')
            ->setOrganizationUrl('http://example.com')
            ->build();

        $this->assertEquals(
            'http://example.com',
            $client->getOrganizationUrl(),
            'Organization Url could not be accessed'
        );
    }

    /** @test */
    public function it_allows_access_to_integration_user_agent()
    {
        $client = (new \Okta\ClientBuilder())
            ->setToken('123')
            ->setOrganizationUrl('http://example.com')
            ->setIntegrationUserAgent('integration/1.0.0')
            ->build();

        $this->assertEquals(
            'integration/1.0.0',
            $client->getIntegrationUserAgent(),
            'Integration User Agent could not be accessed'
        );
    }

    /** @test */
    public function getting_data_store_returns_data_store_object()
    {
        $client = (new \Okta\ClientBuilder())
            ->setToken('123')
            ->setOrganizationUrl('http://example.com')
            ->build();

        $this->assertInstanceOf(
            \Okta\DataStore\DefaultDataStore::class,
            $client->getDataStore(),
            'Getting DataStore does not return DefaultDataStore'
        );
    }







}
