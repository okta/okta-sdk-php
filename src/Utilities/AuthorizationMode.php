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

namespace Okta\Utilities;

use Okta\Client;

class AuthorizationMode extends Enum {
  const SSWS = 'SSWS';
  const PRIVATE_KEY = 'PrivateKey';

  /**
   * Return the auth driver for SSWS
   * 
   * @param string $token The token for the api calls
   * @return SswsAuth
   */
  public function sswsGetDriver(string $token)  
  {
    return new SswsAuth($token);
  }
}