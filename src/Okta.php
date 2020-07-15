<?php
/*********************************************************************************/
/**   Copyright 2017 - Present Okta, Inc.                                       **/
/**                                                                             **/
/**   Licensed under the Apache License, Version 2.0 (the "License");           **/
/**   you may not use this file except in compliance with the License.          **/
/**   You may obtain a copy of the License at                                   **/
/**                                                                             **/
/**        http://www.apache.org/licenses/LICENSE-2.0                           **/
/**                                                                             **/
/**   Unless required by applicable law or agreed to in writing, software       **/
/**   distributed under the License is distributed on an "AS IS" BASIS,         **/
/**   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  **/
/**   See the License for the specific language governing permissions and       **/
/**   limitations under the License.                                            **/
/*********************************************************************************/

/************************************************/
/** This file is auto-generated.  Do Not Edit! **/
/************************************************/

namespace Okta;

use Okta\DataStore\DefaultDataStore;

class Okta
{

    const VERSION = '2.0.0-beta.1';

    /**
     * The Application client contains all methods to make your api calls
     * @var \Okta\Clients\Application
     */
    public $application;

    /**
     * The AuthorizationServer client contains all methods to make your api calls
     * @var \Okta\Clients\AuthorizationServer
     */
    public $authorizationServer;

    /**
     * The EventHook client contains all methods to make your api calls
     * @var \Okta\Clients\EventHook
     */
    public $eventHook;

    /**
     * The Feature client contains all methods to make your api calls
     * @var \Okta\Clients\Feature
     */
    public $feature;

    /**
     * The Group client contains all methods to make your api calls
     * @var \Okta\Clients\Group
     */
    public $group;

    /**
     * The IdentityProvider client contains all methods to make your api calls
     * @var \Okta\Clients\IdentityProvider
     */
    public $identityProvider;

    /**
     * The InlineHook client contains all methods to make your api calls
     * @var \Okta\Clients\InlineHook
     */
    public $inlineHook;

    /**
     * The Log client contains all methods to make your api calls
     * @var \Okta\Clients\Log
     */
    public $log;

    /**
     * The LinkedObject client contains all methods to make your api calls
     * @var \Okta\Clients\LinkedObject
     */
    public $linkedObject;

    /**
     * The UserType client contains all methods to make your api calls
     * @var \Okta\Clients\UserType
     */
    public $userType;

    /**
     * The Policy client contains all methods to make your api calls
     * @var \Okta\Clients\Policy
     */
    public $policy;

    /**
     * The Session client contains all methods to make your api calls
     * @var \Okta\Clients\Session
     */
    public $session;

    /**
     * The Template client contains all methods to make your api calls
     * @var \Okta\Clients\Template
     */
    public $template;

    /**
     * The TrustedOrigin client contains all methods to make your api calls
     * @var \Okta\Clients\TrustedOrigin
     */
    public $trustedOrigin;

    /**
     * The User client contains all methods to make your api calls
     * @var \Okta\Clients\User
     */
    public $user;

    /**
     * The UserFactor client contains all methods to make your api calls
     * @var \Okta\Clients\UserFactor
     */
    public $userFactor;

    /**
     * The DataStore to use for the Clients
     * @var \Okta\DataStore\DefaultDataStore
     */
    public $dataStore;

    public function __construct(Client $client = null, DefaultDataStore $dataStore = null)
    {
        $this->client = $client ?: Client::getInstance();
        $this->dataStore = $dataStore ?: $this->client->getDataStore();

        $this->application = new \Okta\Clients\Application($this->dataStore);
        $this->authorizationServer = new \Okta\Clients\AuthorizationServer($this->dataStore);
        $this->eventHook = new \Okta\Clients\EventHook($this->dataStore);
        $this->feature = new \Okta\Clients\Feature($this->dataStore);
        $this->group = new \Okta\Clients\Group($this->dataStore);
        $this->identityProvider = new \Okta\Clients\IdentityProvider($this->dataStore);
        $this->inlineHook = new \Okta\Clients\InlineHook($this->dataStore);
        $this->log = new \Okta\Clients\Log($this->dataStore);
        $this->linkedObject = new \Okta\Clients\LinkedObject($this->dataStore);
        $this->userType = new \Okta\Clients\UserType($this->dataStore);
        $this->policy = new \Okta\Clients\Policy($this->dataStore);
        $this->session = new \Okta\Clients\Session($this->dataStore);
        $this->template = new \Okta\Clients\Template($this->dataStore);
        $this->trustedOrigin = new \Okta\Clients\TrustedOrigin($this->dataStore);
        $this->user = new \Okta\Clients\User($this->dataStore);
        $this->userFactor = new \Okta\Clients\UserFactor($this->dataStore);
    }


}