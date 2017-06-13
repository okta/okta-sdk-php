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

namespace Okta;

use Okta\Apps\Collection as AppCollection;
use Okta\Apps\PublicAppInstance;
use Okta\DataStore\DefaultDataStore;
use Okta\Groups\Collection as GroupCollection;
use Okta\Groups\UserGroup;
use Okta\Users\Collection as UserCollection;
use Okta\Users\User;

class Okta
{

    const VERSION = '0.0.0-alpha';

    public function __construct(Client $client = null, DefaultDataStore $dataStore = null)
    {
        $this->client = $client ?: Client::getInstance();
        $this->dataStore = $dataStore ?: $this->client->getDataStore();
    }

    public function getUsers(array $options = [])
    {
        return $this->dataStore->getCollection('/api/v1/users', User::class, UserCollection::class, $options);
    }

    public function getGroups(array $options = [])
    {
        return $this->dataStore->getCollection('/api/v1/groups', UserGroup::class, GroupCollection::class, $options);
    }

    public function getApps(array $options = [])
    {
        return $this->dataStore->getCollection('/api/v1/apps', PublicAppInstance::class, AppCollection::class, $options);
    }
}
