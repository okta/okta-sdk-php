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

class PasswordPolicyDelegationSettings extends \Okta\Resource\AbstractResource
{
    const OPTIONS = 'options';



    /**
     * Get the options.
     *
     * @return \Okta\Policies\PasswordPolicyDelegationSettingsOptions
     */
    public function getOptions(array $options = []): \Okta\Policies\PasswordPolicyDelegationSettingsOptions
    {
        return $this->getResourceProperty(
            self::OPTIONS,
            \Okta\Policies\PasswordPolicyDelegationSettingsOptions::class,
            $options
        );
    }


    /**
     * Set the options.
     *
     * @param \Okta\Policies\PasswordPolicyDelegationSettingsOptions $options The PasswordPolicyDelegationSettingsOptions instance.
     * @return self
     */
    public function setOptions(\Okta\Policies\PasswordPolicyDelegationSettingsOptions $options)
    {
        $this->setResourceProperty(
            self::OPTIONS,
            $options
        );

        return $this;
    }
}
