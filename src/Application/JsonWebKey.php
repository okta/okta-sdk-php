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

namespace Okta\Application;

class JsonWebKey extends \Okta\Resource\AbstractResource
{
    const E = 'e';
    const N = 'n';
    const ALG = 'alg';
    const KID = 'kid';
    const KTY = 'kty';
    const USE = 'use';
    const X_5_C = 'x5c';
    const X_5_T = 'x5t';
    const X_5_U = 'x5u';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
    const KEY_OPS = 'key_ops';
    const X_5_T_S_256 = 'x5t#S256';
    const EXPIRES_AT = 'expiresAt';
    const LAST_UPDATED = 'lastUpdated';

    /**
     * Set the X5C.
     *
     * @param mixed $x5c The x5c to set.
     * @return self
     */
    function setX5C($x5c) : JsonWebKey
    {
        $this->setProperty(
            self::X_5_C,
            $x5c
        );
    
        return $this;
    }
    
    /**
     * Get the E.
     *
     * @param mixed $e The e to set.
     * @return string
     */
    function getE() : string
    {
        return $this->getProperty(
            self::E
        );
    }
    
    /**
     * Get the N.
     *
     * @param mixed $n The n to set.
     * @return string
     */
    function getN() : string
    {
        return $this->getProperty(
            self::N
        );
    }
    
    /**
     * Get the Alg.
     *
     * @param mixed $alg The alg to set.
     * @return string
     */
    function getAlg() : string
    {
        return $this->getProperty(
            self::ALG
        );
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
            self::KID
        );
    }
    
    /**
     * Get the Kty.
     *
     * @param mixed $kty The kty to set.
     * @return string
     */
    function getKty() : string
    {
        return $this->getProperty(
            self::KTY
        );
    }
    
    /**
     * Get the Use.
     *
     * @param mixed $use The use to set.
     * @return string
     */
    function getUse() : string
    {
        return $this->getProperty(
            self::USE
        );
    }
    
    /**
     * Get the X5C.
     *
     * @param mixed $x5c The x5c to set.
     * @return array
     */
    function getX5C() : array
    {
        return $this->getProperty(
            self::X_5_C
        );
    }
    
    /**
     * Get the X5T.
     *
     * @param mixed $x5t The x5t to set.
     * @return string
     */
    function getX5T() : string
    {
        return $this->getProperty(
            self::X_5_T
        );
    }
    
    /**
     * Get the X5U.
     *
     * @param mixed $x5u The x5u to set.
     * @return string
     */
    function getX5U() : string
    {
        return $this->getProperty(
            self::X_5_U
        );
    }
    
    /**
     * Get the Links.
     *
     * @param mixed $_links The _links to set.
     * @return \stdClass
     */
    function getLinks() : \stdClass
    {
        return $this->getProperty(
            self::LINKS
        );
    }
    
    /**
     * Get the Status.
     *
     * @param mixed $status The status to set.
     * @return string
     */
    function getStatus() : string
    {
        return $this->getProperty(
            self::STATUS
        );
    }
    
    /**
     * Get the Created.
     *
     * @param mixed $created The created to set.
     * @return \Carbon\Carbon
     */
    function getCreated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::CREATED
        );
    
        return $this;
    }

    /**
     * Get the KeyOps.
     *
     * @param mixed $key_ops The key_ops to set.
     * @return array
     */
    function getKeyOps() : array
    {
        return $this->getProperty(
            self::KEY_OPS
        );
    }
    
    /**
     * Get the X5TS256.
     *
     * @param mixed $x5t#S256 The x5t#S256 to set.
     * @return string
     */
    function getX5TS256() : string
    {
        return $this->getProperty(
            self::X_5_T_S_256
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
     * Get the LastUpdated.
     *
     * @param mixed $lastUpdated The lastUpdated to set.
     * @return \Carbon\Carbon
     */
    function getLastUpdated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_UPDATED
        );
    
        return $this;
    }


}