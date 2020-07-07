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

class UserCredentials extends \Okta\Resource\AbstractResource
{
    const PASSWORD = 'password';
    const PROVIDER = 'provider';
    const RECOVERY_QUESTION = 'recovery_question';


    /**
     * Set the Password.
     *
     * @param mixed $password The password to set.
     * @return self
     */
    function setPassword(\Okta\User\PasswordCredential $password) : UserCredentials
    {
        $this->setResourceProperty(
            self::PASSWORD,
            $password
        );
    
        return $this;
    }

    /**
     * Set the Provider.
     *
     * @param mixed $provider The provider to set.
     * @return self
     */
    function setProvider(\Okta\User\AuthenticationProvider $provider) : UserCredentials
    {
        $this->setResourceProperty(
            self::PROVIDER,
            $provider
        );
    
        return $this;
    }

    /**
     * Set the RecoveryQuestion.
     *
     * @param mixed $recovery_question The recovery_question to set.
     * @return self
     */
    function setRecoveryQuestion(\Okta\User\RecoveryQuestionCredential $recovery_question) : UserCredentials
    {
        $this->setResourceProperty(
            self::RECOVERY_QUESTION,
            $recovery_question
        );
    
        return $this;
    }

    /**
     * Get the Password.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\PasswordCredential
     */
    function getPassword(array $options = []) : \Okta\User\PasswordCredential
    {
        return $this->getResourceProperty(
            self::PASSWORD,
            \Okta\User\PasswordCredential::class,
            $options
        );
    }

    /**
     * Get the Provider.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\AuthenticationProvider
     */
    function getProvider(array $options = []) : \Okta\User\AuthenticationProvider
    {
        return $this->getResourceProperty(
            self::PROVIDER,
            \Okta\User\AuthenticationProvider::class,
            $options
        );
    }

    /**
     * Get the RecoveryQuestion.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\RecoveryQuestionCredential
     */
    function getRecoveryQuestion(array $options = []) : \Okta\User\RecoveryQuestionCredential
    {
        return $this->getResourceProperty(
            self::RECOVERY_QUESTION,
            \Okta\User\RecoveryQuestionCredential::class,
            $options
        );
    }


}