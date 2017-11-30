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
    public function an_application_can_be_retrieved_by_id()
    {
        $client = $this->createNewHttpClient([
            'getBody' => file_get_contents(__DIR__ . '/../responses/applications/samlApplication.json')
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\SamlApplication::class, $app);
        $this->assertequals('application/json', $requests[0]->getHeaderLine('Accept'));
        $this->assertEmpty($requests[0]->getHeaderLine('Content-Type'));
        $this->assertEquals("SSWS {$this->token}", $requests[0]->getHeaderLine('Authorization'));

    }

    /** @test */
    public function an_swa_application_can_be_retrieved_by_id()
    {
        $client = $this->createNewHttpClient([
            'getBody' => file_get_contents(__DIR__ . '/../responses/applications/swaApplication.json')
        ]);

        $application = new \Okta\Applications\Application();
        $app = $application->get('application123');

        $requests = $client->getRequests();


        $this->assertEquals(
            "/api/v1/apps/application123",
            $requests[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\SwaApplication::class, $app);
        $this->assertequals('application/json', $requests[0]->getHeaderLine('Accept'));
        $this->assertEmpty($requests[0]->getHeaderLine('Content-Type'));
        $this->assertEquals("SSWS {$this->token}", $requests[0]->getHeaderLine('Authorization'));

    }

}
