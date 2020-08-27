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

class LinkedObject {

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
    function listLinkedObjectDefinitions() : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/meta/schemas/user/linkedObjects"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\LinkedObject\LinkedObject(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\LinkedObject\LinkedObject::class);
        return $collection;
    }

    /**
     * Success
     */
    function addLinkedObjectDefinition(\Okta\LinkedObject\LinkedObject $linkedObject) : \Okta\LinkedObject\LinkedObject 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/meta/schemas/user/linkedObjects"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($linkedObject)
            ->executeRequest();

        $responseModel = new \Okta\LinkedObject\LinkedObject(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function deleteLinkedObjectDefinition($linkedObjectName)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/meta/schemas/user/linkedObjects/${linkedObjectName}"
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
    function getLinkedObjectDefinition($linkedObjectName) : \Okta\LinkedObject\LinkedObject 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/meta/schemas/user/linkedObjects/${linkedObjectName}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\LinkedObject\LinkedObject(null, $body);
        return $responseModel;
    }

}