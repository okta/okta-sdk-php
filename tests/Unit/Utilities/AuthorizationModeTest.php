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
    $this->assertInstanceOf(SswsAuth::class, $authorizationType->getDriver('123'));
  }
}