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

use Carbon\Carbon;
use Okta\Applications\JsonWebKey;
use PHPUnit\Framework\TestCase;

class JsonWebKeyTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\JsonWebKey */
    protected $testable;

    protected $model = '/Applications/jsonWebKey.json';
    protected $modelType = \Okta\Applications\JsonWebKey::class;

    /** @test */
    public function e_is_accessible()
    {
        $this->assertEquals($this->properties->e, $this->testable->getE());
        $this->assertEquals($this->properties->e, $this->testable->e);
    }

    /** @test */
    public function n_is_accessible()
    {
        $this->assertEquals($this->properties->n, $this->testable->getN());
        $this->assertEquals($this->properties->n, $this->testable->n);
    }

    /** @test */
    public function alg_is_accessible()
    {
        $this->assertEquals($this->properties->alg, $this->testable->getAlg());
        $this->assertEquals($this->properties->alg, $this->testable->alg);
    }

    /** @test */
    public function kid_is_accessible()
    {
        $this->assertEquals($this->properties->kid, $this->testable->getKid());
        $this->assertEquals($this->properties->kid, $this->testable->kid);
    }

    /** @test */
    public function kty_is_accessible()
    {
        $this->assertEquals($this->properties->kty, $this->testable->getKty());
        $this->assertEquals($this->properties->kty, $this->testable->kty);
    }

    /** @test */
    public function x5c_is_accessible()
    {
        $this->assertEquals($this->properties->x5c, $this->testable->getX5C());
        $this->assertEquals($this->properties->x5c, $this->testable->x5C);
    }

    /** @test */
    public function x5t_is_accessible()
    {
        $this->assertEquals($this->properties->x5t, $this->testable->getX5T());
        $this->assertEquals($this->properties->x5t, $this->testable->x5T);
    }

    /** @test */
    public function x5u_is_accessible()
    {
        $this->assertEquals($this->properties->x5u, $this->testable->getX5U());
        $this->assertEquals($this->properties->x5u, $this->testable->x5U);
    }

    /** @test */
    public function status_is_accessible()
    {
        $this->assertEquals($this->properties->status, $this->testable->getStatus());
        $this->assertEquals($this->properties->status, $this->testable->status);
    }

    /** @test */
    public function created_is_accessible()
    {
        $ts = Carbon::parse($this->properties->created)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->created);
        $this->assertEquals($ts, $this->testable->getCreated()->timestamp);
        $this->assertEquals($ts, $this->testable->created->timestamp);
    }

    /** @test */
    public function key_ops_is_accessible()
    {
        $this->assertEquals($this->properties->key_ops, $this->testable->getKeyOps());
        $this->assertEquals($this->properties->key_ops, $this->testable->keyOps);
    }

    /** @test */
    public function x_5_t_s_256_is_accessible()
    {
        $this->assertEquals($this->properties->{'x5t#S256'}, $this->testable->getX5TS256());
        $this->assertEquals($this->properties->{'x5t#S256'}, $this->testable->x5TS256);
    }

    /** @test */
    public function expires_at_is_accessible()
    {
        $ts = Carbon::parse($this->properties->expiresAt)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->expiresAt);
        $this->assertEquals($ts, $this->testable->getExpiresAt()->timestamp);
        $this->assertEquals($ts, $this->testable->expiresAt->timestamp);
    }
    
    
    /** @test */
    public function last_updated_is_accessible()
    {
        $ts = Carbon::parse($this->properties->lastUpdated)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->lastUpdated);
        $this->assertEquals($ts, $this->testable->getLastUpdated()->timestamp);
        $this->assertEquals($ts, $this->testable->lastUpdated->timestamp);
    }
    
}
