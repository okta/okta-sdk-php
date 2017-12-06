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

class ApplicationCredentialsScheme extends Enum
{
    const ADMIN_SETS_CREDENTIALS = 'ADMIN_SETS_CREDENTIALS';
    const EDIT_PASSWORD_ONLY = 'EDIT_PASSWORD_ONLY';
    const EDIT_USERNAME_AND_PASSWORD = 'EDIT_USERNAME_AND_PASSWORD';
    const EXTERNAL_PASSWORD_SYNC = 'EXTERNAL_PASSWORD_SYNC';
    const SHARED_USERNAME_AND_PASSWORD = 'SHARED_USERNAME_AND_PASSWORD';
}
