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

class InlineHook {

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
    function listInlineHooks(array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/inlineHooks"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\InlineHook\InlineHook(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\InlineHook\InlineHook::class);
        return $collection;
    }

    /**
     * Success
     */
    function createInlineHook(\Okta\InlineHook\InlineHook $inlineHook) : \Okta\InlineHook\InlineHook 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/inlineHooks"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($inlineHook)
            ->executeRequest();

        $responseModel = new \Okta\InlineHook\InlineHook(null, $body);
        return $responseModel;
    }

    /**
     * Deletes the Inline Hook matching the provided id. Once deleted, the Inline Hook is unrecoverable. As a safety precaution, only Inline Hooks with a status of INACTIVE are eligible for deletion.
     */
    function deleteInlineHook($inlineHookId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/inlineHooks/${inlineHookId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Gets an inline hook by ID
     */
    function getInlineHook($inlineHookId) : \Okta\InlineHook\InlineHook 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/inlineHooks/${inlineHookId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\InlineHook\InlineHook(null, $body);
        return $responseModel;
    }

    /**
     * Updates an inline hook by ID
     */
    function updateInlineHook($inlineHookId, \Okta\InlineHook\InlineHook $inlineHook) : \Okta\InlineHook\InlineHook 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/inlineHooks/${inlineHookId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($inlineHook)
            ->executeRequest();

        $responseModel = new \Okta\InlineHook\InlineHook(null, $body);
        return $responseModel;
    }

    /**
     * Executes the Inline Hook matching the provided inlineHookId using the request body as the input. This will send the provided data through the Channel and return a response if it matches the correct data contract. This execution endpoint should only be used for testing purposes.
     */
    function executeInlineHook($inlineHookId, \Okta\InlineHook\InlineHookPayload $payloadData) : \Okta\InlineHook\InlineHookResponse 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/inlineHooks/${inlineHookId}/execute"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($payloadData)
            ->executeRequest();

        $responseModel = new \Okta\InlineHook\InlineHookResponse(null, $body);
        return $responseModel;
    }

    /**
     * Activates the Inline Hook matching the provided id
     */
    function activateInlineHook($inlineHookId) : \Okta\InlineHook\InlineHook 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/inlineHooks/${inlineHookId}/lifecycle/activate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\InlineHook\InlineHook(null, $body);
        return $responseModel;
    }

    /**
     * Deactivates the Inline Hook matching the provided id
     */
    function deactivateInlineHook($inlineHookId) : \Okta\InlineHook\InlineHook 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/inlineHooks/${inlineHookId}/lifecycle/deactivate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\InlineHook\InlineHook(null, $body);
        return $responseModel;
    }

}