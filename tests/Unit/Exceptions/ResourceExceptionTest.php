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
use Okta\Exceptions\ResourceException;
use PHPUnit\Framework\TestCase;

class ResourceExceptionTest extends TestCase
{
    protected static $properties;

    protected static $testable;
    protected static $testableNull;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
        "errorCode":"E0000005",
        "errorSummary":"Invalid session",
        "errorLink":"E0000005",
        "errorId":"oae6VxJiR3xSTKFwE2Ppx3HHA",
        "errorCauses":[],
        "httpStatus": 403
        }
        ');

        $class = new \stdClass();
        foreach (static::$properties as $prop => $value) {
            $class->{$prop} = $value;
        }
        $error =  new \Okta\Exceptions\Error($class);

        self::$testable = new ResourceException($error);
    }

    /** @test */
    public function it_creates_a_resource_error()
    {
        $this->assertInstanceOf(
            ResourceException::class,
            new ResourceException(new \Okta\Exceptions\Error(static::$properties))
        );
    }

    /** @test */
    public function http_status_is_accessible()
    {
        $this->assertEquals(static::$properties->httpStatus, static::$testable->getHttpStatus());
    }

    /** @test */
    public function error_code_is_accessible()
    {
        $this->assertEquals(static::$properties->errorCode, static::$testable->getErrorCode());
    }

    /** @test */
    public function error_link_is_accessible()
    {
        $this->assertEquals(static::$properties->errorLink, static::$testable->getErrorLink());
    }

    /** @test */
    public function error_id_is_accessible()
    {
        $this->assertEquals(static::$properties->errorId, static::$testable->getErrorId());
    }

    /** @test */
    public function error_causes_is_accessible()
    {
        $this->assertEquals(static::$properties->errorCauses, static::$testable->getErrorCauses());
    }

    /** @test */
    public function error_summary_is_accessible()
    {
        $this->assertEquals(static::$properties->errorSummary, static::$testable->getErrorSummary());
    }


}
