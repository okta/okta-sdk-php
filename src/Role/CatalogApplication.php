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

namespace Okta\Role;

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
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : CatalogApplication
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Status.
     *
     * @param mixed $status The status to set.
     * @return self
     */
    function setStatus($status) : CatalogApplication
    {
        $this->setProperty(
            self::STATUS,
            $status
        );
    
        return $this;
    }
    
    /**
     * Set the Website.
     *
     * @param mixed $website The website to set.
     * @return self
     */
    function setWebsite($website) : CatalogApplication
    {
        $this->setProperty(
            self::WEBSITE,
            $website
        );
    
        return $this;
    }
    
    /**
     * Set the Category.
     *
     * @param mixed $category The category to set.
     * @return self
     */
    function setCategory($category) : CatalogApplication
    {
        $this->setProperty(
            self::CATEGORY,
            $category
        );
    
        return $this;
    }
    
    /**
     * Set the Features.
     *
     * @param mixed $features The features to set.
     * @return self
     */
    function setFeatures($features) : CatalogApplication
    {
        $this->setProperty(
            self::FEATURES,
            $features
        );
    
        return $this;
    }
    
    /**
     * Set the Description.
     *
     * @param mixed $description The description to set.
     * @return self
     */
    function setDescription($description) : CatalogApplication
    {
        $this->setProperty(
            self::DESCRIPTION,
            $description
        );
    
        return $this;
    }
    
    /**
     * Set the DisplayName.
     *
     * @param mixed $displayName The displayName to set.
     * @return self
     */
    function setDisplayName($displayName) : CatalogApplication
    {
        $this->setProperty(
            self::DISPLAY_NAME,
            $displayName
        );
    
        return $this;
    }
    
    /**
     * Set the SignOnModes.
     *
     * @param mixed $signOnModes The signOnModes to set.
     * @return self
     */
    function setSignOnModes($signOnModes) : CatalogApplication
    {
        $this->setProperty(
            self::SIGN_ON_MODES,
            $signOnModes
        );
    
        return $this;
    }
    
    /**
     * Set the VerificationStatus.
     *
     * @param mixed $verificationStatus The verificationStatus to set.
     * @return self
     */
    function setVerificationStatus($verificationStatus) : CatalogApplication
    {
        $this->setProperty(
            self::VERIFICATION_STATUS,
            $verificationStatus
        );
    
        return $this;
    }
    
    /**
     * Get the Id.
     *
     * @param mixed $id The id to set.
     * @return string
     */
    function getId() : string
    {
        return $this->getProperty(
            self::ID
        );
    }
    
    /**
     * Get the Name.
     *
     * @param mixed $name The name to set.
     * @return string
     */
    function getName() : string
    {
        return $this->getProperty(
            self::NAME
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
     * @return \Okta\Role\CatalogApplicationStatus
     */
    function getStatus() : \Okta\Role\CatalogApplicationStatus
    {
        return $this->getProperty(
            self::STATUS
        );
    }
    
    /**
     * Get the Website.
     *
     * @param mixed $website The website to set.
     * @return string
     */
    function getWebsite() : string
    {
        return $this->getProperty(
            self::WEBSITE
        );
    }
    
    /**
     * Get the Category.
     *
     * @param mixed $category The category to set.
     * @return string
     */
    function getCategory() : string
    {
        return $this->getProperty(
            self::CATEGORY
        );
    }
    
    /**
     * Get the Features.
     *
     * @param mixed $features The features to set.
     * @return array
     */
    function getFeatures() : array
    {
        return $this->getProperty(
            self::FEATURES
        );
    }
    
    /**
     * Get the Description.
     *
     * @param mixed $description The description to set.
     * @return string
     */
    function getDescription() : string
    {
        return $this->getProperty(
            self::DESCRIPTION
        );
    }
    
    /**
     * Get the DisplayName.
     *
     * @param mixed $displayName The displayName to set.
     * @return string
     */
    function getDisplayName() : string
    {
        return $this->getProperty(
            self::DISPLAY_NAME
        );
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

    /**
     * Get the SignOnModes.
     *
     * @param mixed $signOnModes The signOnModes to set.
     * @return array
     */
    function getSignOnModes() : array
    {
        return $this->getProperty(
            self::SIGN_ON_MODES
        );
    }
    
    /**
     * Get the VerificationStatus.
     *
     * @param mixed $verificationStatus The verificationStatus to set.
     * @return string
     */
    function getVerificationStatus() : string
    {
        return $this->getProperty(
            self::VERIFICATION_STATUS
        );
    }
    

}