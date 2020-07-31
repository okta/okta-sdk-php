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
use Okta\Resource\Collection;
use Okta\Template\SmsTemplate;
use Okta\Template\SmsTemplateType;
use Okta\Template\SmsTemplateTranslations;

class TemplatesTest extends \BaseIntegrationTestCase
{
    /** @var \Okta\Okta */
    private $okta;

    protected function setup(): void
    {
        parent::setup();

        $this->okta = new Okta;
    }

    /** @test */
    public function create_sms_template() {
        $template = $this->okta->template->createSmsTemplate(
            (new SmsTemplate)
                ->setName("{$this->sdkPrefix}createTemplate")
                ->setType(new SmsTemplateType(SmsTemplateType::SMS_VERIFY_CODE))
                ->setTemplate("\${org.name}: your verification code is \${code}")
        );

        try {
            $this->assertInstanceOf(SmsTemplate::class, $template, "template is not an instance of " . SmsTemplate::class);
        }
        finally {
            $this->okta->template->deleteSmsTemplate($template->id);
        }
    }

    /** @test */
    public function list_sms_templates() {
        $template = $this->okta->template->createSmsTemplate(
            (new SmsTemplate)
                ->setName("{$this->sdkPrefix}createTemplate")
                ->setType(new SmsTemplateType(SmsTemplateType::SMS_VERIFY_CODE))
                ->setTemplate("\${org.name}: your verification code is \${code}")
        );

        try {
            $this->assertInstanceOf(SmsTemplate::class, $template, "template is not an instance of " . SmsTemplate::class);

            $templates = $this->okta->template->listSmsTemplates();
            $this->assertInstanceOf(Collection::class, $templates, "Listing templates did not return instance of " . Collection::class);
            $this->assertTrue($templates->count() > 0, "templates count should be more than 0");
            $this->assertInstanceOf(SmsTemplate::class, $templates->first(), "templates->first() is not an instance of " . SmsTemplate::class);
        }
        finally {
            $this->okta->template->deleteSmsTemplate($template->id);
        }
    }

    /** @test */
    public function get_sms_template() {
        $template = $this->okta->template->createSmsTemplate(
            (new SmsTemplate)
                ->setName("{$this->sdkPrefix}createTemplate")
                ->setType(new SmsTemplateType(SmsTemplateType::SMS_VERIFY_CODE))
                ->setTemplate("\${org.name}: your verification code is \${code}")
        );

        try {
            $this->assertInstanceOf(SmsTemplate::class, $template, "template is not an instance of " . SmsTemplate::class);

            $foundTemplate = $this->okta->template->getSmsTemplate($template->id);

            $this->assertEquals($template->id, $foundTemplate->id, "found template was not the same template");
        }
        finally {
            $this->okta->template->deleteSmsTemplate($template->id);
        }
    }
}