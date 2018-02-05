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


class LogIpAddress extends \Okta\Resource\AbstractResource
{
    const IP = 'ip';
    const SOURCE = 'source';
    const VERSION = 'version';
    const GEOGRAPHICAL_CONTEXT = 'geographicalContext';



    /**
     * Get the ip.
     *
     * @return string
     */
    public function getIp()
    {
        return $this->getProperty(self::IP);
    }

    /**
     * Get the source.
     *
     * @return string
     */
    public function getSource()
    {
        return $this->getProperty(self::SOURCE);
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
