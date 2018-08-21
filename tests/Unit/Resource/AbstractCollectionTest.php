<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

use Okta\Resource\AbstractCollection;
use Okta\Resource\AbstractResource;
use PHPUnit\Framework\TestCase;

class AbstractCollectionTest extends TestCase
{
    /** @test */
    public function where_operators_work()
    {
        $c = new AbstractCollection([['v' => 1], ['v' => 2], ['v' => 3], ['v' => '3'], ['v' => 4]]);
        $this->assertEquals(
            [['v' => 3], ['v' => '3']],
            $c->where('v', 3)->values()->all()
        );
        $this->assertEquals(
            [['v' => 3], ['v' => '3']],
            $c->where('v', '=', 3)->values()->all()
        );
        $this->assertEquals(
            [['v' => 3], ['v' => '3']],
            $c->where('v', '==', 3)->values()->all()
        );
        $this->assertEquals(
            [['v' => 3], ['v' => '3']],
            $c->where('v', 'garbage', 3)->values()->all()
        );
        $this->assertEquals(
            [['v' => 3]],
            $c->where('v', '===', 3)->values()->all()
        );
        $this->assertEquals(
            [['v' => 1], ['v' => 2], ['v' => 4]],
            $c->where('v', '<>', 3)->values()->all()
        );
        $this->assertEquals(
            [['v' => 1], ['v' => 2], ['v' => 4]],
            $c->where('v', '!=', 3)->values()->all()
        );
        $this->assertEquals(
            [['v' => 1], ['v' => 2], ['v' => '3'], ['v' => 4]],
            $c->where('v', '!==', 3)->values()->all()
        );
        $this->assertEquals(
            [['v' => 1], ['v' => 2], ['v' => 3], ['v' => '3']],
            $c->where('v', '<=', 3)->values()->all()
        );
        $this->assertEquals(
            [['v' => 3], ['v' => '3'], ['v' => 4]],
            $c->where('v', '>=', 3)->values()->all()
        );
        $this->assertEquals(
            [['v' => 1], ['v' => 2]],
            $c->where('v', '<', 3)->values()->all()
        );
        $this->assertEquals(
            [['v' => 4]],
            $c->where('v', '>', 3)->values()->all()
        );
    }

    /** @test */
    public function data_get_returns_target_if_key_is_null()
    {
         $c = new AbstractCollection([['v' => 1]]);

        $this->assertEquals(
            [],
            $c->where(null, '=', 1)->values()->all()
        );
    }

    /** @test */
    public function a_collection_with_nested_objects_is_searchable()
    {
        $object1 = new \StdClass;
        $object2 = new \StdClass;
        $object2->test = new \StdClass;
        $object2->test->hello = 'world';

        $collection = new AbstractCollection([
            $object1, $object2
        ]);

        $this->assertCount(
            1,
            $collection->where('test.hello', '=', 'world')->all()
        );
    }

    /** @test */
    public function a_resource_is_searchable()
    {
        $object1 = new \StdClass;
        $object2 = new \StdClass;
        $object2->id = '123abc';
        $object2->test = new \StdClass;
        $object2->test->hello = 'world';

        $collection = new AbstractCollection([
            $object1, $object2
        ]);

        $this->assertCount(
            1,
            $collection->where('id', '=', '123abc')->all()
        );
    }

}