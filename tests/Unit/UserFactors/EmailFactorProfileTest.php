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

class EmailFactorProfileTest extends BaseUnitTestCase
{

    protected $model = '/UserFactors/factorProfileEmail.json';
    protected $modelType = \Okta\UserFactors\EmailFactorProfile::class;

    /** @test */
    public function email_is_gettable()
    {
        $this->assertEquals($this->properties->email, $this->testable->getEmail());
        $this->assertEquals($this->properties->email, $this->testable->email);
    }

    /** @test */
    public function email_is_settable()
    {
        $this->testable->setEmail('test@mailinator.com');
        static::assertEquals('test@mailinator.com', $this->testable->getEmail());

        $this->testable->email = 'test2@mailinator.com';
        static::assertEquals('test2@mailinator.com', $this->testable->getEmail());
    }
    
}
