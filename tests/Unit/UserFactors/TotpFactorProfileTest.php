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

class TotpFactorProfileTest extends BaseTestCase
{

    protected static $properties;
    protected static $testable;

    public function setUp()
    {
        parent::setUp();
        $this->createNewHttpClient();
        $model = '/UserFactors/factorProfileTotp.json';
        static::$properties = json_decode($this->getModel($model));
        static::$testable = $this->createModel($model, \Okta\UserFactors\TotpFactorProfile::class);
    }

    /** @test */
    public function credential_id_is_gettable()
    {
        $this->assertEquals(static::$properties->credentialId, static::$testable->getCredentialId());
        $this->assertEquals(static::$properties->credentialId, static::$testable->credentialId);
    }

    /** @test */
    public function credential_id_is_settable()
    {
        static::$testable->setCredentialId('test@mailinator.com');
        static::assertEquals('test@mailinator.com', static::$testable->getCredentialId());

        static::$testable->credentialId = 'test2@mailinator.com';
        static::assertEquals('test2@mailinator.com', static::$testable->getCredentialId());
    }
    
}
