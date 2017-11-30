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

use Carbon\Carbon;
use Okta\Applications\ApplicationGroupAssignment;
use PHPUnit\Framework\TestCase;

class ApplicationGroupAssignmentTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\ApplicationGroupAssignment */
    protected $testable;

    protected $model = '/Applications/groupAssignment.json';
    protected $modelType = \Okta\Applications\ApplicationGroupAssignment::class;

    /** @test */
    public function deleting_an_application_group_assignment_makes_requests_to_correct_endpoint()
    {
        $client = $this->createNewHttpClient();
        $this->testable->delete('application123');

        $requests = $client->getRequests();

        $this->assertEquals(
            "/api/v1/apps/application123/group/{$this->testable->getId()}",
            $requests[0]->getUri()->getPath()
        );
        $this->assertEquals('DELETE', $requests[0]->getMethod());
    }

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals($this->properties->id, $this->testable->getId());
        $this->assertEquals($this->properties->id, $this->testable->id);
    }

    /** @test */
    public function links_is_accessible()
    {
        $this->assertEquals($this->properties->_links, $this->testable->getLinks());
        $this->assertEquals($this->properties->_links, $this->testable->links);
    }

    /** @test */
    public function profile_is_accessible()
    {
        $this->assertEquals($this->properties->profile, $this->testable->getProfile());
        $this->assertEquals($this->properties->profile, $this->testable->profile);
    }

    /** @test */
    public function profile_is_settable()
    {
        $profile = $this->testable->getProfile();
        
        $profile->email = 'email1@mailinator.com';
        
        $this->testable->setProfile($profile);
        $this->assertEquals('email1@mailinator.com', $this->testable->getProfile()->email);

        $this->testable->profile = $profile;

        $profile->email = 'email2@mailinator.com';

        $this->assertEquals('email2@mailinator.com', $this->testable->getProfile()->email);
    }

    /** @test */
    public function priority_is_accessible()
    {
        $this->assertEquals($this->properties->priority, $this->testable->getPriority());
        $this->assertEquals($this->properties->priority, $this->testable->priority);
    }

    /** @test */
    public function priority_is_settable()
    {
        $this->testable->setPriority(1);
        $this->assertEquals(1, $this->testable->getPriority());

        $this->testable->priority = 2;
        $this->assertEquals(2, $this->testable->getPriority());
    }

    /** @test */
    public function embedded_is_accessible()
    {
        $this->assertEquals($this->properties->_embedded, $this->testable->getEmbedded());
        $this->assertEquals($this->properties->_embedded, $this->testable->embedded);
    }
    
    /** @test */
    public function last_updated_is_accessible()
    {
        $ts = Carbon::parse($this->properties->lastUpdated)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->lastUpdated);
        $this->assertEquals($ts, $this->testable->getLastUpdated()->timestamp);
        $this->assertEquals($ts, $this->testable->lastUpdated->timestamp);
    }
    
    
}
