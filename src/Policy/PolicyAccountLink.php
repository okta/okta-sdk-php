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

namespace Okta\Policy;

class PolicyAccountLink extends \Okta\Resource\AbstractResource
{
    const ACTION = 'action';
    const FILTER = 'filter';


    /**
     * Set the Action.
     *
     * @param mixed $action The action to set.
     * @return self
     */
    function setAction($action) : PolicyAccountLink
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
    function setFilter(\Okta\Policy\PolicyAccountLinkFilter $filter) : PolicyAccountLink
    {
        $this->setResourceProperty(
            self::FILTER,
            $filter
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
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicyAccountLinkFilter
     */
    function getFilter(array $options = []) : \Okta\Policy\PolicyAccountLinkFilter
    {
        return $this->getResourceProperty(
            self::FILTER,
            \Okta\Policy\PolicyAccountLinkFilter::class,
            $options
        );
    }


}