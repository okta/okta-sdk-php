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
use Okta\Users\UserCredentials;
use PHPUnit\Framework\TestCase;

class UserCredentialsTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
        "password": {},
        "recovery_question": {
          "question": "Who\'s a major player in the cowboy scene?"
        },
        "provider": {
          "type": "OKTA",
          "name": "OKTA"
        }
        ');

        self::$testable = new UserCredentials(null, static::$properties);
    }

    /** @test */
    public function password_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Users\PasswordCredential::class, static::$testable->getPassword());
        $this->assertInstanceOf(\Okta\Users\PasswordCredential::class, static::$testable->password);
    }

    /** @test */
    public function password_is_settable()
    {
        $localPassword = new \Okta\Users\PasswordCredential(
            null,
            json_decode('{"value": "TestPassword"}')
        );

        $newTestable = static::$testable->setPassword($localPassword);

        $this->assertInstanceOf(
            UserCredentials::class,
            $newTestable
        );

        $this->assertEquals(
            $localPassword,
            $newTestable->getPassword()
        );
    }

    /** @test */
    public function recovery_question_is_accessible()
    {
        $this->assertInstanceOf(
            \Okta\Users\RecoveryQuestionCredential::class,
            static::$testable->getRecoveryQuestion()
        );
        $this->assertInstanceOf(
            \Okta\Users\RecoveryQuestionCredential::class,
            static::$testable->recoveryQuestion
        );

    }

    /** @test */
    public function recovery_question_is_settable()
    {
        $localRecoveryQuestion = new \Okta\Users\RecoveryQuestionCredential(
            null,
            json_decode('{"question": "Question", "answer": "Answer"}')
        );

        $newTestable = static::$testable->setRecoveryQuestion($localRecoveryQuestion);

        $this->assertInstanceOf(
            UserCredentials::class,
            $newTestable
        );

        $this->assertEquals(
            $localRecoveryQuestion,
            $newTestable->getRecoveryQuestion()
        );
    }

    /** @test */
    public function provider_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Users\AuthenticationProvider::class, static::$testable->getProvider());
        $this->assertInstanceOf(\Okta\Users\AuthenticationProvider::class, static::$testable->provider);
    }

    /** @test */
    public function provider_is_settable()
    {
        $localProvider = new \Okta\Users\AuthenticationProvider(
            null,
            json_decode('{"type": "Test", "name": "Test"}')
        );

        $newTestable = static::$testable->setProvider($localProvider);

        $this->assertInstanceOf(
            UserCredentials::class,
            $newTestable
        );

        $this->assertEquals(
            $localProvider,
            $newTestable->getProvider()
        );
    }
}
