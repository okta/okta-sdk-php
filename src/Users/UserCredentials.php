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

namespace Okta\Users;

use Okta\Resource\AbstractResource;

class UserCredentials extends AbstractResource
{
    const PASSWORD = 'password';
    const PROVIDER = 'provider';
    const RECOVERY_QUESTION = 'recovery_question';

    /**
     * Get the password.
     *
     * @return PasswordCredential
     */
    public function getPassword(array $options = []): PasswordCredential
    {
        return $this->getResourceProperty(
            self::PASSWORD,
            PasswordCredential::class,
            $options
        );
    }

    /**
     * Set the password.
     *
     * @param PasswordCredential $password The PasswordCredential instance.
     * @return self
     */
    public function setPassword(PasswordCredential $password)
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
     * @return AuthenticationProvider
     */
    public function getProvider(array $options = []): AuthenticationProvider
    {
        return $this->getResourceProperty(
            self::PROVIDER,
            AuthenticationProvider::class,
            $options
        );
    }

    /**
     * Set the provider.
     *
     * @param AuthenticationProvider $provider The AuthenticationProvider instance.
     * @return self
     */
    public function setProvider(AuthenticationProvider $provider)
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
     * @return RecoveryQuestionCredential
     */
    public function getRecoveryQuestion(array $options = []): RecoveryQuestionCredential
    {
        return $this->getResourceProperty(
            self::RECOVERY_QUESTION,
            RecoveryQuestionCredential::class,
            $options
        );
    }

    /**
     * Set the recovery_question.
     *
     * @param RecoveryQuestionCredential $recovery_question The RecoveryQuestionCredential instance.
     * @return self
     */
    public function setRecoveryQuestion(RecoveryQuestionCredential $recovery_question)
    {
        $this->setResourceProperty(
            self::RECOVERY_QUESTION,
            $recovery_question
        );
        
        return $this;
    }
}
