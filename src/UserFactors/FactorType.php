<?php
/******************************************************************************
 * Copyright 2017 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

namespace Okta\UserFactors;

class FactorType extends \Okta\Generated\UserFactors\FactorType
{
    public function mapToFactorType()
    {
        switch ($this->getValue()) {
            case 'call':
                return \Okta\UserFactors\CallFactor::class;
            case 'push':
                return \Okta\UserFactors\PushFactor::class;
            case 'question':
                return \Okta\UserFactors\SecurityQuestionFactor::class;
            case 'sms':
                return \Okta\UserFactors\SmsFactor::class;
            case 'token':
            case 'token:hardware':
                return \Okta\UserFactors\TokenFactor::class;
            case 'token:software:totp':
                return \Okta\UserFactors\TotpFactor::class;
            case 'web':
                return \Okta\UserFactors\WebFactor::class;
            default:
                return \Okta\UserFactors\Factor::class;
        }
    }
}
