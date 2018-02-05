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


class ApplicationCredentialsOAuthClient extends \Okta\Resource\AbstractResource
{
    const CLIENT_ID = 'client_id';
    const CLIENT_SECRET = 'client_secret';
    const AUTO_KEY_ROTATION = 'autoKeyRotation';
    const TOKEN_ENDPOINT_AUTH_METHOD = 'token_endpoint_auth_method';



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
    * Set the client_id.
    *
    * @param mixed $client_id The value to set.
    * @return self
    */
    public function setClientId($client_id)
    {
        $this->setProperty(
            self::CLIENT_ID,
            $client_id
        );

        return $this;
    }

    /**
     * Get the client_secret.
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->getProperty(self::CLIENT_SECRET);
    }

    /**
    * Set the client_secret.
    *
    * @param mixed $client_secret The value to set.
    * @return self
    */
    public function setClientSecret($client_secret)
    {
        $this->setProperty(
            self::CLIENT_SECRET,
            $client_secret
        );

        return $this;
    }

    /**
     * Get the autoKeyRotation.
     *
     * @return bool
     */
    public function getAutoKeyRotation()
    {
        return $this->getProperty(self::AUTO_KEY_ROTATION);
    }

    /**
    * Set the autoKeyRotation.
    *
    * @param mixed $autoKeyRotation The value to set.
    * @return self
    */
    public function setAutoKeyRotation($autoKeyRotation)
    {
        $this->setProperty(
            self::AUTO_KEY_ROTATION,
            $autoKeyRotation
        );

        return $this;
    }

    /**
     * Get the token_endpoint_auth_method.
     *
     * @return string
     */
    public function getTokenEndpointAuthMethod()
    {
        return $this->getProperty(self::TOKEN_ENDPOINT_AUTH_METHOD);
    }

    /**
    * Set the token_endpoint_auth_method.
    *
    * @param mixed $token_endpoint_auth_method The value to set.
    * @return self
    */
    public function setTokenEndpointAuthMethod($token_endpoint_auth_method)
    {
        $this->setProperty(
            self::TOKEN_ENDPOINT_AUTH_METHOD,
            $token_endpoint_auth_method
        );

        return $this;
    }
}
