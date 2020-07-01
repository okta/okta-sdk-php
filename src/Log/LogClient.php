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

namespace Okta\Log;

class LogClient extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const ZONE = 'zone';
    const DEVICE = 'device';
    const IP_ADDRESS = 'ipAddress';
    const USER_AGENT = 'userAgent';
    const GEOGRAPHICAL_CONTEXT = 'geographicalContext';

    /**
     * Get the Id.
     *
     * @param mixed $id The id to set.
     * @return string
     */
    function getId() : string
    {
        return $this->getProperty(
            self::ID
        );
    }
    
    /**
     * Get the Zone.
     *
     * @param mixed $zone The zone to set.
     * @return string
     */
    function getZone() : string
    {
        return $this->getProperty(
            self::ZONE
        );
    }
    
    /**
     * Get the Device.
     *
     * @param mixed $device The device to set.
     * @return string
     */
    function getDevice() : string
    {
        return $this->getProperty(
            self::DEVICE
        );
    }
    
    /**
     * Get the IpAddress.
     *
     * @param mixed $ipAddress The ipAddress to set.
     * @return string
     */
    function getIpAddress() : string
    {
        return $this->getProperty(
            self::IP_ADDRESS
        );
    }
    
    /**
     * Get the UserAgent.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogUserAgent
     */
    function getUserAgent(array $options = []) : \Okta\Log\LogUserAgent
    {
        return $this->getResourceProperty(
            self::USER_AGENT,
            \Okta\Log\LogUserAgent::class,
            $options
        );
    }

    /**
     * Get the GeographicalContext.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogGeographicalContext
     */
    function getGeographicalContext(array $options = []) : \Okta\Log\LogGeographicalContext
    {
        return $this->getResourceProperty(
            self::GEOGRAPHICAL_CONTEXT,
            \Okta\Log\LogGeographicalContext::class,
            $options
        );
    }


}