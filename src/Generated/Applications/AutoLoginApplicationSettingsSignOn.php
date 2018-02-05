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


class AutoLoginApplicationSettingsSignOn extends \Okta\Resource\AbstractResource
{
    const LOGIN_URL = 'loginUrl';
    const REDIRECT_URL = 'redirectUrl';



    /**
     * Get the loginUrl.
     *
     * @return string
     */
    public function getLoginUrl()
    {
        return $this->getProperty(self::LOGIN_URL);
    }

    /**
    * Set the loginUrl.
    *
    * @param mixed $loginUrl The value to set.
    * @return self
    */
    public function setLoginUrl($loginUrl)
    {
        $this->setProperty(
            self::LOGIN_URL,
            $loginUrl
        );

        return $this;
    }

    /**
     * Get the redirectUrl.
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->getProperty(self::REDIRECT_URL);
    }

    /**
    * Set the redirectUrl.
    *
    * @param mixed $redirectUrl The value to set.
    * @return self
    */
    public function setRedirectUrl($redirectUrl)
    {
        $this->setProperty(
            self::REDIRECT_URL,
            $redirectUrl
        );

        return $this;
    }
}
