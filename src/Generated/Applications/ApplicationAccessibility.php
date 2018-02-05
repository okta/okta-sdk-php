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


class ApplicationAccessibility extends \Okta\Resource\AbstractResource
{
    const SELF_SERVICE = 'selfService';
    const ERROR_REDIRECT_URL = 'errorRedirectUrl';
    const LOGIN_REDIRECT_URL = 'loginRedirectUrl';



    /**
     * Get the selfService.
     *
     * @return bool
     */
    public function getSelfService()
    {
        return $this->getProperty(self::SELF_SERVICE);
    }

    /**
    * Set the selfService.
    *
    * @param mixed $selfService The value to set.
    * @return self
    */
    public function setSelfService($selfService)
    {
        $this->setProperty(
            self::SELF_SERVICE,
            $selfService
        );

        return $this;
    }

    /**
     * Get the errorRedirectUrl.
     *
     * @return string
     */
    public function getErrorRedirectUrl()
    {
        return $this->getProperty(self::ERROR_REDIRECT_URL);
    }

    /**
    * Set the errorRedirectUrl.
    *
    * @param mixed $errorRedirectUrl The value to set.
    * @return self
    */
    public function setErrorRedirectUrl($errorRedirectUrl)
    {
        $this->setProperty(
            self::ERROR_REDIRECT_URL,
            $errorRedirectUrl
        );

        return $this;
    }

    /**
     * Get the loginRedirectUrl.
     *
     * @return string
     */
    public function getLoginRedirectUrl()
    {
        return $this->getProperty(self::LOGIN_REDIRECT_URL);
    }

    /**
    * Set the loginRedirectUrl.
    *
    * @param mixed $loginRedirectUrl The value to set.
    * @return self
    */
    public function setLoginRedirectUrl($loginRedirectUrl)
    {
        $this->setProperty(
            self::LOGIN_REDIRECT_URL,
            $loginRedirectUrl
        );

        return $this;
    }
}
