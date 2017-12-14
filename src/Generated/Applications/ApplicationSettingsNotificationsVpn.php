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


class ApplicationSettingsNotificationsVpn extends \Okta\Resource\AbstractResource
{
    const HELP_URL = 'helpUrl';
    const MESSAGE = 'message';
    const NETWORK = 'network';



    /**
     * Get the helpUrl.
     *
     * @return string
     */
    public function getHelpUrl()
    {
        return $this->getProperty(self::HELP_URL);
    }

    /**
    * Set the helpUrl.
    *
    * @param mixed $helpUrl The value to set.
    * @return self
    */
    public function setHelpUrl($helpUrl)
    {
        $this->setProperty(
            self::HELP_URL,
            $helpUrl
        );

        return $this;
    }

    /**
     * Get the message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->getProperty(self::MESSAGE);
    }

    /**
    * Set the message.
    *
    * @param mixed $message The value to set.
    * @return self
    */
    public function setMessage($message)
    {
        $this->setProperty(
            self::MESSAGE,
            $message
        );

        return $this;
    }

    /**
     * Get the network.
     *
     * @return \Okta\Applications\ApplicationSettingsNotificationsVpnNetwork
     */
    public function getNetwork(array $options = []): \Okta\Applications\ApplicationSettingsNotificationsVpnNetwork
    {
        return $this->getResourceProperty(
            self::NETWORK,
            \Okta\Applications\ApplicationSettingsNotificationsVpnNetwork::class,
            $options
        );
    }


    /**
     * Set the network.
     *
     * @param \Okta\Applications\ApplicationSettingsNotificationsVpnNetwork $network The ApplicationSettingsNotificationsVpnNetwork instance.
     * @return self
     */
    public function setNetwork(\Okta\Applications\ApplicationSettingsNotificationsVpnNetwork $network)
    {
        $this->setResourceProperty(
            self::NETWORK,
            $network
        );
        
        return $this;
    }
}
