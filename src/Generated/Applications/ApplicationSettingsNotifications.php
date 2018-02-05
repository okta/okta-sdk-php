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


class ApplicationSettingsNotifications extends \Okta\Resource\AbstractResource
{
    const VPN = 'vpn';



    /**
     * Get the vpn.
     *
     * @return \Okta\Applications\ApplicationSettingsNotificationsVpn
     */
    public function getVpn(array $options = []): \Okta\Applications\ApplicationSettingsNotificationsVpn
    {
        return $this->getResourceProperty(
            self::VPN,
            \Okta\Applications\ApplicationSettingsNotificationsVpn::class,
            $options
        );
    }


    /**
     * Set the vpn.
     *
     * @param \Okta\Applications\ApplicationSettingsNotificationsVpn $vpn The ApplicationSettingsNotificationsVpn instance.
     * @return self
     */
    public function setVpn(\Okta\Applications\ApplicationSettingsNotificationsVpn $vpn)
    {
        $this->setResourceProperty(
            self::VPN,
            $vpn
        );
        
        return $this;
    }
}
