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

class IdentityProviderCredentialsTrust extends \Okta\Resource\AbstractResource
{
    const KID = 'kid';
    const ISSUER = 'issuer';
    const AUDIENCE = 'audience';
    const REVOCATION = 'revocation';
    const REVOCATION_CACHE_LIFETIME = 'revocationCacheLifetime';


    /**
     * Set the Kid.
     *
     * @param mixed $kid The kid to set.
     * @return self
     */
    function setKid($kid) : IdentityProviderCredentialsTrust
    {
        $this->setProperty(
            self::KID,
            $kid
        );
    
        return $this;
    }
    
    /**
     * Set the Issuer.
     *
     * @param mixed $issuer The issuer to set.
     * @return self
     */
    function setIssuer($issuer) : IdentityProviderCredentialsTrust
    {
        $this->setProperty(
            self::ISSUER,
            $issuer
        );
    
        return $this;
    }
    
    /**
     * Set the Audience.
     *
     * @param mixed $audience The audience to set.
     * @return self
     */
    function setAudience($audience) : IdentityProviderCredentialsTrust
    {
        $this->setProperty(
            self::AUDIENCE,
            $audience
        );
    
        return $this;
    }
    
    /**
     * Set the Revocation.
     *
     * @param mixed $revocation The revocation to set.
     * @return self
     */
    function setRevocation($revocation) : IdentityProviderCredentialsTrust
    {
        $this->setProperty(
            self::REVOCATION,
            $revocation
        );
    
        return $this;
    }
    
    /**
     * Set the RevocationCacheLifetime.
     *
     * @param mixed $revocationCacheLifetime The revocationCacheLifetime to set.
     * @return self
     */
    function setRevocationCacheLifetime($revocationCacheLifetime) : IdentityProviderCredentialsTrust
    {
        $this->setProperty(
            self::REVOCATION_CACHE_LIFETIME,
            $revocationCacheLifetime
        );
    
        return $this;
    }
    
    /**
     * Get the Kid.
     *
     * @param mixed $kid The kid to set.
     * @return string
     */
    function getKid() : string
    {
        return $this->getProperty(
            self::KID,
        );
    }
    
    /**
     * Get the Issuer.
     *
     * @param mixed $issuer The issuer to set.
     * @return string
     */
    function getIssuer() : string
    {
        return $this->getProperty(
            self::ISSUER,
        );
    }
    
    /**
     * Get the Audience.
     *
     * @param mixed $audience The audience to set.
     * @return string
     */
    function getAudience() : string
    {
        return $this->getProperty(
            self::AUDIENCE,
        );
    }
    
    /**
     * Get the Revocation.
     *
     * @param mixed $revocation The revocation to set.
     * @return string
     */
    function getRevocation() : string
    {
        return $this->getProperty(
            self::REVOCATION,
        );
    }
    
    /**
     * Get the RevocationCacheLifetime.
     *
     * @param mixed $revocationCacheLifetime The revocationCacheLifetime to set.
     * @return int
     */
    function getRevocationCacheLifetime() : int
    {
        return $this->getProperty(
            self::REVOCATION_CACHE_LIFETIME,
        );
    }
    

}