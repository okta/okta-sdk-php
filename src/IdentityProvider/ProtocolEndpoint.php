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

namespace Okta\IdentityProvider;

class ProtocolEndpoint extends \Okta\Resource\AbstractResource
{
    const URL = 'url';
    const TYPE = 'type';
    const BINDING = 'binding';
    const DESTINATION = 'destination';

    /**
     * Set the Url.
     *
     * @param mixed $url The url to set.
     * @return self
     */
    function setUrl($url) : ProtocolEndpoint
    {
        $this->setProperty(
            self::URL,
            $url
        );
    
        return $this;
    }
    
    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : ProtocolEndpoint
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Binding.
     *
     * @param mixed $binding The binding to set.
     * @return self
     */
    function setBinding($binding) : ProtocolEndpoint
    {
        $this->setProperty(
            self::BINDING,
            $binding
        );
    
        return $this;
    }
    
    /**
     * Set the Destination.
     *
     * @param mixed $destination The destination to set.
     * @return self
     */
    function setDestination($destination) : ProtocolEndpoint
    {
        $this->setProperty(
            self::DESTINATION,
            $destination
        );
    
        return $this;
    }
    
    /**
     * Get the Url.
     *
     * @param mixed $url The url to set.
     * @return string
     */
    function getUrl() : string
    {
        return $this->getProperty(
            self::URL
        );
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
            self::TYPE
        );
    }
    
    /**
     * Get the Binding.
     *
     * @param mixed $binding The binding to set.
     * @return string
     */
    function getBinding() : string
    {
        return $this->getProperty(
            self::BINDING
        );
    }
    
    /**
     * Get the Destination.
     *
     * @param mixed $destination The destination to set.
     * @return string
     */
    function getDestination() : string
    {
        return $this->getProperty(
            self::DESTINATION
        );
    }
    

}