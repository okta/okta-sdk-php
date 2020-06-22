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

namespace Okta\TrustedOrigins;

class TrustedOrigin extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const LINKS = '_links';
    const ORIGIN = 'origin';
    const SCOPES = 'scopes';
    const STATUS = 'status';
    const CREATED = 'created';
    const CREATED_BY = 'createdBy';
    const LAST_UPDATED = 'lastUpdated';
    const LAST_UPDATED_BY = 'lastUpdatedBy';

    public function create($query = [])
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->createResource(
                    "/trustedOrigins",
                    $this,
                    \Okta\TrustedOrigins\TrustedOrigin::class,
                    $query
                );
    }

    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\TrustedOrigins\TrustedOrigin::class,
                        "/trustedOrigins"
                    );
    }
        
    public function save()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->saveResource(
                    "/trustedOrigins",
                    $this,
                    \Okta\TrustedOrigins\TrustedOrigin::class
                );
    }


    public function delete() //test
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    "/trustedOrigins",
                    $this
                );
    }
        
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
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->getProperty(self::NAME);
    }

    /**
    * Set the name.
    *
    * @param mixed $name The value to set.
    * @return self
    */
    public function setName($name)
    {
        $this->setProperty(
            self::NAME,
            $name
        );

        return $this;
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
     * Get the origin.
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->getProperty(self::ORIGIN);
    }

    /**
    * Set the origin.
    *
    * @param mixed $origin The value to set.
    * @return self
    */
    public function setOrigin($origin)
    {
        $this->setProperty(
            self::ORIGIN,
            $origin
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
     * Get the created.
     *
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
    }

    /**
     * Get the createdBy.
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->getProperty(self::CREATED_BY);
    }

    /**
    * Set the createdBy.
    *
    * @param mixed $createdBy The value to set.
    * @return self
    */
    public function setCreatedBy($createdBy)
    {
        $this->setProperty(
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

    /**
     * Get the lastUpdatedBy.
     *
     * @return string
     */
    public function getLastUpdatedBy()
    {
        return $this->getProperty(self::LAST_UPDATED_BY);
    }

    /**
    * Set the lastUpdatedBy.
    *
    * @param mixed $lastUpdatedBy The value to set.
    * @return self
    */
    public function setLastUpdatedBy($lastUpdatedBy)
    {
        $this->setProperty(
            self::LAST_UPDATED_BY,
            $lastUpdatedBy
        );

        return $this;
    }
}
