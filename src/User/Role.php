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
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : Role
    {
        $this->setProperty(
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
     * @param mixed $assignmentType The assignmentType to set.
     * @return self
     */
    function setAssignmentType($assignmentType) : Role
    {
        $this->setProperty(
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
            self::ID
        );
    }
    
    /**
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return \Okta\Role\RoleType
     */
    function getType() : \Okta\Role\RoleType
    {
        return $this->getProperty(
            self::TYPE
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
            self::LABEL
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
     * @return \Okta\User\RoleStatus
     */
    function getStatus() : \Okta\User\RoleStatus
    {
        return $this->getProperty(
            self::STATUS
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
            self::EMBEDDED
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
     * @param mixed $assignmentType The assignmentType to set.
     * @return \Okta\Role\RoleAssignmentType
     */
    function getAssignmentType() : \Okta\Role\RoleAssignmentType
    {
        return $this->getProperty(
            self::ASSIGNMENT_TYPE
        );
    }
    
    /**
     * 
     */
    function addAdminGroupTarget($groupId, $targetGroupId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/${groupId}/roles/".$this->id."/targets/groups/${targetGroupId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Add App Instance Target to App Administrator Role given to a Group
     */
    function addAppInstanceTargetToAdminRole($groupId, $appName, $applicationId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/${groupId}/roles/".$this->id."/targets/catalog/apps/${appName}/${applicationId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function addAppTargetToAdminRole($groupId, $appName)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/${groupId}/roles/".$this->id."/targets/catalog/apps/${appName}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function addAllAppsAsTargetToRole($userId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/${userId}/roles/".$this->id."/targets/catalog/apps"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Add App Instance Target to App Administrator Role given to a User
     */
    function addAppTargetToAppAdminRoleForUser($userId, $appName, $applicationId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/${userId}/roles/".$this->id."/targets/catalog/apps/${appName}/${applicationId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Success
     */
    function addAppTargetToAdminRoleForUser($userId, $appName)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/${userId}/roles/".$this->id."/targets/catalog/apps/${appName}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->executeRequest();
    }

}