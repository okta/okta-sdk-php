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

use Okta\Applications\AutoLoginApplicationSettings;
use PHPUnit\Framework\TestCase;

class BookmarkApplicationSettingsTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\BookmarkApplicationSettings */
    protected $testable;

    protected $model = '{
        "app": {
          "requestIntegration": false,
          "url": "https://example.com/bookmark.htm"
        }
      }';
    protected $modelType = \Okta\Applications\BookmarkApplicationSettings::class;

    /** @test */
    public function app_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\BookmarkApplicationSettingsApplication::class,
            $this->testable->getApp());
        $this->assertInstanceOf(\Okta\Applications\BookmarkApplicationSettingsApplication::class,
            $this->testable->app);
    }

    /** @test */
    public function app_is_settable()
    {
        $app = $this->testable->getApp();
        $app->url = 'http://example.com';
        $this->testable->setApp($app);
        $this->assertEquals('http://example.com', $this->testable->getApp()->url);


        $app->url = 'http://example.org';
        $this->testable->signOn = $app;
        $this->assertEquals('http://example.org', $this->testable->getApp()->url);
    }


}
