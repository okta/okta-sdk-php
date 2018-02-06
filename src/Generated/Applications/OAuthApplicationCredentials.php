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


class OAuthApplicationCredentials extends \Okta\Applications\ApplicationCredentials
{
    const OAUTH_CLIENT = 'oauthClient';



    /**
     * Get the oauthClient.
     *
     * @return \Okta\Applications\ApplicationCredentialsOAuthClient
     */
    public function getOauthClient(array $options = []): \Okta\Applications\ApplicationCredentialsOAuthClient
    {
        return $this->getResourceProperty(
            self::OAUTH_CLIENT,
            \Okta\Applications\ApplicationCredentialsOAuthClient::class,
            $options
        );
    }


    /**
     * Set the oauthClient.
     *
     * @param \Okta\Applications\ApplicationCredentialsOAuthClient $oauthClient The ApplicationCredentialsOAuthClient instance.
     * @return self
     */
    public function setOauthClient(\Okta\Applications\ApplicationCredentialsOAuthClient $oauthClient)
    {
        $this->setResourceProperty(
            self::OAUTH_CLIENT,
            $oauthClient
        );
        
        return $this;
    }
}
