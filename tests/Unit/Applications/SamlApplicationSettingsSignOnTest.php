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

use Okta\Applications\SamlApplicationSettingsSignOn;
use PHPUnit\Framework\TestCase;

class SamlApplicationSettingsSignOnTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\SamlApplicationSettingsSignOn */
    protected $testable;

    protected $model = '/Applications/samlApplicationSettingsSignOn.json';
    protected $modelType = \Okta\Applications\SamlApplicationSettingsSignOn::class;

    /** @test */
    public function audience_is_accessible()
    {
        $this->assertEquals($this->properties->audience, $this->testable->getAudience());
        $this->assertEquals($this->properties->audience, $this->testable->audience);
    }

    /** @test */
    public function audience_is_settable()
    {
        $this->testable->setAudience('aud1');
        $this->assertEquals('aud1', $this->testable->getAudience());

        $this->testable->audience = 'aud2';
        $this->assertEquals('aud2', $this->testable->getAudience());
    }

    /** @test */
    public function sp_issuer_is_accessible()
    {
        $this->assertEquals($this->properties->spIssuer, $this->testable->getSpIssuer());
        $this->assertEquals($this->properties->spIssuer, $this->testable->spIssuer);
    }

    /** @test */
    public function sp_issuer_is_settable()
    {
        $this->testable->setSpIssuer('issuer1');
        $this->assertEquals('issuer1', $this->testable->getSpIssuer());

        $this->testable->spIssuer = 'issuer2';
        $this->assertEquals('issuer2', $this->testable->getSpIssuer());
    }

    /** @test */
    public function idp_issuer_is_accessible()
    {
        $this->assertEquals($this->properties->idpIssuer, $this->testable->getIdpIssuer());
        $this->assertEquals($this->properties->idpIssuer, $this->testable->idpIssuer);
    }

    /** @test */
    public function idp_issuer_is_settable()
    {
        $this->testable->setIdpIssuer('issuer1');
        $this->assertEquals('issuer1', $this->testable->getIdpIssuer());

        $this->testable->idpIssuer = 'issuer2';
        $this->assertEquals('issuer2', $this->testable->getIdpIssuer());
    }

    /** @test */
    public function recipient_is_accessible()
    {
        $this->assertEquals($this->properties->recipient, $this->testable->getRecipient());
        $this->assertEquals($this->properties->recipient, $this->testable->recipient);
    }

    /** @test */
    public function recipient_is_settable()
    {
        $this->testable->setRecipient('rec1');
        $this->assertEquals('rec1', $this->testable->getRecipient());

        $this->testable->recipient = 'rec2';
        $this->assertEquals('rec2', $this->testable->getRecipient());
    }

    /** @test */
    public function sso_acs_url_is_accessible()
    {
        $this->assertEquals($this->properties->ssoAcsUrl, $this->testable->getSsoAcsUrl());
        $this->assertEquals($this->properties->ssoAcsUrl, $this->testable->ssoAcsUrl);
    }

    /** @test */
    public function sso_acs_url_is_settable()
    {
        $this->testable->setSsoAcsUrl('http://example.com');
        $this->assertEquals('http://example.com', $this->testable->getSsoAcsUrl());

        $this->testable->ssoAcsUrl = 'http://example.org';
        $this->assertEquals('http://example.org', $this->testable->getSsoAcsUrl());
    }

    /** @test */
    public function destination_is_accessible()
    {
        $this->assertEquals($this->properties->destination, $this->testable->getDestination());
        $this->assertEquals($this->properties->destination, $this->testable->destination);
    }

    /** @test */
    public function destination_is_settable()
    {
        $this->testable->setDestination('dest1');
        $this->assertEquals('dest1', $this->testable->getDestination());

        $this->testable->destination = 'dest2';
        $this->assertEquals('dest2', $this->testable->getDestination());
    }

    /** @test */
    public function response_signed_is_accessible()
    {
        $this->assertEquals($this->properties->responseSigned, $this->testable->getResponseSigned());
        $this->assertEquals($this->properties->responseSigned, $this->testable->responseSigned);
    }

    /** @test */
    public function response_signed_is_settable()
    {
        $this->testable->setResponseSigned(true);
        $this->assertEquals(true, $this->testable->getResponseSigned());

        $this->testable->responseSigned = false;
        $this->assertEquals(false, $this->testable->getResponseSigned());
    }

    /** @test */
    public function assertion_signed_is_accessible()
    {
        $this->assertEquals($this->properties->assertionSigned, $this->testable->getAssertionSigned());
        $this->assertEquals($this->properties->assertionSigned, $this->testable->assertionSigned);
    }

    /** @test */
    public function assertion_signed_is_settable()
    {
        $this->testable->setAssertionSigned(true);
        $this->assertEquals(true, $this->testable->getAssertionSigned());

        $this->testable->assertionSigned = false;
        $this->assertEquals(false, $this->testable->getAssertionSigned());
    }

    /** @test */
    public function digest_algorithm_is_accessible()
    {
        $this->assertEquals($this->properties->digestAlgorithm, $this->testable->getDigestAlgorithm());
        $this->assertEquals($this->properties->digestAlgorithm, $this->testable->digestAlgorithm);
    }

    /** @test */
    public function digest_algorithm_is_settable()
    {
        $this->testable->setDigestAlgorithm('da1');
        $this->assertEquals('da1', $this->testable->getDigestAlgorithm());

        $this->testable->digestAlgorithm = 'da2';
        $this->assertEquals('da2', $this->testable->getDigestAlgorithm());
    }

    /** @test */
    public function honor_force_authn_is_accessible()
    {
        $this->assertEquals($this->properties->honorForceAuthn, $this->testable->getHonorForceAuthn());
        $this->assertEquals($this->properties->honorForceAuthn, $this->testable->honorForceAuthn);
    }

    /** @test */
    public function honor_force_authn_is_settable()
    {
        $this->testable->setHonorForceAuthn(true);
        $this->assertEquals(true, $this->testable->getHonorForceAuthn());

        $this->testable->honorForceAuthn = false;
        $this->assertEquals(false, $this->testable->getHonorForceAuthn());
    }

    /** @test */
    public function audience_override_is_accessible()
    {
        $this->assertEquals($this->properties->audienceOverride, $this->testable->getAudienceOverride());
        $this->assertEquals($this->properties->audienceOverride, $this->testable->audienceOverride);
    }

    /** @test */
    public function audience_override_is_settable()
    {
        $this->testable->setAudienceOverride('override1');
        $this->assertEquals('override1', $this->testable->getAudienceOverride());

        $this->testable->audienceOverride = 'override2';
        $this->assertEquals('override2', $this->testable->getAudienceOverride());
    }

    /** @test */
    public function default_relay_state_is_accessible()
    {
        $this->assertEquals($this->properties->defaultRelayState, $this->testable->getDefaultRelayState());
        $this->assertEquals($this->properties->defaultRelayState, $this->testable->defaultRelayState);
    }

    /** @test */
    public function default_relay_state_is_settable()
    {
        $this->testable->setDefaultRelayState('drs1');
        $this->assertEquals('drs1', $this->testable->getDefaultRelayState());

        $this->testable->defaultRelayState = 'drs2';
        $this->assertEquals('drs2', $this->testable->getDefaultRelayState());
    }

    /** @test */
    public function recipient_override_is_accessible()
    {
        $this->assertEquals($this->properties->recipientOverride, $this->testable->getRecipientOverride());
        $this->assertEquals($this->properties->recipientOverride, $this->testable->recipientOverride);
    }

    /** @test */
    public function recipient_override_is_settable()
    {
        $this->testable->setRecipientOverride('override1');
        $this->assertEquals('override1', $this->testable->getRecipientOverride());

        $this->testable->recipientOverride = 'override2';
        $this->assertEquals('override2', $this->testable->getRecipientOverride());
    }

    /** @test */
    public function request_compressed_is_accessible()
    {
        $this->assertEquals($this->properties->requestCompressed, $this->testable->getRequestCompressed());
        $this->assertEquals($this->properties->requestCompressed, $this->testable->requestCompressed);
    }

    /** @test */
    public function request_compressed_is_settable()
    {
        $this->testable->setRequestCompressed(true);
        $this->assertEquals(true, $this->testable->getRequestCompressed());

        $this->testable->requestCompressed = false;
        $this->assertEquals(false, $this->testable->getRequestCompressed());
    }

    /** @test */
    public function sso_acs_url_override_is_accessible()
    {
        $this->assertEquals($this->properties->ssoAcsUrlOverride, $this->testable->getSsoAcsUrlOverride());
        $this->assertEquals($this->properties->ssoAcsUrlOverride, $this->testable->ssoAcsUrlOverride);
    }

    /** @test */
    public function sso_acs_url_override_is_settable()
    {
        $this->testable->setSsoAcsUrlOverride('acs1');
        $this->assertEquals('acs1', $this->testable->getSsoAcsUrlOverride());

        $this->testable->ssoAcsUrlOverride = 'acs2';
        $this->assertEquals('acs2', $this->testable->getSsoAcsUrlOverride());
    }

    /** @test */
    public function signature_algorithm_is_accessible()
    {
        $this->assertEquals($this->properties->signatureAlgorithm, $this->testable->getSignatureAlgorithm());
        $this->assertEquals($this->properties->signatureAlgorithm, $this->testable->signatureAlgorithm);
    }

    /** @test */
    public function signature_algorithm_is_settable()
    {
        $this->testable->setSignatureAlgorithm('alg1');
        $this->assertEquals('alg1', $this->testable->getSignatureAlgorithm());

        $this->testable->signatureAlgorithm = 'alg2';
        $this->assertEquals('alg2', $this->testable->getSignatureAlgorithm());
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
        $this->testable->setAttributeStatements(['test'=>'this']);
        $this->assertEquals(['test'=>'this'], $this->testable->getAttributeStatements());

        $this->testable->attributeStatements = ['test'=>'that'];
        $this->assertEquals(['test'=>'that'], $this->testable->getAttributeStatements());
    }

    /** @test */
    public function destination_override_is_accessible()
    {
        $this->assertEquals($this->properties->destinationOverride, $this->testable->getDestinationOverride());
        $this->assertEquals($this->properties->destinationOverride, $this->testable->destinationOverride);
    }

    /** @test */
    public function destination_override_is_settable()
    {
        $this->testable->setDestinationOverride('dest1');
        $this->assertEquals('dest1', $this->testable->getDestinationOverride());

        $this->testable->destinationOverride = 'dest2';
        $this->assertEquals('dest2', $this->testable->getDestinationOverride());
    }

    /** @test */
    public function subject_name_id_format_is_accessible()
    {
        $this->assertEquals($this->properties->subjectNameIdFormat, $this->testable->getSubjectNameIdFormat());
        $this->assertEquals($this->properties->subjectNameIdFormat, $this->testable->subjectNameIdFormat);
    }

    /** @test */
    public function subject_name_id_format_is_settable()
    {
        $this->testable->setSubjectNameIdFormat('format1');
        $this->assertEquals('format1', $this->testable->getSubjectNameIdFormat());

        $this->testable->subjectNameIdFormat = 'format2';
        $this->assertEquals('format2', $this->testable->getSubjectNameIdFormat());
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

    /** @test */
    public function subject_name_id_template_is_accessible()
    {
        $this->assertEquals($this->properties->subjectNameIdTemplate, $this->testable->getSubjectNameIdTemplate());
        $this->assertEquals($this->properties->subjectNameIdTemplate, $this->testable->subjectNameIdTemplate);
    }

    /** @test */
    public function subject_name_id_template_is_settable()
    {
        $this->testable->setSubjectNameIdTemplate('temp1');
        $this->assertEquals('temp1', $this->testable->getSubjectNameIdTemplate());

        $this->testable->subjectNameIdTemplate = 'temp2';
        $this->assertEquals('temp2', $this->testable->getSubjectNameIdTemplate());
    }

}
