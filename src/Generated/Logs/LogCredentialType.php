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

namespace Okta\Generated\Logs;

use Okta\Utilities\Enum;

class LogCredentialType extends Enum
{
    const ASSERTION = 'ASSERTION';
    const EMAIL = 'EMAIL';
    const IWA = 'IWA';
    const JWT = 'JWT';
    const OAUTH_2 = 'OAUTH2';
    const OTP = 'OTP';
    const PASSWORD = 'PASSWORD';
    const SMS = 'SMS';
}
