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

namespace Okta\InlineHooks;

class InlineHookChannelConfig extends \Okta\Resource\AbstractResource
{
    const URI = 'uri';
    const HEADERS = 'headers';
    const AUTH_SCHEME = 'authScheme';


    /**
     * Get the uri.
     *
     * @return string
     */
    public function getUri()
    {
        return $this->getProperty(self::URI);
    }

    /**
    * Set the uri.
    *
    * @param mixed $uri The value to set.
    * @return self
    */
    public function setUri($uri)
    {
        $this->setProperty(
            self::URI,
            $uri
        );

        return $this;
    }

    /**
     * Get the headers.
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->getProperty(self::HEADERS);
    }

    /**
    * Set the headers.
    *
    * @param mixed $headers The value to set.
    * @return self
    */
    public function setHeaders($headers)
    {
        $this->setProperty(
            self::HEADERS,
            $headers
        );

        return $this;
    }

    /**
     * Get the authScheme.
     *
     * @return \Okta\InlineHooks\InlineHookChannelConfigAuthScheme
     */
    public function getAuthScheme(array $options = []): \Okta\InlineHooks\InlineHookChannelConfigAuthScheme
    {
        return $this->getResourceProperty(
            self::AUTH_SCHEME,
            \Okta\InlineHooks\InlineHookChannelConfigAuthScheme::class,
            $options
        );
    }

    /**
     * Set the authScheme.
     *
     * @param \Okta\InlineHooks\InlineHookChannelConfigAuthScheme $authScheme The InlineHookChannelConfigAuthScheme instance.
     * @return self
     */
    public function setAuthScheme(\Okta\InlineHooks\InlineHookChannelConfigAuthScheme $authScheme)
    {
        $this->setResourceProperty(
            self::AUTH_SCHEME,
            $authScheme
        );

        return $this;
    }
}
