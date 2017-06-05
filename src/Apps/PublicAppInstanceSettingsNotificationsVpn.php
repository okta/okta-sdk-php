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

class PublicAppInstanceSettingsNotificationsVpn extends AbstractResource
{
    const HELP_URL = 'helpUrl';
    const MESSAGE = 'message';
    const NETWORK = 'network';


    /**
     * Get the helpUrl.
     *
     * @return string
     */
    public function getHelpUrl(): string
    {
        return $this->getProperty(self::HELP_URL);
    }
    
    /**
     * Get the message.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->getProperty(self::MESSAGE);
    }
    
    /**
     * Get the network.
     *
     * @return PublicAppInstanceSettingsNotificationsVpnNetwork
     */
    public function getNetwork(array $options = []): PublicAppInstanceSettingsNotificationsVpnNetwork
    {
        return $this->getResourceProperty(
                        self::NETWORK,
                        PublicAppInstanceSettingsNotificationsVpnNetwork::class,
                        $options
                    );
    }

    /**
     * Set the network.
     *
     * @param PublicAppInstanceSettingsNotificationsVpnNetwork $network The PublicAppInstanceSettingsNotificationsVpnNetwork instance.
     * @return self
     */
    public function setNetwork(PublicAppInstanceSettingsNotificationsVpnNetwork $network)
    {
        $this->setResourceProperty(
                        self::NETWORK,
                        $network
                    );
        
        return $this;
    }
    
}
