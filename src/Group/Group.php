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
            self::ID,
        );
    }
    
    /**
     * Get the Type.
     *
     * @return \Okta\Group\GroupType
     */
    function getType() : \Okta\Group\GroupType
    {
        return $this->getEnumProperty(
            self::TYPE,
            \Okta\Group\GroupType::class,
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
            self::EMBEDDED,
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
            self::OBJECT_CLASS,
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


}