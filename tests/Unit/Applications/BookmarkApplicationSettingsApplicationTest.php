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

use Okta\Applications\BasicApplicationSettingsApplication;
use PHPUnit\Framework\TestCase;

class BookmarkApplicationSettingsApplicationTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\BookmarkApplicationSettingsApplication */
    protected $testable;

    protected $model = '{
      "url": "https://example.com/login.html",
      "requestIntegration": false
    }';
    protected $modelType = \Okta\Applications\BookmarkApplicationSettingsApplication::class;

    /** @test */
    public function url_is_accessible()
    {
        $this->assertEquals($this->properties->url, $this->testable->getUrl());
        $this->assertEquals($this->properties->url, $this->testable->url);
    }

    /** @test */
    public function url_is_settable()
    {
        $this->testable->setUrl("http://example.com");
        $this->assertEquals("http://example.com", $this->testable->getUrl());

        $this->testable->url = "http://example.org";
        $this->assertEquals("http://example.org", $this->testable->getUrl());
    }

    /** @test */
    public function request_integration_is_accessible()
    {
        $this->assertEquals($this->properties->requestIntegration, $this->testable->getRequestIntegration());
        $this->assertEquals($this->properties->requestIntegration, $this->testable->requestIntegration);
    }
    
    /** @test */
    public function request_integration_is_settable()
    {
        $this->testable->setRequestIntegration(false);
        $this->assertEquals(false, $this->testable->getRequestIntegration());
    
        $this->testable->requestIntegration = true;
        $this->assertEquals(true, $this->testable->getRequestIntegration());
    }
        

}
