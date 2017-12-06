<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\Generated\Logs;


class Log extends \Okta\Resource\AbstractResource
{
    const UUID = 'uuid';
    const ACTOR = 'actor';
    const CLIENT = 'client';
    const TARGET = 'target';
    const OUTCOME = 'outcome';
    const VERSION = 'version';
    const SEVERITY = 'severity';
    const EVENT_TYPE = 'eventType';
    const PUBLISHED = 'published';
    const TRANSACTION = 'transaction';
    const DEBUG_CONTEXT = 'debugContext';
    const DISPLAY_MESSAGE = 'displayMessage';
    const LEGACY_EVENT_TYPE = 'legacyEventType';
    const SECURITY_CONTEXT = 'securityContext';
    const AUTHENTICATION_CONTEXT = 'authenticationContext';


    /**
     * Get the uuid.
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->getProperty(self::UUID);
    }
    /**
     * Get the actor.
     *
     * @return \Okta\Logs\Actor
     */
    public function getActor(array $options = []): \Okta\Logs\Actor
    {
        return $this->getResourceProperty(
            self::ACTOR,
            \Okta\Logs\Actor::class,
            $options
        );
    }

    /**
     * Get the client.
     *
     * @return \Okta\Logs\Client
     */
    public function getClient(array $options = []): \Okta\Logs\Client
    {
        return $this->getResourceProperty(
            self::CLIENT,
            \Okta\Logs\Client::class,
            $options
        );
    }

    /**
     * Get the target.
     *
     * @return array
     */
    public function getTarget()
    {
        return $this->getProperty(self::TARGET);
    }
    /**
     * Get the outcome.
     *
     * @return \Okta\Logs\Outcome
     */
    public function getOutcome(array $options = []): \Okta\Logs\Outcome
    {
        return $this->getResourceProperty(
            self::OUTCOME,
            \Okta\Logs\Outcome::class,
            $options
        );
    }

    /**
     * Get the version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->getProperty(self::VERSION);
    }
    /**
     * Get the severity.
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->getProperty(self::SEVERITY);
    }
    /**
     * Get the eventType.
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->getProperty(self::EVENT_TYPE);
    }
    /**
     * Get the published.
     *
     * @return \Carbon\Carbon|null
     */
    public function getPublished()
    {
        return $this->getDateProperty(self::PUBLISHED);
    }
    /**
     * Get the transaction.
     *
     * @return \Okta\Logs\Transaction
     */
    public function getTransaction(array $options = []): \Okta\Logs\Transaction
    {
        return $this->getResourceProperty(
            self::TRANSACTION,
            \Okta\Logs\Transaction::class,
            $options
        );
    }

    /**
     * Get the debugContext.
     *
     * @return \Okta\Logs\DebugContext
     */
    public function getDebugContext(array $options = []): \Okta\Logs\DebugContext
    {
        return $this->getResourceProperty(
            self::DEBUG_CONTEXT,
            \Okta\Logs\DebugContext::class,
            $options
        );
    }

    /**
     * Get the displayMessage.
     *
     * @return string
     */
    public function getDisplayMessage()
    {
        return $this->getProperty(self::DISPLAY_MESSAGE);
    }
    /**
     * Get the legacyEventType.
     *
     * @return string
     */
    public function getLegacyEventType()
    {
        return $this->getProperty(self::LEGACY_EVENT_TYPE);
    }
    /**
     * Get the securityContext.
     *
     * @return \Okta\Logs\SecurityContext
     */
    public function getSecurityContext(array $options = []): \Okta\Logs\SecurityContext
    {
        return $this->getResourceProperty(
            self::SECURITY_CONTEXT,
            \Okta\Logs\SecurityContext::class,
            $options
        );
    }

    /**
     * Get the authenticationContext.
     *
     * @return \Okta\Logs\AuthenticationContext
     */
    public function getAuthenticationContext(array $options = []): \Okta\Logs\AuthenticationContext
    {
        return $this->getResourceProperty(
            self::AUTHENTICATION_CONTEXT,
            \Okta\Logs\AuthenticationContext::class,
            $options
        );
    }

}
