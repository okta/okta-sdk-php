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
use Okta\Users\ForgotPasswordResponse;
use PHPUnit\Framework\TestCase;

class ForgotPasswordResponseTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
          "resetPasswordUrl": "https://your-domain.okta.com/reset_password/XE6wE17zmphl3KqAPFxO"
        }   
        ');

        self::$testable = new ForgotPasswordResponse(null, static::$properties);
    }

    /** @test */
    public function reset_password_url_is_accessible()
    {
        $this->assertEquals(static::$properties->resetPasswordUrl, static::$testable->getResetPasswordUrl());
        $this->assertEquals(static::$properties->resetPasswordUrl, static::$testable->resetPasswordUrl);
    }

}
