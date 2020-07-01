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

namespace Okta\Log;

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
     * Get the Uuid.
     *
     * @param mixed $uuid The uuid to set.
     * @return string
     */
    function getUuid() : string
    {
        return $this->getProperty(
            self::UUID
        );
    }
    
    /**
     * Get the Actor.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogActor
     */
    function getActor(array $options = []) : \Okta\Log\LogActor
    {
        return $this->getResourceProperty(
            self::ACTOR,
            \Okta\Log\LogActor::class,
            $options
        );
    }

    /**
     * Get the Client.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogClient
     */
    function getClient(array $options = []) : \Okta\Log\LogClient
    {
        return $this->getResourceProperty(
            self::CLIENT,
            \Okta\Log\LogClient::class,
            $options
        );
    }

    /**
     * Get the Target.
     *
     * @param mixed $target The target to set.
     * @return array
     */
    function getTarget() : array
    {
        return $this->getProperty(
            self::TARGET
        );
    }
    
    /**
     * Get the Outcome.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogOutcome
     */
    function getOutcome(array $options = []) : \Okta\Log\LogOutcome
    {
        return $this->getResourceProperty(
            self::OUTCOME,
            \Okta\Log\LogOutcome::class,
            $options
        );
    }

    /**
     * Get the Request.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogRequest
     */
    function getRequest(array $options = []) : \Okta\Log\LogRequest
    {
        return $this->getResourceProperty(
            self::REQUEST,
            \Okta\Log\LogRequest::class,
            $options
        );
    }

    /**
     * Get the Version.
     *
     * @param mixed $version The version to set.
     * @return string
     */
    function getVersion() : string
    {
        return $this->getProperty(
            self::VERSION
        );
    }
    
    /**
     * Get the Severity.
     *
     * @param mixed $severity The severity to set.
     * @return \Okta\Log\LogSeverity
     */
    function getSeverity() : \Okta\Log\LogSeverity
    {
        return $this->getProperty(
            self::SEVERITY
        );
    }
    
    /**
     * Get the EventType.
     *
     * @param mixed $eventType The eventType to set.
     * @return string
     */
    function getEventType() : string
    {
        return $this->getProperty(
            self::EVENT_TYPE
        );
    }
    
    /**
     * Get the Published.
     *
     * @param mixed $published The published to set.
     * @return \Carbon\Carbon
     */
    function getPublished() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::PUBLISHED
        );
    
        return $this;
    }

    /**
     * Get the Transaction.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogTransaction
     */
    function getTransaction(array $options = []) : \Okta\Log\LogTransaction
    {
        return $this->getResourceProperty(
            self::TRANSACTION,
            \Okta\Log\LogTransaction::class,
            $options
        );
    }

    /**
     * Get the DebugContext.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogDebugContext
     */
    function getDebugContext(array $options = []) : \Okta\Log\LogDebugContext
    {
        return $this->getResourceProperty(
            self::DEBUG_CONTEXT,
            \Okta\Log\LogDebugContext::class,
            $options
        );
    }

    /**
     * Get the DisplayMessage.
     *
     * @param mixed $displayMessage The displayMessage to set.
     * @return string
     */
    function getDisplayMessage() : string
    {
        return $this->getProperty(
            self::DISPLAY_MESSAGE
        );
    }
    
    /**
     * Get the LegacyEventType.
     *
     * @param mixed $legacyEventType The legacyEventType to set.
     * @return string
     */
    function getLegacyEventType() : string
    {
        return $this->getProperty(
            self::LEGACY_EVENT_TYPE
        );
    }
    
    /**
     * Get the SecurityContext.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogSecurityContext
     */
    function getSecurityContext(array $options = []) : \Okta\Log\LogSecurityContext
    {
        return $this->getResourceProperty(
            self::SECURITY_CONTEXT,
            \Okta\Log\LogSecurityContext::class,
            $options
        );
    }

    /**
     * Get the AuthenticationContext.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogAuthenticationContext
     */
    function getAuthenticationContext(array $options = []) : \Okta\Log\LogAuthenticationContext
    {
        return $this->getResourceProperty(
            self::AUTHENTICATION_CONTEXT,
            \Okta\Log\LogAuthenticationContext::class,
            $options
        );
    }


}