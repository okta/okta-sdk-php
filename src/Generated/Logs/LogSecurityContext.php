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


class LogSecurityContext extends \Okta\Resource\AbstractResource
{
    const ISP = 'isp';
    const AS_ORG = 'asOrg';
    const DOMAIN = 'domain';
    const IS_PROXY = 'isProxy';
    const AS_NUMBER = 'asNumber';



    /**
     * Get the isp.
     *
     * @return string
     */
    public function getIsp()
    {
        return $this->getProperty(self::ISP);
    }

    /**
     * Get the asOrg.
     *
     * @return string
     */
    public function getAsOrg()
    {
        return $this->getProperty(self::AS_ORG);
    }

    /**
     * Get the domain.
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->getProperty(self::DOMAIN);
    }

    /**
     * Get the isProxy.
     *
     * @return bool
     */
    public function getIsProxy()
    {
        return $this->getProperty(self::IS_PROXY);
    }

    /**
     * Get the asNumber.
     *
     * @return int
     */
    public function getAsNumber()
    {
        return $this->getProperty(self::AS_NUMBER);
    }
}
