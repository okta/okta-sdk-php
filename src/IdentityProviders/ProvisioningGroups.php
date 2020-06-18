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

namespace Okta\IdentityProviders;

class ProvisioningGroups extends \Okta\Resource\AbstractResource
{
    const ACTION = 'action';
    const FILTER = 'filter';
    const ASSIGNMENTS = 'assignments';
    const SOURCE_ATTRIBUTE_NAME = 'sourceAttributeName';



    /**
     * Get the action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->getProperty(self::ACTION);
    }

    /**
    * Set the action.
    *
    * @param mixed $action The value to set.
    * @return self
    */
    public function setAction($action)
    {
        $this->setProperty(
            self::ACTION,
            $action
        );

        return $this;
    }

    /**
     * Get the filter.
     *
     * @return array
     */
    public function getFilter()
    {
        return $this->getProperty(self::FILTER);
    }

    /**
    * Set the filter.
    *
    * @param mixed $filter The value to set.
    * @return self
    */
    public function setFilter($filter)
    {
        $this->setProperty(
            self::FILTER,
            $filter
        );

        return $this;
    }

    /**
     * Get the assignments.
     *
     * @return array
     */
    public function getAssignments()
    {
        return $this->getProperty(self::ASSIGNMENTS);
    }

    /**
    * Set the assignments.
    *
    * @param mixed $assignments The value to set.
    * @return self
    */
    public function setAssignments($assignments)
    {
        $this->setProperty(
            self::ASSIGNMENTS,
            $assignments
        );

        return $this;
    }

    /**
     * Get the sourceAttributeName.
     *
     * @return string
     */
    public function getSourceAttributeName()
    {
        return $this->getProperty(self::SOURCE_ATTRIBUTE_NAME);
    }

    /**
    * Set the sourceAttributeName.
    *
    * @param mixed $sourceAttributeName The value to set.
    * @return self
    */
    public function setSourceAttributeName($sourceAttributeName)
    {
        $this->setProperty(
            self::SOURCE_ATTRIBUTE_NAME,
            $sourceAttributeName
        );

        return $this;
    }
}
