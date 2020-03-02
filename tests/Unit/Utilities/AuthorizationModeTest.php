<?php
/******************************************************************************
 * Copyright 2020 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.            *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and         *
 * limitations under the License.                                             *
 ******************************************************************************/

use Okta\Utilities\AuthorizationMode;
use Okta\Utilities\SswsAuth;
use PHPUnit\Framework\TestCase;

class AuthorizationModeTest extends TestCase
{
  /** @test */
  public function it_returns_correct_string_for_ssws() 
  {
    $authorizationType = new AuthorizationMode(AuthorizationMode::SSWS);
    $this->assertEquals('SSWS', $authorizationType->getValue());  
  }

  /** @test */
  public function it_returns_correct_string_for_private_key() 
  {
    $authorizationType = new AuthorizationMode(AuthorizationMode::PRIVATE_KEY);
    $this->assertEquals('PrivateKey', $authorizationType->getValue());  
  }

  /** @test */
  public function ssws_type_returns_instance_of_ssws_auth_driver()
  {
    $authorizationType = new AuthorizationMode(AuthorizationMode::SSWS);  
    $authorizationType->setToken('123');
    $this->assertInstanceOf(SswsAuth::class, $authorizationType->getDriver());
  }

  /** @test */
  public function private_key_type_has_access_to_properties()
  {
    $authorizationType = new AuthorizationMode(AuthorizationMode::PRIVATE_KEY);
    $authorizationType->setClientId('myClientId');
    $authorizationType->setScopes('scope1');
    $authorizationType->setPrivateKey('privateKeyString');
    $authorizationTypeReflection = new ReflectionClass($authorizationType);
    
    $reflectClientId = $authorizationTypeReflection->getProperty('clientId');
    $reflectClientId->setAccessible(true);
    $clientId = $reflectClientId->getValue($authorizationType);

    $reflectScopes = $authorizationTypeReflection->getProperty('scopes');
    $reflectScopes->setAccessible(true);
    $scopes = $reflectScopes->getValue($authorizationType);

    $reflectPrivateKey = $authorizationTypeReflection->getProperty('privateKey');
    $reflectPrivateKey->setAccessible(true);
    $privateKey = $reflectPrivateKey->getValue($authorizationType);
    
    $this->assertEquals('myClientId', $clientId);
    $this->assertEquals('scope1', $scopes);
    $this->assertEquals('privateKeyString', $privateKey);
  }
}