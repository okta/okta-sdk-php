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

class Session {

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
     * Creates a new session for a user with a valid session token. Use this API if, for example, you want to set the session cookie yourself instead of allowing Okta to set it, or want to hold the session ID in order to delete a session via the API instead of visiting the logout URL.
     */
    function createSession(\Okta\Session\CreateSessionRequest $createSessionRequest) : \Okta\Session\Session 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/sessions"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($createSessionRequest)
            ->executeRequest();

        $responseModel = new \Okta\Session\Session(null, $body);
        return $responseModel;
    }

    /**
     * 
     */
    function endSession($sessionId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/sessions/${sessionId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Get details about a session.
     */
    function getSession($sessionId) : \Okta\Session\Session 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/sessions/${sessionId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\Session\Session(null, $body);
        return $responseModel;
    }

    /**
     * 
     */
    function refreshSession($sessionId) : \Okta\Session\Session 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/sessions/${sessionId}/lifecycle/refresh"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\Session\Session(null, $body);
        return $responseModel;
    }

}