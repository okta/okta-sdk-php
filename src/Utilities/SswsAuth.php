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

namespace Okta\Utilities;

use Http\Message\Authentication;
use Psr\Http\Message\RequestInterface;

/**
 * Class SswsAuth
 * @package Okta\Utilities
 */
class SswsAuth implements Authentication
{
    /**
     * @var string $token The API Token for your organization.
     */
    private $token;

    /**
     * SswsAuth constructor.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * Authenticates a request.
     *
     * @param RequestInterface $request
     *
     * @return RequestInterface
     */
    public function authenticate(RequestInterface $request): RequestInterface
    {
        $header = sprintf(
            'SSWS %s',
            $this->token
        );

        return $request->withHeader('Authorization', $header);
    }
}
