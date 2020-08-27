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

namespace Okta\Clients;

class EventHook {

    /**
     * The DataStore we are going to use for our Client
     * @var \Okta\DataStore\DefaultDataStore
     */
    protected $dataStore;

    public function __construct(\Okta\DataStore\DefaultDataStore $dataStore)
    {
        $this->dataStore = $dataStore;
    }

    /**
     * Success
     */
    function listEventHooks() : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/eventHooks"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\EventHook\EventHook(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\EventHook\EventHook::class);
        return $collection;
    }

    /**
     * Success
     */
    function createEventHook(\Okta\EventHook\EventHook $eventHook) : \Okta\EventHook\EventHook 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/eventHooks"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($eventHook)
            ->executeRequest();

        $responseModel = new \Okta\EventHook\EventHook(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function deleteEventHook($eventHookId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/eventHooks/${eventHookId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Success
     */
    function getEventHook($eventHookId) : \Okta\EventHook\EventHook 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/eventHooks/${eventHookId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\EventHook\EventHook(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function updateEventHook($eventHookId, \Okta\EventHook\EventHook $eventHook) : \Okta\EventHook\EventHook 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/eventHooks/${eventHookId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($eventHook)
            ->executeRequest();

        $responseModel = new \Okta\EventHook\EventHook(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function activateEventHook($eventHookId) : \Okta\EventHook\EventHook 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/eventHooks/${eventHookId}/lifecycle/activate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\EventHook\EventHook(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function deactivateEventHook($eventHookId) : \Okta\EventHook\EventHook 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/eventHooks/${eventHookId}/lifecycle/deactivate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\EventHook\EventHook(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function verifyEventHook($eventHookId) : \Okta\EventHook\EventHook 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/eventHooks/${eventHookId}/lifecycle/verify"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\EventHook\EventHook(null, $body);
        return $responseModel;
    }

}