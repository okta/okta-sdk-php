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

namespace Okta\Roles;

use Okta\Utilities\Enum;

class RoleType extends Enum
{
    const API_ACCESS_MANAGEMENT_ADMIN = 'API_ACCESS_MANAGEMENT_ADMIN';
    const APP_ADMIN = 'APP_ADMIN';
    const HELP_DESK_ADMIN = 'HELP_DESK_ADMIN';
    const MOBILE_ADMIN = 'MOBILE_ADMIN';
    const ORG_ADMIN = 'ORG_ADMIN';
    const READ_ONLY_ADMIN = 'READ_ONLY_ADMIN';
    const REPORT_ADMIN = 'REPORT_ADMIN';
    const SUPER_ADMIN = 'SUPER_ADMIN';
    const USER_ADMIN = 'USER_ADMIN';
}
