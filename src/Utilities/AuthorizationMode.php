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
use Http\Message\Authentication\Bearer;

class AuthorizationMode extends Enum {
  const SSWS = 'SSWS';
  const PRIVATE_KEY = 'PrivateKey';

  /**
   * Token for authentication driver
   *
   * @var string
   */
  protected $token = '';

  /**
   * Client Id for authentication driver
   *
   * @var string
   */
  protected $clientId = '';

  /**
   * Scopes for authentication driver
   *
   * @var string
   */
  protected $scopes = [];

  /**
   * PrivateKey for authentication driver
   *
   * @var string
   */
  protected $privateKey = '';

  /**
   * Organization URL
   * 
   * @var string
   */
  protected $orgUrl = '';



  /**
   * Set the token for the auth driver
   * 
   * @param string $token The token to use for the auth driver
   * @return self
   */
  public function setToken(string $token) : self
  {
    $this->token = $token;
    return $this;
  }

  /**
   * Set the client id for the auth driver
   * 
   * @param string $clientId The clientId to use for the auth driver
   * @return self
   */
  public function setClientId(string $clientId) : self
  {
    $this->clientId = $clientId;
    return $this;
  }

  /**
   * Set the scopes for the auth driver
   * 
   * @param string $scopes The scopes to use for the auth driver
   * @return self
   */
  public function setScopes(string $scopes) : self
  {
    $this->scopes = $scopes;
    return $this;
  }

  /**
   * Set the privateKey for the auth driver
   * 
   * @param string $privateKey The privateKey to use for the auth driver
   * @return self
   */
  public function setPrivateKey(string $privateKey) : self
  {
    $this->privateKey = $privateKey;
    return $this;
  }

  /**
   * Sets the org url
   * 
   * @param string $orgUrl The Org url for the auth driver
   * @return self
   */
  public function setOrgurl(string $orgUrl) : self
  {
    $this->orgUrl = $orgUrl;
    return $this;
  }

  /**
   * Return the auth driver for SSWS
   * 
   * @return SswsAuth
   */
  public function sswsGetDriver()  
  {
    return new SswsAuth($this->token);
  }

  /**
   * Return the auth driver for bearer tokens (Public Key)
   * 
   * @return Bearer
   */
  public function privateKeyGetDriver()
  {
    $this->token = (new PrivateKeyAuthentication($this->clientId, $this->scopes, $this->privateKey, $this->orgUrl))->getBearerToken();
    return new Bearer($this->token);
  }

}