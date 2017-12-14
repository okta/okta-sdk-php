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

class GetUserTest extends BaseIntegrationTestCase
{
    protected static $user;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        self::$user = new \Okta\Users\User();
        $userProfile = self::$user->getProfile();
        $userCredentials = self::$user->getCredentials();
        $userPasswordCredential = $userCredentials->getPassword();

        $userProfile->setFirstName('John')
            ->setLastName('Get-User')
            ->setEmail('john-get-user@example.com')
            ->setLogin('john-get-user@example.com');

        $userPasswordCredential->setValue('Abcd1234');
        $userCredentials->setPassword($userPasswordCredential);

        self::$user->setProfile($userProfile)
            ->setCredentials($userCredentials);

    }

    /** @test */
    public function can_create_a_user_from_profile_and_password()
    {
        $body = file_get_contents(__DIR__ .'/../../responses/users/getUser/create.json');
        $client = $this->createNewHttpClient([
            ["getBody"=>$body]
        ]);

        $user = self::$user->create();

        $requests = $client->getRequests();

        $requestBody = json_decode($requests[0]->getBody()->getContents());
        $this->assertEquals('John', $requestBody->profile->firstName, 'The `profile.firstName` property was not set correctly.');
        $this->assertEquals('Get-User', $requestBody->profile->lastName, 'The `profile.lastName` property was not set correctly.');
        $this->assertEquals('john-get-user@example.com', $requestBody->profile->email, 'The `profile.email` property was not set correctly.');
        $this->assertEquals('john-get-user@example.com', $requestBody->profile->login, 'The `profile.login` property was not set correctly.');
        $this->assertEquals('Abcd1234', $requestBody->credentials->password->value, 'The `credentials.password.value` property was not set correctly.');

        $this->assertEquals('POST', $requests[0]->getMethod(), 'Did not submit a `POST` request for creating a user.');
        $this->assertEquals('application/json', $requests[0]->getHeader('Content-Type')[0], 'Content-Type was not set to `application/json`.');
        $this->assertContains('SSWS', $requests[0]->getHeader('Authorization')[0], 'Authorization Header does not contain `SSWS`.');
        $this->assertContains('okta-sdk-php/', $requests[0]->getHeader('User-Agent')[0], 'User-Agent does not contain `okta-sdk-php`.');
        $this->assertEquals(174, $requests[0]->getHeader('Content-Length')[0], '`Content-Length` is not what is expected.');

        $this->assertInstanceOf(\Okta\Users\User::class, $user, 'Creating a User does not return an instance of `Okta\Users\User`.');
    }


    public static function tearDownAfterClass()
    {
        try {
            self::$user->delete();
            self::$user->delete();
        } catch (\Exception $e) {
            dump($e->getMessage());
        }
        parent::tearDownAfterClass();
    }
}
