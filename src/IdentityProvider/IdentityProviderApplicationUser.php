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

namespace Okta\IdentityProvider;

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
     * Set the Created.
     *
     * @param mixed $created The created to set.
     * @return self
     */
    function setCreated($created) : IdentityProviderApplicationUser
    {
        $this->setProperty(
            self::CREATED,
            $created
        );
    
        return $this;
    }
    
    /**
     * Set the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return self
     */
    function setProfile($profile) : IdentityProviderApplicationUser
    {
        $this->setProperty(
            self::PROFILE,
            $profile
        );
    
        return $this;
    }
    
    /**
     * Set the ExternalId.
     *
     * @param mixed $externalId The externalId to set.
     * @return self
     */
    function setExternalId($externalId) : IdentityProviderApplicationUser
    {
        $this->setProperty(
            self::EXTERNAL_ID,
            $externalId
        );
    
        return $this;
    }
    
    /**
     * Set the LastUpdated.
     *
     * @param mixed $lastUpdated The lastUpdated to set.
     * @return self
     */
    function setLastUpdated($lastUpdated) : IdentityProviderApplicationUser
    {
        $this->setProperty(
            self::LAST_UPDATED,
            $lastUpdated
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
     * @return string
     */
    function getCreated() : string
    {
        return $this->getProperty(
            self::CREATED
        );
    }
    
    /**
     * Get the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return \stdClass
     */
    function getProfile() : \stdClass
    {
        return $this->getProperty(
            self::PROFILE
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
     * Get the ExternalId.
     *
     * @param mixed $externalId The externalId to set.
     * @return string
     */
    function getExternalId() : string
    {
        return $this->getProperty(
            self::EXTERNAL_ID
        );
    }
    
    /**
     * Get the LastUpdated.
     *
     * @param mixed $lastUpdated The lastUpdated to set.
     * @return string
     */
    function getLastUpdated() : string
    {
        return $this->getProperty(
            self::LAST_UPDATED
        );
    }
    

}