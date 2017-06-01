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
     * @return PasswordCredential
     */
    public function getPassword(array $options = [])
    {
        return $this->getResourceProperty(
            self::PASSWORD,
            PasswordCredential::class,
            $options
        );
    }

    /**
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
     * @return AuthProvider
     */
    public function getProvider(array $options = [])
    {
        return $this->getResourceProperty(
            self::PROVIDER,
            AuthProvider::class,
            $options
        );
    }

    
    /**
     * @return RecoveryQuestionCredential
     */
    public function getRecoveryQuestion(array $options = [])
    {
        return $this->getResourceProperty(
            self::RECOVERY_QUESTION,
            RecoveryQuestionCredential::class,
            $options
        );
    }

    /**
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
