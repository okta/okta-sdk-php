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

namespace Okta\Application;

class ApplicationSettings extends \Okta\Resource\AbstractResource
{
    const APP = 'app';
    const INLINE_HOOK_ID = 'inlineHookId';
    const NOTIFICATIONS = 'notifications';
    const IMPLICIT_ASSIGNMENT = 'implicitAssignment';

    /**
     * Set the App.
     *
     * @param mixed $app The app to set.
     * @return self
     */
    function setApp(\Okta\Application\ApplicationSettingsApplication $app) : ApplicationSettings
    {
        $this->setResourceProperty(
            self::APP,
            $app
        );
    
        return $this;
    }

    /**
     * Set the InlineHookId.
     *
     * @param mixed $inlineHookId The inlineHookId to set.
     * @return self
     */
    function setInlineHookId($inlineHookId) : ApplicationSettings
    {
        $this->setProperty(
            self::INLINE_HOOK_ID,
            $inlineHookId
        );
    
        return $this;
    }
    
    /**
     * Set the Notifications.
     *
     * @param mixed $notifications The notifications to set.
     * @return self
     */
    function setNotifications(\Okta\Application\ApplicationSettingsNotifications $notifications) : ApplicationSettings
    {
        $this->setResourceProperty(
            self::NOTIFICATIONS,
            $notifications
        );
    
        return $this;
    }

    /**
     * Set the ImplicitAssignment.
     *
     * @param mixed $implicitAssignment The implicitAssignment to set.
     * @return self
     */
    function setImplicitAssignment($implicitAssignment) : ApplicationSettings
    {
        $this->setProperty(
            self::IMPLICIT_ASSIGNMENT,
            $implicitAssignment
        );
    
        return $this;
    }
    
    /**
     * Get the App.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\ApplicationSettingsApplication
     */
    function getApp(array $options = []) : \Okta\Application\ApplicationSettingsApplication
    {
        return $this->getResourceProperty(
            self::APP,
            \Okta\Application\ApplicationSettingsApplication::class,
            $options
        );
    }

    /**
     * Get the InlineHookId.
     *
     * @param mixed $inlineHookId The inlineHookId to set.
     * @return string
     */
    function getInlineHookId() : string
    {
        return $this->getProperty(
            self::INLINE_HOOK_ID
        );
    }
    
    /**
     * Get the Notifications.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\ApplicationSettingsNotifications
     */
    function getNotifications(array $options = []) : \Okta\Application\ApplicationSettingsNotifications
    {
        return $this->getResourceProperty(
            self::NOTIFICATIONS,
            \Okta\Application\ApplicationSettingsNotifications::class,
            $options
        );
    }

    /**
     * Get the ImplicitAssignment.
     *
     * @param mixed $implicitAssignment The implicitAssignment to set.
     * @return bool
     */
    function getImplicitAssignment() : bool
    {
        return $this->getProperty(
            self::IMPLICIT_ASSIGNMENT
        );
    }
    

}