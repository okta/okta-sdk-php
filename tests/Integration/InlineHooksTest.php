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
use Okta\InlineHook\InlineHook;
use Okta\Exceptions\ResourceException;
use Okta\InlineHook\InlineHookChannel;
use Okta\InlineHook\InlineHookChannelConfig;
use Okta\InlineHook\InlineHookChannelConfigAuthScheme;

class InlineHooksTest extends \BaseIntegrationTestCase
{
    /** @var \Okta\Okta */
    private $okta;

    protected function setup(): void
    {
        parent::setup();

        $this->okta = new Okta;
    }

    /** @test */
    public function create_inline_hook() {
        $inlineHook = $this->okta->inlineHook->createInlineHook(
            (new InlineHook())
                ->setName("{$this->sdkPrefix} createInlineHook")
                ->setVersion("1.0.0")
                ->setType("com.okta.oauth2.tokens.transform")
                ->setChannel(
                    (new InlineHookChannel())
                        ->setType("HTTP")
                        ->setVersion("1.0.0")
                        ->setConfig(
                            (new InlineHookChannelConfig())
                                ->setUri("https://www.example.com/inlineHook")
                                ->setAuthScheme(
                                    (new InlineHookChannelConfigAuthScheme())
                                        ->setType("HEADER")
                                        ->setKey("Authorization")
                                        ->setValue("Test-Api-Token")
                                )
                        )
                )
        );

        try {
            $this->assertInstanceOf(InlineHook::class, $inlineHook, "Inline hook did not return an instance of " . InlineHook::class);
            $this->assertEquals("{$this->sdkPrefix} createInlineHook", $inlineHook->getName(), "name was not what was expected for inline hook");
            $this->assertEquals("https://www.example.com/inlineHook", $inlineHook->getChannel()->getConfig()->getUri(), "Channel URI was not correct");
        }
        finally {
            $this->okta->inlineHook->deactivateInlineHook($inlineHook->id);
            $this->okta->inlineHook->deleteInlineHook($inlineHook->id);
        }
    }

    /** @test */
    public function get_inline_hook() {
        $inlineHook = $this->okta->inlineHook->createInlineHook(
            (new InlineHook())
                ->setName("{$this->sdkPrefix} getInlineHook")
                ->setVersion("1.0.0")
                ->setType("com.okta.oauth2.tokens.transform")
                ->setChannel(
                    (new InlineHookChannel())
                        ->setType("HTTP")
                        ->setVersion("1.0.0")
                        ->setConfig(
                            (new InlineHookChannelConfig())
                                ->setUri("https://www.example.com/inlineHook")
                                ->setAuthScheme(
                                    (new InlineHookChannelConfigAuthScheme())
                                        ->setType("HEADER")
                                        ->setKey("Authorization")
                                        ->setValue("Test-Api-Token")
                                )
                        )
                )
        );

        try {

            $foundInlineHook = $this->okta->inlineHook->getInlineHook($inlineHook->id);
            $this->assertInstanceOf(InlineHook::class, $foundInlineHook, "Inline hook did not return an instance of " . InlineHook::class);
            $this->assertEquals("{$this->sdkPrefix} getInlineHook", $foundInlineHook->getName(), "name was not what was expected for inline hook");
            $this->assertEquals("https://www.example.com/inlineHook", $foundInlineHook->getChannel()->getConfig()->getUri(), "Channel URI was not correct");
        }
        finally {
            $this->okta->inlineHook->deactivateInlineHook($inlineHook->id);
            $this->okta->inlineHook->deleteInlineHook($inlineHook->id);
        }
    }

    /** @test */
    public function update_inline_hook() {
        $inlineHook = $this->okta->inlineHook->createInlineHook(
            (new InlineHook())
                ->setName("{$this->sdkPrefix} updateInlineHook")
                ->setVersion("1.0.0")
                ->setType("com.okta.oauth2.tokens.transform")
                ->setChannel(
                    (new InlineHookChannel())
                        ->setType("HTTP")
                        ->setVersion("1.0.0")
                        ->setConfig(
                            (new InlineHookChannelConfig())
                                ->setUri("https://www.example.com/inlineHook")
                                ->setAuthScheme(
                                    (new InlineHookChannelConfigAuthScheme())
                                        ->setType("HEADER")
                                        ->setKey("Authorization")
                                        ->setValue("Test-Api-Token")
                                )
                        )
                )
        );

        try {
            $updatedInlineHook = $this->okta->inlineHook->updateInlineHook(
                $inlineHook->id,
                (new InlineHook())
                    ->setName("{$this->sdkPrefix} updateInlineHook")
                    ->setVersion("1.0.0")
                    ->setType("com.okta.oauth2.tokens.transform")
                    ->setChannel(
                        (new InlineHookChannel())
                            ->setType("HTTP")
                            ->setVersion("1.0.0")
                            ->setConfig(
                                (new InlineHookChannelConfig())
                                    ->setUri("https://www.example.com/inlineHookUpdated")
                                    ->setAuthScheme(
                                        (new InlineHookChannelConfigAuthScheme())
                                            ->setType("HEADER")
                                            ->setKey("Authorization")
                                            ->setValue("Test-Api-Token")
                                    )
                            )
                    )
            );

            $this->assertInstanceOf(InlineHook::class, $updatedInlineHook, "Inline hook did not return an instance of " . InlineHook::class);
            $this->assertEquals("{$this->sdkPrefix} updateInlineHook", $updatedInlineHook->getName(), "name was not what was expected for inline hook");
            $this->assertEquals("https://www.example.com/inlineHookUpdated", $updatedInlineHook->getChannel()->getConfig()->getUri(), "Channel URI was not correct");
        }
        finally {
            $this->okta->inlineHook->deactivateInlineHook($inlineHook->id);
            $this->okta->inlineHook->deleteInlineHook($inlineHook->id);
        }
    }

    /** @test */
    public function delete_inline_hook() {
        $inlineHook = $this->okta->inlineHook->createInlineHook(
            (new InlineHook())
                ->setName("{$this->sdkPrefix} createInlineHook")
                ->setVersion("1.0.0")
                ->setType("com.okta.oauth2.tokens.transform")
                ->setChannel(
                    (new InlineHookChannel())
                        ->setType("HTTP")
                        ->setVersion("1.0.0")
                        ->setConfig(
                            (new InlineHookChannelConfig())
                                ->setUri("https://www.example.com/inlineHook")
                                ->setAuthScheme(
                                    (new InlineHookChannelConfigAuthScheme())
                                        ->setType("HEADER")
                                        ->setKey("Authorization")
                                        ->setValue("Test-Api-Token")
                                )
                        )
                )
        );


        $this->okta->inlineHook->deactivateInlineHook($inlineHook->id);
        $this->okta->inlineHook->deleteInlineHook($inlineHook->id);

        $this->expectException(ResourceException::class);
        $this->okta->inlineHook->getInlineHook($inlineHook->id);

    }

    /** @test */
    public function list_inline_hook() {

        $inlineHookIds = [];

        for($i = 1; $i <= 5; $i++) {

            $inlineHook = $this->okta->inlineHook->createInlineHook(
                (new InlineHook())
                    ->setName("{$this->sdkPrefix} listInlineHook {$i}")
                    ->setVersion("1.0.0")
                    ->setType("com.okta.oauth2.tokens.transform")
                    ->setChannel(
                        (new InlineHookChannel())
                            ->setType("HTTP")
                            ->setVersion("1.0.0")
                            ->setConfig(
                                (new InlineHookChannelConfig())
                                    ->setUri("https://www.example.com/inlineHook")
                                    ->setAuthScheme(
                                        (new InlineHookChannelConfigAuthScheme())
                                            ->setType("HEADER")
                                            ->setKey("Authorization")
                                            ->setValue("Test-Api-Token")
                                    )
                            )
                    )
            );

            $inlineHookIds[] = $inlineHook->id;
        }

        try {
            $inlineHooks = $this->okta->inlineHook->listInlineHooks();
            $this->assertInstanceOf(Collection::class, $inlineHooks, "Listed inline hooks did not return " . Collection::class);

            $this->assertTrue($inlineHooks->count() >= 5, "Event Hooks should have at least 5 inline hooks returned");

            $inlineHooks->each(function($inlineHook) use ($inlineHookIds) {
                $this->assertTrue(in_array($inlineHook->id, $inlineHookIds, "Could not find inline hook in list"));
            });
        }
        finally {
            foreach($inlineHookIds as $inlineHookId) {
                $this->okta->inlineHook->deactivateInlineHook($inlineHookId);
                $this->okta->inlineHook->deleteInlineHook($inlineHookId);
            }
        }
    }

    /** @test */
    public function deactivate_inline_hook() {
        $inlineHook = $this->okta->inlineHook->createInlineHook(
            (new InlineHook())
                ->setName("{$this->sdkPrefix} deactivateInlineHook")
                ->setVersion("1.0.0")
                ->setType("com.okta.oauth2.tokens.transform")
                ->setChannel(
                    (new InlineHookChannel())
                        ->setType("HTTP")
                        ->setVersion("1.0.0")
                        ->setConfig(
                            (new InlineHookChannelConfig())
                                ->setUri("https://www.example.com/inlineHook")
                                ->setAuthScheme(
                                    (new InlineHookChannelConfigAuthScheme())
                                        ->setType("HEADER")
                                        ->setKey("Authorization")
                                        ->setValue("Test-Api-Token")
                                )
                        )
                )
        );

        try {
            $this->assertEquals("ACTIVE", $inlineHook->getStatus());

            $this->okta->inlineHook->deactivateInlineHook($inlineHook->id);
            $foundInlineHook = $this->okta->inlineHook->getInlineHook($inlineHook->id);
            $this->assertEquals("INACTIVE", $foundInlineHook->getStatus());
        }
        finally {
            $this->okta->inlineHook->deactivateInlineHook($inlineHook->id);
            $this->okta->inlineHook->deleteInlineHook($inlineHook->id);
        }
    }

    /** @test */
    public function activate_inline_hook() {
        $inlineHook = $this->okta->inlineHook->createInlineHook(
            (new InlineHook())
                ->setName("{$this->sdkPrefix} activateInlineHook")
                ->setVersion("1.0.0")
                ->setType("com.okta.oauth2.tokens.transform")
                ->setChannel(
                    (new InlineHookChannel())
                        ->setType("HTTP")
                        ->setVersion("1.0.0")
                        ->setConfig(
                            (new InlineHookChannelConfig())
                                ->setUri("https://www.example.com/inlineHook")
                                ->setAuthScheme(
                                    (new InlineHookChannelConfigAuthScheme())
                                        ->setType("HEADER")
                                        ->setKey("Authorization")
                                        ->setValue("Test-Api-Token")
                                )
                        )
                )
        );

        try {
            $this->assertEquals("ACTIVE", $inlineHook->getStatus());

            $this->okta->inlineHook->deactivateInlineHook($inlineHook->id);
            $foundInlineHook = $this->okta->inlineHook->getInlineHook($inlineHook->id);
            $this->assertEquals("INACTIVE", $foundInlineHook->getStatus());

            $this->okta->inlineHook->activateInlineHook($inlineHook->id);
            $foundInlineHook = $this->okta->inlineHook->getInlineHook($inlineHook->id);
            $this->assertEquals("ACTIVE", $foundInlineHook->getStatus());
        }
        finally {
            $this->okta->inlineHook->deactivateInlineHook($inlineHook->id);
            $this->okta->inlineHook->deleteInlineHook($inlineHook->id);
        }
    }
}