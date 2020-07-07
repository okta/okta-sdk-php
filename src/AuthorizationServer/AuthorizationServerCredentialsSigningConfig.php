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

namespace Okta\AuthorizationServer;

class AuthorizationServerCredentialsSigningConfig extends \Okta\Resource\AbstractResource
{
    const KID = 'kid';
    const USE = 'use';
    const LAST_ROTATED = 'lastRotated';
    const NEXT_ROTATION = 'nextRotation';
    const ROTATION_MODE = 'rotationMode';


    /**
     * Set the Kid.
     *
     * @param mixed $kid The kid to set.
     * @return self
     */
    function setKid($kid) : AuthorizationServerCredentialsSigningConfig
    {
        $this->setProperty(
            self::KID,
            $kid
        );
    
        return $this;
    }
    
    /**
     * Set the Use.
     *
     * @param mixed $use The use to set.
     * @return self
     */
    function setUse($use) : AuthorizationServerCredentialsSigningConfig
    {
        $this->setProperty(
            self::USE,
            $use
        );
    
        return $this;
    }
    
    /**
     * Set the RotationMode.
     *
     * @param mixed $rotationMode The rotationMode to set.
     * @return self
     */
    function setRotationMode($rotationMode) : AuthorizationServerCredentialsSigningConfig
    {
        $this->setProperty(
            self::ROTATION_MODE,
            $rotationMode
        );
    
        return $this;
    }
    
    /**
     * Get the Kid.
     *
     * @param mixed $kid The kid to set.
     * @return string
     */
    function getKid() : string
    {
        return $this->getProperty(
            self::KID,
        );
    }
    
    /**
     * Get the Use.
     *
     * @return \Okta\AuthorizationServer\AuthorizationServerCredentialsUse
     */
    function getUse() : \Okta\AuthorizationServer\AuthorizationServerCredentialsUse
    {
        return $this->getEnumProperty(
            self::USE,
            \Okta\AuthorizationServer\AuthorizationServerCredentialsUse::class,
        );
    }

    /**
     * Get the LastRotated.
     *
     * @param mixed $lastRotated The lastRotated to set.
     * @return \Carbon\Carbon
     */
    function getLastRotated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_ROTATED
        );
    
        return $this;
    }

    /**
     * Get the NextRotation.
     *
     * @param mixed $nextRotation The nextRotation to set.
     * @return \Carbon\Carbon
     */
    function getNextRotation() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::NEXT_ROTATION
        );
    
        return $this;
    }

    /**
     * Get the RotationMode.
     *
     * @return \Okta\AuthorizationServer\AuthorizationServerCredentialsRotationMode
     */
    function getRotationMode() : \Okta\AuthorizationServer\AuthorizationServerCredentialsRotationMode
    {
        return $this->getEnumProperty(
            self::ROTATION_MODE,
            \Okta\AuthorizationServer\AuthorizationServerCredentialsRotationMode::class,
        );
    }


}