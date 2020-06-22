<?php
/*******************************************************************************
 * Copyright 2017-Present Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\UserFactors;

class SecurityQuestionUserFactorProfile extends \Okta\Resource\AbstractResource
{
    const ANSWER = 'answer';
    const QUESTION = 'question';
    const QUESTION_TEXT = 'questionText';


    /**
     * Get the answer.
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->getProperty(self::ANSWER);
    }

    /**
    * Set the answer.
    *
    * @param mixed $answer The value to set.
    * @return self
    */
    public function setAnswer($answer)
    {
        $this->setProperty(
            self::ANSWER,
            $answer
        );

        return $this;
    }

    /**
     * Get the question.
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->getProperty(self::QUESTION);
    }

    /**
    * Set the question.
    *
    * @param mixed $question The value to set.
    * @return self
    */
    public function setQuestion($question)
    {
        $this->setProperty(
            self::QUESTION,
            $question
        );

        return $this;
    }

    /**
     * Get the questionText.
     *
     * @return string
     */
    public function getQuestionText()
    {
        return $this->getProperty(self::QUESTION_TEXT);
    }

    /**
    * Set the questionText.
    *
    * @param mixed $questionText The value to set.
    * @return self
    */
    public function setQuestionText($questionText)
    {
        $this->setProperty(
            self::QUESTION_TEXT,
            $questionText
        );

        return $this;
    }
}
