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

use Okta\UserFactors\Factor;
use PHPUnit\Framework\TestCase;

class FactorTest extends BaseTestCase
{
    protected static $properties;
    protected static $testable;

    public function setUp()
    {
        parent::setUp();
        $this->createNewHttpClient();
        $model = '/UserFactors/emailFactor.json';
        static::$properties = json_decode(json_encode($this->getModel($model)));
        static::$testable = $this->createModel($model, \Okta\UserFactors\Factor::class);
    }

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals(static::$properties->id, static::$testable->getId());
        $this->assertEquals(static::$properties->id, static::$testable->id);
    }

    /** @test */
    public function device_is_accessible()
    {
        $this->assertEquals(static::$properties->device, static::$testable->getDevice());
        $this->assertEquals(static::$properties->device, static::$testable->device);
    }
    
    




}
