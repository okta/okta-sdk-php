<?php
/*********************************************************************************/
/**   Copyright 2017 - Present Okta, Inc.                                       **/
/**                                                                             **/
/**   Licensed under the Apache License, Version 2.0 (the "License");           **/
/**   you may not use this file except in compliance with the License.          **/
/**   You may obtain a copy of the License at                                   **/
/**                                                                             **/
/**        http://www.apache.org/licenses/LICENSE-2.0                           **/
/**                                                                             **/
/**   Unless required by applicable law or agreed to in writing, software       **/
/**   distributed under the License is distributed on an "AS IS" BASIS,         **/
/**   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  **/
/**   See the License for the specific language governing permissions and       **/
/**   limitations under the License.                                            **/
/*********************************************************************************/

/************************************************/
/** This file is auto-generated.  Do Not Edit! **/
/************************************************/

namespace Okta\IdentityProvider;

class Provisioning extends \Okta\Resource\AbstractResource
{
    const ACTION = 'action';
    const GROUPS = 'groups';
    const CONDITIONS = 'conditions';
    const PROFILE_MASTER = 'profileMaster';

    /**
     * Set the Action.
     *
     * @param mixed $action The action to set.
     * @return self
     */
    function setAction($action) : Provisioning
    {
        $this->setProperty(
            self::ACTION,
            $action
        );
    
        return $this;
    }
    
    /**
     * Set the Groups.
     *
     * @param mixed $groups The groups to set.
     * @return self
     */
    function setGroups(\Okta\IdentityProvider\ProvisioningGroups $groups) : Provisioning
    {
        $this->setResourceProperty(
            self::GROUPS,
            $groups
        );
    
        return $this;
    }

    /**
     * Set the Conditions.
     *
     * @param mixed $conditions The conditions to set.
     * @return self
     */
    function setConditions(\Okta\IdentityProvider\ProvisioningConditions $conditions) : Provisioning
    {
        $this->setResourceProperty(
            self::CONDITIONS,
            $conditions
        );
    
        return $this;
    }

    /**
     * Set the ProfileMaster.
     *
     * @param mixed $profileMaster The profileMaster to set.
     * @return self
     */
    function setProfileMaster($profileMaster) : Provisioning
    {
        $this->setProperty(
            self::PROFILE_MASTER,
            $profileMaster
        );
    
        return $this;
    }
    
    /**
     * Get the Action.
     *
     * @param mixed $action The action to set.
     * @return string
     */
    function getAction() : string
    {
        return $this->getProperty(
            self::ACTION
        );
    }
    
    /**
     * Get the Groups.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProvisioningGroups
     */
    function getGroups(array $options = []) : \Okta\IdentityProvider\ProvisioningGroups
    {
        return $this->getResourceProperty(
            self::GROUPS,
            \Okta\IdentityProvider\ProvisioningGroups::class,
            $options
        );
    }

    /**
     * Get the Conditions.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProvisioningConditions
     */
    function getConditions(array $options = []) : \Okta\IdentityProvider\ProvisioningConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\IdentityProvider\ProvisioningConditions::class,
            $options
        );
    }

    /**
     * Get the ProfileMaster.
     *
     * @param mixed $profileMaster The profileMaster to set.
     * @return bool
     */
    function getProfileMaster() : bool
    {
        return $this->getProperty(
            self::PROFILE_MASTER
        );
    }
    

}