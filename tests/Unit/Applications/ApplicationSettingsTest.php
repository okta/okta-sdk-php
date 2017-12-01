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

use Okta\Applications\ApplicationSettings;
use PHPUnit\Framework\TestCase;

class ApplicationSettingsTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\ApplicationSettings */
    protected $testable;

    protected $model = '{
    "app": {"prop": "test"},
    "notifications": {"prop": "test"}
    }';
    protected $modelType = \Okta\Applications\ApplicationSettings::class;

    /** @test */
    public function app_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationSettingsApplication::class, $this->testable->getApp());
        $this->assertInstanceOf(\Okta\Applications\ApplicationSettingsApplication::class, $this->testable->app);
    }
    
    /** @test */
    public function app_is_settable()
    {
        $app = $this->testable->getApp();
        $app->test = 'this';
        $this->testable->setApp($app);
        $this->assertEquals('this', $this->testable->getApp()->test);

        $app = $this->testable->getApp();
        $app->test = 'that';
        $this->testable->app = $app;
        $this->assertEquals('that', $this->testable->getApp()->test);
    }

    /** @test */
    public function notifications_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationSettingsNotifications::class,
            $this->testable->getNotifications());
        $this->assertInstanceOf(\Okta\Applications\ApplicationSettingsNotifications::class, $this->testable->notifications);
    }

    /** @test */
    public function notifications_is_settable()
    {
        $notifications = $this->testable->getNotifications();
        $notifications->test = 'this';
        $this->testable->setNotifications($notifications);
        $this->assertEquals('this', $this->testable->getNotifications()->test);

        $notifications = $this->testable->getNotifications();
        $notifications->test = 'that';
        $this->testable->notifications = $notifications;
        $this->assertEquals('that', $this->testable->getNotifications()->test);
    }


}
