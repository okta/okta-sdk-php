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

use Okta\Okta;
use PHPUnit\Framework\TestCase;

class OktaTest extends TestCase
{
    protected static $client;

    /** @test */
    public function getting_all_users_returns_a_collection_of_users()
    {
        $response = $this->createMock('Psr\Http\Message\ResponseInterface');
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn(
          '[{"id":"00ua3b3i403WRYTGm0h7","status":"ACTIVE","created":"2017-04-06T21:27:55.000Z"},{"id":"00uak5c3ugOFniX670h7","status":"ACTIVE","created":"2017-05-22T16:06:48.000Z"},{"id":"00uak5dkxjhg4AQ230h7","status":"ACTIVE","created":"2017-05-22T16:05:42.000Z"},{"id":"00uajcy1o6MMTJVFb0h7","status":"SUSPENDED","created":"2017-05-19T20:04:54.000Z"}]'
        );

        $httpClient = new \Http\Mock\Client;
        $httpClient->addResponse($response);

        (new \Okta\ClientBuilder())
            ->setOrganizationUrl('https://dev.okta.com')
            ->setToken('abc123')
            ->setHttpClient($httpClient)
            ->build();


        $users = (new Okta())->getUsers();
        $requests = $httpClient->getRequests();

        $this->assertInstanceOf(
            \Okta\Users\Collection::class,
            $users
        );
        $this->assertCount(4, $users);
        $this->assertEquals(
            '/api/v1/users',
            $requests[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function getting_all_groups_returns_a_collection_of_users()
    {
        $response = $this->createMock('Psr\Http\Message\ResponseInterface');
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn(
            '[{"id":"00ua3b3i403WRYTGm0h7"},{"id":"00uak5c3ugOFniX670h7"},{"id":"00uak5dkxjhg4AQ230h7"}]'
        );

        $httpClient = new \Http\Mock\Client;
        $httpClient->addResponse($response);

        (new \Okta\ClientBuilder())
            ->setOrganizationUrl('https://dev.okta.com')
            ->setToken('abc123')
            ->setHttpClient($httpClient)
            ->build();


        $groups = (new Okta())->getGroups();
        $requests = $httpClient->getRequests();

        $this->assertInstanceOf(
            \Okta\Groups\Collection::class,
            $groups
        );
        $this->assertCount(3, $groups);
        $this->assertEquals(
            '/api/v1/groups',
            $requests[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function getting_logs_returns_a_collection_of_logs()
    {
        $response = $this->createMock('Psr\Http\Message\ResponseInterface');
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn(
            '[{"id":"00ua3b3i403WRYTGm0h7"},{"id":"00uak5c3ugOFniX670h7"},{"id":"00uak5dkxjhg4AQ230h7"},{"id":"00uajcy1o6MMTJVFb0h7"}]'
        );

        $httpClient = new \Http\Mock\Client;
        $httpClient->addResponse($response);

        (new \Okta\ClientBuilder())
            ->setOrganizationUrl('https://dev.okta.com')
            ->setToken('abc123')
            ->setHttpClient($httpClient)
            ->build();


        $logs = (new Okta())->getLogs();
        $requests = $httpClient->getRequests();

        $this->assertInstanceOf(
            \Okta\Logs\Collection::class,
            $logs
        );
        $this->assertCount(4, $logs);
        $this->assertEquals(
            '/api/v1/logs',
            $requests[0]->getUri()->getPath()
        );
    }

}