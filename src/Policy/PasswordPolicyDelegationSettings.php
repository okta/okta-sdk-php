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

class PasswordPolicyDelegationSettings extends \Okta\Resource\AbstractResource
{
    const OPTIONS = 'options';

    /**
     * Set the Options.
     *
     * @param mixed $options The options to set.
     * @return self
     */
    function setOptions(\Okta\Policy\PasswordPolicyDelegationSettingsOptions $options) : PasswordPolicyDelegationSettings
    {
        $this->setResourceProperty(
            self::OPTIONS,
            $options
        );
    
        return $this;
    }

    /**
     * Get the Options.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyDelegationSettingsOptions
     */
    function getOptions(array $options = []) : \Okta\Policy\PasswordPolicyDelegationSettingsOptions
    {
        return $this->getResourceProperty(
            self::OPTIONS,
            \Okta\Policy\PasswordPolicyDelegationSettingsOptions::class,
            $options
        );
    }


}