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

use Okta\Applications\ApplicationCredentialsOAuthClient;
use PHPUnit\Framework\TestCase;

class ApplicationCredentialsOAuthClientTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\ApplicationCredentialsOAuthClient */
    protected $testable;

    protected $model = '{
    "autoKeyRotation": true,
    "client_id": "0oa1hm4POxgJM6CPu0g4",
    "client_secret": "5jVbn2W72FOAWeQCg7-s_PA0aLqHWjHvUCt2xk-z",
    "token_endpoint_auth_method": "client_secret_post"
    }';
    protected $modelType = \Okta\Applications\ApplicationCredentialsOAuthClient::class;

    /** @test */
    public function client_id_is_accessible()
    {
        $this->assertEquals($this->properties->client_id, $this->testable->getClientId());
        $this->assertEquals($this->properties->client_id, $this->testable->clientId);
    }

    /** @test */
    public function client_id_is_settable()
    {
        $this->testable->setClientId('id1');
        $this->assertEquals('id1', $this->testable->getClientId());

        $this->testable->clientId = 'id2';
        $this->assertEquals('id2', $this->testable->getClientId());
    }

    /** @test */
    public function client_secret_is_accessible()
    {
        $this->assertEquals($this->properties->client_secret, $this->testable->getClientSecret());
        $this->assertEquals($this->properties->client_secret, $this->testable->clientSecret);
    }

    /** @test */
    public function client_secret_is_settable()
    {
        $this->testable->setClientSecret('secret1');
        $this->assertEquals('secret1', $this->testable->getClientSecret());
    
        $this->testable->clientSecret = 'secret2';
        $this->assertEquals('secret2', $this->testable->getClientSecret());
    }
    
    /** @test */
    public function auto_key_rotation_is_accessible()
    {
        $this->assertEquals($this->properties->autoKeyRotation, $this->testable->getAutoKeyRotation());
        $this->assertEquals($this->properties->autoKeyRotation, $this->testable->autoKeyRotation);
    }

    /** @test */
    public function auto_key_rotation_is_settable()
    {
        $this->testable->setAutoKeyRotation(true);
        $this->assertEquals(true, $this->testable->getAutoKeyRotation());

        $this->testable->autoKeyRotation = false;
        $this->assertEquals(false, $this->testable->getAutoKeyRotation());
    }

    /** @test */
    public function token_endpoint_auth_method_is_accessible()
    {
        $this->assertEquals($this->properties->token_endpoint_auth_method, $this->testable->getTokenEndpointAuthMethod());
        $this->assertEquals($this->properties->token_endpoint_auth_method, $this->testable->tokenEndpointAuthMethod);
    }

    /** @test */
    public function token_endpoint_auth_method_is_settable()
    {
        $this->testable->setTokenEndpointAuthMethod('client_credentials');
        $this->assertEquals('client_credentials', $this->testable->getTokenEndpointAuthMethod());

        $this->testable->tokenEndpointAuthMethod = 'another_method';
        $this->assertEquals('another_method', $this->testable->getTokenEndpointAuthMethod());
    }


}
