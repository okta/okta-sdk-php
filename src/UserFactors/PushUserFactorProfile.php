<?php
/*******************************************************************************
 * Copyright 2017-Present Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\UserFactors;

class PushUserFactorProfile extends \Okta\Resource\AbstractResource
{
    const NAME = 'name';
    const VERSION = 'version';
    const PLATFORM = 'platform';
    const DEVICE_TYPE = 'deviceType';
    const DEVICE_TOKEN = 'deviceToken';
    const CREDENTIAL_ID = 'credentialId';


    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->getProperty(self::NAME);
    }

    /**
    * Set the name.
    *
    * @param mixed $name The value to set.
    * @return self
    */
    public function setName($name)
    {
        $this->setProperty(
            self::NAME,
            $name
        );

        return $this;
    }

    /**
     * Get the version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->getProperty(self::VERSION);
    }

    /**
    * Set the version.
    *
    * @param mixed $version The value to set.
    * @return self
    */
    public function setVersion($version)
    {
        $this->setProperty(
            self::VERSION,
            $version
        );

        return $this;
    }

    /**
     * Get the platform.
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->getProperty(self::PLATFORM);
    }

    /**
    * Set the platform.
    *
    * @param mixed $platform The value to set.
    * @return self
    */
    public function setPlatform($platform)
    {
        $this->setProperty(
            self::PLATFORM,
            $platform
        );

        return $this;
    }

    /**
     * Get the deviceType.
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->getProperty(self::DEVICE_TYPE);
    }

    /**
    * Set the deviceType.
    *
    * @param mixed $deviceType The value to set.
    * @return self
    */
    public function setDeviceType($deviceType)
    {
        $this->setProperty(
            self::DEVICE_TYPE,
            $deviceType
        );

        return $this;
    }

    /**
     * Get the deviceToken.
     *
     * @return string
     */
    public function getDeviceToken()
    {
        return $this->getProperty(self::DEVICE_TOKEN);
    }

    /**
    * Set the deviceToken.
    *
    * @param mixed $deviceToken The value to set.
    * @return self
    */
    public function setDeviceToken($deviceToken)
    {
        $this->setProperty(
            self::DEVICE_TOKEN,
            $deviceToken
        );

        return $this;
    }

    /**
     * Get the credentialId.
     *
     * @return string
     */
    public function getCredentialId()
    {
        return $this->getProperty(self::CREDENTIAL_ID);
    }

    /**
    * Set the credentialId.
    *
    * @param mixed $credentialId The value to set.
    * @return self
    */
    public function setCredentialId($credentialId)
    {
        $this->setProperty(
            self::CREDENTIAL_ID,
            $credentialId
        );

        return $this;
    }
}
