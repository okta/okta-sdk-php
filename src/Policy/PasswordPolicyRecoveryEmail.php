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

class PasswordPolicyRecoveryEmail extends \Okta\Resource\AbstractResource
{
    const STATUS = 'status';
    const PROPERTIES = 'properties';

    /**
     * Set the Properties.
     *
     * @param mixed $properties The properties to set.
     * @return self
     */
    function setProperties(\Okta\Policy\PasswordPolicyRecoveryEmailProperties $properties) : PasswordPolicyRecoveryEmail
    {
        $this->setResourceProperty(
            self::PROPERTIES,
            $properties
        );
    
        return $this;
    }

    /**
     * Get the Status.
     *
     * @param mixed $status The status to set.
     * @return string
     */
    function getStatus() : string
    {
        return $this->getProperty(
            self::STATUS
        );
    }
    
    /**
     * Get the Properties.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyRecoveryEmailProperties
     */
    function getProperties(array $options = []) : \Okta\Policy\PasswordPolicyRecoveryEmailProperties
    {
        return $this->getResourceProperty(
            self::PROPERTIES,
            \Okta\Policy\PasswordPolicyRecoveryEmailProperties::class,
            $options
        );
    }


}