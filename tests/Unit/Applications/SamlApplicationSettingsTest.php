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

use Okta\Applications\SamlApplicationSettings;
use PHPUnit\Framework\TestCase;

class SamlApplicationSettingsTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Applications\SamlApplicationSettings */
    protected $testable;

    protected $model = '{
        "signOn": {
          "defaultRelayState": "",
          "ssoAcsUrl": "http://testorgone.okta",
          "idpIssuer": "http://www.okta.com/${org.externalKey}",
          "audience": "asdqwe123",
          "recipient": "http://testorgone.okta",
          "destination": "http://testorgone.okta",
          "subjectNameIdTemplate": "${user.userName}",
          "subjectNameIdFormat": "urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified",
          "responseSigned": true,
          "assertionSigned": true,
          "signatureAlgorithm": "RSA_SHA256",
          "digestAlgorithm": "SHA256",
          "honorForceAuthn": true,
          "authnContextClassRef": "urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport",
          "spIssuer": null,
          "requestCompressed": false,
          "attributeStatements": [
            {
              "type": "EXPRESSION",
              "name": "Attribute",
              "namespace": "urn:oasis:names:tc:SAML:2.0:attrname-format:unspecified",
              "values": [
                "Value"
              ]
            }
          ]
        }
      }';
    protected $modelType = \Okta\Applications\SamlApplicationSettings::class;

    /** @test */
    public function sign_on_is_accessible()
    {
        $this->assertInstanceOf(\Okta\Applications\SamlApplicationSettingsSignOn::class, $this->testable->getSignOn());
        $this->assertInstanceOf(\Okta\Applications\SamlApplicationSettingsSignOn::class, $this->testable->signOn);
    }

    /** @test */
    public function sign_on_is_settable()
    {
        $signOn = $this->testable->getSignOn();

        $signOn->testing = 'this';
        $this->testable->setSignOn($signOn);
        $this->assertEquals('this', $this->testable->getSignOn()->testing);

        $signOn->testing = 'that';
        $this->testable->signOn = $signOn;
        $this->assertEquals('that', $this->testable->getSignOn()->testing);
    }


}
