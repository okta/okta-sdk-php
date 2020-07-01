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

class EventHookChannelConfigAuthScheme extends \Okta\Resource\AbstractResource
{
    const KEY = 'key';
    const TYPE = 'type';
    const VALUE = 'value';

    /**
     * Set the Key.
     *
     * @param mixed $key The key to set.
     * @return self
     */
    function setKey($key) : EventHookChannelConfigAuthScheme
    {
        $this->setProperty(
            self::KEY,
            $key
        );
    
        return $this;
    }
    
    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : EventHookChannelConfigAuthScheme
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Value.
     *
     * @param mixed $value The value to set.
     * @return self
     */
    function setValue($value) : EventHookChannelConfigAuthScheme
    {
        $this->setProperty(
            self::VALUE,
            $value
        );
    
        return $this;
    }
    
    /**
     * Get the Key.
     *
     * @param mixed $key The key to set.
     * @return string
     */
    function getKey() : string
    {
        return $this->getProperty(
            self::KEY
        );
    }
    
    /**
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return \Okta\EventHook\EventHookChannelConfigAuthSchemeType
     */
    function getType() : \Okta\EventHook\EventHookChannelConfigAuthSchemeType
    {
        return $this->getProperty(
            self::TYPE
        );
    }
    
    /**
     * Get the Value.
     *
     * @param mixed $value The value to set.
     * @return string
     */
    function getValue() : string
    {
        return $this->getProperty(
            self::VALUE
        );
    }
    

}