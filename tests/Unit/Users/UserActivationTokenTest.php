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
use Okta\Users\UserActivationToken;
use PHPUnit\Framework\TestCase;

class UserActivationTokenTest extends TestCase
{
    protected static $properties;

    /** @var ActivationToken */
    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode(
            '{
  "activationToken": "abc123",
  "activationUrl": "http://example.com"
}'
        );

        $class = new \stdClass();
        foreach(static::$properties as $prop=>$value)
        {
            $class->{$prop} = $value;
        }
        self::$testable = new UserActivationToken(null, $class);

    }

    /** @test */
    public function activation_url_is_accessible()
    {
        $this->assertEquals(static::$properties->activationUrl, static::$testable->getActivationUrl());
        $this->assertEquals(static::$properties->activationUrl, static::$testable->activationUrl);
    }

    /** @test */
    public function activation_token_is_accessible()
    {
        $this->assertEquals(static::$properties->activationToken, static::$testable->getActivationToken());
        $this->assertEquals(static::$properties->activationToken, static::$testable->activationToken);
    }

}
