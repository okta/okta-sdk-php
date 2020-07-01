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

class PasswordPolicy extends \Okta\Policy\Policy
{
    const SETTINGS = 'settings';
    const CONDITIONS = 'conditions';

    /**
     * Set the Settings.
     *
     * @param mixed $settings The settings to set.
     * @return self
     */
    function setSettings(\Okta\Policy\PasswordPolicySettings $settings) : PasswordPolicy
    {
        $this->setResourceProperty(
            self::SETTINGS,
            $settings
        );
    
        return $this;
    }

    /**
     * Set the Conditions.
     *
     * @param mixed $conditions The conditions to set.
     * @return self
     */
    function setConditions(\Okta\Policy\PasswordPolicyConditions $conditions) : PasswordPolicy
    {
        $this->setResourceProperty(
            self::CONDITIONS,
            $conditions
        );
    
        return $this;
    }

    /**
     * Get the Settings.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicySettings
     */
    function getSettings(array $options = []) : \Okta\Policy\PasswordPolicySettings
    {
        return $this->getResourceProperty(
            self::SETTINGS,
            \Okta\Policy\PasswordPolicySettings::class,
            $options
        );
    }

    /**
     * Get the Conditions.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyConditions
     */
    function getConditions(array $options = []) : \Okta\Policy\PasswordPolicyConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\Policy\PasswordPolicyConditions::class,
            $options
        );
    }


}