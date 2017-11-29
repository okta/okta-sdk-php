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

class ApplicationSettingsNotificationsVpnNetworkTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\ApplicationSettingsNotificationsVpnNetwork */
    protected $testable;

    protected $model = '{
    "exclude": [],
    "include": [],
    "connection": "DISABLED"
    }';
    protected $modelType = \Okta\Applications\ApplicationSettingsNotificationsVpnNetwork::class;
    
    /** @test */
    public function exclude_is_accessible()
    {
        $this->assertEquals($this->properties->exclude, $this->testable->getExclude());
        $this->assertEquals($this->properties->exclude, $this->testable->exclude);
    }
    
    /** @test */
    public function exclude_is_settable()
    {
        $this->testable->setExclude(["test"=>"this"]);
        $this->assertEquals(["test"=>"this"], $this->testable->getExclude());
    
        $this->testable->exclude = ["test"=>"that"];
        $this->assertEquals(["test"=>"that"], $this->testable->getExclude());
    }

    /** @test */
    public function include_is_accessible()
    {
        $this->assertEquals($this->properties->include, $this->testable->getInclude());
        $this->assertEquals($this->properties->include, $this->testable->include);
    }

    /** @test */
    public function include_is_settable()
    {
        $this->testable->setInclude(['test'=>'this']);
        $this->assertEquals(['test'=>'this'], $this->testable->getInclude());

        $this->testable->include = ['test'=>'that'];
        $this->assertEquals(['test'=>'that'], $this->testable->getInclude());
    }

    /** @test */
    public function connection_is_accessible()
    {
        $this->assertEquals($this->properties->connection, $this->testable->getConnection());
        $this->assertEquals($this->properties->connection, $this->testable->connection);
    }

    /** @test */
    public function connection_is_settable()
    {
        $this->testable->setConnection('ANYWHERE');
        $this->assertEquals('ANYWHERE', $this->testable->getConnection());

        $this->testable->connection = 'ON_NETWORK';
        $this->assertEquals('ON_NETWORK', $this->testable->getConnection());
    }

}
