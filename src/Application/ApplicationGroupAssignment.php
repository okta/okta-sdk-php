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

class ApplicationGroupAssignment extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const LINKS = '_links';
    const PROFILE = 'profile';
    const PRIORITY = 'priority';
    const EMBEDDED = '_embedded';
    const LAST_UPDATED = 'lastUpdated';


    /**
     * Set the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return self
     */
    function setProfile($profile) : ApplicationGroupAssignment
    {
        $this->setProperty(
            self::PROFILE,
            $profile
        );
    
        return $this;
    }
    
    /**
     * Set the Priority.
     *
     * @param mixed $priority The priority to set.
     * @return self
     */
    function setPriority($priority) : ApplicationGroupAssignment
    {
        $this->setProperty(
            self::PRIORITY,
            $priority
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
     * Get the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return \stdClass
     */
    function getProfile() : \stdClass
    {
        return $this->getProperty(
            self::PROFILE,
        );
    }
    
    /**
     * Get the Priority.
     *
     * @param mixed $priority The priority to set.
     * @return int
     */
    function getPriority() : int
    {
        return $this->getProperty(
            self::PRIORITY,
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
     * Removes a group assignment from an application.
     */
    function delete($appId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/apps/${appId}/groups/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }

}