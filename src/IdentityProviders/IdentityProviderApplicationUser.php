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

namespace Okta\IdentityProviders;

class IdentityProviderApplicationUser extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const LINKS = '_links';
    const CREATED = 'created';
    const PROFILE = 'profile';
    const EMBEDDED = '_embedded';
    const EXTERNAL_ID = 'externalId';
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
     * Get the created.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->getProperty(self::CREATED);
    }

    /**
    * Set the created.
    *
    * @param mixed $created The value to set.
    * @return self
    */
    public function setCreated($created)
    {
        $this->setProperty(
            self::CREATED,
            $created
        );

        return $this;
    }

    /**
     * Get the profile.
     *
     * @return \stdClass
     */
    public function getProfile()
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
     * Get the _embedded.
     *
     * @return \stdClass
     */
    public function getEmbedded()
    {
        return $this->getProperty(self::EMBEDDED);
    }

    /**
     * Get the externalId.
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->getProperty(self::EXTERNAL_ID);
    }

    /**
    * Set the externalId.
    *
    * @param mixed $externalId The value to set.
    * @return self
    */
    public function setExternalId($externalId)
    {
        $this->setProperty(
            self::EXTERNAL_ID,
            $externalId
        );

        return $this;
    }

    /**
     * Get the lastUpdated.
     *
     * @return string
     */
    public function getLastUpdated()
    {
        return $this->getProperty(self::LAST_UPDATED);
    }

    /**
    * Set the lastUpdated.
    *
    * @param mixed $lastUpdated The value to set.
    * @return self
    */
    public function setLastUpdated($lastUpdated)
    {
        $this->setProperty(
            self::LAST_UPDATED,
            $lastUpdated
        );

        return $this;
    }
}
