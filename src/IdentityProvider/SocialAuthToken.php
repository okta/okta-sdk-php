<?php
/*********************************************************************************/
/**   Copyright 2017 - Present Okta, Inc.                                       **/
/**                                                                             **/
/**   Licensed under the Apache License, Version 2.0 (the "License");           **/
/**   you may not use this file except in compliance with the License.          **/
/**   You may obtain a copy of the License at                                   **/
/**                                                                             **/
/**        http://www.apache.org/licenses/LICENSE-2.0                           **/
/**                                                                             **/
/**   Unless required by applicable law or agreed to in writing, software       **/
/**   distributed under the License is distributed on an "AS IS" BASIS,         **/
/**   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  **/
/**   See the License for the specific language governing permissions and       **/
/**   limitations under the License.                                            **/
/*********************************************************************************/

/************************************************/
/** This file is auto-generated.  Do Not Edit! **/
/************************************************/

namespace Okta\IdentityProvider;

class SocialAuthToken extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const TOKEN = 'token';
    const SCOPES = 'scopes';
    const EXPIRES_AT = 'expiresAt';
    const TOKEN_TYPE = 'tokenType';
    const TOKEN_AUTH_SCHEME = 'tokenAuthScheme';

    /**
     * Set the Token.
     *
     * @param mixed $token The token to set.
     * @return self
     */
    function setToken($token) : SocialAuthToken
    {
        $this->setProperty(
            self::TOKEN,
            $token
        );
    
        return $this;
    }
    
    /**
     * Set the Scopes.
     *
     * @param mixed $scopes The scopes to set.
     * @return self
     */
    function setScopes($scopes) : SocialAuthToken
    {
        $this->setProperty(
            self::SCOPES,
            $scopes
        );
    
        return $this;
    }
    
    /**
     * Set the TokenType.
     *
     * @param mixed $tokenType The tokenType to set.
     * @return self
     */
    function setTokenType($tokenType) : SocialAuthToken
    {
        $this->setProperty(
            self::TOKEN_TYPE,
            $tokenType
        );
    
        return $this;
    }
    
    /**
     * Set the TokenAuthScheme.
     *
     * @param mixed $tokenAuthScheme The tokenAuthScheme to set.
     * @return self
     */
    function setTokenAuthScheme($tokenAuthScheme) : SocialAuthToken
    {
        $this->setProperty(
            self::TOKEN_AUTH_SCHEME,
            $tokenAuthScheme
        );
    
        return $this;
    }
    
    /**
     * Get the Id.
     *
     * @param mixed $id The id to set.
     * @return string
     */
    function getId() : string
    {
        return $this->getProperty(
            self::ID
        );
    }
    
    /**
     * Get the Token.
     *
     * @param mixed $token The token to set.
     * @return string
     */
    function getToken() : string
    {
        return $this->getProperty(
            self::TOKEN
        );
    }
    
    /**
     * Get the Scopes.
     *
     * @param mixed $scopes The scopes to set.
     * @return array
     */
    function getScopes() : array
    {
        return $this->getProperty(
            self::SCOPES
        );
    }
    
    /**
     * Get the ExpiresAt.
     *
     * @param mixed $expiresAt The expiresAt to set.
     * @return \Carbon\Carbon
     */
    function getExpiresAt() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::EXPIRES_AT
        );
    
        return $this;
    }

    /**
     * Get the TokenType.
     *
     * @param mixed $tokenType The tokenType to set.
     * @return string
     */
    function getTokenType() : string
    {
        return $this->getProperty(
            self::TOKEN_TYPE
        );
    }
    
    /**
     * Get the TokenAuthScheme.
     *
     * @param mixed $tokenAuthScheme The tokenAuthScheme to set.
     * @return string
     */
    function getTokenAuthScheme() : string
    {
        return $this->getProperty(
            self::TOKEN_AUTH_SCHEME
        );
    }
    

}