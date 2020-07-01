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

namespace Okta\User;

class UserActivationToken extends \Okta\Resource\AbstractResource
{
    const ACTIVATION_URL = 'activationUrl';
    const ACTIVATION_TOKEN = 'activationToken';

    /**
     * Get the ActivationUrl.
     *
     * @param mixed $activationUrl The activationUrl to set.
     * @return string
     */
    function getActivationUrl() : string
    {
        return $this->getProperty(
            self::ACTIVATION_URL
        );
    }
    
    /**
     * Get the ActivationToken.
     *
     * @param mixed $activationToken The activationToken to set.
     * @return string
     */
    function getActivationToken() : string
    {
        return $this->getProperty(
            self::ACTIVATION_TOKEN
        );
    }
    

}