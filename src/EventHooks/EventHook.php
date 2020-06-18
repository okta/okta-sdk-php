<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\EventHooks;

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


    public function create($query = [])
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->createResource(
                    "/eventHooks",
                    $this,
                    \Okta\EventHooks\EventHook::class,
                    $query
                );
    }

    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\EventHooks\EventHook::class,
                        "/eventHooks"
                    );
    }
        
    public function save()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->saveResource(
                    "/eventHooks",
                    $this,
                    \Okta\EventHooks\EventHook::class
                );
    }

    public function delete()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    "/eventHooks",
                    $this
                );
    }
        
    /**
     * Get the id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->getProperty(self::NAME);
    }

    /**
    * Set the name.
    *
    * @param mixed $name The value to set.
    * @return self
    */
    public function setName($name)
    {
        $this->setProperty(
            self::NAME,
            $name
        );

        return $this;
    }

    /**
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }

    /**
     * Get the events.
     *
     * @return \Okta\EventHooks\EventSubscriptions
     */
    public function getEvents(array $options = []): \Okta\EventHooks\EventSubscriptions
    {
        return $this->getResourceProperty(
            self::EVENTS,
            \Okta\EventHooks\EventSubscriptions::class,
            $options
        );
    }


    /**
     * Set the events.
     *
     * @param \Okta\EventHooks\EventSubscriptions $events The EventSubscriptions instance.
     * @return self
     */
    public function setEvents(\Okta\EventHooks\EventSubscriptions $events)
    {
        $this->setResourceProperty(
            self::EVENTS,
            $events
        );

        return $this;
    }

    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
    * Set the status.
    *
    * @param mixed $status The value to set.
    * @return self
    */
    public function setStatus($status)
    {
        $this->setProperty(
            self::STATUS,
            $status
        );

        return $this;
    }

    /**
     * Get the channel.
     *
     * @return \Okta\EventHooks\EventHookChannel
     */
    public function getChannel(array $options = []): \Okta\EventHooks\EventHookChannel
    {
        return $this->getResourceProperty(
            self::CHANNEL,
            \Okta\EventHooks\EventHookChannel::class,
            $options
        );
    }


    /**
     * Set the channel.
     *
     * @param \Okta\EventHooks\EventHookChannel $channel The EventHookChannel instance.
     * @return self
     */
    public function setChannel(\Okta\EventHooks\EventHookChannel $channel)
    {
        $this->setResourceProperty(
            self::CHANNEL,
            $channel
        );

        return $this;
    }

    /**
     * Get the created.
     *
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
    }

    /**
     * Get the createdBy.
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->getProperty(self::CREATED_BY);
    }

    /**
    * Set the createdBy.
    *
    * @param mixed $createdBy The value to set.
    * @return self
    */
    public function setCreatedBy($createdBy)
    {
        $this->setProperty(
            self::CREATED_BY,
            $createdBy
        );

        return $this;
    }

    /**
     * Get the lastUpdated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }

    /**
     * Get the verificationStatus.
     *
     * @return string
     */
    public function getVerificationStatus()
    {
        return $this->getProperty(self::VERIFICATION_STATUS);
    }

    /**
    * Set the verificationStatus.
    *
    * @param mixed $verificationStatus The value to set.
    * @return self
    */
    public function setVerificationStatus($verificationStatus)
    {
        $this->setProperty(
            self::VERIFICATION_STATUS,
            $verificationStatus
        );

        return $this;
    }


    /**
    * Success
    *
    *
    * @return mixed|null
    */
    public function activate()
    {
        $uri = "/api/v1/eventHooks/{$this->getId()}/lifecycle/activate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\EventHooks\EventHook(null, $body);
    }


    /**
    * Success
    *
    *
    * @return mixed|null
    */
    public function deactivate()
    {
        $uri = "/api/v1/eventHooks/{$this->getId()}/lifecycle/deactivate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\EventHooks\EventHook(null, $body);
    }


    /**
    * Success
    *
    *
    * @return mixed|null
    */
    public function verify()
    {
        $uri = "/api/v1/eventHooks/{$this->getId()}/lifecycle/verify";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\EventHooks\EventHook(null, $body);
    }
}
