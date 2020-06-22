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

class OAuth2ScopeConsentGrant extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const LINKS = '_links';
    const ISSUER = 'issuer';
    const SOURCE = 'source';
    const STATUS = 'status';
    const USER_ID = 'userId';
    const CREATED = 'created';
    const SCOPE_ID = 'scopeId';
    const CLIENT_ID = 'clientId';
    const EMBEDDED = '_embedded';
    const CREATED_BY = 'createdBy';
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
     * Get the source.
     *
     * @return string
     */
    public function getSource()
    {
        return $this->getProperty(self::SOURCE);
    }

    /**
    * Set the source.
    *
    * @param mixed $source The value to set.
    * @return self
    */
    public function setSource($source)
    {
        $this->setProperty(
            self::SOURCE,
            $source
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
     * Get the scopeId.
     *
     * @return string
     */
    public function getScopeId()
    {
        return $this->getProperty(self::SCOPE_ID);
    }

    /**
    * Set the scopeId.
    *
    * @param mixed $scopeId The value to set.
    * @return self
    */
    public function setScopeId($scopeId)
    {
        $this->setProperty(
            self::SCOPE_ID,
            $scopeId
        );

        return $this;
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
     * Get the createdBy.
     *
     * @return \Okta\Applications\OAuth2Actor
     */
    public function getCreatedBy(array $options = []): \Okta\Applications\OAuth2Actor
    {
        return $this->getResourceProperty(
            self::CREATED_BY,
            \Okta\Applications\OAuth2Actor::class,
            $options
        );
    }

    /**
     * Set the createdBy.
     *
     * @param \Okta\Applications\OAuth2Actor $createdBy The OAuth2Actor instance.
     * @return self
     */
    public function setCreatedBy(\Okta\Applications\OAuth2Actor $createdBy)
    {
        $this->setResourceProperty(
            self::CREATED_BY,
            $createdBy
        );

        return $this;
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
