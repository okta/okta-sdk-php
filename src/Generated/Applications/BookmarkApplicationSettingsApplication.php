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


class BookmarkApplicationSettingsApplication extends \Okta\Applications\ApplicationSettingsApplication
{
    const URL = 'url';
    const REQUEST_INTEGRATION = 'requestIntegration';



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
     * Get the requestIntegration.
     *
     * @return bool
     */
    public function getRequestIntegration()
    {
        return $this->getProperty(self::REQUEST_INTEGRATION);
    }

    /**
    * Set the requestIntegration.
    *
    * @param mixed $requestIntegration The value to set.
    * @return self
    */
    public function setRequestIntegration($requestIntegration)
    {
        $this->setProperty(
            self::REQUEST_INTEGRATION,
            $requestIntegration
        );

        return $this;
    }
}
