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

namespace Okta\Applications;

class OAuth2Client extends \Okta\Resource\AbstractResource
{
    const LINKS = '_links';
    const LOGO_URI = 'logo_uri';
    const CLIENT_ID = 'client_id';
    const CLIENT_URI = 'client_uri';
    const CLIENT_NAME = 'client_name';


    /**
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }

    /**
     * Get the logo_uri.
     *
     * @return string
     */
    public function getLogoUri()
    {
        return $this->getProperty(self::LOGO_URI);
    }

    /**
     * Get the client_id.
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->getProperty(self::CLIENT_ID);
    }

    /**
     * Get the client_uri.
     *
     * @return string
     */
    public function getClientUri()
    {
        return $this->getProperty(self::CLIENT_URI);
    }

    /**
     * Get the client_name.
     *
     * @return string
     */
    public function getClientName()
    {
        return $this->getProperty(self::CLIENT_NAME);
    }
}
