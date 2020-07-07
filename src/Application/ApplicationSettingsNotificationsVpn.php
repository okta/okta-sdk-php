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

class ApplicationSettingsNotificationsVpn extends \Okta\Resource\AbstractResource
{
    const HELP_URL = 'helpUrl';
    const MESSAGE = 'message';
    const NETWORK = 'network';


    /**
     * Set the HelpUrl.
     *
     * @param mixed $helpUrl The helpUrl to set.
     * @return self
     */
    function setHelpUrl($helpUrl) : ApplicationSettingsNotificationsVpn
    {
        $this->setProperty(
            self::HELP_URL,
            $helpUrl
        );
    
        return $this;
    }
    
    /**
     * Set the Message.
     *
     * @param mixed $message The message to set.
     * @return self
     */
    function setMessage($message) : ApplicationSettingsNotificationsVpn
    {
        $this->setProperty(
            self::MESSAGE,
            $message
        );
    
        return $this;
    }
    
    /**
     * Set the Network.
     *
     * @param mixed $network The network to set.
     * @return self
     */
    function setNetwork(\Okta\Application\ApplicationSettingsNotificationsVpnNetwork $network) : ApplicationSettingsNotificationsVpn
    {
        $this->setResourceProperty(
            self::NETWORK,
            $network
        );
    
        return $this;
    }

    /**
     * Get the HelpUrl.
     *
     * @param mixed $helpUrl The helpUrl to set.
     * @return string
     */
    function getHelpUrl() : string
    {
        return $this->getProperty(
            self::HELP_URL,
        );
    }
    
    /**
     * Get the Message.
     *
     * @param mixed $message The message to set.
     * @return string
     */
    function getMessage() : string
    {
        return $this->getProperty(
            self::MESSAGE,
        );
    }
    
    /**
     * Get the Network.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\ApplicationSettingsNotificationsVpnNetwork
     */
    function getNetwork(array $options = []) : \Okta\Application\ApplicationSettingsNotificationsVpnNetwork
    {
        return $this->getResourceProperty(
            self::NETWORK,
            \Okta\Application\ApplicationSettingsNotificationsVpnNetwork::class,
            $options
        );
    }


}