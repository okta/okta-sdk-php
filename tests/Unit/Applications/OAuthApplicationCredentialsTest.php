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

use Okta\Applications\OAuthApplicationCredentials;
use PHPUnit\Framework\TestCase;

class OAuthApplicationCredentialsTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\OAuthApplicationCredentials */
    protected $testable;

    protected $model = '{
      "oauthClient": {
        "client_id":"0oa1hm4POxgJM6CPu0g4", 
        "autoKeyRotation": true,
        "token_endpoint_auth_method": "client_secret_post"
      }
      }';
    protected $modelType = \Okta\Applications\OAuthApplicationCredentials::class;

    /** @test */
    public function oauth_client_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationCredentialsOAuthClient::class,
            $this->testable->getOauthClient());
        $this->assertInstanceOf(\Okta\Applications\ApplicationCredentialsOAuthClient::class,
            $this->testable->oauthClient);
    }

    /** @test */
    public function oauth_client_is_settable()
    {
        $client = $this->testable->getOauthClient();

        $client->autoKeyRotation = true;
        $this->testable->setOauthClient($client);
        $this->assertEquals(true, $this->testable->getOauthClient()->autoKeyRotation);

        $client->autoKeyRotation = false;
        $this->testable->oauthClient = $client;
        $this->assertEquals(false, $this->testable->getOauthClient()->autoKeyRotation);
    }


}
