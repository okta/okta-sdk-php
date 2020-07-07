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

namespace Okta\Application;

class OpenIdConnectApplicationSettings extends \Okta\Application\ApplicationSettings
{
    const OAUTH_CLIENT = 'oauthClient';


    /**
     * Set the OauthClient.
     *
     * @param mixed $oauthClient The oauthClient to set.
     * @return self
     */
    function setOauthClient(\Okta\Application\OpenIdConnectApplicationSettingsClient $oauthClient) : OpenIdConnectApplicationSettings
    {
        $this->setResourceProperty(
            self::OAUTH_CLIENT,
            $oauthClient
        );
    
        return $this;
    }

    /**
     * Get the OauthClient.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\OpenIdConnectApplicationSettingsClient
     */
    function getOauthClient(array $options = []) : \Okta\Application\OpenIdConnectApplicationSettingsClient
    {
        return $this->getResourceProperty(
            self::OAUTH_CLIENT,
            \Okta\Application\OpenIdConnectApplicationSettingsClient::class,
            $options
        );
    }


}