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

use Okta\Utilities\SswsAuth;
use PHPUnit\Framework\TestCase;

class SswsAuthTest extends TestCase
{
    /** @test */
    public function authentication_with_token_returns_correct_header()
    {
        $sswsAuth = new SswsAuth('123');
        $request = $sswsAuth->authenticate(new MockRequest);
        $this->assertEquals(
            'SSWS 123',
            $request->getHeader('Authorization')[0]
        );
    }

}

class MockRequest implements \Psr\Http\Message\RequestInterface
{
    use \GuzzleHttp\Psr7\MessageTrait;

    public function getRequestTarget() {}
    public function withRequestTarget($requestTarget) {}
    public function getMethod() {}
    public function withMethod($method) {}
    public function getUri() {}
    public function withUri(\Psr\Http\Message\UriInterface $uri, $preserveHost = false) {}
}
