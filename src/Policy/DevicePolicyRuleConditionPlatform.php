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

namespace Okta\Policy;

class DevicePolicyRuleConditionPlatform extends \Okta\Resource\AbstractResource
{
    const TYPES = 'types';
    const SUPPORTED_MDM_FRAMEWORKS = 'supportedMDMFrameworks';


    /**
     * Set the Types.
     *
     * @param mixed $types The types to set.
     * @return self
     */
    function setTypes($types) : DevicePolicyRuleConditionPlatform
    {
        $this->setProperty(
            self::TYPES,
            $types
        );
    
        return $this;
    }
    
    /**
     * Set the SupportedMdmFrameworks.
     *
     * @param mixed $supportedMDMFrameworks The supportedMDMFrameworks to set.
     * @return self
     */
    function setSupportedMdmFrameworks($supportedMDMFrameworks) : DevicePolicyRuleConditionPlatform
    {
        $this->setProperty(
            self::SUPPORTED_MDM_FRAMEWORKS,
            $supportedMDMFrameworks
        );
    
        return $this;
    }
    
    /**
     * Get the Types.
     *
     * @param mixed $types The types to set.
     * @return array
     */
    function getTypes() : array
    {
        return $this->getProperty(
            self::TYPES,
        );
    }
    
    /**
     * Get the SupportedMdmFrameworks.
     *
     * @param mixed $supportedMDMFrameworks The supportedMDMFrameworks to set.
     * @return array
     */
    function getSupportedMdmFrameworks() : array
    {
        return $this->getProperty(
            self::SUPPORTED_MDM_FRAMEWORKS,
        );
    }
    

}