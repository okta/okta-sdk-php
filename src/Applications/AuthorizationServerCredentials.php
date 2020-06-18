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

namespace Okta\Applications;

class AuthorizationServerCredentials extends \Okta\Resource\AbstractResource
{
    const SIGNING = 'signing';



    /**
     * Get the signing.
     *
     * @return \Okta\AuthorizationServers\AuthorizationServerCredentialsSigningConfig
     */
    public function getSigning(array $options = []): \Okta\AuthorizationServers\AuthorizationServerCredentialsSigningConfig
    {
        return $this->getResourceProperty(
            self::SIGNING,
            \Okta\AuthorizationServers\AuthorizationServerCredentialsSigningConfig::class,
            $options
        );
    }


    /**
     * Set the signing.
     *
     * @param \Okta\AuthorizationServers\AuthorizationServerCredentialsSigningConfig $signing The AuthorizationServerCredentialsSigningConfig instance.
     * @return self
     */
    public function setSigning(\Okta\AuthorizationServers\AuthorizationServerCredentialsSigningConfig $signing)
    {
        $this->setResourceProperty(
            self::SIGNING,
            $signing
        );

        return $this;
    }
}
