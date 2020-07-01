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

namespace Okta\UserFactor;

class CallUserFactorProfile extends \Okta\Resource\AbstractResource
{
    const PHONE_NUMBER = 'phoneNumber';
    const PHONE_EXTENSION = 'phoneExtension';

    /**
     * Set the PhoneNumber.
     *
     * @param mixed $phoneNumber The phoneNumber to set.
     * @return self
     */
    function setPhoneNumber($phoneNumber) : CallUserFactorProfile
    {
        $this->setProperty(
            self::PHONE_NUMBER,
            $phoneNumber
        );
    
        return $this;
    }
    
    /**
     * Set the PhoneExtension.
     *
     * @param mixed $phoneExtension The phoneExtension to set.
     * @return self
     */
    function setPhoneExtension($phoneExtension) : CallUserFactorProfile
    {
        $this->setProperty(
            self::PHONE_EXTENSION,
            $phoneExtension
        );
    
        return $this;
    }
    
    /**
     * Get the PhoneNumber.
     *
     * @param mixed $phoneNumber The phoneNumber to set.
     * @return string
     */
    function getPhoneNumber() : string
    {
        return $this->getProperty(
            self::PHONE_NUMBER
        );
    }
    
    /**
     * Get the PhoneExtension.
     *
     * @param mixed $phoneExtension The phoneExtension to set.
     * @return string
     */
    function getPhoneExtension() : string
    {
        return $this->getProperty(
            self::PHONE_EXTENSION
        );
    }
    

}