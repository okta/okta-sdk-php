<?php
/*******************************************************************************
 * Copyright 2017-Present Okta, Inc.
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

namespace Okta\Policies;

class PolicyAccountLinkFilter extends \Okta\Resource\AbstractResource
{
    const GROUPS = 'groups';


    /**
     * Get the groups.
     *
     * @return \Okta\Policies\PolicyAccountLinkFilterGroups
     */
    public function getGroups(array $options = []): \Okta\Policies\PolicyAccountLinkFilterGroups
    {
        return $this->getResourceProperty(
            self::GROUPS,
            \Okta\Policies\PolicyAccountLinkFilterGroups::class,
            $options
        );
    }

    /**
     * Set the groups.
     *
     * @param \Okta\Policies\PolicyAccountLinkFilterGroups $groups The PolicyAccountLinkFilterGroups instance.
     * @return self
     */
    public function setGroups(\Okta\Policies\PolicyAccountLinkFilterGroups $groups)
    {
        $this->setResourceProperty(
            self::GROUPS,
            $groups
        );

        return $this;
    }
}
