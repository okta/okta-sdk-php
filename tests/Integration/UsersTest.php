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

use PHPUnit\Framework\TestCase;

class UsersTest extends BaseIntegrationTestCase
{
    /** @test */
    public function able_to_retrieve_a_user()
    {
        $userResponse = file_get_contents(__DIR__ .'/../responses/users/getUser/create.json');
        $deleteNonExistUserResponse = file_get_contents(__DIR__ .'/../responses/users/getUser/deleteNonExistantUser.json');
        $client = $this->createNewHttpClient([
            ["getBody"=>$userResponse], //create user
            ["getBody"=>$userResponse], //get user by id
            ["getBody"=>$userResponse], //get user by login
            ["getBody"=>"{}"], //deactivate user
            ["getStatusCode"=>204, "getBody"=>null], //delete user
            ["getBody"=>$deleteNonExistUserResponse, "getStatusCode"=>404]
        ]);

        $user = new \Okta\Users\User();
        $userProfile = $user->getProfile();
        $userCredentials = $user->getCredentials();
        $userPasswordCredential = $userCredentials->getPassword();

        $userProfile->setFirstName('John')
            ->setLastName('Get-User')
            ->setEmail('john-get-user@example.com')
            ->setLogin('john-get-user@example.com');

        $userPasswordCredential->setValue('Abcd1234');
        $userCredentials->setPassword($userPasswordCredential);

        $user->setProfile($userProfile)
            ->setCredentials($userCredentials);

        $createdUser = $user->create(['activate'=>'false']);
        $this->assertInstanceOf(\Okta\Users\User::class, $createdUser, "Creating a user does not provide you with a `User` object");

        $getUserById = (new \Okta\Users\User())->get($createdUser->getId());
        $this->assertEquals($createdUser, $getUserById, 'Getting user by `ID` does not provide the same object');

        $getUserByName = (new \Okta\Users\User())->get($createdUser->getProfile()->getLogin());
        $this->assertEquals($createdUser, $getUserByName, 'Getting user by `login` does not provide the same object');

        $createdUser->deactivate();
        $createdUser->delete();

        try {
            $deletedUser = (new \Okta\Users\User())->get($createdUser->getId());
            $this->assertTrue(false, 'Deleting a non-existant user did not throw an exception');
        } catch (\Exception $e) {
            $this->assertInstanceOf(\Okta\Exceptions\ResourceException::class, $e, 'Getting a deleted user did not throw a Resource Exception.');
        }

        // If we are mocking responses, lets make sure all requests were made correctly.
        if( $this->isMockingResponses() ) {
            $requests = $client->getRequests();

            //1: Validate the create request
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
            $this->assertEquals('/api/v1/users', $requests[0]->getUri()->getPath(), 'Creating a user does not submit to correct path.');
            $this->assertEquals('activate=false', $requests[0]->getUri()->getQuery(), 'The query param `activate` was not set to `false`.');

            //2: Validate the get by id request
            $this->assertEquals('GET', $requests[1]->getMethod(), 'Did not submit a `GET` request for getting a user by id.');
            $this->assertContains('SSWS', $requests[1]->getHeader('Authorization')[0], 'Authorization Header does not contain `SSWS`.');
            $this->assertContains('okta-sdk-php/', $requests[1]->getHeader('User-Agent')[0], 'User-Agent does not contain `okta-sdk-php`.');
            $this->assertEquals('/api/v1/users/'.$createdUser->getId(), $requests[1]->getUri()->getPath(), 'Getting User by ID did not make request to correct path');

            //3: Validate the get by login request
            $this->assertEquals('GET', $requests[2]->getMethod(), 'Did not submit a `GET` request for getting a user by login.');
            $this->assertContains('SSWS', $requests[2]->getHeader('Authorization')[0], 'Authorization Header does not contain `SSWS`.');
            $this->assertContains('okta-sdk-php/', $requests[2]->getHeader('User-Agent')[0], 'User-Agent does not contain `okta-sdk-php`.');
            $this->assertEquals('/api/v1/users/'.$createdUser->getProfile()->getLogin(), $requests[2]->getUri()->getPath(), 'Getting User by login did not make request to correct path');

            //4: Validate the deactivate request
            $this->assertEquals('POST', $requests[3]->getMethod(), 'Did not submit a `POST` request for deactivating a user.');
            $this->assertContains('SSWS', $requests[3]->getHeader('Authorization')[0], 'Authorization Header does not contain `SSWS`.');
            $this->assertContains('okta-sdk-php/', $requests[3]->getHeader('User-Agent')[0], 'User-Agent does not contain `okta-sdk-php`.');
            $this->assertEquals('/api/v1/users/'.$createdUser->getId().'/lifecycle/deactivate', $requests[3]->getUri()->getPath(), 'Deactivating a user did not make request to correct path');

            //5: Validate the delete request
            $this->assertEquals('DELETE', $requests[4]->getMethod(), 'Did not submit a `DELETE` request when deleting a user.');
            $this->assertContains('SSWS', $requests[4]->getHeader('Authorization')[0], 'Authorization Header does not contain `SSWS`.');
            $this->assertContains('okta-sdk-php/', $requests[4]->getHeader('User-Agent')[0], 'User-Agent does not contain `okta-sdk-php`.');
            $this->assertEquals('/api/v1/users/'.$createdUser->getId(), $requests[4]->getUri()->getPath(), 'Deleting a user did not make request to correct path');

            //6: Validate the deleted user request

        }

    }

}
