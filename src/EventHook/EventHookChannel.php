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

namespace Okta\EventHook;

class EventHookChannel extends \Okta\Resource\AbstractResource
{
    const TYPE = 'type';
    const CONFIG = 'config';
    const VERSION = 'version';


    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : EventHookChannel
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Config.
     *
     * @param mixed $config The config to set.
     * @return self
     */
    function setConfig(\Okta\EventHook\EventHookChannelConfig $config) : EventHookChannel
    {
        $this->setResourceProperty(
            self::CONFIG,
            $config
        );
    
        return $this;
    }

    /**
     * Set the Version.
     *
     * @param mixed $version The version to set.
     * @return self
     */
    function setVersion($version) : EventHookChannel
    {
        $this->setProperty(
            self::VERSION,
            $version
        );
    
        return $this;
    }
    
    /**
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return string
     */
    function getType() : string
    {
        return $this->getProperty(
            self::TYPE,
        );
    }
    
    /**
     * Get the Config.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\EventHook\EventHookChannelConfig
     */
    function getConfig(array $options = []) : \Okta\EventHook\EventHookChannelConfig
    {
        return $this->getResourceProperty(
            self::CONFIG,
            \Okta\EventHook\EventHookChannelConfig::class,
            $options
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
    

}