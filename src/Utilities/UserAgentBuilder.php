<?php
/******************************************************************************
 * Copyright 2017 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

namespace Okta\Utilities;

use Okta\Okta;

/**
 * Class UserAgentBuilder
 * @package Okta\Utilities
 */
class UserAgentBuilder
{

    /**
     * @var string $phpVersion The PHP Version.
     */
    protected $phpVersion;

    /**
     * @var string $osVersion The OS Version.
     */
    protected $osVersion;

    /**
     * @var string $osName The OS Name.
     */
    protected $osName;


    /**
     * Set the PHP Version
     * @param $version
     * @return $this
     */
    public function setPhpVersion($version)
    {
        $this->phpVersion = $version;
        return $this;
    }

    /**
     * Set the Operating System Name
     * @param $os
     * @return $this
     */
    public function setOsName($os)
    {
        $this->osName = $os;
        return $this;
    }

    /**
     * Set the Operating System Version
     * @param $version
     * @return $this
     */
    public function setOsVersion($version)
    {
        $this->osVersion = $version;
        return $this;
    }

    /**
     * Build your User Agent.  This will build in an order required by Okta.
     *
     * @return string
     */
    public function build()
    {
        $this->validateUserAgentProperties();

        $userAgent = array();

        $userAgent[] = 'okta-sdk-php/'. Okta::VERSION;
        $userAgent[] = 'php/' . $this->phpVersion;
        $userAgent[] = $this->osName .'/'. $this->osVersion;

        return implode(' ', $userAgent);
    }

    /**
     * Checks to make sure all required properties are set.
     *
     * @throws \InvalidArgumentException
     * @return void
     */
    private function validateUserAgentProperties()
    {
        if (!$this->phpVersion) {
            throw new \InvalidArgumentException('Please provide a PHP Version.');
        }
        if (!$this->osName) {
            throw new \InvalidArgumentException('Please provide an Operating System Name.');
        }
        if (!$this->osVersion) {
            throw new \InvalidArgumentException('Please provide an Operating System Version.');
        }
    }
}
