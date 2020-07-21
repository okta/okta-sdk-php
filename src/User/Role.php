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

namespace Okta\User;

class Role extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const TYPE = 'type';
    const LABEL = 'label';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
    const EMBEDDED = '_embedded';
    const DESCRIPTION = 'description';
    const LAST_UPDATED = 'lastUpdated';
    const ASSIGNMENT_TYPE = 'assignmentType';


    /**
     * Set the Type.
     *
     * @return self
     */
    function setType(\Okta\Role\RoleType $type) : Role
    {
        $this->setEnumProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }

    /**
     * Set the Description.
     *
     * @param mixed $description The description to set.
     * @return self
     */
    function setDescription($description) : Role
    {
        $this->setProperty(
            self::DESCRIPTION,
            $description
        );
    
        return $this;
    }
    
    /**
     * Set the AssignmentType.
     *
     * @return self
     */
    function setAssignmentType(\Okta\Role\RoleAssignmentType $assignmentType) : Role
    {
        $this->setEnumProperty(
            self::ASSIGNMENT_TYPE,
            $assignmentType
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
     * Get the Type.
     *
     * @return \Okta\Role\RoleType
     */
    function getType() : \Okta\Role\RoleType
    {
        return $this->getEnumProperty(
            self::TYPE,
            \Okta\Role\RoleType::class,
        );
    }

    /**
     * Get the Label.
     *
     * @param mixed $label The label to set.
     * @return string
     */
    function getLabel() : string
    {
        return $this->getProperty(
            self::LABEL,
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
     * Get the Status.
     *
     * @return \Okta\User\RoleStatus
     */
    function getStatus() : \Okta\User\RoleStatus
    {
        return $this->getEnumProperty(
            self::STATUS,
            \Okta\User\RoleStatus::class,
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
     * Get the Embedded.
     *
     * @param mixed $_embedded The _embedded to set.
     * @return \stdClass
     */
    function getEmbedded() : \stdClass
    {
        return $this->getProperty(
            self::EMBEDDED,
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
     * Get the AssignmentType.
     *
     * @return \Okta\Role\RoleAssignmentType
     */
    function getAssignmentType() : \Okta\Role\RoleAssignmentType
    {
        return $this->getEnumProperty(
            self::ASSIGNMENT_TYPE,
            \Okta\Role\RoleAssignmentType::class,
        );
    }


}