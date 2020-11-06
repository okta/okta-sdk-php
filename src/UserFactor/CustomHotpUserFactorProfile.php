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

class CustomHotpUserFactorProfile extends \Okta\Resource\AbstractResource
{
    const SHARED_SECRET = 'sharedSecret';


    /**
     * Set the SharedSecret.
     *
     * @param mixed $sharedSecret The sharedSecret to set.
     * @return self
     */
    function setSharedSecret($sharedSecret) : CustomHotpUserFactorProfile
    {
        $this->setProperty(
            self::SHARED_SECRET,
            $sharedSecret
        );
    
        return $this;
    }
    
    /**
     * Get the SharedSecret.
     *
     * @param mixed $sharedSecret The sharedSecret to set.
     * @return string
     */
    function getSharedSecret() : string
    {
        return $this->getProperty(
            self::SHARED_SECRET,
        );
    }
    

}