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

namespace Okta\Users;

use Okta\Resource\AbstractResource;

class UserActivationToken extends AbstractResource
{
    const ACTIVATION_URL = 'activationUrl';
    const ACTIVATION_TOKEN = 'activationToken';

    /**
     * Get the activationUrl.
     *
     * @return string
     */
    public function getActivationUrl(): string
    {
        return $this->getProperty(self::ACTIVATION_URL);
    }
    /**
    * Set the activationUrl.
    *
    * @param mixed $activationUrl The value to set.
    * @return self
    */
    public function setActivationUrl($activationUrl)
    {
        $this->setProperty(
            self::ACTIVATION_URL,
            $activationUrl
        );

        return $this;
    }
    /**
     * Get the activationToken.
     *
     * @return string
     */
    public function getActivationToken(): string
    {
        return $this->getProperty(self::ACTIVATION_TOKEN);
    }
    /**
    * Set the activationToken.
    *
    * @param mixed $activationToken The value to set.
    * @return self
    */
    public function setActivationToken($activationToken)
    {
        $this->setProperty(
            self::ACTIVATION_TOKEN,
            $activationToken
        );

        return $this;
    }
}
