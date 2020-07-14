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



}