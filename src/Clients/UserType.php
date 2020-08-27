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

class UserType {

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
     * Fetches all User Types in your org
     */
    function listUserTypes() : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/meta/types/user"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\UserType\UserType(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\UserType\UserType::class);
        return $collection;
    }

    /**
     * Creates a new User Type. A default User Type is automatically created along with your org, and you may add another 9 User Types for a maximum of 10.
     */
    function createUserType(\Okta\UserType\UserType $userType) : \Okta\UserType\UserType 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/meta/types/user"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($userType)
            ->executeRequest();

        $responseModel = new \Okta\UserType\UserType(null, $body);
        return $responseModel;
    }

    /**
     * Deletes a User Type permanently. This operation is not permitted for the default type, nor for any User Type that has existing users
     */
    function deleteUserType($typeId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/meta/types/user/${typeId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Fetches a User Type by ID. The special identifier &#x60;default&#x60; may be used to fetch the default User Type.
     */
    function getUserType($typeId) : \Okta\UserType\UserType 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/meta/types/user/${typeId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\UserType\UserType(null, $body);
        return $responseModel;
    }

    /**
     * Updates an existing User Type
     */
    function updateUserType($typeId, \Okta\UserType\UserType $userType) : \Okta\UserType\UserType 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/meta/types/user/${typeId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($userType)
            ->executeRequest();

        $responseModel = new \Okta\UserType\UserType(null, $body);
        return $responseModel;
    }

    /**
     * Replace an existing User Type
     */
    function replaceUserType($typeId, \Okta\UserType\UserType $userType) : \Okta\UserType\UserType 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/meta/types/user/${typeId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($userType)
            ->executeRequest();

        $responseModel = new \Okta\UserType\UserType(null, $body);
        return $responseModel;
    }

}