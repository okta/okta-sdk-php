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

class SecurityQuestionFactorProfileTest extends BaseUnitTestCase
{
    protected $model = '/UserFactors/factorProfileQuestion.json';
    protected $modelType = \Okta\UserFactors\SecurityQuestionFactorProfile::class;

    /** @test */
    public function answer_is_accessible()
    {
        $this->assertEquals($this->properties->answer, $this->testable->getAnswer());
        $this->assertEquals($this->properties->answer, $this->testable->answer);
    }

    /** @test */
    public function answer_is_settable()
    {
        $this->testable->setAnswer('My Answer');
        static::assertEquals('My Answer', $this->testable->getAnswer());

        $this->testable->answer = 'Custom Answer';
        static::assertEquals('Custom Answer', $this->testable->getAnswer());
    }

    /** @test */
    public function question_is_accessible()
    {
        $this->assertEquals($this->properties->question, $this->testable->getQuestion());
        $this->assertEquals($this->properties->question, $this->testable->question);
    }

    /** @test */
    public function question_is_settable()
    {
        $this->testable->setQuestion('my_question');
        static::assertEquals('my_question', $this->testable->getQuestion());

        $this->testable->question = 'custom_question';
        static::assertEquals('custom_question', $this->testable->getQuestion());
    }

    /** @test */
    public function question_text_is_accessible()
    {
        $this->assertEquals($this->properties->questionText, $this->testable->getQuestionText());
        $this->assertEquals($this->properties->questionText, $this->testable->questionText);
    }

    /** @test */
    public function question_text_is_settable()
    {
        $this->testable->setQuestionText('My Answer');
        static::assertEquals('My Answer', $this->testable->getQuestionText());

        $this->testable->questionText = "Custom Answer";
        static::assertEquals("Custom Answer", $this->testable->getQuestionText());
    }

}
