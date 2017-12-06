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

use Okta\Sessions\CreateSessionRequest;
use PHPUnit\Framework\TestCase;

class CreateSessionRequestTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Sessions\CreateSessionRequest */
    protected $testable;

    protected $model = '{"sessionToken": "abc123"}';
    protected $modelType = \Okta\Sessions\CreateSessionRequest::class;

    /** @test */
    public function session_token_is_accessible()
    {
        $this->assertEquals($this->properties->sessionToken, $this->testable->getSessionToken());
        $this->assertEquals($this->properties->sessionToken, $this->testable->sessionToken);
    }
    
    /** @test */
    public function session_token_is_settable()
    {
        $this->testable->setSessionToken('token1');
        $this->assertEquals('token1', $this->testable->getSessionToken());
    
        $this->testable->sessionToken = 'token2';
        $this->assertEquals('token2', $this->testable->getSessionToken());
    }
    


}
