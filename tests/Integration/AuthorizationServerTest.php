<?php
/******************************************************************************
 * Copyright 2017 - Present Okta, Inc.                                        *
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

 namespace Okta\Tests\Integration;

use Okta\Okta;
use Okta\Policy\Policy;
use Okta\Policy\PolicyType;
use Okta\Application\JwkUse;
use Okta\Resource\Collection;
use Okta\Application\JsonWebKey;
use Okta\Application\OAuth2Claim;
use Okta\Application\OAuth2Scope;
use Okta\Policy\PolicyRuleConditions;
use Okta\Exceptions\ResourceException;
use Okta\Policy\ClientPolicyCondition;
use Okta\Policy\OAuthAuthorizationPolicy;
use Okta\AuthorizationServer\AuthorizationServer;

class AuthorizationServerTest extends \BaseIntegrationTestCase
{
    /** @var \Okta\Okta */
    private $okta;

    protected function setup(): void
    {
        parent::setup();

        $this->okta = new Okta;
    }

    /** @test */
    public function create_authorization_server() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} createAuthServer")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );
        try {
            $this->assertNotNull($authorizationServer, "Authorization Server should not be null");
            $this->assertInstanceOf(AuthorizationServer::class, $authorizationServer, "Authorization server returned should be instance of " . AuthorizationServer::class);
            $this->assertEquals("{$this->sdkPrefix} createAuthServer", $authorizationServer->getName(), "Name of created auth server was incorrect");
            $this->assertCount(1, $authorizationServer->getAudiences(), "Audiences should be a count of 1");
            $this->assertEquals("api://default", $authorizationServer->getAudiences()[0], "Audience was incorrect");
        }
        finally {
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function list_authorization_servers() {
        $servers = $this->okta->authorizationServer->listAuthorizationServers();

        $this->assertInstanceOf(Collection::class, $servers, "Authorization server list was not an instance of " . Collection::class);
        $this->assertTrue($servers->count() > 0, "Authorization server count should be more than 0");
    }

    /** @test */
    public function get_authorization_server() {
        $servers = $this->okta->authorizationServer->listAuthorizationServers();
        $this->assertTrue($servers->count() > 0, "Authorization server count should be more than 0");
        $firstServer = $servers->first();
        $foundServer = $this->okta->authorizationServer->getAuthorizationServer($firstServer->id);

        $this->assertNotNull($foundServer, "Authorization Server should not be null");
        $this->assertInstanceOf(AuthorizationServer::class, $foundServer, "Authorization server returned should be instance of " . AuthorizationServer::class);
        $this->assertEquals($firstServer->getName(), $foundServer->getName(), "Name of created auth server was incorrect");
    }

    /** @test */
    public function update_authorization_server() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} updateAuthServer")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );
        try {
            $this->assertNotNull($authorizationServer, "Authorization Server should not be null");
            $this->assertInstanceOf(AuthorizationServer::class, $authorizationServer, "Authorization server returned should be instance of " . AuthorizationServer::class);
            $this->assertEquals("{$this->sdkPrefix} updateAuthServer", $authorizationServer->getName(), "Name of created auth server was incorrect");
            $this->assertCount(1, $authorizationServer->getAudiences(), "Audiences should be a count of 1");
            $this->assertEquals("api://default", $authorizationServer->getAudiences()[0], "Audience was incorrect");

            $authorizationServer->setName($authorizationServer->name . " updated");
            $this->okta->authorizationServer->updateAuthorizationServer($authorizationServer->id, $authorizationServer);
            $updatedAuthorizationServer = $this->okta->authorizationServer->getAuthorizationServer($authorizationServer->id);

            $this->assertEquals($authorizationServer->name, $updatedAuthorizationServer->name, "Updated authorization server did not retur correct name");
        }
        finally {
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function delete_authorization_server() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} deleteAuthorizationServer")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $this->assertNotNull($authorizationServer, "Authorization Server should not be null");
        $this->assertInstanceOf(AuthorizationServer::class, $authorizationServer, "Authorization server returned should be instance of " . AuthorizationServer::class);
        $this->assertEquals("{$this->sdkPrefix} deleteAuthorizationServer", $authorizationServer->getName(), "Name of created auth server was incorrect");
        $this->assertCount(1, $authorizationServer->getAudiences(), "Audiences should be a count of 1");
        $this->assertEquals("api://default", $authorizationServer->getAudiences()[0], "Audience was incorrect");

        $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);

        $this->expectException(ResourceException::class);
        $this->okta->authorizationServer->getAuthorizationServer($authorizationServer->id);

    }

    /** @test */
    public function deactivate_authorization_server() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} deactivateAuthorizationServer")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        try {
            $this->assertNotNull($authorizationServer, "Authorization Server should not be null");
            $this->assertInstanceOf(AuthorizationServer::class, $authorizationServer, "Authorization server returned should be instance of " . AuthorizationServer::class);
            $this->assertEquals("ACTIVE", $authorizationServer->status, "Status should be active so we can test deactivation");

            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);

            $foundAuthorizationServer = $this->okta->authorizationServer->getAuthorizationServer($authorizationServer->id);
            $this->assertEquals("INACTIVE", $foundAuthorizationServer->status, "Status did not change to inactive");

        }
        finally {
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }

    }

    /** @test */
    public function activate_authorization_server() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} activateAuthorizationServer")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        try {
            $this->assertNotNull($authorizationServer, "Authorization Server should not be null");
            $this->assertInstanceOf(AuthorizationServer::class, $authorizationServer, "Authorization server returned should be instance of " . AuthorizationServer::class);
            $this->assertEquals("ACTIVE", $authorizationServer->status, "Status should be active so we can test deactivation");

            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);

            $foundAuthorizationServer = $this->okta->authorizationServer->getAuthorizationServer($authorizationServer->id);
            $this->assertEquals("INACTIVE", $foundAuthorizationServer->status, "Status did not change to inactive");

            $this->okta->authorizationServer->activateAuthorizationServer($authorizationServer->id);

            $foundAuthorizationServer = $this->okta->authorizationServer->getAuthorizationServer($authorizationServer->id);
            $this->assertEquals("ACTIVE", $foundAuthorizationServer->status, "Status did not change to active");

        }
        finally {
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }

    }

    /** @test */
    public function list_authorization_server_policies() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} listAuthServerPolicy")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $policy = $this->okta->authorizationServer->createAuthorizationServerPolicy(
            $authorizationServer->id,
            (new OAuthAuthorizationPolicy)
                ->setType(new PolicyType(PolicyType::OAUTH_AUTHORIZATION_POLICY))
                ->setStatus("ACTIVE")
                ->setName("{$this->sdkPrefix} Policy")
                ->setDescription("Test Policy")
                ->setPriority(1)
                ->setConditions(
                    (new PolicyRuleConditions)
                        ->setClients(
                            (new ClientPolicyCondition)
                                ->setInclude(["ALL_CLIENTS"])
                        )
                )
        );

        try {
            $this->assertNotNull($authorizationServer, "Authorization Server should not be null");
            $this->assertInstanceOf(AuthorizationServer::class, $authorizationServer, "Authorization server returned should be instance of " . AuthorizationServer::class);

            $policies = $this->okta->authorizationServer->listAuthorizationServerPolicies($authorizationServer->id);
            $this->assertInstanceOf(Collection::class, $policies, "Listed Authorization Server Policies did not return an instance of " . Collection::class);
            $this->assertTrue($policies->count() > 0, "Must have at least one policy");
        }
        finally {
            $this->okta->authorizationServer->deleteAuthorizationServerPolicy($authorizationServer->id, $policy->id);
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function get_authorization_server_policy() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} getAuthorizationServerPolicy")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $policy = $this->okta->authorizationServer->createAuthorizationServerPolicy(
            $authorizationServer->id,
            (new OAuthAuthorizationPolicy)
                ->setType(new PolicyType(PolicyType::OAUTH_AUTHORIZATION_POLICY))
                ->setStatus("ACTIVE")
                ->setName("{$this->sdkPrefix} Policy")
                ->setDescription("Test Policy")
                ->setPriority(1)
                ->setConditions(
                    (new PolicyRuleConditions)
                        ->setClients(
                            (new ClientPolicyCondition)
                                ->setInclude(["ALL_CLIENTS"])
                        )
                )
        );

        try {
            $this->assertNotNull($authorizationServer, "Authorization Server should not be null");
            $this->assertInstanceOf(AuthorizationServer::class, $authorizationServer, "Authorization server returned should be instance of " . AuthorizationServer::class);

            $foundPolicy = $this->okta->authorizationServer->getAuthorizationServerPolicy($authorizationServer->id, $policy->id);
            $this->assertInstanceOf(Policy::class, $policy, "Listed Authorization Server Policies did not return an instance of " . Policy::class);
            $this->assertEquals($policy->getName(), $foundPolicy->getName(), "found policy was incorrect");
        }
        finally {
            $this->okta->authorizationServer->deleteAuthorizationServerPolicy($authorizationServer->id, $policy->id);
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function update_authorization_server_policy() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} getAuthorizationServerPolicy")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $policy = $this->okta->authorizationServer->createAuthorizationServerPolicy(
            $authorizationServer->id,
            (new OAuthAuthorizationPolicy)
                ->setType(new PolicyType(PolicyType::OAUTH_AUTHORIZATION_POLICY))
                ->setStatus("ACTIVE")
                ->setName("{$this->sdkPrefix} Policy")
                ->setDescription("Test Policy")
                ->setPriority(1)
                ->setConditions(
                    (new PolicyRuleConditions)
                        ->setClients(
                            (new ClientPolicyCondition)
                                ->setInclude(["ALL_CLIENTS"])
                        )
                )
        );

        try {
            $this->assertNotNull($authorizationServer, "Authorization Server should not be null");
            $this->assertInstanceOf(AuthorizationServer::class, $authorizationServer, "Authorization server returned should be instance of " . AuthorizationServer::class);

            $policy->setName("{$this->sdkPrefix} Policy Updated");
            $this->okta->authorizationServer->updateAuthorizationServerPolicy($authorizationServer->id, $policy->id, $policy);

            $foundPolicy = $this->okta->authorizationServer->getAuthorizationServerPolicy($authorizationServer->id, $policy->id);
            $this->assertInstanceOf(Policy::class, $policy, "Listed Authorization Server Policies did not return an instance of " . Policy::class);
            $this->assertEquals("{$this->sdkPrefix} Policy Updated", $foundPolicy->getName(), "found policy was incorrect");
        }
        finally {
            $this->okta->authorizationServer->deleteAuthorizationServerPolicy($authorizationServer->id, $policy->id);
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function delete_authorization_server_policy() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} getAuthorizationServerPolicy")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $policy = $this->okta->authorizationServer->createAuthorizationServerPolicy(
            $authorizationServer->id,
            (new OAuthAuthorizationPolicy)
                ->setType(new PolicyType(PolicyType::OAUTH_AUTHORIZATION_POLICY))
                ->setStatus("ACTIVE")
                ->setName("{$this->sdkPrefix} Policy")
                ->setDescription("Test Policy")
                ->setPriority(1)
                ->setConditions(
                    (new PolicyRuleConditions)
                        ->setClients(
                            (new ClientPolicyCondition)
                                ->setInclude(["ALL_CLIENTS"])
                        )
                )
        );

        try {
            $this->assertNotNull($authorizationServer, "Authorization Server should not be null");
            $this->assertInstanceOf(AuthorizationServer::class, $authorizationServer, "Authorization server returned should be instance of " . AuthorizationServer::class);

            $this->okta->authorizationServer->deleteAuthorizationServerPolicy($authorizationServer->id, $policy->id);

            $this->expectException(ResourceException::class);
            $this->okta->authorizationServer->getAuthorizationServerPolicy($authorizationServer->id, $policy->id);

        }
        finally {
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function list_oauth2_scopes() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} listOauth2Scopes")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $oauthScope = $this->okta->authorizationServer->createOAuth2Scope(
            $authorizationServer->id,
            (new OAuth2Scope)
                ->setName("{$this->sdkPrefix}:TestOauth2Scope")
        );

        try {
            $authServerScopes = $this->okta->authorizationServer->listOAuth2Scopes($authorizationServer->id);
            $this->assertInstanceOf(Collection::class, $authServerScopes, "Auth Server scopes did not return in instance of " . Collection::class);
            $this->assertTrue($authServerScopes->count() > 0, "listed scopes count should be at least 1");

            $this->assertTrue($authServerScopes->contains(function ($obj) use ($oauthScope) {
                return $obj->id == $oauthScope->id;
            }));
        }
        finally {
            $this->okta->authorizationServer->deleteOAuth2Scope($authorizationServer->id, $oauthScope->id);
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function get_oauth2_scope() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} getOauth2Scope")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $oauthScope = $this->okta->authorizationServer->createOAuth2Scope(
            $authorizationServer->id,
            (new OAuth2Scope)
                ->setName("{$this->sdkPrefix}:TestOauth2Scope")
        );

        try {
            $foundScope = $this->okta->authorizationServer->getOAuth2Scope($authorizationServer->id, $oauthScope->id);
            $this->assertInstanceOf(OAuth2Scope::class, $foundScope, "Auth Server scope did not return in instance of " . OAuth2Scope::class);

            $this->assertEquals($oauthScope->getName(), $foundScope->getName(), "Name did not match original scope");
        }
        finally {
            $this->okta->authorizationServer->deleteOAuth2Scope($authorizationServer->id, $oauthScope->id);
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function create_oauth2_scope() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} createOauth2Scope")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $oauthScope = $this->okta->authorizationServer->createOAuth2Scope(
            $authorizationServer->id,
            (new OAuth2Scope)
                ->setName("{$this->sdkPrefix}:TestOauth2Scope")
        );

        try {
            $this->assertInstanceOf(OAuth2Scope::class, $oauthScope, "Auth Server scope did not return in instance of " . OAuth2Scope::class);
        }
        finally {
            $this->okta->authorizationServer->deleteOAuth2Scope($authorizationServer->id, $oauthScope->id);
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function update_oauth2_scope() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} updateOauth2Scope")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $oauthScope = $this->okta->authorizationServer->createOAuth2Scope(
            $authorizationServer->id,
            (new OAuth2Scope)
                ->setName("{$this->sdkPrefix}:TestOauth2Scope")
        );

        try {

            $oauthScope->setName("{$this->sdkPrefix}:TestOauth2Scope:updated");
            $this->okta->authorizationServer->updateOAuth2Scope($authorizationServer->id, $oauthScope->id, $oauthScope);

            $foundScope = $this->okta->authorizationServer->getOAuth2Scope($authorizationServer->id, $oauthScope->id);
            $this->assertInstanceOf(OAuth2Scope::class, $foundScope, "Auth Server scope did not return in instance of " . OAuth2Scope::class);

            $this->assertEquals("{$this->sdkPrefix}:TestOauth2Scope:updated", $foundScope->getName(), "Name did not match original scope");
        }
        finally {
            $this->okta->authorizationServer->deleteOAuth2Scope($authorizationServer->id, $oauthScope->id);
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function delete_oauth2_scope() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} deleteOauth2Scope")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $oauthScope = $this->okta->authorizationServer->createOAuth2Scope(
            $authorizationServer->id,
            (new OAuth2Scope)
                ->setName("{$this->sdkPrefix}:TestOauth2Scope")
        );

        try {
            $this->assertInstanceOf(OAuth2Scope::class, $oauthScope, "Auth Server scope did not return in instance of " . OAuth2Scope::class);
            $this->okta->authorizationServer->deleteOAuth2Scope($authorizationServer->id, $oauthScope->id);

            $this->expectException(ResourceException::class);
            $this->okta->authorizationServer->getOAuth2Scope($authorizationServer->id, $oauthScope->id);

        }
        finally {
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function list_oauth2_claims() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} listOAuth2Claims")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $oauthClaim = $this->okta->authorizationServer->createOAuth2Claim(
            $authorizationServer->id,
            (new OAuth2Claim)
                ->setName("{$this->sdkPrefix}_TestOauth2Claim")
                ->setStatus("INACTIVE")
                ->setClaimType("RESOURCE")
                ->setValueType("EXPRESSION")
                ->setValue("\"driving!\"")
        );


        try {
            $claims = $this->okta->authorizationServer->listOAuth2Claims($authorizationServer->id);
            $this->assertInstanceOf(Collection::class, $claims, "Listing claims did not return instance of " . Collection::class);
            $this->assertTrue($claims->count() > 0, "Should have at least 1 claim");
        }
        finally {
            $this->okta->authorizationServer->deleteOAuth2Claim($authorizationServer->id, $oauthClaim->id);
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function get_oauth2_claim() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} getOAuth2Claims")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $oauthClaim = $this->okta->authorizationServer->createOAuth2Claim(
            $authorizationServer->id,
            (new OAuth2Claim)
                ->setName("{$this->sdkPrefix}_TestOauth2Claim")
                ->setStatus("INACTIVE")
                ->setClaimType("RESOURCE")
                ->setValueType("EXPRESSION")
                ->setValue("\"driving!\"")
        );


        try {
            $claim = $this->okta->authorizationServer->getOAuth2Claim($authorizationServer->id, $oauthClaim->id);
            $this->assertInstanceOf(OAuth2Claim::class, $claim, "Getting claim did not return instance of " . OAuth2Claim::class);
            $this->assertEquals($oauthClaim->name, $claim->name, "did not return correct claim");
        }
        finally {
            $this->okta->authorizationServer->deleteOAuth2Claim($authorizationServer->id, $oauthClaim->id);
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function create_oauth2_claim() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} createOAuth2Claims")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $oauthClaim = $this->okta->authorizationServer->createOAuth2Claim(
            $authorizationServer->id,
            (new OAuth2Claim)
                ->setName("{$this->sdkPrefix}_TestOauth2Claim")
                ->setStatus("INACTIVE")
                ->setClaimType("RESOURCE")
                ->setValueType("EXPRESSION")
                ->setValue("\"driving!\"")
        );


        try {
            $this->assertInstanceOf(OAuth2Claim::class, $oauthClaim, "Getting claim did not return instance of " . OAuth2Claim::class);
            $this->assertEquals("{$this->sdkPrefix}_TestOauth2Claim", $oauthClaim->name, "did not return correct claim");
        }
        finally {
            $this->okta->authorizationServer->deleteOAuth2Claim($authorizationServer->id, $oauthClaim->id);
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function update_oauth2_claim() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} updateOAuth2Claims")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $oauthClaim = $this->okta->authorizationServer->createOAuth2Claim(
            $authorizationServer->id,
            (new OAuth2Claim)
                ->setName("{$this->sdkPrefix}_TestOauth2Claim")
                ->setStatus("INACTIVE")
                ->setClaimType("RESOURCE")
                ->setValueType("EXPRESSION")
                ->setValue("\"driving!\"")
        );


        try {
            $this->assertInstanceOf(OAuth2Claim::class, $oauthClaim, "Getting claim did not return instance of " . OAuth2Claim::class);
            $this->assertEquals("{$this->sdkPrefix}_TestOauth2Claim", $oauthClaim->name, "did not return correct claim");

            $oauthClaim->setName("{$this->sdkPrefix}_TestOauth2Claim_updated");
            $updatedClaim = $this->okta->authorizationServer->updateOAuth2Claim($authorizationServer->id, $oauthClaim->id, $oauthClaim);

            $this->assertInstanceOf(OAuth2Claim::class, $updatedClaim, "UpdatedClaim did not return instance of " . OAuth2Claim::class);
            $this->assertEquals("{$this->sdkPrefix}_TestOauth2Claim_updated", $updatedClaim->name, "did not return correct claim");
        }
        finally {
            $this->okta->authorizationServer->deleteOAuth2Claim($authorizationServer->id, $oauthClaim->id);
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function delete_oauth2_claim() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} deleteOAuth2Claims")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        $oauthClaim = $this->okta->authorizationServer->createOAuth2Claim(
            $authorizationServer->id,
            (new OAuth2Claim)
                ->setName("{$this->sdkPrefix}_TestOauth2Claim")
                ->setStatus("INACTIVE")
                ->setClaimType("RESOURCE")
                ->setValueType("EXPRESSION")
                ->setValue("\"driving!\"")
        );


        try {
            $this->okta->authorizationServer->deleteOAuth2Claim($authorizationServer->id, $oauthClaim->id);

            $this->expectException(ResourceException::class);
            $this->okta->authorizationServer->getOAuth2Claim($authorizationServer->id, $oauthClaim->id);
        }
        finally {
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

    /** @test */
    public function list_authorization_server_keys() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} listAuthServerKeys")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        try {
            $keys = $this->okta->authorizationServer->listAuthorizationServerKeys($authorizationServer->id);
            $this->assertInstanceOf(Collection::class, $keys, "Rotating keys did not return instance of " . Collection::class);
            $this->assertTrue($keys->count() > 0, "keys count should be more than 0");
            $this->assertInstanceOf(JsonWebKey::class, $keys->first(), "keys->first() is not an instance of " . JsonWebKey::class);
        }
        finally {
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }

    }

    /** @test */
    public function rotate_authorization_server_keys() {
        $authorizationServer = $this->okta->authorizationServer->createAuthorizationServer(
            (new AuthorizationServer)
                ->setName("{$this->sdkPrefix} rotateAuthServerKeys")
                ->setDescription("Test AuthorizationServer")
                ->setAudiences(["api://default"])
        );

        try {
            $keys = $this->okta->authorizationServer->rotateAuthorizationServerKeys(
                $authorizationServer->id,
                (new JwkUse)
                    ->setUse("sig")
            );

            $this->assertInstanceOf(Collection::class, $keys, "Rotating keys did not return instance of " . Collection::class);
            $this->assertTrue($keys->count() > 0, "keys count should be more than 0");
            $this->assertInstanceOf(JsonWebKey::class, $keys->first(), "keys->first() is not an instance of " . JsonWebKey::class);

        }
        finally {
            $this->okta->authorizationServer->deactivateAuthorizationServer($authorizationServer->id);
            $this->okta->authorizationServer->deleteAuthorizationServer($authorizationServer->id);
        }
    }

}