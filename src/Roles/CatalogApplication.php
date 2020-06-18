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

namespace Okta\Roles;

class CatalogApplication extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const LINKS = '_links';
    const STATUS = 'status';
    const WEBSITE = 'website';
    const CATEGORY = 'category';
    const FEATURES = 'features';
    const DESCRIPTION = 'description';
    const DISPLAY_NAME = 'displayName';
    const LAST_UPDATED = 'lastUpdated';
    const SIGN_ON_MODES = 'signOnModes';
    const VERIFICATION_STATUS = 'verificationStatus';



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
     * Get the website.
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->getProperty(self::WEBSITE);
    }

    /**
    * Set the website.
    *
    * @param mixed $website The value to set.
    * @return self
    */
    public function setWebsite($website)
    {
        $this->setProperty(
            self::WEBSITE,
            $website
        );

        return $this;
    }

    /**
     * Get the category.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->getProperty(self::CATEGORY);
    }

    /**
    * Set the category.
    *
    * @param mixed $category The value to set.
    * @return self
    */
    public function setCategory($category)
    {
        $this->setProperty(
            self::CATEGORY,
            $category
        );

        return $this;
    }

    /**
     * Get the features.
     *
     * @return array
     */
    public function getFeatures()
    {
        return $this->getProperty(self::FEATURES);
    }

    /**
    * Set the features.
    *
    * @param mixed $features The value to set.
    * @return self
    */
    public function setFeatures($features)
    {
        $this->setProperty(
            self::FEATURES,
            $features
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
     * Get the lastUpdated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }

    /**
     * Get the signOnModes.
     *
     * @return array
     */
    public function getSignOnModes()
    {
        return $this->getProperty(self::SIGN_ON_MODES);
    }

    /**
    * Set the signOnModes.
    *
    * @param mixed $signOnModes The value to set.
    * @return self
    */
    public function setSignOnModes($signOnModes)
    {
        $this->setProperty(
            self::SIGN_ON_MODES,
            $signOnModes
        );

        return $this;
    }

    /**
     * Get the verificationStatus.
     *
     * @return string
     */
    public function getVerificationStatus()
    {
        return $this->getProperty(self::VERIFICATION_STATUS);
    }

    /**
    * Set the verificationStatus.
    *
    * @param mixed $verificationStatus The value to set.
    * @return self
    */
    public function setVerificationStatus($verificationStatus)
    {
        $this->setProperty(
            self::VERIFICATION_STATUS,
            $verificationStatus
        );

        return $this;
    }
}
