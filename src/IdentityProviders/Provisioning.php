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

namespace Okta\IdentityProviders;

class Provisioning extends \Okta\Resource\AbstractResource
{
    const ACTION = 'action';
    const GROUPS = 'groups';
    const CONDITIONS = 'conditions';
    const PROFILE_MASTER = 'profileMaster';


    /**
     * Get the action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->getProperty(self::ACTION);
    }

    /**
    * Set the action.
    *
    * @param mixed $action The value to set.
    * @return self
    */
    public function setAction($action)
    {
        $this->setProperty(
            self::ACTION,
            $action
        );

        return $this;
    }

    /**
     * Get the groups.
     *
     * @return \Okta\IdentityProviders\ProvisioningGroups
     */
    public function getGroups(array $options = []): \Okta\IdentityProviders\ProvisioningGroups
    {
        return $this->getResourceProperty(
            self::GROUPS,
            \Okta\IdentityProviders\ProvisioningGroups::class,
            $options
        );
    }

    /**
     * Set the groups.
     *
     * @param \Okta\IdentityProviders\ProvisioningGroups $groups The ProvisioningGroups instance.
     * @return self
     */
    public function setGroups(\Okta\IdentityProviders\ProvisioningGroups $groups)
    {
        $this->setResourceProperty(
            self::GROUPS,
            $groups
        );

        return $this;
    }

    /**
     * Get the conditions.
     *
     * @return \Okta\IdentityProviders\ProvisioningConditions
     */
    public function getConditions(array $options = []): \Okta\IdentityProviders\ProvisioningConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\IdentityProviders\ProvisioningConditions::class,
            $options
        );
    }

    /**
     * Set the conditions.
     *
     * @param \Okta\IdentityProviders\ProvisioningConditions $conditions The ProvisioningConditions instance.
     * @return self
     */
    public function setConditions(\Okta\IdentityProviders\ProvisioningConditions $conditions)
    {
        $this->setResourceProperty(
            self::CONDITIONS,
            $conditions
        );

        return $this;
    }

    /**
     * Get the profileMaster.
     *
     * @return bool
     */
    public function getProfileMaster()
    {
        return $this->getProperty(self::PROFILE_MASTER);
    }

    /**
    * Set the profileMaster.
    *
    * @param mixed $profileMaster The value to set.
    * @return self
    */
    public function setProfileMaster($profileMaster)
    {
        $this->setProperty(
            self::PROFILE_MASTER,
            $profileMaster
        );

        return $this;
    }
}
