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


class SamlApplicationSettings extends \Okta\Applications\ApplicationSettings
{
    const SIGN_ON = 'signOn';



    /**
     * Get the signOn.
     *
     * @return \Okta\Applications\SamlApplicationSettingsSignOn
     */
    public function getSignOn(array $options = []): \Okta\Applications\SamlApplicationSettingsSignOn
    {
        return $this->getResourceProperty(
            self::SIGN_ON,
            \Okta\Applications\SamlApplicationSettingsSignOn::class,
            $options
        );
    }


    /**
     * Set the signOn.
     *
     * @param \Okta\Applications\SamlApplicationSettingsSignOn $signOn The SamlApplicationSettingsSignOn instance.
     * @return self
     */
    public function setSignOn(\Okta\Applications\SamlApplicationSettingsSignOn $signOn)
    {
        $this->setResourceProperty(
            self::SIGN_ON,
            $signOn
        );
        
        return $this;
    }
}
