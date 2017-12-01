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

use Okta\Applications\ApplicationVisibility;
use PHPUnit\Framework\TestCase;

class ApplicationVisibilityTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\ApplicationVisibility */
    protected $testable;

    protected $model = '/Applications/applicationVisibility.json';
    protected $modelType = \Okta\Applications\ApplicationVisibility::class;

    /** @test */
    public function hide_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationVisibilityHide::class, $this->testable->getHide());
        $this->assertInstanceOf(\Okta\Applications\ApplicationVisibilityHide::class, $this->testable->hide);
    }

    /** @test */
    public function hide_is_settable()
    {
        $hide = $this->testable->getHide();
        $hide->web = true;
        $this->testable->setHide($hide);
        $this->assertTrue($this->testable->getHide()->web);

        $hide->web = false;
        $this->testable->hide = $hide;
        $this->assertFalse($this->testable->getHide()->web);
    }

    /** @test */
    public function app_links_is_accessible()
    {
        $this->assertEquals($this->properties->appLinks, $this->testable->getAppLinks());
        $this->assertEquals($this->properties->appLinks, $this->testable->appLinks);
    }

    /** @test */
    public function app_links_is_settable()
    {
        $links = $this->testable->getAppLinks();
        $links->login = false;
        $this->testable->setAppLinks($links);
        $this->assertFalse($this->testable->getAppLinks()->login);

        $links->login = true;
        $this->testable->appLinks = $links;
        $this->assertTrue($this->testable->getAppLinks()->login);
    }
    
    /** @test */
    public function auto_submit_toolbar_is_accessible()
    {
        $this->assertEquals($this->properties->autoSubmitToolbar, $this->testable->getAutoSubmitToolbar());
        $this->assertEquals($this->properties->autoSubmitToolbar, $this->testable->autoSubmitToolbar);
    }
    
    /** @test */
    public function auto_submit_toolbar_is_settable()
    {
        $this->testable->setAutoSubmitToolbar(true);
        $this->assertEquals(true, $this->testable->getAutoSubmitToolbar());
    
        $this->testable->autoSubmitToolbar = false;
        $this->assertEquals(false, $this->testable->getAutoSubmitToolbar());
    }
        
    
}
