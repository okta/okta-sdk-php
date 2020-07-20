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
use Okta\EventHook\EventHook;
use Okta\Resource\Collection;
use Okta\EventHook\EventHookChannel;
use Okta\EventHook\EventSubscriptions;
use Okta\Exceptions\ResourceException;
use Okta\EventHook\EventHookChannelConfig;
use Okta\EventHook\EventHookChannelConfigHeader;
use Okta\EventHook\EventHookChannelConfigAuthScheme;

class EventHooksTest extends \BaseIntegrationTestCase
{
    /** @var \Okta\Okta */
    private $okta;

    protected function setup(): void
    {
        parent::setup();

        $this->okta = new Okta;
    }

    /** @test */
    public function create_event_hook() {
        $eventHook = $this->okta->eventHook->createEventHook(
            (new EventHook())
                ->setName("{$this->sdkPrefix} createEventHook")
                ->setEvents(
                    (new EventSubscriptions())
                        ->setType("EVENT_TYPE")
                        ->setItems([
                            "user.lifecycle.create",
                            "user.lifecycle.activate"
                        ])
                )
                ->setChannel(
                    (new EventHookChannel())
                        ->setType("HTTP")
                        ->setVersion("1.0.0")
                        ->setConfig(
                            (new EventHookChannelConfig())
                                ->setUri("https://www.example.com/eventHooks")
                                ->setAuthScheme(
                                    (new EventHookChannelConfigAuthScheme())
                                        ->setType("HEADER")
                                        ->setKey("Authorization")
                                        ->setValue("Test-Api-Key")
                                )
                        )
                )
        );
        try {
            $this->assertNotNull($eventHook, "Event hook should not be null");
            $this->assertInstanceOf(EventHook::class, $eventHook, "The even hook did not return an instance of " . EventHook::class);
            $this->assertNotNull($eventHook->getEvents(), "Events should not be null");
            $this->assertInstanceOf(EventSubscriptions::class, $eventHook->getEvents(), "The even hook events did not return an instance of " . EventSubscriptions::class);
            $this->assertNotNull($eventHook->getEvents()->getItems(), "Events items should not be null");
            $this->assertCount(2, $eventHook->getEvents()->getItems(), "Should have 2 event items");
            $this->assertInstanceOf(EventHookChannel::class, $eventHook->getChannel(), "The even hook channel did not return an instance of " . EventHookChannel::class);
            $this->assertInstanceOf(EventHookChannelConfig::class, $eventHook->getChannel()->getConfig(), "The even hook channel config did not return an instance of " . EventHookChannelConfig::class);
            $this->assertEquals("https://www.example.com/eventHooks", $eventHook->getChannel()->getConfig()->uri, "Event hook channel config uri was incorrect");
        }
        finally {
            $this->okta->eventHook->deactivateEventHook($eventHook->id);
            $this->okta->eventHook->deleteEventHook($eventHook->id);
        }
    }

    /** @test */
    public function retrieve_event_hook() {
        $eventHook = $this->okta->eventHook->createEventHook(
            (new EventHook())
                ->setName("{$this->sdkPrefix} GetEventHook")
                ->setEvents(
                    (new EventSubscriptions())
                        ->setType("EVENT_TYPE")
                        ->setItems([
                            "user.lifecycle.create",
                            "user.lifecycle.activate"
                        ])
                )
                ->setChannel(
                    (new EventHookChannel())
                        ->setType("HTTP")
                        ->setVersion("1.0.0")
                        ->setConfig(
                            (new EventHookChannelConfig())
                                ->setUri("https://www.example.com/eventHooks")
                                ->setAuthScheme(
                                    (new EventHookChannelConfigAuthScheme())
                                        ->setType("HEADER")
                                        ->setKey("Authorization")
                                        ->setValue("Test-Api-Key")
                                )
                        )
                )
        );
        try {
            $foundEventHook = $this->okta->eventHook->getEventHook($eventHook->id);
            $this->assertNotNull($foundEventHook, "Event hook should not be null");
            $this->assertInstanceOf(EventHook::class, $foundEventHook, "The even hook did not return an instance of " . EventHook::class);
            $this->assertNotNull($foundEventHook->getEvents(), "Events should not be null");
            $this->assertInstanceOf(EventSubscriptions::class, $foundEventHook->getEvents(), "The even hook events did not return an instance of " . EventSubscriptions::class);
            $this->assertNotNull($foundEventHook->getEvents()->getItems(), "Events items should not be null");
            $this->assertCount(2, $foundEventHook->getEvents()->getItems(), "Should have 2 event items");
            $this->assertInstanceOf(EventHookChannel::class, $foundEventHook->getChannel(), "The even hook channel did not return an instance of " . EventHookChannel::class);
            $this->assertInstanceOf(EventHookChannelConfig::class, $foundEventHook->getChannel()->getConfig(), "The even hook channel config did not return an instance of " . EventHookChannelConfig::class);
            $this->assertEquals("https://www.example.com/eventHooks", $foundEventHook->getChannel()->getConfig()->uri, "Event hook channel config uri was incorrect");
        }
        finally {
            $this->okta->eventHook->deactivateEventHook($eventHook->id);
            $this->okta->eventHook->deleteEventHook($eventHook->id);
        }
    }

    /** @test */
    public function update_event_hook() {
        $eventHook = $this->okta->eventHook->createEventHook(
            (new EventHook())
                ->setName("{$this->sdkPrefix} UpdateEventHook")
                ->setEvents(
                    (new EventSubscriptions())
                        ->setType("EVENT_TYPE")
                        ->setItems([
                            "user.lifecycle.create",
                            "user.lifecycle.activate"
                        ])
                )
                ->setChannel(
                    (new EventHookChannel())
                        ->setType("HTTP")
                        ->setVersion("1.0.0")
                        ->setConfig(
                            (new EventHookChannelConfig())
                                ->setUri("https://www.example.com/eventHooks")
                                ->setAuthScheme(
                                    (new EventHookChannelConfigAuthScheme())
                                        ->setType("HEADER")
                                        ->setKey("Authorization")
                                        ->setValue("Test-Api-Key")
                                )
                        )
                )
        );
        try {

            $updatedEventHook = $this->okta->eventHook->updateEventHook(
                $eventHook->id,
                (new EventHook())
                    ->setName("{$this->sdkPrefix} UpdateEventHook")
                    ->setEvents(
                        (new EventSubscriptions())
                            ->setType("EVENT_TYPE")
                            ->setItems([
                                "user.lifecycle.create",
                                "user.lifecycle.activate",
                                "user.lifecycle.deactivate"
                            ])
                    )
                    ->setChannel(
                        (new EventHookChannel())
                            ->setType("HTTP")
                            ->setVersion("1.0.0")
                            ->setConfig(
                                (new EventHookChannelConfig())
                                    ->setUri("https://www.example.com/eventHooks")
                                    ->setAuthScheme(
                                        (new EventHookChannelConfigAuthScheme())
                                            ->setType("HEADER")
                                            ->setKey("Authorization")
                                            ->setValue("Test-Api-Key")
                                    )
                            )
                    )
            );

            $this->assertNotNull($updatedEventHook, "Event hook should not be null");
            $this->assertInstanceOf(EventHook::class, $updatedEventHook, "The even hook did not return an instance of " . EventHook::class);
            $this->assertNotNull($updatedEventHook->getEvents(), "Events should not be null");
            $this->assertInstanceOf(EventSubscriptions::class, $updatedEventHook->getEvents(), "The even hook events did not return an instance of " . EventSubscriptions::class);
            $this->assertNotNull($updatedEventHook->getEvents()->getItems(), "Events items should not be null");
            $this->assertCount(3, $updatedEventHook->getEvents()->getItems(), "Should have 2 event items");
            $this->assertInstanceOf(EventHookChannel::class, $updatedEventHook->getChannel(), "The even hook channel did not return an instance of " . EventHookChannel::class);
            $this->assertInstanceOf(EventHookChannelConfig::class, $updatedEventHook->getChannel()->getConfig(), "The even hook channel config did not return an instance of " . EventHookChannelConfig::class);
            $this->assertEquals("https://www.example.com/eventHooks", $updatedEventHook->getChannel()->getConfig()->uri, "Event hook channel config uri was incorrect");
        }
        finally {
            $this->okta->eventHook->deactivateEventHook($eventHook->id);
            $this->okta->eventHook->deleteEventHook($eventHook->id);
        }
    }

    /** @test */
    public function delete_event_hook() {
        $eventHook = $this->okta->eventHook->createEventHook(
            (new EventHook())
                ->setName("{$this->sdkPrefix} DeleteEventHook")
                ->setEvents(
                    (new EventSubscriptions())
                        ->setType("EVENT_TYPE")
                        ->setItems([
                            "user.lifecycle.create",
                            "user.lifecycle.activate"
                        ])
                )
                ->setChannel(
                    (new EventHookChannel())
                        ->setType("HTTP")
                        ->setVersion("1.0.0")
                        ->setConfig(
                            (new EventHookChannelConfig())
                                ->setUri("https://www.example.com/eventHooks")
                                ->setAuthScheme(
                                    (new EventHookChannelConfigAuthScheme())
                                        ->setType("HEADER")
                                        ->setKey("Authorization")
                                        ->setValue("Test-Api-Key")
                                )
                        )
                )
        );

        $this->okta->eventHook->deactivateEventHook($eventHook->id);
        $this->okta->eventHook->deleteEventHook($eventHook->id);

        $this->expectException(ResourceException::class);
        $this->okta->eventHook->getEventHook($eventHook->id);

    }

    /** @test */
    public function list_event_hooks() {
        $eventHookIds = [];

        for($i = 1; $i <= 5; $i++) {
            $eventHook = $this->okta->eventHook->createEventHook(
                (new EventHook())
                    ->setName("{$this->sdkPrefix} listEventHooks {$i}")
                    ->setEvents(
                        (new EventSubscriptions())
                            ->setType("EVENT_TYPE")
                            ->setItems([
                                "user.lifecycle.create",
                                "user.lifecycle.activate"
                            ])
                    )
                    ->setChannel(
                        (new EventHookChannel())
                            ->setType("HTTP")
                            ->setVersion("1.0.0")
                            ->setConfig(
                                (new EventHookChannelConfig())
                                    ->setUri("https://www.example.com/eventHooks")
                                    ->setAuthScheme(
                                        (new EventHookChannelConfigAuthScheme())
                                            ->setType("HEADER")
                                            ->setKey("Authorization")
                                            ->setValue("Test-Api-Key")
                                    )
                            )
                    )
            );
            $eventHookIds[] = $eventHook->id;
        }
        try {
            $eventHooks = $this->okta->eventHook->listEventHooks();
            $this->assertInstanceOf(Collection::class, $eventHooks, "Listed event hooks did not return " . Collection::class);

            $this->assertTrue($eventHooks->count() >= 5, "Event Hooks should have at least 5 event hooks returned");

            $eventHooks->each(function($eventHook) use ($eventHookIds) {
                $this->assertTrue(in_array($eventHook->id, $eventHookIds, "Could not find event hook in list"));
            });
        }
        finally {
            foreach($eventHookIds as $eventHookId) {
                $this->okta->eventHook->deactivateEventHook($eventHookId);
                $this->okta->eventHook->deleteEventHook($eventHookId);
            }
        }
    }

    /** @test */
    public function deactivate_event_hook() {
        $eventHook = $this->okta->eventHook->createEventHook(
            (new EventHook())
                ->setName("{$this->sdkPrefix} deactivateEventHook")
                ->setEvents(
                    (new EventSubscriptions())
                        ->setType("EVENT_TYPE")
                        ->setItems([
                            "user.lifecycle.create",
                            "user.lifecycle.activate"
                        ])
                )
                ->setChannel(
                    (new EventHookChannel())
                        ->setType("HTTP")
                        ->setVersion("1.0.0")
                        ->setConfig(
                            (new EventHookChannelConfig())
                                ->setUri("https://www.example.com/eventHooks")
                                ->setAuthScheme(
                                    (new EventHookChannelConfigAuthScheme())
                                        ->setType("HEADER")
                                        ->setKey("Authorization")
                                        ->setValue("Test-Api-Key")
                                )
                        )
                )
        );
        try {
            $this->assertEquals("ACTIVE", $eventHook->getStatus());

            $this->okta->eventHook->deactivateEventHook($eventHook->id);
            $foundEventHook = $this->okta->eventHook->getEventHook($eventHook->id);
            $this->assertEquals("INACTIVE", $foundEventHook->getStatus());
        }
        finally {
            $this->okta->eventHook->deactivateEventHook($eventHook->id);
            $this->okta->eventHook->deleteEventHook($eventHook->id);
        }
    }

    /** @test */
    public function activate_event_hook() {
        $eventHook = $this->okta->eventHook->createEventHook(
            (new EventHook())
                ->setName("{$this->sdkPrefix} activateEventHook")
                ->setEvents(
                    (new EventSubscriptions())
                        ->setType("EVENT_TYPE")
                        ->setItems([
                            "user.lifecycle.create",
                            "user.lifecycle.activate"
                        ])
                )
                ->setChannel(
                    (new EventHookChannel())
                        ->setType("HTTP")
                        ->setVersion("1.0.0")
                        ->setConfig(
                            (new EventHookChannelConfig())
                                ->setUri("https://www.example.com/eventHooks")
                                ->setAuthScheme(
                                    (new EventHookChannelConfigAuthScheme())
                                        ->setType("HEADER")
                                        ->setKey("Authorization")
                                        ->setValue("Test-Api-Key")
                                )
                        )
                )
        );
        try {
            $this->assertEquals("ACTIVE", $eventHook->getStatus());

            $this->okta->eventHook->deactivateEventHook($eventHook->id);
            $foundEventHook = $this->okta->eventHook->getEventHook($eventHook->id);
            $this->assertEquals("INACTIVE", $foundEventHook->getStatus());

            $this->okta->eventHook->activateEventHook($eventHook->id);
            $foundEventHook = $this->okta->eventHook->getEventHook($eventHook->id);
            $this->assertEquals("ACTIVE", $foundEventHook->getStatus());
        }
        finally {
            $this->okta->eventHook->deactivateEventHook($eventHook->id);
            $this->okta->eventHook->deleteEventHook($eventHook->id);
        }
    }
}