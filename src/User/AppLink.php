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

namespace Okta\User;

class AppLink extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const LABEL = 'label';
    const HIDDEN = 'hidden';
    const APP_NAME = 'appName';
    const LINK_URL = 'linkUrl';
    const LOGO_URL = 'logoUrl';
    const SORT_ORDER = 'sortOrder';
    const APP_INSTANCE_ID = 'appInstanceId';
    const APP_ASSIGNMENT_ID = 'appAssignmentId';
    const CREDENTIALS_SETUP = 'credentialsSetup';


    /**
     * Get the Id.
     *
     * @param mixed $id The id to set.
     * @return string
     */
    function getId() : string
    {
        return $this->getProperty(
            self::ID,
        );
    }
    
    /**
     * Get the Label.
     *
     * @param mixed $label The label to set.
     * @return string
     */
    function getLabel() : string
    {
        return $this->getProperty(
            self::LABEL,
        );
    }
    
    /**
     * Get the Hidden.
     *
     * @param mixed $hidden The hidden to set.
     * @return bool
     */
    function getHidden() : bool
    {
        return $this->getProperty(
            self::HIDDEN,
        );
    }
    
    /**
     * Get the AppName.
     *
     * @param mixed $appName The appName to set.
     * @return string
     */
    function getAppName() : string
    {
        return $this->getProperty(
            self::APP_NAME,
        );
    }
    
    /**
     * Get the LinkUrl.
     *
     * @param mixed $linkUrl The linkUrl to set.
     * @return string
     */
    function getLinkUrl() : string
    {
        return $this->getProperty(
            self::LINK_URL,
        );
    }
    
    /**
     * Get the LogoUrl.
     *
     * @param mixed $logoUrl The logoUrl to set.
     * @return string
     */
    function getLogoUrl() : string
    {
        return $this->getProperty(
            self::LOGO_URL,
        );
    }
    
    /**
     * Get the SortOrder.
     *
     * @param mixed $sortOrder The sortOrder to set.
     * @return int
     */
    function getSortOrder() : int
    {
        return $this->getProperty(
            self::SORT_ORDER,
        );
    }
    
    /**
     * Get the AppInstanceId.
     *
     * @param mixed $appInstanceId The appInstanceId to set.
     * @return string
     */
    function getAppInstanceId() : string
    {
        return $this->getProperty(
            self::APP_INSTANCE_ID,
        );
    }
    
    /**
     * Get the AppAssignmentId.
     *
     * @param mixed $appAssignmentId The appAssignmentId to set.
     * @return string
     */
    function getAppAssignmentId() : string
    {
        return $this->getProperty(
            self::APP_ASSIGNMENT_ID,
        );
    }
    
    /**
     * Get the CredentialsSetup.
     *
     * @param mixed $credentialsSetup The credentialsSetup to set.
     * @return bool
     */
    function getCredentialsSetup() : bool
    {
        return $this->getProperty(
            self::CREDENTIALS_SETUP,
        );
    }
    

}