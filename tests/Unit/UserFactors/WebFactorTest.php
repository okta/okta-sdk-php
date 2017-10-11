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

class WebFactor extends BaseTestCase
{
    protected static $properties;
    /** @var User */
    protected static $testable;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        $clientBuilder = (new ClientBuilder())->build();

        static::$properties = json_decode(file_get_contents(__DIR__ . '/../../models/UserFactors/webFactor.json'));

        $class = new \stdClass();
        foreach(static::$properties as $prop=>$value)
        {
            $class->{$prop} = $value;
        }
        self::$testable = new \Okta\UserFactors\WebFactor(null, $class);
    }

    /** @test */
    public function can_get_profile_from_factor()
    {
         $profile = self::$testable->getProfile();

         $this->assertInstanceOf(\Okta\UserFactors\WebFactorProfile::class, $profile);

    }

    /** @test */
    public function a_profile_can_be_set_on_the_factor()
    {
        /** @var \Okta\UserFactors\SecurityQuestionFactorProfile $profile */
        $profile = static::$testable->getProfile();
        $profile->setAnswer = 'Test';

        $factor = static::$testable->setProfile($profile);
        $this->assertInstanceOf(\Okta\UserFactors\WebFactor::class, $factor);
    }


}
