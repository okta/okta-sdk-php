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

namespace Okta\UserFactors;

use Okta\Utilities\Enum;

class FactorType extends Enum
{
    const CALL = 'call';
    const EMAIL = 'email';
    const PUSH = 'push';
    const QUESTION = 'question';
    const SMS = 'sms';
    const TOKEN = 'token';
    const TOKEN_HARDWARE = 'token:hardware';
    const TOKEN_HOTP = 'token:hotp';
    const TOKEN_SOFTWARE_TOTP = 'token:software:totp';
    const U_2_F = 'u2f';
    const WEB = 'web';
    const WEBAUTHN = 'webauthn';

    public function mapToFactorType()
    {
        switch ($this->getValue()) {
            case 'call':
                return \Okta\UserFactors\CallUserFactor::class;
            case 'push':
                return \Okta\UserFactors\PushUserFactor::class;
            case 'question':
                return \Okta\UserFactors\SecurityQuestionUserFactor::class;
            case 'sms':
                return \Okta\UserFactors\SmsUserFactor::class;
            case 'token':
            case 'token:hardware':
                return \Okta\UserFactors\TokenUserFactor::class;
            case 'token:software:totp':
                return \Okta\UserFactors\TotpUserFactor::class;
            case 'web':
                return \Okta\UserFactors\WebUserFactor::class;
            default:
                return \Okta\UserFactors\UserFactor::class;
        }
    }
}
