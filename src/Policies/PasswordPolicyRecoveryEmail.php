<?php
/*******************************************************************************
 * Copyright 2017-Present Okta, Inc.
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

class PasswordPolicyRecoveryEmail extends \Okta\Resource\AbstractResource
{
    const STATUS = 'status';
    const PROPERTIES = 'properties';


    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
     * Get the properties.
     *
     * @return \Okta\Policies\PasswordPolicyRecoveryEmailProperties
     */
    public function getProperties(array $options = []): \Okta\Policies\PasswordPolicyRecoveryEmailProperties
    {
        return $this->getResourceProperty(
            self::PROPERTIES,
            \Okta\Policies\PasswordPolicyRecoveryEmailProperties::class,
            $options
        );
    }

    /**
     * Set the properties.
     *
     * @param \Okta\Policies\PasswordPolicyRecoveryEmailProperties $properties The PasswordPolicyRecoveryEmailProperties instance.
     * @return self
     */
    public function setProperties(\Okta\Policies\PasswordPolicyRecoveryEmailProperties $properties)
    {
        $this->setResourceProperty(
            self::PROPERTIES,
            $properties
        );

        return $this;
    }
}
