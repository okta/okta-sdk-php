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

use Okta\Applications\ApplicationSettingsNotifications;
use PHPUnit\Framework\TestCase;

class ApplicationSettingsNotificationsTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\ApplicationSettingsNotifications */
    protected $testable;

    protected $model = '{"vpn": {"message": null}}';
    protected $modelType = \Okta\Applications\ApplicationSettingsNotifications::class;

    /** @test */
    public function vpn_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationSettingsNotificationsVpn::class, $this->testable->getVpn());
        $this->assertInstanceOf(\Okta\Applications\ApplicationSettingsNotificationsVpn::class, $this->testable->vpn);
    }

    /** @test */
    public function vpn_is_settable()
    {
        $vpn = $this->testable->getVpn();
        $vpn->message = "test";
        $this->testable->setVpn($vpn);
        $this->assertEquals("test", $this->testable->getVpn()->message);

        $vpn->message = "this";
        $this->testable->vpn = $vpn;
        $this->assertEquals("this", $this->testable->getVpn()->message);
    }


}
