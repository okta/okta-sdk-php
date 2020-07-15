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

namespace Okta\Application;

class Application extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const LABEL = 'label';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
    const PROFILE = 'profile';
    const FEATURES = 'features';
    const SETTINGS = 'settings';
    const EMBEDDED = '_embedded';
    const LICENSING = 'licensing';
    const SIGN_ON_MODE = 'signOnMode';
    const VISIBILITY = 'visibility';
    const CREDENTIALS = 'credentials';
    const LAST_UPDATED = 'lastUpdated';
    const ACCESSIBILITY = 'accessibility';

    protected $requiresResolution = true;
    protected $resolutionPropertyName = "signOnMode";
    protected $resolutionMapping = [
        "AUTO_LOGIN" => \Okta\Application\AutoLoginApplication::class,
        "BASIC_AUTH" => \Okta\Application\BasicAuthApplication::class,
        "BOOKMARK" => \Okta\Application\BookmarkApplication::class,
        "BROWSER_PLUGIN" => \Okta\Application\BrowserPluginApplication::class,
        "OPENID_CONNECT" => \Okta\Application\OpenIdConnectApplication::class,
        "SAML_2_0" => \Okta\Application\SamlApplication::class,
        "SECURE_PASSWORD_STORE" => \Okta\Application\SecurePasswordStoreApplication::class,
        "WS_FEDERATION" => \Okta\Application\WsFederationApplication::class,
    ];



}