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

namespace Okta\UserFactor;

class UserFactor extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const LINKS = '_links';
    const STATUS = 'status';
    const VERIFY = 'verify';
    const CREATED = 'created';
    const PROVIDER = 'provider';
    const EMBEDDED = '_embedded';
    const FACTOR_TYPE = 'factorType';
    const LAST_UPDATED = 'lastUpdated';

    protected $requiresResolution = true;
    protected $resolutionPropertyName = "factorType";
    protected $resolutionMapping = [
        "call" => \Okta\UserFactor\CallUserFactor::class,
        "email" => \Okta\UserFactor\EmailUserFactor::class,
        "push" => \Okta\UserFactor\PushUserFactor::class,
        "question" => \Okta\UserFactor\SecurityQuestionUserFactor::class,
        "sms" => \Okta\UserFactor\SmsUserFactor::class,
        "token" => \Okta\UserFactor\TokenUserFactor::class,
        "token:hardware" => \Okta\UserFactor\HardwareUserFactor::class,
        "token:software:totp" => \Okta\UserFactor\TotpUserFactor::class,
        "u2f" => \Okta\UserFactor\U2fUserFactor::class,
        "web" => \Okta\UserFactor\WebUserFactor::class,
        "webauthn" => \Okta\UserFactor\WebAuthnUserFactor::class,
    ];


    /**
     * Unenrolls an existing factor for the specified user, allowing the user to enroll a new factor.
     */
    function delete($userId)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/${userId}/factors/".$this->id.""
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }
    /**
     * The `sms` and `token:software:totp` factor types require activation to complete the enrollment process.
     */
    function activate($userId, \Okta\UserFactor\ActivateFactorRequest $body) : \Okta\UserFactor\UserFactor 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/${userId}/factors/".$this->id."/lifecycle/activate"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($body)
                ->executeRequest();
        return new \Okta\UserFactor\UserFactor(null, $body);
    }
    /**
     * Verifies an OTP for a `token` or `token:hardware` factor
     */
    function verify($userId, \Okta\UserFactor\VerifyFactorRequest $body, $X-Forwarded-For, $User-Agent, $Accept-Language, array $queryParameters = []) : \Okta\UserFactor\VerifyUserFactorResponse 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/users/${userId}/factors/".$this->id."/verify"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody($body)
                ->setQueryParams($queryParameters)
                ->executeRequest();
        return new \Okta\UserFactor\VerifyUserFactorResponse(null, $body);
    }

}