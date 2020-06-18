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

namespace Okta\IdentityProviders;


class IdentityProviderCredentialsTrust extends \Okta\Resource\AbstractResource
{
    const KID = 'kid';
    const ISSUER = 'issuer';
    const AUDIENCE = 'audience';
    const REVOCATION = 'revocation';
    const REVOCATION_CACHE_LIFETIME = 'revocationCacheLifetime';



    /**
     * Get the kid.
     *
     * @return string
     */
    public function getKid()
    {
        return $this->getProperty(self::KID);
    }

    /**
    * Set the kid.
    *
    * @param mixed $kid The value to set.
    * @return self
    */
    public function setKid($kid)
    {
        $this->setProperty(
            self::KID,
            $kid
        );

        return $this;
    }

    /**
     * Get the issuer.
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->getProperty(self::ISSUER);
    }

    /**
    * Set the issuer.
    *
    * @param mixed $issuer The value to set.
    * @return self
    */
    public function setIssuer($issuer)
    {
        $this->setProperty(
            self::ISSUER,
            $issuer
        );

        return $this;
    }

    /**
     * Get the audience.
     *
     * @return string
     */
    public function getAudience()
    {
        return $this->getProperty(self::AUDIENCE);
    }

    /**
    * Set the audience.
    *
    * @param mixed $audience The value to set.
    * @return self
    */
    public function setAudience($audience)
    {
        $this->setProperty(
            self::AUDIENCE,
            $audience
        );

        return $this;
    }

    /**
     * Get the revocation.
     *
     * @return string
     */
    public function getRevocation()
    {
        return $this->getProperty(self::REVOCATION);
    }

    /**
    * Set the revocation.
    *
    * @param mixed $revocation The value to set.
    * @return self
    */
    public function setRevocation($revocation)
    {
        $this->setProperty(
            self::REVOCATION,
            $revocation
        );

        return $this;
    }

    /**
     * Get the revocationCacheLifetime.
     *
     * @return int
     */
    public function getRevocationCacheLifetime()
    {
        return $this->getProperty(self::REVOCATION_CACHE_LIFETIME);
    }

    /**
    * Set the revocationCacheLifetime.
    *
    * @param mixed $revocationCacheLifetime The value to set.
    * @return self
    */
    public function setRevocationCacheLifetime($revocationCacheLifetime)
    {
        $this->setProperty(
            self::REVOCATION_CACHE_LIFETIME,
            $revocationCacheLifetime
        );

        return $this;
    }
}
