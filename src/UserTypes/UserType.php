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

namespace Okta\UserTypes;

class UserType extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const LINKS = '_links';
    const CREATED = 'created';
    const DEFAULT = 'default';
    const CREATED_BY = 'createdBy';
    const DESCRIPTION = 'description';
    const DISPLAY_NAME = 'displayName';
    const LAST_UPDATED = 'lastUpdated';
    const LAST_UPDATED_BY = 'lastUpdatedBy';

    public function create($query = [])
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->createResource(
                    "/meta",
                    $this,
                    \Okta\UserTypes\UserType::class,
                    $query
                );
    }


    public function save()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->saveResource(
                    "/meta",
                    $this,
                    \Okta\UserTypes\UserType::class
                );
    }

    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\UserTypes\UserType::class,
                        "/meta"
                    );
    }
        
    public function delete() //test
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    "/meta",
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
    * Set the id.
    *
    * @param mixed $id The value to set.
    * @return self
    */
    public function setId($id)
    {
        $this->setProperty(
            self::ID,
            $id
        );

        return $this;
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
     * Get the created.
     *
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
    }

    /**
     * Get the default.
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->getProperty(self::DEFAULT);
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
     * Get the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty(self::DESCRIPTION);
    }

    /**
    * Set the description.
    *
    * @param mixed $description The value to set.
    * @return self
    */
    public function setDescription($description)
    {
        $this->setProperty(
            self::DESCRIPTION,
            $description
        );

        return $this;
    }

    /**
     * Get the displayName.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->getProperty(self::DISPLAY_NAME);
    }

    /**
    * Set the displayName.
    *
    * @param mixed $displayName The value to set.
    * @return self
    */
    public function setDisplayName($displayName)
    {
        $this->setProperty(
            self::DISPLAY_NAME,
            $displayName
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
}
