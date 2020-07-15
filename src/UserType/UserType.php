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

namespace Okta\UserType;

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


    /**
     * Set the Id.
     *
     * @param mixed $id The id to set.
     * @return self
     */
    function setId($id) : UserType
    {
        $this->setProperty(
            self::ID,
            $id
        );
    
        return $this;
    }
    
    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : UserType
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Description.
     *
     * @param mixed $description The description to set.
     * @return self
     */
    function setDescription($description) : UserType
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
    function setDisplayName($displayName) : UserType
    {
        $this->setProperty(
            self::DISPLAY_NAME,
            $displayName
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
     * Get the Links.
     *
     * @param mixed $_links The _links to set.
     * @return \stdClass
     */
    function getLinks() : \stdClass
    {
        return $this->getProperty(
            self::LINKS,
        );
    }
    
    /**
     * Get the Created.
     *
     * @param mixed $created The created to set.
     * @return \Carbon\Carbon
     */
    function getCreated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::CREATED
        );
    
        return $this;
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
     * Get the CreatedBy.
     *
     * @param mixed $createdBy The createdBy to set.
     * @return string
     */
    function getCreatedBy() : string
    {
        return $this->getProperty(
            self::CREATED_BY,
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
     * Get the LastUpdatedBy.
     *
     * @param mixed $lastUpdatedBy The lastUpdatedBy to set.
     * @return string
     */
    function getLastUpdatedBy() : string
    {
        return $this->getProperty(
            self::LAST_UPDATED_BY,
        );
    }
    

}