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

use Okta\Applications\AppUserPasswordCredential;
use PHPUnit\Framework\TestCase;

class AppUserPasswordCredentialTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\AppUserPasswordCredential */
    protected $testable;

    protected $model = '{"value": "abc123"}';
    protected $modelType = \Okta\Applications\AppUserPasswordCredential::class;

    /** @test */
    public function value_is_accessible()
    {
        $this->assertEquals($this->properties->value, $this->testable->getValue());
        $this->assertEquals($this->properties->value, $this->testable->value);
    }

    /** @test */
    public function value_is_settable()
    {
        $this->testable->setValue('xyz');
        $this->assertEquals('xyz', $this->testable->getValue());

        $this->testable->value = '123';
        $this->assertEquals('123', $this->testable->getValue());
    }

}
