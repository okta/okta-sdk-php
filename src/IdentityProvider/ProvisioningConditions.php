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

class ProvisioningConditions extends \Okta\Resource\AbstractResource
{
    const SUSPENDED = 'suspended';
    const DEPROVISIONED = 'deprovisioned';


    /**
     * Set the Suspended.
     *
     * @param mixed $suspended The suspended to set.
     * @return self
     */
    function setSuspended(\Okta\IdentityProvider\ProvisioningSuspendedCondition $suspended) : ProvisioningConditions
    {
        $this->setResourceProperty(
            self::SUSPENDED,
            $suspended
        );
    
        return $this;
    }

    /**
     * Set the Deprovisioned.
     *
     * @param mixed $deprovisioned The deprovisioned to set.
     * @return self
     */
    function setDeprovisioned(\Okta\IdentityProvider\ProvisioningDeprovisionedCondition $deprovisioned) : ProvisioningConditions
    {
        $this->setResourceProperty(
            self::DEPROVISIONED,
            $deprovisioned
        );
    
        return $this;
    }

    /**
     * Get the Suspended.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProvisioningSuspendedCondition
     */
    function getSuspended(array $options = []) : \Okta\IdentityProvider\ProvisioningSuspendedCondition
    {
        return $this->getResourceProperty(
            self::SUSPENDED,
            \Okta\IdentityProvider\ProvisioningSuspendedCondition::class,
            $options
        );
    }

    /**
     * Get the Deprovisioned.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProvisioningDeprovisionedCondition
     */
    function getDeprovisioned(array $options = []) : \Okta\IdentityProvider\ProvisioningDeprovisionedCondition
    {
        return $this->getResourceProperty(
            self::DEPROVISIONED,
            \Okta\IdentityProvider\ProvisioningDeprovisionedCondition::class,
            $options
        );
    }


}