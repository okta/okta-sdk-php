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

use Okta\Applications\ApplicationCredentialsUsernameTemplate;
use PHPUnit\Framework\TestCase;

class ApplicationCredentialsUsernameTemplateTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\ApplicationCredentialsUsernameTemplate */
    protected $testable;

    protected $model = '{
    "template": "${source.login}",
    "type": "BUILT_IN",
    "suffix": "example"
    }';
    protected $modelType = \Okta\Applications\ApplicationCredentialsUsernameTemplate::class;

    /** @test */
    public function type_is_accessible()
    {
        $this->assertEquals($this->properties->type, $this->testable->getType());
        $this->assertEquals($this->properties->type, $this->testable->type);
    }

    /** @test */
    public function type_is_settable()
    {
        $this->testable->setType("NONE");
        $this->assertEquals("NONE", $this->testable->getType());

        $this->testable->type = "CUSTOM";
        $this->assertEquals("CUSTOM", $this->testable->getType());
    }

    /** @test */
    public function suffix_is_accessible()
    {
        $this->assertEquals($this->properties->suffix, $this->testable->getSuffix());
        $this->assertEquals($this->properties->suffix, $this->testable->suffix);
    }

    /** @test */
    public function suffix_is_settable()
    {
        $this->testable->setSuffix('sample');
        $this->assertEquals('sample', $this->testable->getSuffix());

        $this->testable->suffix = 'demo';
        $this->assertEquals('demo', $this->testable->getSuffix());
    }

    /** @test */
    public function template_is_accessible()
    {
        $this->assertEquals($this->properties->template, $this->testable->getTemplate());
        $this->assertEquals($this->properties->template, $this->testable->template);
    }

    /** @test */
    public function template_is_settable()
    {
        $this->testable->setTemplate('${source.username}');
        $this->assertEquals('${source.username}', $this->testable->getTemplate());

        $this->testable->template = '${source.email}';
        $this->assertEquals('${source.email}', $this->testable->getTemplate());
    }




}
