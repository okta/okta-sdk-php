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

use Okta\DataStore\DefaultDataStore;
use PHPUnit\Framework\TestCase;

class DefaultDataStoreTest extends TestCase
{
    /** @test */
    public function returns_instance_of_plugin_client_from_http_client()
    {
        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://example.com');

        $this->assertInstanceOf(
            \Http\Client\Common\PluginClient::class,
            $dataStore->getHttpClient(),
            'The HttpClient does not return instance of ' . \Http\Client\Common\PluginClient::class
        );

    }

    /** @test */
    public function returns_instance_of_message_factory()
    {
        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://example.com');

        $this->assertInstanceOf(
            \Http\Message\MessageFactory::class,
            $dataStore->getMessageFactory(),
            'The MessageFactory does not return instance of ' . \Http\Message\MessageFactory::class
        );
    }


    /** @test */
    public function returns_instance_of_uri_factory()
    {
        $dataStore = new Okta\DataStore\DefaultDataStore('123', 'https://example.com');

        $this->assertInstanceOf(
            \Http\Message\UriFactory::class,
            $dataStore->getUriFactory(),
            'The UriFactory does not return instance of ' . \Http\Message\UriFactory::class
        );
    }




}
