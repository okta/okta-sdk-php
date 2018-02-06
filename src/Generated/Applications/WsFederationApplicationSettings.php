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


class WsFederationApplicationSettings extends \Okta\Applications\ApplicationSettings
{
    const APP = 'app';



    /**
     * Get the app.
     *
     * @return \Okta\Applications\ApplicationSettingsApplication
     */
    public function getApp(array $options = []): \Okta\Applications\ApplicationSettingsApplication
    {
        return $this->getResourceProperty(
            self::APP,
            \Okta\Applications\WsFederationApplicationSettingsApplication::class,
            $options
        );
    }


    /**
     * Set the app.
     *
     * @param \Okta\Applications\ApplicationSettingsApplication $app The WsFederationApplicationSettingsApplication instance.
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
}
