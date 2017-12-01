<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\Generated\Applications;

use Okta\Utilities\Enum;

class ApplicationSignOnMode extends Enum
{
    const AUTO_LOGIN = 'AUTO_LOGIN';
    const BASIC_AUTH = 'BASIC_AUTH';
    const BOOKMARK = 'BOOKMARK';
    const BROWSER_PLUGIN = 'BROWSER_PLUGIN';
    const OPENID_CONNECT = 'OPENID_CONNECT';
    const SAML_2_0 = 'SAML_2_0';
    const SECURE_PASSWORD_STORE = 'SECURE_PASSWORD_STORE';
    const WS_FEDERATION = 'WS_FEDERATION';
}
