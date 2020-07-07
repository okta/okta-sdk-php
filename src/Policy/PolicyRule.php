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

class PolicyRule extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const TYPE = 'type';
    const STATUS = 'status';
    const SYSTEM = 'system';
    const CREATED = 'created';
    const PRIORITY = 'priority';
    const LAST_UPDATED = 'lastUpdated';

    protected $requiresResolution = true;
    protected $resolutionPropertyName = "type";
    protected $resolutionMapping = [
        "PASSWORD" => \Okta\Policy\PasswordPolicyRule::class,
        "SIGN_ON" => \Okta\Policy\OktaSignOnPolicyRule::class,
    ];

    private $status = 'ACTIVE';

    /**
     * Updates a policy rule.
     */
    function update($policyId) : \Okta\Policy\PolicyRule 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/${policyId}/rules/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("PUT")
                ->setUri($uri)
                ->setRequestBody($this)
                ->executeRequest();
        return new \Okta\Policy\PolicyRule(null, $body);
    }
    /**
     * Removes a policy rule.
     */
    function delete($policyId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/${policyId}/rules/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Activates a policy rule.
     */
    function activate($policyId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/${policyId}/rules/".$this->id."/lifecycle/activate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * Deactivates a policy rule.
     */
    function deactivate($policyId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/policies/${policyId}/rules/".$this->id."/lifecycle/deactivate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->executeRequest();
    }

}