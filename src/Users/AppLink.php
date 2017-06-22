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

namespace Okta\Users;

use Okta\Resource\AbstractResource;

class AppLink extends AbstractResource
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
    public function getId(): string
    {
        return $this->getProperty(self::ID);
    }
    /**
     * Get the label.
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->getProperty(self::LABEL);
    }
    /**
    * Set the label.
    *
    * @param mixed $label The value to set.
    * @return self
    */
    public function setLabel($label)
    {
        $this->setProperty(
            self::LABEL,
            $label
        );

        return $this;
    }
    /**
     * Get the hidden.
     *
     * @return bool
     */
    public function getHidden(): bool
    {
        return $this->getProperty(self::HIDDEN);
    }
    /**
    * Set the hidden.
    *
    * @param mixed $hidden The value to set.
    * @return self
    */
    public function setHidden($hidden)
    {
        $this->setProperty(
            self::HIDDEN,
            $hidden
        );

        return $this;
    }
    /**
     * Get the appName.
     *
     * @return string
     */
    public function getAppName(): string
    {
        return $this->getProperty(self::APP_NAME);
    }
    /**
    * Set the appName.
    *
    * @param mixed $appName The value to set.
    * @return self
    */
    public function setAppName($appName)
    {
        $this->setProperty(
            self::APP_NAME,
            $appName
        );

        return $this;
    }
    /**
     * Get the linkUrl.
     *
     * @return string
     */
    public function getLinkUrl(): string
    {
        return $this->getProperty(self::LINK_URL);
    }
    /**
    * Set the linkUrl.
    *
    * @param mixed $linkUrl The value to set.
    * @return self
    */
    public function setLinkUrl($linkUrl)
    {
        $this->setProperty(
            self::LINK_URL,
            $linkUrl
        );

        return $this;
    }
    /**
     * Get the logoUrl.
     *
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->getProperty(self::LOGO_URL);
    }
    /**
    * Set the logoUrl.
    *
    * @param mixed $logoUrl The value to set.
    * @return self
    */
    public function setLogoUrl($logoUrl)
    {
        $this->setProperty(
            self::LOGO_URL,
            $logoUrl
        );

        return $this;
    }
    /**
     * Get the sortOrder.
     *
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->getProperty(self::SORT_ORDER);
    }
    /**
    * Set the sortOrder.
    *
    * @param mixed $sortOrder The value to set.
    * @return self
    */
    public function setSortOrder($sortOrder)
    {
        $this->setProperty(
            self::SORT_ORDER,
            $sortOrder
        );

        return $this;
    }
    /**
     * Get the appInstanceId.
     *
     * @return string
     */
    public function getAppInstanceId(): string
    {
        return $this->getProperty(self::APP_INSTANCE_ID);
    }
    /**
    * Set the appInstanceId.
    *
    * @param mixed $appInstanceId The value to set.
    * @return self
    */
    public function setAppInstanceId($appInstanceId)
    {
        $this->setProperty(
            self::APP_INSTANCE_ID,
            $appInstanceId
        );

        return $this;
    }
    /**
     * Get the appAssignmentId.
     *
     * @return string
     */
    public function getAppAssignmentId(): string
    {
        return $this->getProperty(self::APP_ASSIGNMENT_ID);
    }
    /**
    * Set the appAssignmentId.
    *
    * @param mixed $appAssignmentId The value to set.
    * @return self
    */
    public function setAppAssignmentId($appAssignmentId)
    {
        $this->setProperty(
            self::APP_ASSIGNMENT_ID,
            $appAssignmentId
        );

        return $this;
    }
    /**
     * Get the credentialsSetup.
     *
     * @return bool
     */
    public function getCredentialsSetup(): bool
    {
        return $this->getProperty(self::CREDENTIALS_SETUP);
    }
    /**
    * Set the credentialsSetup.
    *
    * @param mixed $credentialsSetup The value to set.
    * @return self
    */
    public function setCredentialsSetup($credentialsSetup)
    {
        $this->setProperty(
            self::CREDENTIALS_SETUP,
            $credentialsSetup
        );

        return $this;
    }
}
