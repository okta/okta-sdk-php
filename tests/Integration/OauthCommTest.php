<?php

/******************************************************************************
 * Copyright 2020 Okta, Inc.                                                  *
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


use Okta\Users\User;
use Okta\ClientBuilder;
use Okta\Users\UserProfile;
use Okta\Utilities\AuthorizationMode;

class OauthCommTest extends BaseIntegrationTestCase
{

    /** @test */
    public function a_call_with_ssws_uses_correct_header()
    {
        if(!$this->isMockingResponses()) {
            $this->markTestSkipped('This test is skipped since were need to mock response to test heders');
        }

        $time=time();
        $userResponse = file_get_contents(__DIR__ .'/../responses/users/activateUser/create.json');

        $client = $this->createNewHttpClient([
            ["getBody"=>$userResponse] //create user
        ]);

        // Create a user
        $userProfile = (new UserProfile)
            ->setFirstName('Oauth')
            ->setLastName('User')
            ->setLogin('php_oauth_user_'.$time.'@mailinator.com')
            ->setEmail('php_oauth_user_'.$time.'@mailinator.com');

        $user = (new User)
            ->setProfile($userProfile)
            ->create();

        $createdUser = $user->create(['activate'=>'false']);

        $createdUser->deactivate();
        $createdUser->delete();

        $requests = $client->getRequests();
        $this->assertStringContainsString('SSWS ', $requests[0]->getHeaders()['Authorization'][0]);
    }

    /** @test */
    public function a_call_with_correct_scopes_to_create_user_will_work()
    {
        // $this->markTestSkipped('This test is skipped due to some issues with previous tests.');
        \Okta\Client::destroy();
        $time = time();
        $client = (new ClientBuilder)
            ->setAuthorizationMode(new AuthorizationMode(AuthorizationMode::PRIVATE_KEY))
            ->build();

        // Create a user
        $userProfile = (new UserProfile)
            ->setFirstName('Oauth')
            ->setLastName('User')
            ->setLogin('php_oauth_user_'.$time.'@mailinator.com')
            ->setEmail('php_oauth_user_'.$time.'@mailinator.com');

        $user = (new User)
            ->setProfile($userProfile)
            ->create();

        $this->assertInstanceOf(User::class, $user);
        $this->assertNotEmpty($user->id, 'It appears the user was not created');

        $user->deactivate();
        $user->delete();

    }
}
