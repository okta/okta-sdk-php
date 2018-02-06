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


class LogEvent extends \Okta\Resource\AbstractResource
{
    const UUID = 'uuid';
    const ACTOR = 'actor';
    const CLIENT = 'client';
    const TARGET = 'target';
    const OUTCOME = 'outcome';
    const REQUEST = 'request';
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
     * @return \Okta\Logs\LogActor
     */
    public function getActor(array $options = []): \Okta\Logs\LogActor
    {
        return $this->getResourceProperty(
            self::ACTOR,
            \Okta\Logs\LogActor::class,
            $options
        );
    }


    /**
     * Get the client.
     *
     * @return \Okta\Logs\LogClient
     */
    public function getClient(array $options = []): \Okta\Logs\LogClient
    {
        return $this->getResourceProperty(
            self::CLIENT,
            \Okta\Logs\LogClient::class,
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
     * @return \Okta\Logs\LogOutcome
     */
    public function getOutcome(array $options = []): \Okta\Logs\LogOutcome
    {
        return $this->getResourceProperty(
            self::OUTCOME,
            \Okta\Logs\LogOutcome::class,
            $options
        );
    }


    /**
     * Get the request.
     *
     * @return \Okta\Logs\LogRequest
     */
    public function getRequest(array $options = []): \Okta\Logs\LogRequest
    {
        return $this->getResourceProperty(
            self::REQUEST,
            \Okta\Logs\LogRequest::class,
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
     * @return \Okta\Logs\LogTransaction
     */
    public function getTransaction(array $options = []): \Okta\Logs\LogTransaction
    {
        return $this->getResourceProperty(
            self::TRANSACTION,
            \Okta\Logs\LogTransaction::class,
            $options
        );
    }


    /**
     * Get the debugContext.
     *
     * @return \Okta\Logs\LogDebugContext
     */
    public function getDebugContext(array $options = []): \Okta\Logs\LogDebugContext
    {
        return $this->getResourceProperty(
            self::DEBUG_CONTEXT,
            \Okta\Logs\LogDebugContext::class,
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
     * @return \Okta\Logs\LogSecurityContext
     */
    public function getSecurityContext(array $options = []): \Okta\Logs\LogSecurityContext
    {
        return $this->getResourceProperty(
            self::SECURITY_CONTEXT,
            \Okta\Logs\LogSecurityContext::class,
            $options
        );
    }


    /**
     * Get the authenticationContext.
     *
     * @return \Okta\Logs\LogAuthenticationContext
     */
    public function getAuthenticationContext(array $options = []): \Okta\Logs\LogAuthenticationContext
    {
        return $this->getResourceProperty(
            self::AUTHENTICATION_CONTEXT,
            \Okta\Logs\LogAuthenticationContext::class,
            $options
        );
    }

}
