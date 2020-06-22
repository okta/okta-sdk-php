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

namespace Okta\Applications;

class JsonWebKey extends \Okta\Resource\AbstractResource
{
    const E = 'e';
    const N = 'n';
    const ALG = 'alg';
    const KID = 'kid';
    const KTY = 'kty';
    const USE = 'use';
    const X5C = 'x5c';
    const X5T = 'x5t';
    const X5U = 'x5u';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
    const KEY_OPS = 'key_ops';
    const X5TS256 = 'x5t#S256';
    const EXPIRES_AT = 'expiresAt';
    const LAST_UPDATED = 'lastUpdated';


    /**
     * Get the e.
     *
     * @return string
     */
    public function getE()
    {
        return $this->getProperty(self::E);
    }

    /**
     * Get the n.
     *
     * @return string
     */
    public function getN()
    {
        return $this->getProperty(self::N);
    }

    /**
     * Get the alg.
     *
     * @return string
     */
    public function getAlg()
    {
        return $this->getProperty(self::ALG);
    }

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
     * Get the kty.
     *
     * @return string
     */
    public function getKty()
    {
        return $this->getProperty(self::KTY);
    }

    /**
     * Get the use.
     *
     * @return string
     */
    public function getUse()
    {
        return $this->getProperty(self::USE);
    }

    /**
     * Get the x5c.
     *
     * @return array
     */
    public function getX5C()
    {
        return $this->getProperty(self::X5C);
    }

    /**
    * Set the x5c.
    *
    * @param mixed $x5c The value to set.
    * @return self
    */
    public function setX5C($x5c)
    {
        $this->setProperty(
            self::X5C,
            $x5c
        );

        return $this;
    }

    /**
     * Get the x5t.
     *
     * @return string
     */
    public function getX5T()
    {
        return $this->getProperty(self::X5T);
    }

    /**
     * Get the x5u.
     *
     * @return string
     */
    public function getX5U()
    {
        return $this->getProperty(self::X5U);
    }

    /**
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }

    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
     * Get the created.
     *
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
    }

    /**
     * Get the key_ops.
     *
     * @return array
     */
    public function getKeyOps()
    {
        return $this->getProperty(self::KEY_OPS);
    }

    /**
     * Get the x5t#S256.
     *
     * @return string
     */
    public function getX5TS256()
    {
        return $this->getProperty(self::X5TS256);
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
     * Get the lastUpdated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }
}
