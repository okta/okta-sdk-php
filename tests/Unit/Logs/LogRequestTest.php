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

use Okta\Logs\LogRequest;
use PHPUnit\Framework\TestCase;

class LogRequestTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Logs\LogRequest */
    protected $testable;

    protected $model = '/Logs/clientRequest.json';
    protected $modelType = \Okta\Logs\LogRequest::class;

    /** @test */
    public function ip_chain_is_accessible()
    {
        $this->assertEquals($this->properties->ipChain, $this->testable->getIpChain());
        $this->assertEquals($this->properties->ipChain, $this->testable->ipChain);
    }

}
