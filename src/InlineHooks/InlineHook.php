<?php
/*******************************************************************************
 * Copyright 2017-Present Okta, Inc.
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

namespace Okta\InlineHooks;

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

    public function create($query = [])
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->createResource(
                    "/inlineHooks",
                    $this,
                    \Okta\InlineHooks\InlineHook::class,
                    $query
                );
    }

    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\InlineHooks\InlineHook::class,
                        "/inlineHooks"
                    );
    }
        
    public function save()
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->saveResource(
                    "/inlineHooks",
                    $this,
                    \Okta\InlineHooks\InlineHook::class
                );
    }


    public function delete() //test
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->deleteResource(
                    "/inlineHooks",
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
     * Get the type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->getProperty(self::TYPE);
    }

    /**
    * Set the type.
    *
    * @param mixed $type The value to set.
    * @return self
    */
    public function setType($type)
    {
        $this->setProperty(
            self::TYPE,
            $type
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
     * @return \Okta\InlineHooks\InlineHookChannel
     */
    public function getChannel(array $options = []): \Okta\InlineHooks\InlineHookChannel
    {
        return $this->getResourceProperty(
            self::CHANNEL,
            \Okta\InlineHooks\InlineHookChannel::class,
            $options
        );
    }

    /**
     * Set the channel.
     *
     * @param \Okta\InlineHooks\InlineHookChannel $channel The InlineHookChannel instance.
     * @return self
     */
    public function setChannel(\Okta\InlineHooks\InlineHookChannel $channel)
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
     * Get the version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->getProperty(self::VERSION);
    }

    /**
    * Set the version.
    *
    * @param mixed $version The value to set.
    * @return self
    */
    public function setVersion($version)
    {
        $this->setProperty(
            self::VERSION,
            $version
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
    * Activates the Inline Hook matching the provided id
    *
    * @return mixed|null
    */
    public function activate()
    {
        $uri = "/api/v1/inlineHooks/{$this->getId()}/lifecycle/activate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\InlineHooks\InlineHook(null, $body);
    }


    /**
    * Deactivates the Inline Hook matching the provided id
    *
    * @return mixed|null
    */
    public function deactivate()
    {
        $uri = "/api/v1/inlineHooks/{$this->getId()}/lifecycle/deactivate";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\InlineHooks\InlineHook(null, $body);
    }


    /**
    * Executes the Inline Hook matching the provided inlineHookId using the request body as the input. This will send the provided data through the Channel and return a response if it matches the correct data contract. This execution endpoint should only be used for testing purposes.
    *
    * @return mixed|null
    */
    public function execute(InlineHookPayload $inlineHookPayload)
    {
        $uri = "/api/v1/inlineHooks/{$this->getId()}/execute";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri, $inlineHookPayload);

        return new \Okta\InlineHooks\InlineHookResponse(null, $body);
    }
}
