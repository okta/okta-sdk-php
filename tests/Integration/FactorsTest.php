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

class FactorsTest extends BaseTestCase
{

    /** @test */
    public function a_user_should_be_able_to_get_a_factor_by_factor_id_only()
    {
        $client = $this->createNewHttpClient([
            'getBody' => file_get_contents(__DIR__ . '/../responses/factors/getFactor.json')
        ]);

        $user = $this->createNewUser();
        $factor = $user->getFactor('FactorId123');
        $requests = $client->getRequests();


        $this->assertEquals("/api/v1/users/{$user->getId()}/factors/FactorId123", $requests[0]->getUri()->getPath());

        $this->assertInstanceOf(\Okta\UserFactors\SmsFactor::class, $factor);
        $this->assertequals('application/json', $requests[0]->getHeaderLine('Accept'));
        $this->assertEmpty($requests[0]->getHeaderLine('Content-Type'));
        $this->assertEquals("SSWS {$this->token}", $requests[0]->getHeaderLine('Authorization'));

    }



    /** @test */
    public function can_list_all_enrolled_factors()
    {
        $client = $this->createNewHttpClient([
            'getBody' => file_get_contents(__DIR__ . '/../responses/factors/listEnrolledFactors.json')
        ]);


        $user = $this->createNewUser();
        $allFactors = $user->getFactors();

        $requests = $client->getRequests();

        $this->assertEquals("/api/v1/users/{$user->getId()}/factors", $requests[0]->getUri()->getPath());

        $this->assertInstanceOf(\Okta\UserFactors\Collection::class, $allFactors);
        $this->assertequals('application/json', $requests[0]->getHeaderLine('Accept'));
        $this->assertEmpty($requests[0]->getHeaderLine('Content-Type'));
        $this->assertEquals("SSWS {$this->token}", $requests[0]->getHeaderLine('Authorization'));

        $this->assertCount(3, $allFactors);
        $this->assertInstanceof(\Okta\UserFactors\SecurityQuestionFactor::class, $allFactors[0]);
        $this->assertInstanceof(\Okta\UserFactors\TotpFactor::class, $allFactors[1]);
        $this->assertInstanceof(\Okta\UserFactors\SmsFactor::class, $allFactors[2]);

    }

    /** @test */
    public function can_list_all_factors_to_enroll()
    {
        $client = $this->createNewHttpClient([
            'getBody' => file_get_contents(__DIR__ . '/../responses/factors/listFactorsToEnroll.json')
        ]);


        $user = $this->createNewUser();
        $allFactors = $user->getSupportedFactors();

        $requests = $client->getRequests();

        $this->assertEquals("/api/v1/users/{$user->getId()}/factors/catalog", $requests[0]->getUri()->getPath());

        $this->assertInstanceOf(\Okta\UserFactors\Collection::class, $allFactors);
        $this->assertequals('application/json', $requests[0]->getHeaderLine('Accept'));
        $this->assertEmpty($requests[0]->getHeaderLine('Content-Type'));
        $this->assertEquals("SSWS {$this->token}", $requests[0]->getHeaderLine('Authorization'));

        $this->assertCount(7, $allFactors);

        $this->assertInstanceof(\Okta\UserFactors\SecurityQuestionFactor::class, $allFactors[0]);
        $this->assertInstanceof(\Okta\UserFactors\TotpFactor::class, $allFactors[1]);
        $this->assertInstanceof(\Okta\UserFactors\TotpFactor::class, $allFactors[2]);
        $this->assertInstanceof(\Okta\UserFactors\SmsFactor::class, $allFactors[3]);
        $this->assertInstanceof(\Okta\UserFactors\CallFactor::class, $allFactors[4]);
        $this->assertInstanceof(\Okta\UserFactors\TokenFactor::class, $allFactors[5]);
        $this->assertInstanceof(\Okta\UserFactors\TokenFactor::class, $allFactors[6]);
    }

    
}
