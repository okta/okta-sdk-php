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

use Okta\ClientBuilder;
use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{
    protected $token = 'abc123';

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        (new ClientBuilder())->build();
    }

    /**
     * @param array $returns
     *
     * @return \Http\Mock\Client
     */
    protected function createNewHttpClient($returns = []): \Http\Mock\Client
    {
        $defaults = [
            'getStatusCode' => 200,
            'getBody' => '{}'
        ];

        $mockReturns = array_replace_recursive($defaults, $returns);

        $httpClient = new \Http\Mock\Client;

        $response = $this->createMock('Psr\Http\Message\ResponseInterface');

        foreach($mockReturns as $method=>$return) {
            $response->method($method)->willReturn($return);

        }
        $httpClient->addResponse($response);

        (new \Okta\ClientBuilder())
            ->setOrganizationUrl('https://dev.okta.com')
            ->setToken($this->token)
            ->setHttpClient($httpClient)
            ->build();
        return $httpClient;
    }

    protected function createNewUser($properties = []): \Okta\Users\User
    {
        $defaults = json_decode(
            file_get_contents(__DIR__ . '/models/user.json'),
            true
        );

        $properties = array_replace_recursive($defaults, $properties);

        $class = new \stdClass();
        foreach($properties as $prop=>$value)
        {
            $class->{$prop} = $value;
        }
        return new \Okta\Users\User(null, $class);

    }

}