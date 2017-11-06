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

class SecurityQuestionFactorProfileTest extends BaseTestCase
{

    protected static $properties;
    protected static $testable;

    public function setUp()
    {
        parent::setUp();
        $this->createNewHttpClient();
        $model = '/UserFactors/factorProfileQuestion.json';
        static::$properties = json_decode($this->getModel($model));
        static::$testable = $this->createModel($model, \Okta\UserFactors\SecurityQuestionFactorProfile::class);
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
        static::$testable->setAnswer('My Answer');
        static::assertEquals('My Answer', static::$testable->getAnswer());

        static::$testable->answer = 'Custom Answer';
        static::assertEquals('Custom Answer', static::$testable->getAnswer());
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
        static::$testable->setQuestion('my_question');
        static::assertEquals('my_question', static::$testable->getQuestion());

        static::$testable->question = 'custom_question';
        static::assertEquals('custom_question', static::$testable->getQuestion());
    }

    /** @test */
    public function question_text_is_accessible()
    {
        $this->assertEquals(static::$properties->questionText, static::$testable->getQuestionText());
        $this->assertEquals(static::$properties->questionText, static::$testable->questionText);
    }

    /** @test */
    public function question_text_is_settable()
    {
        static::$testable->setQuestionText('My Answer');
        static::assertEquals('My Answer', static::$testable->getQuestionText());

        static::$testable->questionText = "Custom Answer";
        static::assertEquals("Custom Answer", static::$testable->getQuestionText());
    }

}
