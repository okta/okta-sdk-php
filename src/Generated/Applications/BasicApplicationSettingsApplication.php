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

namespace Okta\Generated\Applications;


class BasicApplicationSettingsApplication extends \Okta\Applications\ApplicationSettingsApplication
{
    const URL = 'url';
    const AUTH_URL = 'authURL';



    /**
     * Get the url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->getProperty(self::URL);
    }

    /**
    * Set the url.
    *
    * @param mixed $url The value to set.
    * @return self
    */
    public function setUrl($url)
    {
        $this->setProperty(
            self::URL,
            $url
        );

        return $this;
    }

    /**
     * Get the authURL.
     *
     * @return string
     */
    public function getAuthUrl()
    {
        return $this->getProperty(self::AUTH_URL);
    }

    /**
    * Set the authURL.
    *
    * @param mixed $authURL The value to set.
    * @return self
    */
    public function setAuthUrl($authURL)
    {
        $this->setProperty(
            self::AUTH_URL,
            $authURL
        );

        return $this;
    }
}
