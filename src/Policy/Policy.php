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

namespace Okta\Policy;

class Policy extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const TYPE = 'type';
    const LINKS = '_links';
    const STATUS = 'status';
    const SYSTEM = 'system';
    const CREATED = 'created';
    const PRIORITY = 'priority';
    const EMBEDDED = '_embedded';
    const CONDITIONS = 'conditions';
    const DESCRIPTION = 'description';
    const LAST_UPDATED = 'lastUpdated';

    protected $requiresResolution = true;
    protected $resolutionPropertyName = "type";
    protected $resolutionMapping = [
        "IDP_DISCOVERY" => \Okta\Policy\IdentityProviderPolicy::class,
        "OAUTH_AUTHORIZATION_POLICY" => \Okta\Policy\OAuthAuthorizationPolicy::class,
        "OKTA_SIGN_ON" => \Okta\Policy\OktaSignOnPolicy::class,
        "PASSWORD" => \Okta\Policy\PasswordPolicy::class,
    ];


    /**
     * Gets a policy.
     */
    function read(array $queryParameters = []) : \Okta\Policy\Policy 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\Policy\Policy(null, $body);
    }
    /**
     * Updates a policy.
     */
    function update() : \Okta\Policy\Policy 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($this)
                ->executeRequest();
        return new \Okta\Policy\Policy(null, $body);
    }
    /**
     * Removes a policy.
     */
    function delete()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Activates a policy.
     */
    function activate()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id."/lifecycle/activate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Deactivates a policy.
     */
    function deactivate()
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id."/lifecycle/deactivate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Enumerates all policy rules.
     */
    function listPolicyRules() : \Okta\Policy\PolicyRule 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id."/rules"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Policy\PolicyRule(null, $body);
    }
    /**
     * Creates a policy rule.
     */
    function createRule(\Okta\Policy\PolicyRule $policyRule) : \Okta\Policy\PolicyRule 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id."/rules"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($policyRule)
                ->executeRequest();
        return new \Okta\Policy\PolicyRule(null, $body);
    }
    /**
     * Gets a policy rule.
     */
    function getPolicyRule($ruleId) : \Okta\Policy\PolicyRule 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/".$this->id."/rules/${ruleId}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\Policy\PolicyRule(null, $body);
    }

}