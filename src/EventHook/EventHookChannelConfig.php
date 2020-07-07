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

class EventHookChannelConfig extends \Okta\Resource\AbstractResource
{
    const URI = 'uri';
    const HEADERS = 'headers';
    const AUTH_SCHEME = 'authScheme';


    /**
     * Set the Uri.
     *
     * @param mixed $uri The uri to set.
     * @return self
     */
    function setUri($uri) : EventHookChannelConfig
    {
        $this->setProperty(
            self::URI,
            $uri
        );
    
        return $this;
    }
    
    /**
     * Set the Headers.
     *
     * @param mixed $headers The headers to set.
     * @return self
     */
    function setHeaders($headers) : EventHookChannelConfig
    {
        $this->setProperty(
            self::HEADERS,
            $headers
        );
    
        return $this;
    }
    
    /**
     * Set the AuthScheme.
     *
     * @param mixed $authScheme The authScheme to set.
     * @return self
     */
    function setAuthScheme(\Okta\EventHook\EventHookChannelConfigAuthScheme $authScheme) : EventHookChannelConfig
    {
        $this->setResourceProperty(
            self::AUTH_SCHEME,
            $authScheme
        );
    
        return $this;
    }

    /**
     * Get the Uri.
     *
     * @param mixed $uri The uri to set.
     * @return string
     */
    function getUri() : string
    {
        return $this->getProperty(
            self::URI,
        );
    }
    
    /**
     * Get the Headers.
     *
     * @param mixed $headers The headers to set.
     * @return array
     */
    function getHeaders() : array
    {
        return $this->getProperty(
            self::HEADERS,
        );
    }
    
    /**
     * Get the AuthScheme.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\EventHook\EventHookChannelConfigAuthScheme
     */
    function getAuthScheme(array $options = []) : \Okta\EventHook\EventHookChannelConfigAuthScheme
    {
        return $this->getResourceProperty(
            self::AUTH_SCHEME,
            \Okta\EventHook\EventHookChannelConfigAuthScheme::class,
            $options
        );
    }


}