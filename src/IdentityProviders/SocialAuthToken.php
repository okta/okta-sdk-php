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

namespace Okta\IdentityProviders;

class SocialAuthToken extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const TOKEN = 'token';
    const SCOPES = 'scopes';
    const EXPIRES_AT = 'expiresAt';
    const TOKEN_TYPE = 'tokenType';
    const TOKEN_AUTH_SCHEME = 'tokenAuthScheme';


    /**
     * Get the id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }

    /**
     * Get the token.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->getProperty(self::TOKEN);
    }

    /**
    * Set the token.
    *
    * @param mixed $token The value to set.
    * @return self
    */
    public function setToken($token)
    {
        $this->setProperty(
            self::TOKEN,
            $token
        );

        return $this;
    }

    /**
     * Get the scopes.
     *
     * @return array
     */
    public function getScopes()
    {
        return $this->getProperty(self::SCOPES);
    }

    /**
    * Set the scopes.
    *
    * @param mixed $scopes The value to set.
    * @return self
    */
    public function setScopes($scopes)
    {
        $this->setProperty(
            self::SCOPES,
            $scopes
        );

        return $this;
    }

    /**
     * Get the expiresAt.
     *
     * @return \Carbon\Carbon|null
     */
    public function getExpiresAt()
    {
        return $this->getDateProperty(self::EXPIRES_AT);
    }

    /**
     * Get the tokenType.
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->getProperty(self::TOKEN_TYPE);
    }

    /**
    * Set the tokenType.
    *
    * @param mixed $tokenType The value to set.
    * @return self
    */
    public function setTokenType($tokenType)
    {
        $this->setProperty(
            self::TOKEN_TYPE,
            $tokenType
        );

        return $this;
    }

    /**
     * Get the tokenAuthScheme.
     *
     * @return string
     */
    public function getTokenAuthScheme()
    {
        return $this->getProperty(self::TOKEN_AUTH_SCHEME);
    }

    /**
    * Set the tokenAuthScheme.
    *
    * @param mixed $tokenAuthScheme The value to set.
    * @return self
    */
    public function setTokenAuthScheme($tokenAuthScheme)
    {
        $this->setProperty(
            self::TOKEN_AUTH_SCHEME,
            $tokenAuthScheme
        );

        return $this;
    }
}
