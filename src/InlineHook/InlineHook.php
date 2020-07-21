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

namespace Okta\InlineHook;

class InlineHook extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const TYPE = 'type';
    const LINKS = '_links';
    const STATUS = 'status';
    const CHANNEL = 'channel';
    const CREATED = 'created';
    const VERSION = 'version';
    const LAST_UPDATED = 'lastUpdated';


    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : InlineHook
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Type.
     *
     * @return self
     */
    function setType(\Okta\InlineHook\InlineHookType $type) : InlineHook
    {
        $this->setEnumProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }

    /**
     * Set the Status.
     *
     * @return self
     */
    function setStatus(\Okta\InlineHook\InlineHookStatus $status) : InlineHook
    {
        $this->setEnumProperty(
            self::STATUS,
            $status
        );
    
        return $this;
    }

    /**
     * Set the Channel.
     *
     * @param mixed $channel The channel to set.
     * @return self
     */
    function setChannel(\Okta\InlineHook\InlineHookChannel $channel) : InlineHook
    {
        $this->setResourceProperty(
            self::CHANNEL,
            $channel
        );
    
        return $this;
    }

    /**
     * Set the Version.
     *
     * @param mixed $version The version to set.
     * @return self
     */
    function setVersion($version) : InlineHook
    {
        $this->setProperty(
            self::VERSION,
            $version
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
     * Get the Type.
     *
     * @return \Okta\InlineHook\InlineHookType
     */
    function getType() : \Okta\InlineHook\InlineHookType
    {
        return $this->getEnumProperty(
            self::TYPE,
            \Okta\InlineHook\InlineHookType::class,
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
     * @return \Okta\InlineHook\InlineHookStatus
     */
    function getStatus() : \Okta\InlineHook\InlineHookStatus
    {
        return $this->getEnumProperty(
            self::STATUS,
            \Okta\InlineHook\InlineHookStatus::class,
        );
    }

    /**
     * Get the Channel.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\InlineHook\InlineHookChannel
     */
    function getChannel(array $options = []) : \Okta\InlineHook\InlineHookChannel
    {
        return $this->getResourceProperty(
            self::CHANNEL,
            \Okta\InlineHook\InlineHookChannel::class,
            $options
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
     * Get the Version.
     *
     * @param mixed $version The version to set.
     * @return string
     */
    function getVersion() : string
    {
        return $this->getProperty(
            self::VERSION,
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


}