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
use PHPUnit\Framework\TestCase;

class BaseUnitTestCase extends BaseTestCase
{
    protected $properties;
    protected $testable;
    protected $model;
    protected $modelType;


    public function setUp(): void
    {
        parent::setUp();
        $this->properties = json_decode($this->getModelJson($this->model));
        $this->testable = $this->createModel($this->model, $this->modelType);
    }

    protected function createModel($model, $returnType, $properties = [])
    {
        $properties = json_decode($this->getModel($model, $properties));

        $class = new \stdClass();
        foreach($properties as $prop=>$value)
        {
            $class->{$prop} = $value;
        }

        return new $returnType(null, $class);
    }

    protected function getModel($model, $overrides = [])
    {
        $model = json_decode($this->getModelJson($model), true);

        return json_encode(array_replace_recursive($model, $overrides));

    }

    protected function getModelJson($model)
    {
        if(is_readable($fileName = __DIR__ . "/models/{$model}")) {
            return (string) file_get_contents($fileName);
        }
        return (string)$model;
    }
}
