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

class Role extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const TYPE = 'type';
    const LABEL = 'label';
    const LINKS = '_links';
    const STATUS = 'status';
    const CREATED = 'created';
    const EMBEDDED = '_embedded';
    const DESCRIPTION = 'description';
    const LAST_UPDATED = 'lastUpdated';
    const ASSIGNMENT_TYPE = 'assignmentType';



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
     * Get the type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->getProperty(self::TYPE);
    }

    /**
    * Set the type.
    *
    * @param mixed $type The value to set.
    * @return self
    */
    public function setType($type)
    {
        $this->setProperty(
            self::TYPE,
            $type
        );

        return $this;
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
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }

    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
     * Get the created.
     *
     * @return \Carbon\Carbon|null
     */
    public function getCreated()
    {
        return $this->getDateProperty(self::CREATED);
    }

    /**
     * Get the _embedded.
     *
     * @return \stdClass
     */
    public function getEmbedded()
    {
        return $this->getProperty(self::EMBEDDED);
    }

    /**
     * Get the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty(self::DESCRIPTION);
    }

    /**
    * Set the description.
    *
    * @param mixed $description The value to set.
    * @return self
    */
    public function setDescription($description)
    {
        $this->setProperty(
            self::DESCRIPTION,
            $description
        );

        return $this;
    }

    /**
     * Get the lastUpdated.
     *
     * @return \Carbon\Carbon|null
     */
    public function getLastUpdated()
    {
        return $this->getDateProperty(self::LAST_UPDATED);
    }

    /**
     * Get the assignmentType.
     *
     * @return string
     */
    public function getAssignmentType()
    {
        return $this->getProperty(self::ASSIGNMENT_TYPE);
    }

    /**
    * Set the assignmentType.
    *
    * @param mixed $assignmentType The value to set.
    * @return self
    */
    public function setAssignmentType($assignmentType)
    {
        $this->setProperty(
            self::ASSIGNMENT_TYPE,
            $assignmentType
        );

        return $this;
    }


    /**
    *
    *
    *
    * @return mixed|null
    */
    public function addAdminGroupTarget($targetGroupId)
    {
        $uri = "/api/v1/groups/{$this->get()}/roles/{$this->getId()}/targets/groups/{$targetGroupId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri);

        return $body;
    }


    /**
    * Add App Instance Target to App Administrator Role given to a Group
    *
    *
    * @return mixed|null
    */
    public function addAppInstanceTargetToAdminRole($appName, $applicationId)
    {
        $uri = "/api/v1/groups/{$this->get()}/roles/{$this->getId()}/targets/catalog/apps/{$appName}/{$applicationId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri);

        return $body;
    }


    /**
    * Success
    *
    *
    * @return mixed|null
    */
    public function addAppTargetToAdminRole($appName)
    {
        $uri = "/api/v1/groups/{$this->get()}/roles/{$this->getId()}/targets/catalog/apps/{$appName}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri);

        return $body;
    }


    /**
    * Success
    *
    *
    * @return mixed|null
    */
    public function addAllAppsAsTargetToRole()
    {
        $uri = "/api/v1/users/{$this->get()}/roles/{$this->getId()}/targets/catalog/apps";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri);

        return $body;
    }


    /**
    * Add App Instance Target to App Administrator Role given to a User
    *
    *
    * @return mixed|null
    */
    public function addAppTargetToAppAdminRoleForUser($appName, $applicationId)
    {
        $uri = "/api/v1/users/{$this->get()}/roles/{$this->getId()}/targets/catalog/apps/{$appName}/{$applicationId}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri);

        return $body;
    }


    /**
    * Success
    *
    *
    * @return mixed|null
    */
    public function addAppTargetToAdminRoleForUser($appName)
    {
        $uri = "/api/v1/users/{$this->get()}/roles/{$this->getId()}/targets/catalog/apps/{$appName}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('PUT', $uri);

        return $body;
    }
}
