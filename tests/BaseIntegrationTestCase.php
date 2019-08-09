<?php

use Okta\ClientBuilder;

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

class BaseIntegrationTestCase extends BaseTestCase
{

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        (new ClientBuilder())->build();
    }

    /**
     * @param array $returns
     *
     * @return \Http\Client\HttpClient
     */
    protected function createNewHttpClient($returns = []): \Http\Client\HttpClient
    {
        if( ! $this->isMockingResponses() ) {
            return \Okta\Client::getInstance()->getDataStore()->getHttpClient();
        }

        $defaults = [
            'getStatusCode' => 200,
            'getBody' => '{}'
        ];

        if (!is_array(current($returns)))
        {
            $returns = [$returns];
        }

        $httpClient = new \Http\Mock\Client;
        $mockReturns = [];

        foreach($returns as $return) {
            $mockReturns[] = array_replace_recursive($defaults, $return);
        }

        foreach($mockReturns as $returnValues) {
            $response = $this->createMock('Psr\Http\Message\ResponseInterface');
            foreach($returnValues as $method=>$return) {
                $response->method($method)->willReturn($return);

            }
            $httpClient->addResponse($response);
        }

        (new \Okta\ClientBuilder())
            ->setOrganizationUrl('https://dev.okta.com')
            ->setToken($this->token)
            ->setHttpClient($httpClient)
            ->build();
        return $httpClient;
    }

    protected function isMockingResponses()
    {
        // need to use multiple cases due to the way phpunit handles `true` vs phpStorm
        return getenv('OKTA_MOCK_TESTS') == 'true' || getenv('OKTA_MOCK_TESTS') === true || getenv('OKTA_MOCK_TESTS') == "1";
    }
}
