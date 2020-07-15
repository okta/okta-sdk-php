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

class Log {

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
     * The Okta System Log API provides read access to your organization’s system log. This API provides more functionality than the Events API
     */
    function getLogs(array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/logs"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Log\LogEvent(null, $item);
            $items[] = $responseModel;
        }
        return new \Okta\Resource\Collection($items);
    }

}