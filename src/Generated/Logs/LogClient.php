<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
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

namespace Okta\Generated\Logs;


class LogClient extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const ZONE = 'zone';
    const DEVICE = 'device';
    const IP_ADDRESS = 'ipAddress';
    const USER_AGENT = 'userAgent';
    const GEOGRAPHICAL_CONTEXT = 'geographicalContext';



    /**
     * Get the id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }

    /**
     * Get the zone.
     *
     * @return string
     */
    public function getZone()
    {
        return $this->getProperty(self::ZONE);
    }

    /**
     * Get the device.
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->getProperty(self::DEVICE);
    }

    /**
     * Get the ipAddress.
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->getProperty(self::IP_ADDRESS);
    }

    /**
     * Get the userAgent.
     *
     * @return \Okta\Logs\LogUserAgent
     */
    public function getUserAgent(array $options = []): \Okta\Logs\LogUserAgent
    {
        return $this->getResourceProperty(
            self::USER_AGENT,
            \Okta\Logs\LogUserAgent::class,
            $options
        );
    }


    /**
     * Get the geographicalContext.
     *
     * @return \Okta\Logs\LogGeographicalContext
     */
    public function getGeographicalContext(array $options = []): \Okta\Logs\LogGeographicalContext
    {
        return $this->getResourceProperty(
            self::GEOGRAPHICAL_CONTEXT,
            \Okta\Logs\LogGeographicalContext::class,
            $options
        );
    }

}
