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

use Okta\Generated\Applications\SamlAttributeStatement;
use PHPUnit\Framework\TestCase;

class SamlAttributeStatementTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\SamlAttributeStatement */
    protected $testable;

    protected $model = '{
          "type": "EXPRESSION",
          "name": "Attribute",
          "namespace": "urn:oasis:names:tc:SAML:2.0:attrname-format:unspecified",
          "values": [
            "Value"
          ]
        }';
    protected $modelType = \Okta\Applications\SamlAttributeStatement::class;

    /** @test */
    public function name_is_accessible()
    {
        $this->assertEquals($this->properties->name, $this->testable->getName());
        $this->assertEquals($this->properties->name, $this->testable->name);
    }

    /** @test */
    public function name_is_settable()
    {
        $this->testable->setName('name1');
        $this->assertEquals('name1', $this->testable->getName());

        $this->testable->name = 'name2';
        $this->assertEquals('name2', $this->testable->getName());
    }

    /** @test */
    public function type_is_accessible()
    {
        $this->assertEquals($this->properties->type, $this->testable->getType());
        $this->assertEquals($this->properties->type, $this->testable->type);
    }

    /** @test */
    public function type_is_settable()
    {
        $this->testable->setType('type1');
        $this->assertEquals('type1', $this->testable->getType());

        $this->testable->type = 'type2';
        $this->assertEquals('type2', $this->testable->getType());
    }

    /** @test */
    public function values_is_accessible()
    {
        $this->assertEquals($this->properties->values, $this->testable->getValues());
        $this->assertEquals($this->properties->values, $this->testable->values);
    }

    /** @test */
    public function values_is_settable()
    {
        $this->testable->setValues(['test']);
        $this->assertEquals(['test'], $this->testable->getValues());

        $this->testable->values = ['this'];
        $this->assertEquals(['this'], $this->testable->getValues());
    }

    /** @test */
    public function namespace_is_accessible()
    {
        $this->assertEquals($this->properties->namespace, $this->testable->getNamespace());
        $this->assertEquals($this->properties->namespace, $this->testable->namespace);
    }

    /** @test */
    public function namespace_is_settable()
    {
        $this->testable->setNamespace('ns1');
        $this->assertEquals('ns1', $this->testable->getNamespace());

        $this->testable->namespace = 'ns2';
        $this->assertEquals('ns2', $this->testable->getNamespace());
    }

}
