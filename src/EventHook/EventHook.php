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

namespace Okta\EventHook;

class EventHook extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const LINKS = '_links';
    const EVENTS = 'events';
    const STATUS = 'status';
    const CHANNEL = 'channel';
    const CREATED = 'created';
    const CREATED_BY = 'createdBy';
    const LAST_UPDATED = 'lastUpdated';
    const VERIFICATION_STATUS = 'verificationStatus';


    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : EventHook
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Events.
     *
     * @param mixed $events The events to set.
     * @return self
     */
    function setEvents(\Okta\EventHook\EventSubscriptions $events) : EventHook
    {
        $this->setResourceProperty(
            self::EVENTS,
            $events
        );
    
        return $this;
    }

    /**
     * Set the Status.
     *
     * @param mixed $status The status to set.
     * @return self
     */
    function setStatus($status) : EventHook
    {
        $this->setProperty(
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
    function setChannel(\Okta\EventHook\EventHookChannel $channel) : EventHook
    {
        $this->setResourceProperty(
            self::CHANNEL,
            $channel
        );
    
        return $this;
    }

    /**
     * Set the CreatedBy.
     *
     * @param mixed $createdBy The createdBy to set.
     * @return self
     */
    function setCreatedBy($createdBy) : EventHook
    {
        $this->setProperty(
            self::CREATED_BY,
            $createdBy
        );
    
        return $this;
    }
    
    /**
     * Set the VerificationStatus.
     *
     * @param mixed $verificationStatus The verificationStatus to set.
     * @return self
     */
    function setVerificationStatus($verificationStatus) : EventHook
    {
        $this->setProperty(
            self::VERIFICATION_STATUS,
            $verificationStatus
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
     * Get the Events.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\EventHook\EventSubscriptions
     */
    function getEvents(array $options = []) : \Okta\EventHook\EventSubscriptions
    {
        return $this->getResourceProperty(
            self::EVENTS,
            \Okta\EventHook\EventSubscriptions::class,
            $options
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
     * Get the Channel.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\EventHook\EventHookChannel
     */
    function getChannel(array $options = []) : \Okta\EventHook\EventHookChannel
    {
        return $this->getResourceProperty(
            self::CHANNEL,
            \Okta\EventHook\EventHookChannel::class,
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
     * Get the VerificationStatus.
     *
     * @param mixed $verificationStatus The verificationStatus to set.
     * @return string
     */
    function getVerificationStatus() : string
    {
        return $this->getProperty(
            self::VERIFICATION_STATUS,
        );
    }
    

}