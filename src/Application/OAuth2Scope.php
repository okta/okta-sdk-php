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
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : OAuth2Scope
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the System.
     *
     * @param mixed $system The system to set.
     * @return self
     */
    function setSystem($system) : OAuth2Scope
    {
        $this->setProperty(
            self::SYSTEM,
            $system
        );
    
        return $this;
    }
    
    /**
     * Set the Consent.
     *
     * @param mixed $consent The consent to set.
     * @return self
     */
    function setConsent($consent) : OAuth2Scope
    {
        $this->setProperty(
            self::CONSENT,
            $consent
        );
    
        return $this;
    }
    
    /**
     * Set the Default.
     *
     * @param mixed $default The default to set.
     * @return self
     */
    function setDefault($default) : OAuth2Scope
    {
        $this->setProperty(
            self::DEFAULT,
            $default
        );
    
        return $this;
    }
    
    /**
     * Set the Description.
     *
     * @param mixed $description The description to set.
     * @return self
     */
    function setDescription($description) : OAuth2Scope
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
    function setDisplayName($displayName) : OAuth2Scope
    {
        $this->setProperty(
            self::DISPLAY_NAME,
            $displayName
        );
    
        return $this;
    }
    
    /**
     * Set the MetadataPublish.
     *
     * @param mixed $metadataPublish The metadataPublish to set.
     * @return self
     */
    function setMetadataPublish($metadataPublish) : OAuth2Scope
    {
        $this->setProperty(
            self::METADATA_PUBLISH,
            $metadataPublish
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
            self::ID,
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
            self::NAME,
        );
    }
    
    /**
     * Get the System.
     *
     * @param mixed $system The system to set.
     * @return bool
     */
    function getSystem() : bool
    {
        return $this->getProperty(
            self::SYSTEM,
        );
    }
    
    /**
     * Get the Consent.
     *
     * @param mixed $consent The consent to set.
     * @return string
     */
    function getConsent() : string
    {
        return $this->getProperty(
            self::CONSENT,
        );
    }
    
    /**
     * Get the Default.
     *
     * @param mixed $default The default to set.
     * @return bool
     */
    function getDefault() : bool
    {
        return $this->getProperty(
            self::DEFAULT,
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
            self::DESCRIPTION,
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
            self::DISPLAY_NAME,
        );
    }
    
    /**
     * Get the MetadataPublish.
     *
     * @param mixed $metadataPublish The metadataPublish to set.
     * @return string
     */
    function getMetadataPublish() : string
    {
        return $this->getProperty(
            self::METADATA_PUBLISH,
        );
    }
    

}