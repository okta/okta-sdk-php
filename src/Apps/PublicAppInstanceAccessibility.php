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

namespace Okta\Apps;

use Okta\Resource\AbstractResource;

class PublicAppInstanceAccessibility extends AbstractResource
{
    const SELF_SERVICE = 'selfService';
    const ERROR_REDIRECT_URL = 'errorRedirectUrl';
    const LOGIN_REDIRECT_URL = 'loginRedirectUrl';


    /**
     * Get the selfService.
     *
     * @return boolean
     */
    public function getSelfService(): boolean
    {
        return $this->getProperty(self::SELF_SERVICE);
    }
    
    /**
     * Get the errorRedirectUrl.
     *
     * @return string
     */
    public function getErrorRedirectUrl(): string
    {
        return $this->getProperty(self::ERROR_REDIRECT_URL);
    }
    
    /**
     * Get the loginRedirectUrl.
     *
     * @return string
     */
    public function getLoginRedirectUrl(): string
    {
        return $this->getProperty(self::LOGIN_REDIRECT_URL);
    }
}
