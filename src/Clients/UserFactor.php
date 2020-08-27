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

class UserFactor {

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
     * Enumerates all the enrolled factors for the specified user
     */
    function listFactors($userId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/factors"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\UserFactor\UserFactor(null, $item);
            $responseModel = $responseModel->resolve();
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\UserFactor\UserFactor::class);
        return $collection;
    }

    /**
     * Enrolls a user with a supported factor.
     */
    function enrollFactor($userId, \Okta\UserFactor\UserFactor $body, array $queryParameters = []) : \Okta\UserFactor\UserFactor 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/factors"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($body)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\UserFactor\UserFactor(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Enumerates all the supported factors that can be enrolled for the specified user
     */
    function listSupportedFactors($userId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/factors/catalog"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\UserFactor\UserFactor(null, $item);
            $responseModel = $responseModel->resolve();
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\UserFactor\UserFactor::class);
        return $collection;
    }

    /**
     * Enumerates all available security questions for a user&#x27;s &#x60;question&#x60; factor
     */
    function listSupportedSecurityQuestions($userId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/factors/questions"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\UserFactor\SecurityQuestion(null, $item);
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\UserFactor\SecurityQuestion::class);
        return $collection;
    }

    /**
     * Unenrolls an existing factor for the specified user, allowing the user to enroll a new factor.
     */
    function deleteFactor($userId, $factorId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/factors/${factorId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Fetches a factor for the specified user
     */
    function getFactor($userId, $factorId) : \Okta\UserFactor\UserFactor 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/factors/${factorId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\UserFactor\UserFactor(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * The &#x60;sms&#x60; and &#x60;token:software:totp&#x60; factor types require activation to complete the enrollment process.
     */
    function activateFactor($userId, $factorId, \Okta\UserFactor\ActivateFactorRequest $body = null) : \Okta\UserFactor\UserFactor 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/factors/${factorId}/lifecycle/activate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($body)
            ->executeRequest();

        $responseModel = new \Okta\UserFactor\UserFactor(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Polls factors verification transaction for status.
     */
    function getFactorTransactionStatus($userId, $factorId, $transactionId) : \Okta\UserFactor\VerifyUserFactorResponse 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/factors/${factorId}/transactions/${transactionId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\UserFactor\VerifyUserFactorResponse(null, $body);
        return $responseModel;
    }

    /**
     * Verifies an OTP for a &#x60;token&#x60; or &#x60;token:hardware&#x60; factor
     */
    function verifyFactor($userId, $factorId, \Okta\UserFactor\VerifyFactorRequest $body = null, array $headers = [], array $queryParameters = []) : \Okta\UserFactor\VerifyUserFactorResponse 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/users/${userId}/factors/${factorId}/verify"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($body)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\UserFactor\VerifyUserFactorResponse(null, $body);
        return $responseModel;
    }

}