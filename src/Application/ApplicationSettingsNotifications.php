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

class ApplicationSettingsNotifications extends \Okta\Resource\AbstractResource
{
    const VPN = 'vpn';


    /**
     * Set the Vpn.
     *
     * @param mixed $vpn The vpn to set.
     * @return self
     */
    function setVpn(\Okta\Application\ApplicationSettingsNotificationsVpn $vpn) : ApplicationSettingsNotifications
    {
        $this->setResourceProperty(
            self::VPN,
            $vpn
        );
    
        return $this;
    }

    /**
     * Get the Vpn.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\ApplicationSettingsNotificationsVpn
     */
    function getVpn(array $options = []) : \Okta\Application\ApplicationSettingsNotificationsVpn
    {
        return $this->getResourceProperty(
            self::VPN,
            \Okta\Application\ApplicationSettingsNotificationsVpn::class,
            $options
        );
    }


}