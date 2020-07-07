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

class FactorType extends \Okta\Utilities\Enum
{
    const CALL = 'call';
    const EMAIL = 'email';
    const PUSH = 'push';
    const QUESTION = 'question';
    const SMS = 'sms';
    const TOKEN_HARDWARE = 'token:hardware';
    const TOKEN_HOTP = 'token:hotp';
    const TOKEN_SOFTWARE_TOTP = 'token:software:totp';
    const TOKEN = 'token';
    const U_2_F = 'u2f';
    const WEB = 'web';
    const WEBAUTHN = 'webauthn';


}