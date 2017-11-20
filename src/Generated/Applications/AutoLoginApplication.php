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


class AutoLoginApplication extends \Okta\Applications\Application
{
    const SETTINGS = 'settings';
    const CREDENTIALS = 'credentials';

    /**
     * Get the settings.
     *
     * @return \Okta\Applications\AutoLoginApplicationSettings
     */
    public function getSettings(array $options = []): \Okta\Applications\AutoLoginApplicationSettings
    {
        return $this->getResourceProperty(
            self::SETTINGS,
            \Okta\Applications\AutoLoginApplicationSettings::class,
            $options
        );
    }

    /**
     * Set the settings.
     *
     * @param \Okta\Applications\AutoLoginApplicationSettings $settings The AutoLoginApplicationSettings instance.
     * @return self
     */
    public function setSettings(AutoLoginApplicationSettings $settings)
    {
        $this->setResourceProperty(
            self::SETTINGS,
            $settings
        );
        
        return $this;
    }
    /**
     * Get the credentials.
     *
     * @return \Okta\Applications\SchemeApplicationCredentials
     */
    public function getCredentials(array $options = []): \Okta\Applications\SchemeApplicationCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\Applications\SchemeApplicationCredentials::class,
            $options
        );
    }

    /**
     * Set the credentials.
     *
     * @param \Okta\Applications\SchemeApplicationCredentials $credentials The SchemeApplicationCredentials instance.
     * @return self
     */
    public function setCredentials(SchemeApplicationCredentials $credentials)
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );
        
        return $this;
    }
}
