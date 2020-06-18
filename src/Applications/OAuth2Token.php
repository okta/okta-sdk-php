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

namespace Okta\Applications;


class OAuth2Token extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const LINKS = '_links';
    const ISSUER = 'issuer';
    const SCOPES = 'scopes';
    const STATUS = 'status';
    const USER_ID = 'userId';
    const CREATED = 'created';
    const CLIENT_ID = 'clientId';
    const EMBEDDED = '_embedded';
    const EXPIRES_AT = 'expiresAt';
    const LAST_UPDATED = 'lastUpdated';



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
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
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
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
    * Set the status.
    *
    * @param mixed $status The value to set.
    * @return self
    */
    public function setStatus($status)
    {
        $this->setProperty(
            self::STATUS,
            $status
        );

        return $this;
    }

    /**
     * Get the userId.
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->getProperty(self::USER_ID);
    }

    /**
    * Set the userId.
    *
    * @param mixed $userId The value to set.
    * @return self
    */
    public function setUserId($userId)
    {
        $this->setProperty(
            self::USER_ID,
            $userId
        );

        return $this;
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
     * Get the clientId.
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->getProperty(self::CLIENT_ID);
    }

    /**
    * Set the clientId.
    *
    * @param mixed $clientId The value to set.
    * @return self
    */
    public function setClientId($clientId)
    {
        $this->setProperty(
            self::CLIENT_ID,
            $clientId
        );

        return $this;
    }

    /**
     * Get the _embedded.
     *
     * @return \stdClass
     */
    public function getEmbedded()
    {
        return $this->getProperty(self::EMBEDDED);
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
