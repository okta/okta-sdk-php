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

class PolicyAccountLinkFilter extends \Okta\Resource\AbstractResource
{
    const GROUPS = 'groups';

    /**
     * Set the Groups.
     *
     * @param mixed $groups The groups to set.
     * @return self
     */
    function setGroups(\Okta\Policy\PolicyAccountLinkFilterGroups $groups) : PolicyAccountLinkFilter
    {
        $this->setResourceProperty(
            self::GROUPS,
            $groups
        );
    
        return $this;
    }

    /**
     * Get the Groups.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicyAccountLinkFilterGroups
     */
    function getGroups(array $options = []) : \Okta\Policy\PolicyAccountLinkFilterGroups
    {
        return $this->getResourceProperty(
            self::GROUPS,
            \Okta\Policy\PolicyAccountLinkFilterGroups::class,
            $options
        );
    }


}