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

use Okta\Applications\ApplicationSettingsNotificationsVpnNetwork;
use PHPUnit\Framework\TestCase;

class ApplicationSettingsNotificationsVpnTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\ApplicationSettingsNotificationsVpn */
    protected $testable;

    protected $model = '{
    "helpUrl": "http://example.com",
    "message": "message",
    "network": {"connection": "DISABLED"}
    }';
    protected $modelType = \Okta\Applications\ApplicationSettingsNotificationsVpn::class;
    
    /** @test */
    public function help_url_is_accessible()
    {
        $this->assertEquals($this->properties->helpUrl, $this->testable->getHelpUrl());
        $this->assertEquals($this->properties->helpUrl, $this->testable->helpUrl);
    }

    /** @test */
    public function help_url_is_settable()
    {
        $this->testable->setHelpUrl('http://example.com');
        $this->assertEquals('http://example.com', $this->testable->getHelpUrl());

        $this->testable->helpUrl = 'http://example.org';
        $this->assertEquals('http://example.org', $this->testable->getHelpUrl());
    }

    /** @test */
    public function message_is_accessible()
    {
        $this->assertEquals($this->properties->message, $this->testable->getMessage());
        $this->assertEquals($this->properties->message, $this->testable->message);
    }

    /** @test */
    public function message_is_settable()
    {
        $this->testable->setMessage('message1');
        $this->assertEquals('message1', $this->testable->getMessage());

        $this->testable->message = 'message2';
        $this->assertEquals('message2', $this->testable->getMessage());
    }

    /** @test */
    public function network_is_accessible()
    {
        $this->assertInstanceOf(ApplicationSettingsNotificationsVpnNetwork::class, $this->testable->getNetwork());
        $this->assertInstanceOf(ApplicationSettingsNotificationsVpnNetwork::class, $this->testable->network);
    }

    /** @test */
    public function network_is_settable()
    {
        $network = $this->testable->getNetwork();
        $network->setConnection('ENABLED');
        $this->testable->setNetwork($network);
        $this->assertEquals('ENABLED', $this->testable->getNetwork()->getConnection());

        $network->setConnection('PENDING');
        $this->testable->network = $network;
        $this->assertEquals('PENDING', $this->testable->getNetwork()->getConnection());
    }


}
