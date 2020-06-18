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

namespace Okta\IdentityProviders;

class ProvisioningConditions extends \Okta\Resource\AbstractResource
{
    const SUSPENDED = 'suspended';
    const DEPROVISIONED = 'deprovisioned';



    /**
     * Get the suspended.
     *
     * @return \Okta\IdentityProviders\ProvisioningSuspendedCondition
     */
    public function getSuspended(array $options = []): \Okta\IdentityProviders\ProvisioningSuspendedCondition
    {
        return $this->getResourceProperty(
            self::SUSPENDED,
            \Okta\IdentityProviders\ProvisioningSuspendedCondition::class,
            $options
        );
    }


    /**
     * Set the suspended.
     *
     * @param \Okta\IdentityProviders\ProvisioningSuspendedCondition $suspended The ProvisioningSuspendedCondition instance.
     * @return self
     */
    public function setSuspended(\Okta\IdentityProviders\ProvisioningSuspendedCondition $suspended)
    {
        $this->setResourceProperty(
            self::SUSPENDED,
            $suspended
        );

        return $this;
    }

    /**
     * Get the deprovisioned.
     *
     * @return \Okta\IdentityProviders\ProvisioningDeprovisionedCondition
     */
    public function getDeprovisioned(array $options = []): \Okta\IdentityProviders\ProvisioningDeprovisionedCondition
    {
        return $this->getResourceProperty(
            self::DEPROVISIONED,
            \Okta\IdentityProviders\ProvisioningDeprovisionedCondition::class,
            $options
        );
    }


    /**
     * Set the deprovisioned.
     *
     * @param \Okta\IdentityProviders\ProvisioningDeprovisionedCondition $deprovisioned The ProvisioningDeprovisionedCondition instance.
     * @return self
     */
    public function setDeprovisioned(\Okta\IdentityProviders\ProvisioningDeprovisionedCondition $deprovisioned)
    {
        $this->setResourceProperty(
            self::DEPROVISIONED,
            $deprovisioned
        );

        return $this;
    }
}
