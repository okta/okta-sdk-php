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

class TrustedOrigin {

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
    function listOrigins(array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/trustedOrigins"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\TrustedOrigin\TrustedOrigin(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\TrustedOrigin\TrustedOrigin::class);
        return $collection;
    }

    /**
     * Success
     */
    function createOrigin(\Okta\TrustedOrigin\TrustedOrigin $trustedOrigin) : \Okta\TrustedOrigin\TrustedOrigin 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/trustedOrigins"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($trustedOrigin)
            ->executeRequest();

        $responseModel = new \Okta\TrustedOrigin\TrustedOrigin(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function deleteOrigin($trustedOriginId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/trustedOrigins/${trustedOriginId}"
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
    function getOrigin($trustedOriginId) : \Okta\TrustedOrigin\TrustedOrigin 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/trustedOrigins/${trustedOriginId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\TrustedOrigin\TrustedOrigin(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function updateOrigin($trustedOriginId, \Okta\TrustedOrigin\TrustedOrigin $trustedOrigin) : \Okta\TrustedOrigin\TrustedOrigin 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/trustedOrigins/${trustedOriginId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($trustedOrigin)
            ->executeRequest();

        $responseModel = new \Okta\TrustedOrigin\TrustedOrigin(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function activateOrigin($trustedOriginId) : \Okta\TrustedOrigin\TrustedOrigin 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/trustedOrigins/${trustedOriginId}/lifecycle/activate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\TrustedOrigin\TrustedOrigin(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function deactivateOrigin($trustedOriginId) : \Okta\TrustedOrigin\TrustedOrigin 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/trustedOrigins/${trustedOriginId}/lifecycle/deactivate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\TrustedOrigin\TrustedOrigin(null, $body);
        return $responseModel;
    }

}