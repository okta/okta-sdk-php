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

use Okta\ClientBuilder;
use Okta\Users\AppLink;
use PHPUnit\Framework\TestCase;

class AppLinkTest extends TestCase
{
    protected static $properties;

    /** @var ActivationToken */
    protected static $testable;

    public static function setUpBeforeClass(): void
    {
        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode(
            '{
    "id": "00ub0oNGTSWTBKOLGLNR",
    "label": "Google Apps Mail",
    "linkUrl": "https://your-domain.okta.com/home/google/0oa3omz2i9XRNSRIHBZO/50",
    "logoUrl": "https://your-domain.okta.com/img/logos/google-mail.png",
    "appName": "google",
    "appInstanceId": "0oa3omz2i9XRNSRIHBZO",
    "appAssignmentId": "0ua3omz7weMMMQJERBKY",
    "credentialsSetup": false,
    "hidden": false,
    "sortOrder": 0
  }'
        );

        $class = new \stdClass();
        foreach(static::$properties as $prop=>$value)
        {
            $class->{$prop} = $value;
        }
        self::$testable = new AppLink(null, $class);

    }

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals(static::$properties->id, static::$testable->getId());
        $this->assertEquals(static::$properties->id, static::$testable->id);
    }

    /** @test */
    public function label_is_accessible()
    {
        $this->assertEquals(static::$properties->label, static::$testable->getLabel());
        $this->assertEquals(static::$properties->label, static::$testable->label);
    }

    /** @test */
    public function hidden_is_accessible()
    {
        $this->assertEquals(static::$properties->hidden, static::$testable->getHidden());
        $this->assertEquals(static::$properties->hidden, static::$testable->hidden);
    }

    /** @test */
    public function app_name_is_accessible()
    {
        $this->assertEquals(static::$properties->appName, static::$testable->getAppName());
        $this->assertEquals(static::$properties->appName, static::$testable->appName);
    }

    /** @test */
    public function link_url_is_accessible()
    {
        $this->assertEquals(static::$properties->linkUrl, static::$testable->getLinkUrl());
        $this->assertEquals(static::$properties->linkUrl, static::$testable->linkUrl);
    }

    /** @test */
    public function logo_url_is_accessible()
    {
        $this->assertEquals(static::$properties->logoUrl, static::$testable->getLogoUrl());
        $this->assertEquals(static::$properties->logoUrl, static::$testable->logoUrl);
    }

    /** @test */
    public function sort_order_is_accessible()
    {
        $this->assertEquals(static::$properties->sortOrder, static::$testable->getSortOrder());
        $this->assertEquals(static::$properties->sortOrder, static::$testable->sortOrder);
    }

    /** @test */
    public function app_instance_id_is_accessible()
    {
        $this->assertEquals(static::$properties->appInstanceId, static::$testable->getAppInstanceId());
        $this->assertEquals(static::$properties->appInstanceId, static::$testable->appInstanceId);
    }

    /** @test */
    public function app_assignment_id_is_accessible()
    {
        $this->assertEquals(static::$properties->appAssignmentId, static::$testable->getAppAssignmentId());
        $this->assertEquals(static::$properties->appAssignmentId, static::$testable->appAssignmentId);
    }

    /** @test */
    public function credentials_setup_is_accessible()
    {
        $this->assertEquals(static::$properties->credentialsSetup, static::$testable->getCredentialsSetup());
        $this->assertEquals(static::$properties->credentialsSetup, static::$testable->credentialsSetup);
    }

}
