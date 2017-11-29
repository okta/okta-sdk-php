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

class AutoLoginApplicationSettingsTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\AutoLoginApplicationSettings */
    protected $testable;

    protected $model = '{
        "signOn": {
          "redirectUrl": "http://swasecondaryredirecturl.okta.com",
          "loginUrl": "http://swaprimaryloginurl.okta.com"
        }
      }';
    protected $modelType = \Okta\Applications\AutoLoginApplicationSettings::class;

    /** @test */
    public function sign_on_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\AutoLoginApplicationSettingsSignOn::class, $this->testable->getSignOn());
        $this->assertInstanceOf(\Okta\Applications\AutoLoginApplicationSettingsSignOn::class, $this->testable->signOn);
    }

    /** @test */
    public function sign_on_is_settable()
    {
        $signOn = $this->testable->getSignOn();
        $signOn->redirectUrl = 'http://example.com';
        $this->testable->setSignOn($signOn);
        $this->assertEquals('http://example.com', $this->testable->getSignOn()->redirectUrl);


        $signOn->redirectUrl = 'http://example.org';
        $this->testable->signOn = $signOn;
        $this->assertEquals('http://example.org', $this->testable->getSignOn()->redirectUrl);
    }


}
