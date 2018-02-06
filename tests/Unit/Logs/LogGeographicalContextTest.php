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

use Okta\Logs\LogGeographicalContext;
use PHPUnit\Framework\TestCase;

class LogGeographicalContextTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Logs\LogGeographicalContext */
    protected $testable;

    protected $model = '/Logs/geographicalContext.json';
    protected $modelType = \Okta\Logs\LogGeographicalContext::class;

    /** @test */
    public function city_is_accessible()
    {
        $this->assertEquals($this->properties->city, $this->testable->getCity());
        $this->assertEquals($this->properties->city, $this->testable->city);
    }

    /** @test */
    public function state_is_accessible()
    {
        $this->assertEquals($this->properties->state, $this->testable->getState());
        $this->assertEquals($this->properties->state, $this->testable->state);
    }

    /** @test */
    public function country_is_accessible()
    {
        $this->assertEquals($this->properties->country, $this->testable->getCountry());
        $this->assertEquals($this->properties->country, $this->testable->country);
    }

    /** @test */
    public function postal_code_is_accessible()
    {
        $this->assertEquals($this->properties->postalCode, $this->testable->getPostalCode());
        $this->assertEquals($this->properties->postalCode, $this->testable->postalCode);
    }

    /** @test */
    public function geolocation_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Logs\LogGeolocation::class, $this->testable->getGeolocation());
        $this->assertInstanceOf(\Okta\Logs\LogGeolocation::class, $this->testable->geolocation);
    }

}
