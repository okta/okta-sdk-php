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

use Okta\DataStore\DefaultDataStore;
use PHPUnit\Framework\TestCase;

class DefaultDataStoreTest extends TestCase
{
    /** @test */
    public function returns_instance_of_plugin_client_from_http_client()
    {
        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://example.com');

        $this->assertInstanceOf(
            \Http\Client\Common\PluginClient::class,
            $dataStore->getHttpClient(),
            'The HttpClient does not return instance of ' . \Http\Client\Common\PluginClient::class
        );

    }

    /** @test */
    public function returns_instance_of_message_factory()
    {
        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://example.com');

        $this->assertInstanceOf(
            \Http\Message\MessageFactory::class,
            $dataStore->getMessageFactory(),
            'The MessageFactory does not return instance of ' . \Http\Message\MessageFactory::class
        );
    }


    /** @test */
    public function returns_instance_of_uri_factory()
    {
        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://example.com');

        $this->assertInstanceOf(
            \Http\Message\UriFactory::class,
            $dataStore->getUriFactory(),
            'The UriFactory does not return instance of ' . \Http\Message\UriFactory::class
        );
    }

    /** @test */
    public function can_set_query_when_getting_resource()
    {
        $httpClient = $this->createNewHttpClient();

        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://example.com', $httpClient);

        $uri = $dataStore->buildUri(
            "/api/v1/users/123"
        );

        $dataStore
            ->setUri($uri)
            ->setRequestMethod('GET')
            ->setQueryParams(['limit'=>1])
            ->executeRequest();


        $request = $httpClient->getRequests();

        $this->assertEquals(
            'limit=1',
            $request[0]->getUri()->getQuery()
        );

    }

    /** @test */
    public function an_error_is_returned_correctly()
    {
        $this->expectException(\Okta\Exceptions\ResourceException::class);
        $httpClient = $this->createNewHttpClient([
            'getStatusCode' => 403,
            'getBody' => '{"errorCode":"E0000005","errorSummary":"Invalid session","errorLink":"E0000005","errorId":"oae6VxJiR3xSTKFwE2Ppx3HHA","errorCauses":[]}'
        ]);

        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://example.com', $httpClient);

        $uri = $dataStore->buildUri(
            "/api/v1/users/123"
        );

        $dataStore
            ->setUri($uri)
            ->setRequestMethod('GET')
            ->setQueryParams(['limit'=>1])
            ->executeRequest();

    }

    /** @test */
    public function query_can_be_appended()
    {
        $httpClient = $this->createNewHttpClient();

        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://example.com', $httpClient);

        $uri = $dataStore->buildUri(
            "/api/v1/users/123?limit=4&start=2"
        );

        $dataStore
            ->setUri($uri)
            ->setRequestMethod('GET')
            ->setQueryParams(['limit'=>1])
            ->executeRequest();

        $request = $httpClient->getRequests();

        $this->assertEquals(
            'limit=1&start=2',
            $request[0]->getUri()->getQuery()
        );

    }

    /** @test */
    public function getting_a_resource_will_pull_from_cache_the_second_time_its_requested()
    {
        $mockReturns = [
            [
                'getStatusCode' => 200,
                'getBody' => '{"id": "abc123"}'
            ],
            [
                'getStatusCode' => 200,
                'getBody' => '{"id": "xyz789"}'
            ]
        ];

        $httpClient = new \Http\Mock\Client;

        foreach($mockReturns as $returnValues) {
            $response = $this->createMock('Psr\Http\Message\ResponseInterface');
            foreach($returnValues as $method=>$return) {
                $response->method($method)->willReturn($return);
            }
            $httpClient->addResponse($response);
        }


        $client = (new \Okta\ClientBuilder())
            ->setHttpClient($httpClient)
            ->build();

        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://example.com', $httpClient);

        $uri = $dataStore->buildUri(
            "/api/v1/users/123"
        );

        $response = $dataStore
            ->setUri($uri)
            ->setRequestMethod('GET')
            ->setQueryParams(['limit'=>1])
            ->executeRequest();

        $this->assertEquals('abc123', $response->id, 'The ID did not return what was expected');

        $uri = $dataStore->buildUri(
            "/api/v1/users/123"
        );

        $response = $dataStore
            ->setUri($uri)
            ->setRequestMethod('GET')
            ->setQueryParams(['limit'=>1])
            ->executeRequest();

        $this->assertEquals('abc123', $response->id, 'It appears the cache was not hit.');

    }

    /** @test */
    public function create_resource_will_store_item_in_cache()
    {
        $mockReturns = [
            [
                'getStatusCode' => 201,
                'getBody' => '{"id": "abc123", "_links": {"self": {"href": "https://dev.okta.com/api/v1/users/abc123"}}}'
            ],
            [
                'getStatusCode' => 200,
                'getBody' => '{"id": "xyz789", "_links": {"self": {"href": "https://dev.okta.com/api/v1/users/xyz789"}}}'
            ]
        ];

        $httpClient = new \Http\Mock\Client;

        foreach($mockReturns as $returnValues) {
            $response = $this->createMock('Psr\Http\Message\ResponseInterface');
            foreach($returnValues as $method=>$return) {
                $response->method($method)->willReturn($return);
            }
            $httpClient->addResponse($response);
        }


        $client = (new \Okta\ClientBuilder())
            ->setOrganizationUrl('https://dev.okta.com')
            ->setToken('abc123')
            ->setHttpClient($httpClient)
            ->build();

        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://dev.okta.com', $httpClient);

        $user = new \Okta\User\User();
        $profile = $user->getProfile();
        $profile->setFirstName('Okta');
        $user->setProfile($profile);

        $uri = $dataStore->buildUri(
            "/api/v1/users"
        );

        $response = $dataStore
            ->setUri($uri)
            ->setRequestMethod('POST')
            ->setRequestBody($user)
            ->executeRequest();

        $responseUser = new \Okta\User\User($dataStore, $response);
        $this->assertEquals('abc123', $responseUser->getId(), 'It appears the cache was not hit.');


    }


    /** @test */
    public function will_delete_item_from_cache_when_deleting_resource()
    {
        $mockReturns = [
            [
                'getStatusCode' => 201,
                'getBody' => '{"id": "abc123", "_links": {"self": {"href": "https://dev.okta.com/api/v1/users/abc123"}}}'
            ],
            [
                'getStatusCode' => 204,
                'getBody' => ''
            ]
        ];

        $httpClient = new \Http\Mock\Client;

        foreach($mockReturns as $returnValues) {
            $response = $this->createMock('Psr\Http\Message\ResponseInterface');
            foreach($returnValues as $method=>$return) {
                $response->method($method)->willReturn($return);
            }
            $httpClient->addResponse($response);
        }


        $client = (new \Okta\ClientBuilder())
            ->setOrganizationUrl('https://dev.okta.com')
            ->setToken('abc123')
            ->setHttpClient($httpClient)
            ->build();

        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://dev.okta.com', $httpClient);

        $createUserRequest = new \Okta\User\CreateUserRequest();
        $profile = $createUserRequest->getProfile();
        $profile->setFirstName('Okta');
        $createUserRequest->setProfile($profile);
        $user = (new \Okta\User\User)->create($createUserRequest);

        $cacheManager = $client->getCacheManager();
        $this->assertTrue(
            $cacheManager->pool()->hasItem(
                $cacheManager->createCacheKey(
                    $dataStore->getUriFactory()->createUri("https://dev.okta.com/api/v1/users/abc123")
                )
            )
        );

        $user->delete();

        $this->assertFalse(
            $cacheManager->pool()->hasItem(
                $cacheManager->createCacheKey(
                    $dataStore->getUriFactory()->createUri("https://dev.okta.com/api/v1/users/abc123")
                )
            )
        );
    }

    /** @test */
    public function calling_execute_request_through_resource_method_will_update_cache()
    {
        $mockReturns = [
            [
                'getStatusCode' => 201,
                'getBody' => '{"id": "abc123", "status": "STAGED", "_links": {"self": {"href": "https://dev.okta.com/api/v1/users/abc123"}}}'
            ],
            [
                'getStatusCode' => 200,
                'getBody' => '{"id": "abc123", "status": "ACTIVE", "_links": {"self": {"href": "https://dev.okta.com/api/v1/users/abc123"}}}'
            ]
        ];

        $httpClient = new \Http\Mock\Client;

        foreach($mockReturns as $returnValues) {
            $response = $this->createMock('Psr\Http\Message\ResponseInterface');
            foreach($returnValues as $method=>$return) {
                $response->method($method)->willReturn($return);
            }
            $httpClient->addResponse($response);
        }


        $client = (new \Okta\ClientBuilder())
            ->setOrganizationUrl('https://dev.okta.com')
            ->setToken('abc123')
            ->setHttpClient($httpClient)
            ->build();

        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://dev.okta.com', $httpClient);

        $cacheManager = $client->getCacheManager();

        $this->assertFalse(
            $cacheManager->pool()->hasItem(
                $cacheManager->createCacheKey(
                    $dataStore->getUriFactory()->createUri("https://dev.okta.com/api/v1/users/abc123")
                )
            )
        );

        $createUserRequest = new \Okta\User\CreateUserRequest();
        $profile = $createUserRequest->getProfile();
        $profile->setFirstName('Okta');
        $createUserRequest->setProfile($profile);
        $user = (new \Okta\User\User)->create($createUserRequest);



        $this->assertEquals(
            'STAGED',
            $user->getStatus(),
            'The cache was not setup correctly for test.'
        );

        $user->activate();

        $user = (new \Okta\User\User())->read('abc123');

        $this->assertEquals(
            'ACTIVE',
            $user->getStatus(),
            'The cache was not updated during a user activate method.'
        );
    }

    /**
     * This test is to confirm that the cache key is generated by the self link
     * when storing the item in the cache. The best way to test this is to
     * use get by username method since uri is different then self link.
     *
     * @test
     */
    public function getting_user_by_username_twice_will_be_a_cache_miss()
    {
        $mockReturns = [
            [
                'getStatusCode' => 200,
                'getBody' => '{"id": "abc123", "_links": {"self": {"href": "https://dev.okta.com/api/v1/users/abc123"}}}'
            ],
            [
                'getStatusCode' => 200,
                'getBody' => '{"id": "xyz789", "_links": {"self": {"href": "https://dev.okta.com/api/v1/users/xyz789"}}}'
            ]
        ];

        $httpClient = new \Http\Mock\Client;

        foreach($mockReturns as $returnValues) {
            $response = $this->createMock('Psr\Http\Message\ResponseInterface');
            foreach($returnValues as $method=>$return) {
                $response->method($method)->willReturn($return);
            }
            $httpClient->addResponse($response);
        }


        $client = (new \Okta\ClientBuilder())
            ->setOrganizationUrl('https://dev.okta.com')
            ->setToken('abc123')
            ->setHttpClient($httpClient)
            ->build();

        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://dev.okta.com', $httpClient);

        $cacheManager = $client->getCacheManager();
        $key = $cacheManager->createCacheKey(
            $dataStore->getUriFactory()->createUri("https://dev.okta.com/api/v1/users/php@okta.com")
        );

        $key2 = $cacheManager->createCacheKey(
            $dataStore->getUriFactory()->createUri("https://dev.okta.com/api/v1/users/abc123")
        );


        $user = new \Okta\User\User();
        $user = $user->read('php@okta.com');

        $this->assertFalse($cacheManager->pool()->hasItem($key));
        $this->assertTrue($cacheManager->pool()->hasItem($key2));
    }

    /** @test */
    public function a_call_can_set_accept_header() {
        $httpClient = $this->createNewHttpClient();

        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://example.com', $httpClient);
        $dataStore->setAcceptHeader('test/header');

        $uri = $dataStore->buildUri(
            "/api/v1/users/123"
        );

        $response = $dataStore
            ->setUri($uri)
            ->setRequestMethod('GET')
            ->setQueryParams(['limit'=>1])
            ->executeRequest();

        $request = $httpClient->getRequests();

        $this->assertEquals(
            'test/header',
            $request[0]->getHeader('Accept')[0]
        );
    }

    /** @test */
    public function a_call_can_set_content_type_and_accept_headers() {
        $httpClient = $this->createNewHttpClient();

        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://example.com', $httpClient);

        $uri = $dataStore->buildUri(
            "/api/v1/apps"
        );

        $response = $dataStore
            ->setUri($uri)
            ->setRequestMethod('GET')
            ->setContentTypeHeader('test/contentTypeHeader')
            ->setAcceptHeader('test/acceptHeader')
            ->setRequestBody("test")
            ->setQueryParams(['limit'=>1])
            ->executeRequest();

        $request = $httpClient->getRequests();

        $this->assertEquals(
            'test/contentTypeHeader',
            $request[0]->getHeader('Content-Type')[0]
        );

        $this->assertEquals(
            'test/acceptHeader',
            $request[0]->getHeader('Accept')[0]
        );
    }




    /**
     * @param array $returns
     *
     * @return \Http\Mock\Client
     */
    private function createNewHttpClient($returns = []): \Http\Mock\Client
    {
        $defaults = [
            'getStatusCode' => 200,
            'getBody' => '{}'
        ];

        $mockReturns = array_replace_recursive($defaults, $returns);

        $response = $this->createMock('Psr\Http\Message\ResponseInterface');
        foreach($mockReturns as $method=>$return) {
            $response->method($method)->willReturn($return);
        }
        $httpClient = new \Http\Mock\Client;
        $httpClient->addResponse($response);

        (new \Okta\ClientBuilder())
            ->setOrganizationUrl('https://dev.okta.com')
            ->setToken('abc123')
            ->setHttpClient($httpClient)
            ->build();
        return $httpClient;
    }



}
