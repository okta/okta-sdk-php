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

namespace Okta\Group;

class Group extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const TYPE = 'type';
    const LINKS = '_links';
    const CREATED = 'created';
    const PROFILE = 'profile';
    const EMBEDDED = '_embedded';
    const LAST_UPDATED = 'lastUpdated';
    const OBJECT_CLASS = 'objectClass';
    const LAST_MEMBERSHIP_UPDATED = 'lastMembershipUpdated';

    /**
     * Set the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return self
     */
    function setProfile(\Okta\Group\GroupProfile $profile) : Group
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
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
     * @return \Okta\Group\GroupType
     */
    function getType() : \Okta\Group\GroupType
    {
        return $this->getProperty(
            self::TYPE
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
     * Get the Profile.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Group\GroupProfile
     */
    function getProfile(array $options = []) : \Okta\Group\GroupProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\Group\GroupProfile::class,
            $options
        );
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
     * Get the ObjectClass.
     *
     * @param mixed $objectClass The objectClass to set.
     * @return array
     */
    function getObjectClass() : array
    {
        return $this->getProperty(
            self::OBJECT_CLASS
        );
    }
    
    /**
     * Get the LastMembershipUpdated.
     *
     * @param mixed $lastMembershipUpdated The lastMembershipUpdated to set.
     * @return \Carbon\Carbon
     */
    function getLastMembershipUpdated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_MEMBERSHIP_UPDATED
        );
    
        return $this;
    }

    /**
     * Updates the profile for a group with `OKTA_GROUP` type from your organization.
     */
    function update() : \Okta\Group\Group 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($this)
                ->executeRequest();
        return new \Okta\Group\Group(null, $body);
    }
    /**
     * Removes a group with `OKTA_GROUP` type from your organization.
     */
    function delete()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Removes a user from a group with 'OKTA_GROUP' type.
     */
    function removeUser($userId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/".$this->id."/users/${userId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Enumerates all users that are a member of a group.
     */
    function listUsers(array $queryParameters = []) : \Okta\User\User 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/".$this->id."/users"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\User(null, $body);
    }
    /**
     * Enumerates all applications that are assigned to a group.
     */
    function listApplications(array $queryParameters = []) : \Okta\Application\Application 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/".$this->id."/apps"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Application\Application(null, $body);
    }
    /**
     * Assigns a Role to a Group
     */
    function assignRole(array $queryParameters = []) : \Okta\User\Role 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/groups/".$this->id."/roles"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\User\Role(null, $body);
    }

}