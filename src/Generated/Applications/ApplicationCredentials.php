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

namespace Okta\Generated\Applications;


class ApplicationCredentials extends \Okta\Resource\AbstractResource
{
    const SIGNING = 'signing';
    const USER_NAME_TEMPLATE = 'userNameTemplate';



    /**
     * Get the signing.
     *
     * @return \Okta\Applications\ApplicationCredentialsSigning
     */
    public function getSigning(array $options = []): \Okta\Applications\ApplicationCredentialsSigning
    {
        return $this->getResourceProperty(
            self::SIGNING,
            \Okta\Applications\ApplicationCredentialsSigning::class,
            $options
        );
    }


    /**
     * Set the signing.
     *
     * @param \Okta\Applications\ApplicationCredentialsSigning $signing The ApplicationCredentialsSigning instance.
     * @return self
     */
    public function setSigning(\Okta\Applications\ApplicationCredentialsSigning $signing)
    {
        $this->setResourceProperty(
            self::SIGNING,
            $signing
        );
        
        return $this;
    }

    /**
     * Get the userNameTemplate.
     *
     * @return \Okta\Applications\ApplicationCredentialsUsernameTemplate
     */
    public function getUserNameTemplate(array $options = []): \Okta\Applications\ApplicationCredentialsUsernameTemplate
    {
        return $this->getResourceProperty(
            self::USER_NAME_TEMPLATE,
            \Okta\Applications\ApplicationCredentialsUsernameTemplate::class,
            $options
        );
    }


    /**
     * Set the userNameTemplate.
     *
     * @param \Okta\Applications\ApplicationCredentialsUsernameTemplate $userNameTemplate The ApplicationCredentialsUsernameTemplate instance.
     * @return self
     */
    public function setUserNameTemplate(\Okta\Applications\ApplicationCredentialsUsernameTemplate $userNameTemplate)
    {
        $this->setResourceProperty(
            self::USER_NAME_TEMPLATE,
            $userNameTemplate
        );
        
        return $this;
    }
}
