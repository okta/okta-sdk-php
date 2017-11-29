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

use Carbon\Carbon;
use Okta\Applications\Application;
use Okta\ClientBuilder;
use PHPUnit\Framework\TestCase;

class ApplicationCredentialsTest extends BaseUnitTestCase
{
    protected $properties;
    
    /** @var  \Okta\Applications\ApplicationCredentials */
    protected $testable;

    protected $model = '{
    "scheme": "EDIT_USERNAME_AND_PASSWORD",
    "userNameTemplate": {
      "template": "${source.login}",
      "type": "BUILT_IN"
    },
    "revealPassword": false,
    "signing": {
        "kid": "cg4-_A_ifCK7fsKIKjHP27P0JGeuhnHHKEID1yXy42M"
    }
    }';
    protected $modelType = \Okta\Applications\ApplicationCredentials::class;


    /** @test */
    public function signing_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationCredentialsSigning::class, $this->testable->getSigning());
        $this->assertInstanceOf(\Okta\Applications\ApplicationCredentialsSigning::class, $this->testable->signing);
    }

    /** @test */
    public function signing_is_settable()
    {
        $signing1 = $this->testable->getSigning();
        $signing2 = $this->testable->getSigning();

        $signing1->setKid('abc');
        $signing2->setKid('123');

        $this->testable->setSigning($signing1);
        $this->assertEquals('abc', $this->testable->getSigning()->kid);

        $this->testable->signing = $signing2;
        $this->assertEquals('123', $this->testable->getSigning()->kid);
    }

    /** @test */
    public function user_name_template_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationCredentialsUsernameTemplate::class,
            $this->testable->getUserNameTemplate());
        $this->assertInstanceOf(\Okta\Applications\ApplicationCredentialsUsernameTemplate::class,
            $this->testable->userNameTemplate);
    }

    /** @test */
    public function user_name_template_is_settable()
    {
        $userNameTemplate1 = $this->testable->getUserNameTemplate();
        $userNameTemplate2 = $this->testable->getUserNameTemplate();

        $userNameTemplate1->setTemplate('${source.email}');
        $userNameTemplate2->setTemplate('${source.username}');

        $this->testable->setUserNameTemplate($userNameTemplate1);
        $this->assertEquals('${source.email}', $this->testable->getUserNameTemplate()->template);

        $this->testable->userNameTemplate = $userNameTemplate2;
        $this->assertEquals('${source.username}', $this->testable->getUserNameTemplate()->template);
    }
    

}