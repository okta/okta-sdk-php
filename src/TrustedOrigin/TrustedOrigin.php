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

namespace Okta\TrustedOrigin;

class TrustedOrigin extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const LINKS = '_links';
    const ORIGIN = 'origin';
    const SCOPES = 'scopes';
    const STATUS = 'status';
    const CREATED = 'created';
    const CREATED_BY = 'createdBy';
    const LAST_UPDATED = 'lastUpdated';
    const LAST_UPDATED_BY = 'lastUpdatedBy';


    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : TrustedOrigin
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Origin.
     *
     * @param mixed $origin The origin to set.
     * @return self
     */
    function setOrigin($origin) : TrustedOrigin
    {
        $this->setProperty(
            self::ORIGIN,
            $origin
        );
    
        return $this;
    }
    
    /**
     * Set the Scopes.
     *
     * @param mixed $scopes The scopes to set.
     * @return self
     */
    function setScopes($scopes) : TrustedOrigin
    {
        $this->setProperty(
            self::SCOPES,
            $scopes
        );
    
        return $this;
    }
    
    /**
     * Set the Status.
     *
     * @param mixed $status The status to set.
     * @return self
     */
    function setStatus($status) : TrustedOrigin
    {
        $this->setProperty(
            self::STATUS,
            $status
        );
    
        return $this;
    }
    
    /**
     * Set the CreatedBy.
     *
     * @param mixed $createdBy The createdBy to set.
     * @return self
     */
    function setCreatedBy($createdBy) : TrustedOrigin
    {
        $this->setProperty(
            self::CREATED_BY,
            $createdBy
        );
    
        return $this;
    }
    
    /**
     * Set the LastUpdatedBy.
     *
     * @param mixed $lastUpdatedBy The lastUpdatedBy to set.
     * @return self
     */
    function setLastUpdatedBy($lastUpdatedBy) : TrustedOrigin
    {
        $this->setProperty(
            self::LAST_UPDATED_BY,
            $lastUpdatedBy
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
     * Get the Origin.
     *
     * @param mixed $origin The origin to set.
     * @return string
     */
    function getOrigin() : string
    {
        return $this->getProperty(
            self::ORIGIN,
        );
    }
    
    /**
     * Get the Scopes.
     *
     * @param mixed $scopes The scopes to set.
     * @return array
     */
    function getScopes() : array
    {
        return $this->getProperty(
            self::SCOPES,
        );
    }
    
    /**
     * Get the Status.
     *
     * @param mixed $status The status to set.
     * @return string
     */
    function getStatus() : string
    {
        return $this->getProperty(
            self::STATUS,
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