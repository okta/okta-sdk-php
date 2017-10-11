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

class EmailFactorProfileTest extends BaseTestCase
{

    protected static $properties;
    protected static $testable;

    public function setUp()
    {
        parent::setUp();
        $this->createNewHttpClient();
        $model = '/UserFactors/factorProfileEmail.json';
        static::$properties = json_decode(json_encode($this->getModel($model)));
        static::$testable = $this->createModel($model, \Okta\UserFactors\EmailFactorProfile::class);
    }

    /** @test */
    public function email_is_gettable()
    {
        $this->assertEquals(static::$properties->email, static::$testable->getEmail());
        $this->assertEquals(static::$properties->email, static::$testable->email);
    }

    /** @test */
    public function email_is_settable()
    {
        static::$testable->setEmail('test@mailinator.com');
        static::assertEquals('test@mailinator.com', static::$testable->getEmail());

        static::$testable->email = 'test2@mailinator.com';
        static::assertEquals('test2@mailinator.com', static::$testable->getEmail());
    }
    
}
