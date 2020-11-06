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

namespace Okta\Application;

class OpenIdConnectApplicationSettingsRefreshToken extends \Okta\Resource\AbstractResource
{
    const LEEWAY = 'leeway';
    const ROTATION_TYPE = 'rotation_type';


    /**
     * Set the Leeway.
     *
     * @param mixed $leeway The leeway to set.
     * @return self
     */
    function setLeeway($leeway) : OpenIdConnectApplicationSettingsRefreshToken
    {
        $this->setProperty(
            self::LEEWAY,
            $leeway
        );
    
        return $this;
    }
    
    /**
     * Set the RotationType.
     *
     * @return self
     */
    function setRotationType(\Okta\Application\OpenIdConnectRefreshTokenRotationType $rotation_type) : OpenIdConnectApplicationSettingsRefreshToken
    {
        $this->setEnumProperty(
            self::ROTATION_TYPE,
            $rotation_type
        );
    
        return $this;
    }

    /**
     * Get the Leeway.
     *
     * @param mixed $leeway The leeway to set.
     * @return int
     */
    function getLeeway() : int
    {
        return $this->getProperty(
            self::LEEWAY,
        );
    }
    
    /**
     * Get the RotationType.
     *
     * @return \Okta\Application\OpenIdConnectRefreshTokenRotationType
     */
    function getRotationType() : \Okta\Application\OpenIdConnectRefreshTokenRotationType
    {
        return $this->getEnumProperty(
            self::ROTATION_TYPE,
            \Okta\Application\OpenIdConnectRefreshTokenRotationType::class,
        );
    }


}