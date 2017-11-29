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

namespace Okta\Generated\Applications;


class ApplicationGroupAssignment extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const LINKS = '_links';
    const PROFILE = 'profile';
    const PRIORITY = 'priority';
    const EMBEDDED = '_embedded';
    const LAST_UPDATED = 'lastUpdated';


    public function delete()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    "/apps",
                    $this
                );
    }
    /**
     * Get the id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->getProperty(self::ID);
    }
    /**
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks(): \stdClass
    {
        return $this->getProperty(self::LINKS);
    }
    /**
     * Get the profile.
     *
     * @return \stdClass
     */
    public function getProfile(): \stdClass
    {
        return $this->getProperty(self::PROFILE);
    }
    /**
    * Set the profile.
    *
    * @param mixed $profile The value to set.
    * @return self
    */
    public function setProfile($profile)
    {
        $this->setProperty(
            self::PROFILE,
            $profile
        );

        return $this;
    }
    /**
     * Get the priority.
     *
     * @return int
     */
    public function getPriority(): int
    {
        return $this->getProperty(self::PRIORITY);
    }
    /**
    * Set the priority.
    *
    * @param mixed $priority The value to set.
    * @return self
    */
    public function setPriority($priority)
    {
        $this->setProperty(
            self::PRIORITY,
            $priority
        );

        return $this;
    }
    /**
     * Get the _embedded.
     *
     * @return \stdClass
     */
    public function getEmbedded(): \stdClass
    {
        return $this->getProperty(self::EMBEDDED);
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