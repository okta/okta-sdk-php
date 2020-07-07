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

namespace Okta\IdentityProvider;

class ProvisioningGroups extends \Okta\Resource\AbstractResource
{
    const ACTION = 'action';
    const FILTER = 'filter';
    const ASSIGNMENTS = 'assignments';
    const SOURCE_ATTRIBUTE_NAME = 'sourceAttributeName';


    /**
     * Set the Action.
     *
     * @param mixed $action The action to set.
     * @return self
     */
    function setAction($action) : ProvisioningGroups
    {
        $this->setProperty(
            self::ACTION,
            $action
        );
    
        return $this;
    }
    
    /**
     * Set the Filter.
     *
     * @param mixed $filter The filter to set.
     * @return self
     */
    function setFilter($filter) : ProvisioningGroups
    {
        $this->setProperty(
            self::FILTER,
            $filter
        );
    
        return $this;
    }
    
    /**
     * Set the Assignments.
     *
     * @param mixed $assignments The assignments to set.
     * @return self
     */
    function setAssignments($assignments) : ProvisioningGroups
    {
        $this->setProperty(
            self::ASSIGNMENTS,
            $assignments
        );
    
        return $this;
    }
    
    /**
     * Set the SourceAttributeName.
     *
     * @param mixed $sourceAttributeName The sourceAttributeName to set.
     * @return self
     */
    function setSourceAttributeName($sourceAttributeName) : ProvisioningGroups
    {
        $this->setProperty(
            self::SOURCE_ATTRIBUTE_NAME,
            $sourceAttributeName
        );
    
        return $this;
    }
    
    /**
     * Get the Action.
     *
     * @param mixed $action The action to set.
     * @return string
     */
    function getAction() : string
    {
        return $this->getProperty(
            self::ACTION,
        );
    }
    
    /**
     * Get the Filter.
     *
     * @param mixed $filter The filter to set.
     * @return array
     */
    function getFilter() : array
    {
        return $this->getProperty(
            self::FILTER,
        );
    }
    
    /**
     * Get the Assignments.
     *
     * @param mixed $assignments The assignments to set.
     * @return array
     */
    function getAssignments() : array
    {
        return $this->getProperty(
            self::ASSIGNMENTS,
        );
    }
    
    /**
     * Get the SourceAttributeName.
     *
     * @param mixed $sourceAttributeName The sourceAttributeName to set.
     * @return string
     */
    function getSourceAttributeName() : string
    {
        return $this->getProperty(
            self::SOURCE_ATTRIBUTE_NAME,
        );
    }
    

}