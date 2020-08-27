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

class Feature {

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
    function listFeatures() : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/features"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Feature\Feature(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Feature\Feature::class);
        return $collection;
    }

    /**
     * Success
     */
    function getFeature($featureId) : \Okta\Feature\Feature 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/features/${featureId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\Feature\Feature(null, $body);
        return $responseModel;
    }

    /**
     * Success
     */
    function listFeatureDependencies($featureId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/features/${featureId}/dependencies"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Feature\Feature(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Feature\Feature::class);
        return $collection;
    }

    /**
     * Success
     */
    function listFeatureDependents($featureId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/features/${featureId}/dependents"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Feature\Feature(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Feature\Feature::class);
        return $collection;
    }

    /**
     * Success
     */
    function updateFeatureLifecycle($featureId, $lifecycle, array $queryParameters = []) : \Okta\Feature\Feature 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/features/${featureId}/${lifecycle}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Feature\Feature(null, $body);
        return $responseModel;
    }

}