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

namespace Okta\Apps;

use Okta\Resource\AbstractResource;

class PublicAppInstanceCredentials extends AbstractResource
{
    const SCHEME = 'scheme';
    const SIGNING = 'signing';
    const PASSWORD = 'password';
    const USER_NAME = 'userName';
    const REVEAL_PASSWORD = 'revealPassword';
    const USER_NAME_TEMPLATE = 'userNameTemplate';


    /**
     * Get the scheme.
     *
     * @return string
     */
    public function getScheme(): string
    {
        return $this->getProperty(self::SCHEME);
    }
    
    /**
     * Get the signing.
     *
     * @return PublicAppInstanceCredentialsSigning
     */
    public function getSigning(array $options = []): PublicAppInstanceCredentialsSigning
    {
        return $this->getResourceProperty(
                        self::SIGNING,
                        PublicAppInstanceCredentialsSigning::class,
                        $options
                    );
    }

    /**
     * Set the signing.
     *
     * @param PublicAppInstanceCredentialsSigning $signing The PublicAppInstanceCredentialsSigning instance.
     * @return self
     */
    public function setSigning(PublicAppInstanceCredentialsSigning $signing)
    {
        $this->setResourceProperty(
                        self::SIGNING,
                        $signing
                    );
        
        return $this;
    }
    
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
     * Get the userName.
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->getProperty(self::USER_NAME);
    }
    
    /**
     * Get the revealPassword.
     *
     * @return boolean
     */
    public function getRevealPassword(): boolean
    {
        return $this->getProperty(self::REVEAL_PASSWORD);
    }
    
    /**
     * Get the userNameTemplate.
     *
     * @return PublicAppInstanceCredentialsUsernameTemplate
     */
    public function getUserNameTemplate(array $options = []): PublicAppInstanceCredentialsUsernameTemplate
    {
        return $this->getResourceProperty(
                        self::USER_NAME_TEMPLATE,
                        PublicAppInstanceCredentialsUsernameTemplate::class,
                        $options
                    );
    }

    /**
     * Set the userNameTemplate.
     *
     * @param PublicAppInstanceCredentialsUsernameTemplate $userNameTemplateThe PublicAppInstanceCredentialsUsernameTemplate instance.
     * @return self
     */
    public function setUserNameTemplate(PublicAppInstanceCredentialsUsernameTemplate $userNameTemplate)
    {
        $this->setResourceProperty(
                        self::USER_NAME_TEMPLATE,
                        $userNameTemplate
                    );
        
        return $this;
    }
}
