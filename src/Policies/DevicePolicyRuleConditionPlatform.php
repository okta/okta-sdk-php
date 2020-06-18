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

class DevicePolicyRuleConditionPlatform extends \Okta\Resource\AbstractResource
{
    const TYPES = 'types';
    const SUPPORTED_MDM_FRAMEWORKS = 'supportedMDMFrameworks';



    /**
     * Get the types.
     *
     * @return array
     */
    public function getTypes()
    {
        return $this->getProperty(self::TYPES);
    }

    /**
    * Set the types.
    *
    * @param mixed $types The value to set.
    * @return self
    */
    public function setTypes($types)
    {
        $this->setProperty(
            self::TYPES,
            $types
        );

        return $this;
    }

    /**
     * Get the supportedMDMFrameworks.
     *
     * @return array
     */
    public function getSupportedMdmFrameworks()
    {
        return $this->getProperty(self::SUPPORTED_MDM_FRAMEWORKS);
    }

    /**
    * Set the supportedMDMFrameworks.
    *
    * @param mixed $supportedMDMFrameworks The value to set.
    * @return self
    */
    public function setSupportedMdmFrameworks($supportedMDMFrameworks)
    {
        $this->setProperty(
            self::SUPPORTED_MDM_FRAMEWORKS,
            $supportedMDMFrameworks
        );

        return $this;
    }
}
