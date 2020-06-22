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

namespace Okta\EventHooks;

class EventHookChannel extends \Okta\Resource\AbstractResource
{
    const TYPE = 'type';
    const CONFIG = 'config';
    const VERSION = 'version';


    /**
     * Get the type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->getProperty(self::TYPE);
    }

    /**
    * Set the type.
    *
    * @param mixed $type The value to set.
    * @return self
    */
    public function setType($type)
    {
        $this->setProperty(
            self::TYPE,
            $type
        );

        return $this;
    }

    /**
     * Get the config.
     *
     * @return \Okta\EventHooks\EventHookChannelConfig
     */
    public function getConfig(array $options = []): \Okta\EventHooks\EventHookChannelConfig
    {
        return $this->getResourceProperty(
            self::CONFIG,
            \Okta\EventHooks\EventHookChannelConfig::class,
            $options
        );
    }

    /**
     * Set the config.
     *
     * @param \Okta\EventHooks\EventHookChannelConfig $config The EventHookChannelConfig instance.
     * @return self
     */
    public function setConfig(\Okta\EventHooks\EventHookChannelConfig $config)
    {
        $this->setResourceProperty(
            self::CONFIG,
            $config
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
}
