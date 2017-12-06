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

use Okta\Applications\SwaApplication;
use PHPUnit\Framework\TestCase;

class SwaApplicationTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\SwaApplication */
    protected $testable;

    protected $model = '{"settings": {"test":"this"}}';
    protected $modelType = \Okta\Applications\SwaApplication::class;

    /** @test */
    public function settings_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\SwaApplicationSettings::class, $this->testable->getSettings());
        $this->assertInstanceOf(\Okta\Applications\SwaApplicationSettings::class, $this->testable->settings);
    }

    /** @test */
    public function settings_is_settable()
    {
        $settings = $this->testable->getSettings();

        $settings->abc = '123';
        $this->testable->setSettings($settings);
        $this->assertEquals('123', $this->testable->getSettings()->abc);

        $settings->abc = '456';
        $this->testable->settings = $settings;
        $this->assertEquals('456', $this->testable->getSettings()->abc);
    }

}
