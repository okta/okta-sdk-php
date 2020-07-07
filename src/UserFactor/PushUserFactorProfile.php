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

class PushUserFactorProfile extends \Okta\Resource\AbstractResource
{
    const NAME = 'name';
    const VERSION = 'version';
    const PLATFORM = 'platform';
    const DEVICE_TYPE = 'deviceType';
    const DEVICE_TOKEN = 'deviceToken';
    const CREDENTIAL_ID = 'credentialId';


    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : PushUserFactorProfile
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Version.
     *
     * @param mixed $version The version to set.
     * @return self
     */
    function setVersion($version) : PushUserFactorProfile
    {
        $this->setProperty(
            self::VERSION,
            $version
        );
    
        return $this;
    }
    
    /**
     * Set the Platform.
     *
     * @param mixed $platform The platform to set.
     * @return self
     */
    function setPlatform($platform) : PushUserFactorProfile
    {
        $this->setProperty(
            self::PLATFORM,
            $platform
        );
    
        return $this;
    }
    
    /**
     * Set the DeviceType.
     *
     * @param mixed $deviceType The deviceType to set.
     * @return self
     */
    function setDeviceType($deviceType) : PushUserFactorProfile
    {
        $this->setProperty(
            self::DEVICE_TYPE,
            $deviceType
        );
    
        return $this;
    }
    
    /**
     * Set the DeviceToken.
     *
     * @param mixed $deviceToken The deviceToken to set.
     * @return self
     */
    function setDeviceToken($deviceToken) : PushUserFactorProfile
    {
        $this->setProperty(
            self::DEVICE_TOKEN,
            $deviceToken
        );
    
        return $this;
    }
    
    /**
     * Set the CredentialId.
     *
     * @param mixed $credentialId The credentialId to set.
     * @return self
     */
    function setCredentialId($credentialId) : PushUserFactorProfile
    {
        $this->setProperty(
            self::CREDENTIAL_ID,
            $credentialId
        );
    
        return $this;
    }
    
    /**
     * Get the Name.
     *
     * @param mixed $name The name to set.
     * @return string
     */
    function getName() : string
    {
        return $this->getProperty(
            self::NAME,
        );
    }
    
    /**
     * Get the Version.
     *
     * @param mixed $version The version to set.
     * @return string
     */
    function getVersion() : string
    {
        return $this->getProperty(
            self::VERSION,
        );
    }
    
    /**
     * Get the Platform.
     *
     * @param mixed $platform The platform to set.
     * @return string
     */
    function getPlatform() : string
    {
        return $this->getProperty(
            self::PLATFORM,
        );
    }
    
    /**
     * Get the DeviceType.
     *
     * @param mixed $deviceType The deviceType to set.
     * @return string
     */
    function getDeviceType() : string
    {
        return $this->getProperty(
            self::DEVICE_TYPE,
        );
    }
    
    /**
     * Get the DeviceToken.
     *
     * @param mixed $deviceToken The deviceToken to set.
     * @return string
     */
    function getDeviceToken() : string
    {
        return $this->getProperty(
            self::DEVICE_TOKEN,
        );
    }
    
    /**
     * Get the CredentialId.
     *
     * @param mixed $credentialId The credentialId to set.
     * @return string
     */
    function getCredentialId() : string
    {
        return $this->getProperty(
            self::CREDENTIAL_ID,
        );
    }
    

}