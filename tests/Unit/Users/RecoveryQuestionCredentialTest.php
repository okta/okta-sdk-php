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
use Okta\Users\RecoveryQuestionCredential;
use PHPUnit\Framework\TestCase;

class RecoveryQuestionCredentialTest extends TestCase
{
    protected static $properties;

    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode('
        {
        "question": "This is the question.",
        "answer": "This is the answer."
        }
        ');

        self::$testable = new RecoveryQuestionCredential(null, static::$properties);
    }

    /** @test */
    public function question_is_accessible()
    {
        $this->assertEquals(static::$properties->question, static::$testable->getQuestion());
        $this->assertEquals(static::$properties->question, static::$testable->question);
    }

    /** @test */
    public function question_is_settable()
    {
        static::$testable->setQuestion('Some Question');
        static::assertEquals('Some Question', static::$testable->getQuestion());

        static::$testable->question = 'Some Question';
        static::assertEquals('Some Question', static::$testable->getQuestion());
    }

    /** @test */
    public function answer_is_accessible()
    {
        $this->assertEquals(static::$properties->answer, static::$testable->getAnswer());
        $this->assertEquals(static::$properties->answer, static::$testable->answer);
    }

    /** @test */
    public function answer_is_settable()
    {
        static::$testable->setAnswer('Some Answer');
        static::assertEquals('Some Answer', static::$testable->getAnswer());

        static::$testable->answer = 'Some Answer';
        static::assertEquals('Some Answer', static::$testable->getAnswer());
    }

}
