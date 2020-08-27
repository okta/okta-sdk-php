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

class Policy {

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
     * Gets all policies with the specified type.
     */
    function listPolicies(array $queryParameters = []) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Policy\Policy(null, $item);
            $responseModel = $responseModel->resolve();
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Policy\Policy::class);
        return $collection;
    }

    /**
     * Creates a policy.
     */
    function createPolicy(\Okta\Policy\Policy $policy, array $queryParameters = []) : \Okta\Policy\Policy 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($policy)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Policy\Policy(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Removes a policy.
     */
    function deletePolicy($policyId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies/${policyId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Gets a policy.
     */
    function getPolicy($policyId, array $queryParameters = []) : \Okta\Policy\Policy 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies/${policyId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->setQueryParams($queryParameters)
            ->executeRequest();

        $responseModel = new \Okta\Policy\Policy(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Updates a policy.
     */
    function updatePolicy(\Okta\Policy\Policy $policy, $policyId) : \Okta\Policy\Policy 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies/${policyId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($policy)
            ->executeRequest();

        $responseModel = new \Okta\Policy\Policy(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Activates a policy.
     */
    function activatePolicy($policyId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies/${policyId}/lifecycle/activate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Deactivates a policy.
     */
    function deactivatePolicy($policyId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies/${policyId}/lifecycle/deactivate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Enumerates all policy rules.
     */
    function listPolicyRules($policyId) : \Okta\Resource\Collection 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies/${policyId}/rules"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $items = [];
        foreach($body as $item) {
            $responseModel = new \Okta\Policy\PolicyRule(null, $item);
            $responseModel = $responseModel->resolve();
            $items[] = $responseModel;
        }
        $collection = new \Okta\Resource\Collection($items);
        $collection->setDataStore($this->dataStore);
        $collection->setResponseModel(\Okta\Policy\PolicyRule::class);
        return $collection;
    }

    /**
     * Creates a policy rule.
     */
    function createPolicyRule($policyId, \Okta\Policy\PolicyRule $policyRule) : \Okta\Policy\PolicyRule 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies/${policyId}/rules"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->setRequestBody($policyRule)
            ->executeRequest();

        $responseModel = new \Okta\Policy\PolicyRule(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Removes a policy rule.
     */
    function deletePolicyRule($policyId, $ruleId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies/${policyId}/rules/${ruleId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("DELETE")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Gets a policy rule.
     */
    function getPolicyRule($policyId, $ruleId) : \Okta\Policy\PolicyRule 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies/${policyId}/rules/${ruleId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("GET")
            ->setUri($uri)
            ->executeRequest();

        $responseModel = new \Okta\Policy\PolicyRule(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Updates a policy rule.
     */
    function updatePolicyRule($policyId, $ruleId, \Okta\Policy\PolicyRule $policyRule) : \Okta\Policy\PolicyRule 
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies/${policyId}/rules/${ruleId}"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("PUT")
            ->setUri($uri)
            ->setRequestBody($policyRule)
            ->executeRequest();

        $responseModel = new \Okta\Policy\PolicyRule(null, $body);
        $responseModel = $responseModel->resolve();
        return $responseModel;
    }

    /**
     * Activates a policy rule.
     */
    function activatePolicyRule($policyId, $ruleId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies/${policyId}/rules/${ruleId}/lifecycle/activate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

    /**
     * Deactivates a policy rule.
     */
    function deactivatePolicyRule($policyId, $ruleId)
    {
        $uri = $this->dataStore->buildUri(
            "/api/v1/policies/${policyId}/rules/${ruleId}/lifecycle/deactivate"
        );

        $body = $this
            ->dataStore
            ->setRequestMethod("POST")
            ->setUri($uri)
            ->executeRequest();

    }

}