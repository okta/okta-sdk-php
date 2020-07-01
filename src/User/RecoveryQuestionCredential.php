<?php
/*********************************************************************************/
/**   Copyright 2017 - Present Okta, Inc.                                       **/
/**                                                                             **/
/**   Licensed under the Apache License, Version 2.0 (the "License");           **/
/**   you may not use this file except in compliance with the License.          **/
/**   You may obtain a copy of the License at                                   **/
/**                                                                             **/
/**        http://www.apache.org/licenses/LICENSE-2.0                           **/
/**                                                                             **/
/**   Unless required by applicable law or agreed to in writing, software       **/
/**   distributed under the License is distributed on an "AS IS" BASIS,         **/
/**   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  **/
/**   See the License for the specific language governing permissions and       **/
/**   limitations under the License.                                            **/
/*********************************************************************************/

/************************************************/
/** This file is auto-generated.  Do Not Edit! **/
/************************************************/

namespace Okta\User;

class RecoveryQuestionCredential extends \Okta\Resource\AbstractResource
{
    const ANSWER = 'answer';
    const QUESTION = 'question';

    /**
     * Set the Answer.
     *
     * @param mixed $answer The answer to set.
     * @return self
     */
    function setAnswer($answer) : RecoveryQuestionCredential
    {
        $this->setProperty(
            self::ANSWER,
            $answer
        );
    
        return $this;
    }
    
    /**
     * Set the Question.
     *
     * @param mixed $question The question to set.
     * @return self
     */
    function setQuestion($question) : RecoveryQuestionCredential
    {
        $this->setProperty(
            self::QUESTION,
            $question
        );
    
        return $this;
    }
    
    /**
     * Get the Answer.
     *
     * @param mixed $answer The answer to set.
     * @return string
     */
    function getAnswer() : string
    {
        return $this->getProperty(
            self::ANSWER
        );
    }
    
    /**
     * Get the Question.
     *
     * @param mixed $question The question to set.
     * @return string
     */
    function getQuestion() : string
    {
        return $this->getProperty(
            self::QUESTION
        );
    }
    

}