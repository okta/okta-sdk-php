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

class PublicAppInstanceSettingsNotifications extends AbstractResource
{
    const VPN = 'vpn';


    /**
     * Get the vpn.
     *
     * @return PublicAppInstanceSettingsNotificationsVpn
     */
    public function getVpn(array $options = []): PublicAppInstanceSettingsNotificationsVpn
    {
        return $this->getResourceProperty(
                        self::VPN,
                        PublicAppInstanceSettingsNotificationsVpn::class,
                        $options
                    );
    }

    /**
     * Set the vpn.
     *
     * @param PublicAppInstanceSettingsNotificationsVpn $vpn The PublicAppInstanceSettingsNotificationsVpn instance.
     * @return self
     */
    public function setVpn(PublicAppInstanceSettingsNotificationsVpn $vpn)
    {
        $this->setResourceProperty(
                        self::VPN,
                        $vpn
                    );
        
        return $this;
    }
    
}
