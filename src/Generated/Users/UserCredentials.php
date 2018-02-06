<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
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

namespace Okta\Generated\Users;


class UserCredentials extends \Okta\Resource\AbstractResource
{
    const PASSWORD = 'password';
    const PROVIDER = 'provider';
    const RECOVERY_QUESTION = 'recovery_question';



    /**
     * Get the password.
     *
     * @return \Okta\Users\PasswordCredential
     */
    public function getPassword(array $options = []): \Okta\Users\PasswordCredential
    {
        return $this->getResourceProperty(
            self::PASSWORD,
            \Okta\Users\PasswordCredential::class,
            $options
        );
    }


    /**
     * Set the password.
     *
     * @param \Okta\Users\PasswordCredential $password The PasswordCredential instance.
     * @return self
     */
    public function setPassword(\Okta\Users\PasswordCredential $password)
    {
        $this->setResourceProperty(
            self::PASSWORD,
            $password
        );
        
        return $this;
    }

    /**
     * Get the provider.
     *
     * @return \Okta\Users\AuthenticationProvider
     */
    public function getProvider(array $options = []): \Okta\Users\AuthenticationProvider
    {
        return $this->getResourceProperty(
            self::PROVIDER,
            \Okta\Users\AuthenticationProvider::class,
            $options
        );
    }


    /**
     * Set the provider.
     *
     * @param \Okta\Users\AuthenticationProvider $provider The AuthenticationProvider instance.
     * @return self
     */
    public function setProvider(\Okta\Users\AuthenticationProvider $provider)
    {
        $this->setResourceProperty(
            self::PROVIDER,
            $provider
        );
        
        return $this;
    }

    /**
     * Get the recovery_question.
     *
     * @return \Okta\Users\RecoveryQuestionCredential
     */
    public function getRecoveryQuestion(array $options = []): \Okta\Users\RecoveryQuestionCredential
    {
        return $this->getResourceProperty(
            self::RECOVERY_QUESTION,
            \Okta\Users\RecoveryQuestionCredential::class,
            $options
        );
    }


    /**
     * Set the recovery_question.
     *
     * @param \Okta\Users\RecoveryQuestionCredential $recovery_question The RecoveryQuestionCredential instance.
     * @return self
     */
    public function setRecoveryQuestion(\Okta\Users\RecoveryQuestionCredential $recovery_question)
    {
        $this->setResourceProperty(
            self::RECOVERY_QUESTION,
            $recovery_question
        );
        
        return $this;
    }
}
