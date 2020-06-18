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

namespace Okta\Policies;


class PasswordPolicy extends \Okta\Resource\AbstractResource
{
    const SETTINGS = 'settings';
    const CONDITIONS = 'conditions';



    /**
     * Get the settings.
     *
     * @return \Okta\Policies\PasswordPolicySettings
     */
    public function getSettings(array $options = []): \Okta\Policies\PasswordPolicySettings
    {
        return $this->getResourceProperty(
            self::SETTINGS,
            \Okta\Policies\PasswordPolicySettings::class,
            $options
        );
    }


    /**
     * Set the settings.
     *
     * @param \Okta\Policies\PasswordPolicySettings $settings The PasswordPolicySettings instance.
     * @return self
     */
    public function setSettings(\Okta\Policies\PasswordPolicySettings $settings)
    {
        $this->setResourceProperty(
            self::SETTINGS,
            $settings
        );

        return $this;
    }

    /**
     * Get the conditions.
     *
     * @return \Okta\Policies\PasswordPolicyConditions
     */
    public function getConditions(array $options = []): \Okta\Policies\PasswordPolicyConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\Policies\PasswordPolicyConditions::class,
            $options
        );
    }


    /**
     * Set the conditions.
     *
     * @param \Okta\Policies\PasswordPolicyConditions $conditions The PasswordPolicyConditions instance.
     * @return self
     */
    public function setConditions(\Okta\Policies\PasswordPolicyConditions $conditions)
    {
        $this->setResourceProperty(
            self::CONDITIONS,
            $conditions
        );

        return $this;
    }
}
