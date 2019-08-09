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

use Okta\Utilities\UserAgentBuilder;
use PHPUnit\Framework\TestCase;

class UserAgentBuilderTest extends TestCase
{
    /**
     * @test
     */
    public function it_throws_exception_if_properties_are_not_set()
    {
        $this->expectException('InvalidArgumentException');
        $userAgent = new UserAgentBuilder;

        $userAgent->build();
    }

    /**
     * @test
     */
    public function it_throws_exception_if_php_version_is_not_set()
    {
        $this->expectException('InvalidArgumentException');
        $userAgent = new UserAgentBuilder;

        $userAgent->setOsName('testOs')
            ->setOsVersion('1.2.3')
            ->build();
    }

    /**
     * @test
     */
    public function it_throws_exception_if_os_version_is_not_set()
    {
        $this->expectException('InvalidArgumentException');
        $userAgent = new UserAgentBuilder;

        $userAgent->setOsName('testOs')
            ->setPhpVersion('1.2.3')
            ->build();
    }

    /**
     * @test
     */
    public function it_throws_exception_if_os_name_is_not_set()
    {
        $this->expectException('InvalidArgumentException');
        $userAgent = new UserAgentBuilder;

        $userAgent->setPhpVersion('testOs')
            ->setOsVersion('1.2.3')
            ->build();
    }

    /**
     * @test
     */
    public function it_can_build_an_user_agent_correctly()
    {
        $userAgent = new UserAgentBuilder;

        $userAgent = $userAgent->setOsVersion('osVersion')
            ->setPhpVersion('phpVersion')
            ->setOsName('osName')
            ->build();

        $this->assertEquals(
            'okta-sdk-php/'.Okta\Okta::VERSION.' php/phpVersion osName/osVersion',
            $userAgent
        );


    }

}
