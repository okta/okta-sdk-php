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
use Okta\Applications\Application;
use Okta\ClientBuilder;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends BaseUnitTestCase
{
    protected $properties;
    protected $testable;

    protected $model = '/Applications/customSwa.json';
    protected $modelType = Application::class;

    /** @test */
    public function getting_an_application_will_make_request_to_correct_endpoint()
    {
        $httpClient = $this->createNewHttpClient([
            "getBody" => '{"id":"abc123", "signOnMode": "BOOKMARK"}'
        ]);

        $this->testable->get('abc123');

        $requests = $httpClient->getRequests();

        $this->assertEquals('/api/v1/apps/abc123', $requests[0]->getUri()->getPath());
        $this->assertEquals('GET', $requests[0]->getMethod());
    }

    /** @test */
    public function getting_an_application_will_return_application_object()
    {
        $client = $this->createNewHttpClient([
            "getBody" => '{"id":"abc123", "signOnMode": "BOOKMARK"}'
        ]);

        $app = $this->testable->get('abc123');

        $this->assertInstanceOf(\Okta\Applications\BookmarkApplication::class, $app);
    }

    /** @test */
    public function saving_an_application_makes_requests_to_correct_endpoint()
    {
        $client = $this->createNewHttpClient();
        $this->testable->save();

        $requests = $client->getRequests();

        $this->assertEquals("/api/v1/apps/{$this->testable->getId()}", $requests[0]->getUri()->getPath());
        $this->assertEquals('POST', $requests[0]->getMethod());
    }

    /** @test */
    public function saving_an_application_will_return_correct_type()
    {
        $client = $this->createNewHttpClient();

        $app = $this->testable->save();

        $this->assertInstanceOf(Application::class, $app);
    }

    /** @test */
    public function deleting_an_application_makes_requests_to_correct_endpoint()
    {
        $client = $this->createNewHttpClient();
        $this->testable->delete();

        $requests = $client->getRequests();

        $this->assertEquals("/api/v1/apps/{$this->testable->getId()}", $requests[0]->getUri()->getPath());
        $this->assertEquals('DELETE', $requests[0]->getMethod());
    }

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals($this->properties->id, $this->testable->getId());
        $this->assertEquals($this->properties->id, $this->testable->id);
    }
   
    /** @test */
    public function name_is_accessible()
    {
        $this->assertEquals($this->properties->name, $this->testable->getName());
        $this->assertEquals($this->properties->name, $this->testable->name);
    }
    
    /** @test */
    public function label_is_accessible()
    {
        $this->assertEquals($this->properties->label, $this->testable->getLabel());
        $this->assertEquals($this->properties->label, $this->testable->label);
    }
    
    /** @test */
    public function label_is_settable()
    {
        $this->testable->setLabel('CustomApp');
        $this->assertEquals('CustomApp', $this->testable->getLabel());
    
        $this->testable->label = 'Custom App 2';
        $this->assertEquals('Custom App 2', $this->testable->getLabel());
    }

    /** @test */
    public function links_is_accessible()
    {
        $this->assertEquals($this->properties->_links, $this->testable->getLinks());
        $this->assertEquals($this->properties->_links, $this->testable->links);
    }

    /** @test */
    public function status_is_accessible()
    {
        $this->assertEquals($this->properties->status, $this->testable->getStatus());
        $this->assertEquals($this->properties->status, $this->testable->status);
    }

    /** @test */
    public function created_is_accessible()
    {
        $ts = Carbon::parse($this->properties->created)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->created);
        $this->assertEquals($ts, $this->testable->getCreated()->timestamp);
        $this->assertEquals($ts, $this->testable->created->timestamp);
    }

    /** @test */
    public function features_is_accessible()
    {
        $this->assertEquals($this->properties->features, $this->testable->getFeatures());
        $this->assertEquals($this->properties->features, $this->testable->features);
    }

    /** @test */
    public function features_is_settable()
    {
        $this->testable->setFeatures(['IMPORT_NEW_USERS']);
        $this->assertEquals(['IMPORT_NEW_USERS'], $this->testable->getFeatures());
    
        $this->testable->features = ['PROFILE_MASTERING'];
        $this->assertEquals(['PROFILE_MASTERING'], $this->testable->getFeatures());
    }

    /** @test */
    public function settings_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationSettings::class, $this->testable->getSettings());
        $this->assertInstanceOf(\Okta\Applications\ApplicationSettings::class, $this->testable->settings);
    }

    /** @test */
    public function settings_is_settable()
    {
        $settings1 = $this->testable->getSettings();
        $settings2 = $this->testable->getSettings();

        $settings1->signOn = 'test';
        $settings2->signOn = 'hello';

        $this->testable->setSettings($settings1);
        $this->assertInstanceOf(\Okta\Applications\ApplicationSettings::class, $this->testable->getSettings());
        $this->assertEquals('test', $this->testable->getSettings()->signOn);

        $this->testable->settings = $settings2;
        $this->assertInstanceOf(\Okta\Applications\ApplicationSettings::class, $this->testable->getSettings());
        $this->assertEquals('hello', $this->testable->getSettings()->signOn);

    }

    /** @test */
    public function embedded_is_accessible()
    {
        $this->assertEquals($this->properties->_embedded, $this->testable->getEmbedded());
        $this->assertEquals($this->properties->_embedded, $this->testable->embedded);
    }

    /** @test */
    public function licensing_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationLicensing::class, $this->testable->getLicensing());
        $this->assertInstanceOf(\Okta\Applications\ApplicationLicensing::class, $this->testable->licensing);
    }

    /** @test */
    public function licensing_is_settable()
    {
        $licensing1 = $this->testable->getLicensing();
        $licensing2 = $this->testable->getLicensing();

        $licensing1->seatCount = 10;
        $licensing2->seatCount = 20;

        $this->testable->setLicensing($licensing1);
        $this->assertInstanceOf(\Okta\Applications\ApplicationLicensing::class, $this->testable->getLicensing());
        $this->assertEquals(10, $this->testable->getLicensing()->seatCount);

        $this->testable->licensing = $licensing2;
        $this->assertInstanceOf(\Okta\Applications\ApplicationLicensing::class, $this->testable->getLicensing());
        $this->assertEquals(20, $this->testable->getLicensing()->seatCount);

    }
    
    /** @test */
    public function sign_on_mode_is_accessible()
    {
        $this->assertEquals($this->properties->signOnMode, $this->testable->getSignOnMode());
        $this->assertEquals($this->properties->signOnMode, $this->testable->signOnMode);
    }
    
    /** @test */
    public function sign_on_mode_is_settable()
    {
        $this->testable->setSignOnMode('BOOKMARK');
        $this->assertEquals('BOOKMARK', $this->testable->getSignOnMode());
    
        $this->testable->signOnMode = 'BASIC_AUTH';
        $this->assertEquals('BASIC_AUTH', $this->testable->getSignOnMode());
    }
    
    /** @test */
    public function visibility_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationVisibility::class, $this->testable->getVisibility());
        $this->assertInstanceOf(\Okta\Applications\ApplicationVisibility::class, $this->testable->visibility);
    }

    /** @test */
    public function visibility_is_settable()
    {
        $visibility1 = $this->testable->getVisibility();
        $visibility2 = $this->testable->getVisibility();

        $visibility1->autoSubmitToolbar = true;
        $visibility2->autoSubmitToolbar = false;

        $this->testable->setVisibility($visibility1);
        $this->assertInstanceOf(\Okta\Applications\ApplicationVisibility::class, $this->testable->getVisibility());
        $this->assertTrue($this->testable->getVisibility()->autoSubmitToolbar);

        $this->testable->visibility = $visibility2;
        $this->assertInstanceOf(\Okta\Applications\ApplicationVisibility::class, $this->testable->getVisibility());
        $this->assertFalse($this->testable->getVisibility()->autoSubmitToolbar);

    }

    /** @test */
    public function credentials_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationCredentials::class, $this->testable->getCredentials());
        $this->assertInstanceOf(\Okta\Applications\ApplicationCredentials::class, $this->testable->credentials);
    }

    /** @test */
    public function credentials_is_settable()
    {
        $credentials1 = $this->testable->getCredentials();
        $credentials2 = $this->testable->getCredentials();

        $credentials1->test1 = 'test1';
        $credentials2->test2 = 'test2';

        $this->testable->setCredentials($credentials1);
        $this->assertInstanceOf(\Okta\Applications\ApplicationCredentials::class, $this->testable->getCredentials());
        $this->assertEquals('test1', $this->testable->getCredentials()->test1);

        $this->testable->credentials = $credentials2;
        $this->assertInstanceOf(\Okta\Applications\ApplicationCredentials::class, $this->testable->getCredentials());
        $this->assertEquals('test2', $this->testable->getCredentials()->test2);

    }

    /** @test */
    public function last_updated_is_accessible()
    {
        $ts = Carbon::parse($this->properties->lastUpdated)->timestamp;
        $this->assertInstanceOf(\Carbon\Carbon::class, $this->testable->lastUpdated);
        $this->assertEquals($ts, $this->testable->getLastUpdated()->timestamp);
        $this->assertEquals($ts, $this->testable->lastUpdated->timestamp);
    }

    /** @test */
    public function accessibility_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\ApplicationAccessibility::class, $this->testable->getAccessibility());
        $this->assertInstanceOf(\Okta\Applications\ApplicationAccessibility::class, $this->testable->accessibility);

    }

    /** @test */
    public function accessibility_is_settable()
    {
        $accessibility1 = $this->testable->getAccessibility();
        $accessibility2 = $this->testable->getAccessibility();

        $accessibility1->test1 = 'test1';
        $accessibility2->test2 = 'test2';

        $this->testable->setAccessibility($accessibility1);
        $this->assertInstanceOf(\Okta\Applications\ApplicationAccessibility::class, $this->testable->getAccessibility());
        $this->assertEquals('test1', $this->testable->getAccessibility()->test1);

        $this->testable->accessibility = $accessibility2;
        $this->assertInstanceOf(\Okta\Applications\ApplicationAccessibility::class, $this->testable->getAccessibility());
        $this->assertEquals('test2', $this->testable->getAccessibility()->test2);

    }

    /** @test */
    public function activate_makes_request_to_correct_endpoint()
    {
        $client = $this->createNewHttpClient();

        $app = $this->createModel($this->model, Application::class);
        $app->activate();
        $request = $client->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/apps/{$this->testable->getId()}/lifecycle/activate",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function deactivate_makes_request_to_correct_endpoint()
    {
        $client = $this->createNewHttpClient();
        $app = $this->createModel($this->model, Application::class);
        $app->deactivate();

        $request = $client->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/apps/{$this->testable->getId()}/lifecycle/deactivate",
            $request[0]->getUri()->getPath()
        );
    }

    /** @test */
    public function get_application_users_makes_request_to_correct_endpoint()
    {

        $httpClient = $this->createNewHttpClient([
            'getBody' => '[{"id": "00uaz81i7cHX3cSsg0h7"}]'
        ]);

        $app = $this->createModel($this->model, $this->modelType);
        $appUsers = $app->getApplicationUsers();

        $request = $httpClient->getRequests();

        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/apps/{$this->testable->getId()}/users",
            $request[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\Collection::class, $appUsers);
        $this->assertInstanceOf(\Okta\Applications\AppUser::class, $appUsers->first());
    }

    /** @test */
    public function assign_user_to_application_makes_request_to_correct_endpoint()
    {

        $httpClient = $this->createNewHttpClient([
            "getBody" => '{"id":"abc123"}'
        ]);

        $app = $this->createModel($this->model, $this->modelType);

        $appUser = json_decode('{
              "id": "abc123",
              "scope": "USER",
              "credentials": {
                "userName": "user@example.com"
              }
            }  ');

        $appUser = $app->assignUserToApplication(new \Okta\Applications\AppUser(null, $appUser));

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/apps/{$this->testable->getId()}/users",
            $request[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\AppUser::class, $appUser);
    }

    /** @test */
    public function get_application_user_makes_request_to_correct_endpoint()
    {

        $httpClient = $this->createNewHttpClient([
            "getBody" => '{"id":"abc123"}'
        ]);

        $app = $this->createModel($this->model, $this->modelType);

        $appUser = $app->getApplicationUser('abc123');

        $request = $httpClient->getRequests();

        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/apps/{$this->testable->getId()}/users/abc123",
            $request[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\AppUser::class, $appUser);
    }

    /** @test */
    public function get_application_group_assignment_makes_request_to_correct_endpoint()
    {
        $httpClient = $this->createNewHttpClient([
            "getBody" => '{"id":"abc123"}'
        ]);

        $app = $this->createModel($this->model, $this->modelType);

        $groupAssignment = $app->getApplicationGroupAssignment('abc123');

        $request = $httpClient->getRequests();

        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/apps/{$this->testable->getId()}/groups/abc123",
            $request[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\ApplicationGroupAssignment::class, $groupAssignment);
    }

    /** @test */
    public function clone_application_key_makes_request_to_correct_endpoint()
    {

        $httpClient = $this->createNewHttpClient([
            "getBody" => '{"created":"2015-12-10T18:56:23.000Z","expiresAt":"2017-12-10T18:56:22.000Z","x5c":["MIIDqDCCApCg"],"e":"AQAB","n":"mkC6yAJVvFwUlm","kid":"SIMcCQNY3uw","kty":"RSA","use":"sig","x5t#S256":"5GOpy9CQVt"}'
        ]);

        $app = $this->createModel($this->model, $this->modelType);

        $key = $app->cloneApplicationKey('abc123');

        $request = $httpClient->getRequests();

        $this->assertEquals('POST', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/apps/{$this->testable->getId()}/credentials/keys/abc123/clone",
            $request[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\JsonWebKey::class, $key);
    }

    /** @test */
    public function get_application_key_makes_request_to_correct_endpoint()
    {
        $httpClient = $this->createNewHttpClient([
            "getBody" => '{"created":"2015-12-10T18:56:23.000Z","expiresAt":"2017-12-10T18:56:22.000Z","x5c":["MIIDqDCCApCg"],"e":"AQAB","n":"mkC6yAJVvFwUlm","kid":"SIMcCQNY3uw","kty":"RSA","use":"sig","x5t#S256":"5GOpy9CQVt"}'
        ]);

        $app = $this->createModel($this->model, $this->modelType);

        $key = $app->getApplicationKey('abc123');

        $request = $httpClient->getRequests();

        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/apps/{$this->testable->getId()}/credentials/keys/abc123",
            $request[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\JsonWebKey::class, $key);
    }

    /** @test */
    public function create_application_group_assignment_makes_request_to_correct_endpoint()
    {
        $httpClient = $this->createNewHttpClient([
            "getBody" => '{"id": "abc123"}'
        ]);

        $app = $this->createModel($this->model, $this->modelType);
        $appGroupAssignment = new \Okta\Applications\ApplicationGroupAssignment();

        $applicationGroupAssignment = $app->createApplicationGroupAssignment('xyz789', $appGroupAssignment);

        $request = $httpClient->getRequests();

        $this->assertEquals('PUT', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/apps/{$this->testable->getId()}/groups/xyz789",
            $request[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\ApplicationGroupAssignment::class, $applicationGroupAssignment);

    }

    /** @test */
    public function get_group_assignments_makes_request_to_correct_endpoint()
    {
        $httpClient = $this->createNewHttpClient([
            "getBody" => '[{"id": "abc123"}]'
        ]);

        $app = $this->createModel($this->model, $this->modelType);

        $groupAssignments = $app->getGroupAssignments();

        $request = $httpClient->getRequests();

        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/apps/{$this->testable->getId()}/groups",
            $request[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\Collection::class, $groupAssignments);
        $this->assertInstanceOf(\Okta\Applications\ApplicationGroupAssignment::class, $groupAssignments->first());
    }

    /** @test */
    public function get_keys_makes_request_to_correct_endpoint()
    {
        $httpClient = $this->createNewHttpClient([
            "getBody" => '[{"id": "abc123"}]'
        ]);

        $app = $this->createModel($this->model, $this->modelType);

        $keys = $app->getKeys();

        $request = $httpClient->getRequests();

        $this->assertEquals('GET', $request[0]->getMethod());
        $this->assertEquals(
            "/api/v1/apps/{$this->testable->getId()}/credentials/keys",
            $request[0]->getUri()->getPath()
        );

        $this->assertInstanceOf(\Okta\Applications\Collection::class, $keys);
        $this->assertInstanceOf(\Okta\Applications\JsonWebKey::class, $keys->first());
    }

        
}
