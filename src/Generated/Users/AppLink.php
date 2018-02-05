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

namespace Okta\Generated\Users;


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
     * Get the id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }

    /**
     * Get the label.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->getProperty(self::LABEL);
    }

    /**
     * Get the hidden.
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->getProperty(self::HIDDEN);
    }

    /**
     * Get the appName.
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->getProperty(self::APP_NAME);
    }

    /**
     * Get the linkUrl.
     *
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->getProperty(self::LINK_URL);
    }

    /**
     * Get the logoUrl.
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->getProperty(self::LOGO_URL);
    }

    /**
     * Get the sortOrder.
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->getProperty(self::SORT_ORDER);
    }

    /**
     * Get the appInstanceId.
     *
     * @return string
     */
    public function getAppInstanceId()
    {
        return $this->getProperty(self::APP_INSTANCE_ID);
    }

    /**
     * Get the appAssignmentId.
     *
     * @return string
     */
    public function getAppAssignmentId()
    {
        return $this->getProperty(self::APP_ASSIGNMENT_ID);
    }

    /**
     * Get the credentialsSetup.
     *
     * @return bool
     */
    public function getCredentialsSetup()
    {
        return $this->getProperty(self::CREDENTIALS_SETUP);
    }
}
