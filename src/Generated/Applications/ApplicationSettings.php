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


class ApplicationSettings extends \Okta\Resource\AbstractResource
{
    const APP = 'app';
    const NOTIFICATIONS = 'notifications';



    /**
     * Get the app.
     *
     * @return \Okta\Applications\ApplicationSettingsApplication
     */
    public function getApp(array $options = []): \Okta\Applications\ApplicationSettingsApplication
    {
        return $this->getResourceProperty(
            self::APP,
            \Okta\Applications\ApplicationSettingsApplication::class,
            $options
        );
    }


    /**
     * Set the app.
     *
     * @param \Okta\Applications\ApplicationSettingsApplication $app The ApplicationSettingsApplication instance.
     * @return self
     */
    public function setApp(\Okta\Applications\ApplicationSettingsApplication $app)
    {
        $this->setResourceProperty(
            self::APP,
            $app
        );
        
        return $this;
    }

    /**
     * Get the notifications.
     *
     * @return \Okta\Applications\ApplicationSettingsNotifications
     */
    public function getNotifications(array $options = []): \Okta\Applications\ApplicationSettingsNotifications
    {
        return $this->getResourceProperty(
            self::NOTIFICATIONS,
            \Okta\Applications\ApplicationSettingsNotifications::class,
            $options
        );
    }


    /**
     * Set the notifications.
     *
     * @param \Okta\Applications\ApplicationSettingsNotifications $notifications The ApplicationSettingsNotifications instance.
     * @return self
     */
    public function setNotifications(\Okta\Applications\ApplicationSettingsNotifications $notifications)
    {
        $this->setResourceProperty(
            self::NOTIFICATIONS,
            $notifications
        );
        
        return $this;
    }
}
