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

use Okta\Applications\WsFederationApplicationSettingsApplication;
use PHPUnit\Framework\TestCase;

class WsFederationApplicationSettingsApplicationTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\WsFederationApplicationSettingsApplication */
    protected $testable;

    protected $model = '{
      "audienceRestriction": "urn:example:app",
      "groupName": "name",
      "groupValueFormat": "windowsDomainQualifiedName",
      "realm": "urn:example:app",
      "wReplyURL": "https://example.com/",
      "attributeStatements": "attribute",
      "nameIDFormat": "urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified",
      "authnContextClassRef": "urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport",
      "siteURL": "https://example.com",
      "wReplyOverride": false,
      "groupFilter": "filter",
      "usernameAttribute": "username"
    }';
    protected $modelType = \Okta\Applications\WsFederationApplicationSettingsApplication::class;

    /** @test */
    public function realm_is_accessible()
    {
        $this->assertEquals($this->properties->realm, $this->testable->getRealm());
        $this->assertEquals($this->properties->realm, $this->testable->realm);
    }

    /** @test */
    public function realm_is_settable()
    {
        $this->testable->setRealm('realm1');
        $this->assertEquals('realm1', $this->testable->getRealm());

        $this->testable->realm = 'realm2';
        $this->assertEquals('realm2', $this->testable->getRealm());
    }

    /** @test */
    public function site_url_is_accessible()
    {
        $this->assertEquals($this->properties->siteURL, $this->testable->getSiteUrl());
        $this->assertEquals($this->properties->siteURL, $this->testable->siteUrl);
    }

    /** @test */
    public function site_url_is_settable()
    {
        $this->testable->setSiteUrl('http://example.com');
        $this->assertEquals('http://example.com', $this->testable->getSiteUrl());

        $this->testable->siteUrl = 'http://example.org';
        $this->assertEquals('http://example.org', $this->testable->getSiteUrl());
    }

    /** @test */
    public function group_name_is_accessible()
    {
        $this->assertEquals($this->properties->groupName, $this->testable->getGroupName());
        $this->assertEquals($this->properties->groupName, $this->testable->groupName);
    }

    /** @test */
    public function group_name_is_settable()
    {
        $this->testable->setGroupName('name1');
        $this->assertEquals('name1', $this->testable->getGroupName());

        $this->testable->groupName = 'name2';
        $this->assertEquals('name2', $this->testable->getGroupName());
    }

    /** @test */
    public function w_reply_Url_is_accessible()
    {
        $this->assertEquals($this->properties->wReplyURL, $this->testable->getWReplyUrl());
        $this->assertEquals($this->properties->wReplyURL, $this->testable->wReplyUrl);
    }

    /** @test */
    public function w_reply_Url_is_settable()
    {
        $this->testable->setWReplyUrl('http://example.net');
        $this->assertEquals('http://example.net', $this->testable->getWReplyUrl());

        $this->testable->wReplyUrl = 'http://example.org';
        $this->assertEquals('http://example.org', $this->testable->getWReplyUrl());
    }

    /** @test */
    public function group_filter_is_accessible()
    {
        $this->assertEquals($this->properties->groupFilter, $this->testable->getGroupFilter());
        $this->assertEquals($this->properties->groupFilter, $this->testable->groupFilter);
    }

    /** @test */
    public function group_filter_is_settable()
    {
        $this->testable->setGroupFilter('filter1');
        $this->assertEquals('filter1', $this->testable->getGroupFilter());

        $this->testable->groupFilter = 'filter2';
        $this->assertEquals('filter2', $this->testable->getGroupFilter());
    }

    /** @test */
    public function name_id_format_is_accessible()
    {
        $this->assertEquals($this->properties->nameIDFormat, $this->testable->getNameIdFormat());
        $this->assertEquals($this->properties->nameIDFormat, $this->testable->nameIdFormat);
    }

    /** @test */
    public function name_id_format_is_settable()
    {
        $this->testable->setNameIdFormat('format1');
        $this->assertEquals('format1', $this->testable->getNameIdFormat());

        $this->testable->nameIdFormat = 'format2';
        $this->assertEquals('format2', $this->testable->getNameIdFormat());
    }

    /** @test */
    public function w_reply_override_is_accessible()
    {
        $this->assertEquals($this->properties->wReplyOverride, $this->testable->getWReplyOverride());
        $this->assertEquals($this->properties->wReplyOverride, $this->testable->wReplyOverride);
    }

    /** @test */
    public function w_reply_override_is_settable()
    {
        $this->testable->setWReplyOverride(true);
        $this->assertEquals(true, $this->testable->getWReplyOverride());

        $this->testable->wReplyOverride = false;
        $this->assertEquals(false, $this->testable->getWReplyOverride());
    }

    /** @test */
    public function group_value_format_is_accessible()
    {
        $this->assertEquals($this->properties->groupValueFormat, $this->testable->getGroupValueFormat());
        $this->assertEquals($this->properties->groupValueFormat, $this->testable->groupValueFormat);
    }

    /** @test */
    public function group_value_format_is_settable()
    {
        $this->testable->setGroupValueFormat('format1');
        $this->assertEquals('format1', $this->testable->getGroupValueFormat());

        $this->testable->groupValueFormat = 'format2';
        $this->assertEquals('format2', $this->testable->getGroupValueFormat());
    }

    /** @test */
    public function username_attribute_is_accessible()
    {
        $this->assertEquals($this->properties->usernameAttribute, $this->testable->getUsernameAttribute());
        $this->assertEquals($this->properties->usernameAttribute, $this->testable->usernameAttribute);
    }

    /** @test */
    public function username_attribute_is_settable()
    {
        $this->testable->setUsernameAttribute('att1');
        $this->assertEquals('att1', $this->testable->getUsernameAttribute());

        $this->testable->usernameAttribute = 'att2';
        $this->assertEquals('att2', $this->testable->getUsernameAttribute());
    }

    /** @test */
    public function attribute_statements_is_accessible()
    {
        $this->assertEquals($this->properties->attributeStatements, $this->testable->getAttributeStatements());
        $this->assertEquals($this->properties->attributeStatements, $this->testable->attributeStatements);
    }

    /** @test */
    public function attribute_statements_is_settable()
    {
        $this->testable->setAttributeStatements('state1');
        $this->assertEquals('state1', $this->testable->getAttributeStatements());

        $this->testable->attributeStatements = 'state2';
        $this->assertEquals('state2', $this->testable->getAttributeStatements());
    }

    /** @test */
    public function audience_restriction_is_accessible()
    {
        $this->assertEquals($this->properties->audienceRestriction, $this->testable->getAudienceRestriction());
        $this->assertEquals($this->properties->audienceRestriction, $this->testable->audienceRestriction);
    }

    /** @test */
    public function audience_restriction_is_settable()
    {
        $this->testable->setAudienceRestriction('res1');
        $this->assertEquals('res1', $this->testable->getAudienceRestriction());

        $this->testable->audienceRestriction = 'res2';
        $this->assertEquals('res2', $this->testable->getAudienceRestriction());
    }

    /** @test */
    public function authn_context_class_ref_is_accessible()
    {
        $this->assertEquals($this->properties->authnContextClassRef, $this->testable->getAuthnContextClassRef());
        $this->assertEquals($this->properties->authnContextClassRef, $this->testable->authnContextClassRef);
    }

    /** @test */
    public function authn_context_class_ref_is_settable()
    {
        $this->testable->setAuthnContextClassRef('ref1');
        $this->assertEquals('ref1', $this->testable->getAuthnContextClassRef());

        $this->testable->authnContextClassRef = 'ref2';
        $this->assertEquals('ref2', $this->testable->getAuthnContextClassRef());
    }

}
