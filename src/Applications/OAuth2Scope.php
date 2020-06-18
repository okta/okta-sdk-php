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


class OAuth2Scope extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const SYSTEM = 'system';
    const CONSENT = 'consent';
    const DEFAULT = 'default';
    const DESCRIPTION = 'description';
    const DISPLAY_NAME = 'displayName';
    const METADATA_PUBLISH = 'metadataPublish';



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
     * Get the system.
     *
     * @return bool
     */
    public function getSystem()
    {
        return $this->getProperty(self::SYSTEM);
    }

    /**
    * Set the system.
    *
    * @param mixed $system The value to set.
    * @return self
    */
    public function setSystem($system)
    {
        $this->setProperty(
            self::SYSTEM,
            $system
        );

        return $this;
    }

    /**
     * Get the consent.
     *
     * @return string
     */
    public function getConsent()
    {
        return $this->getProperty(self::CONSENT);
    }

    /**
    * Set the consent.
    *
    * @param mixed $consent The value to set.
    * @return self
    */
    public function setConsent($consent)
    {
        $this->setProperty(
            self::CONSENT,
            $consent
        );

        return $this;
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
    * Set the default.
    *
    * @param mixed $default The value to set.
    * @return self
    */
    public function setDefault($default)
    {
        $this->setProperty(
            self::DEFAULT,
            $default
        );

        return $this;
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
     * Get the metadataPublish.
     *
     * @return string
     */
    public function getMetadataPublish()
    {
        return $this->getProperty(self::METADATA_PUBLISH);
    }

    /**
    * Set the metadataPublish.
    *
    * @param mixed $metadataPublish The value to set.
    * @return self
    */
    public function setMetadataPublish($metadataPublish)
    {
        $this->setProperty(
            self::METADATA_PUBLISH,
            $metadataPublish
        );

        return $this;
    }
}
