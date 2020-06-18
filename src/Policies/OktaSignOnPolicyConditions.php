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

namespace Okta\Policies;

class OktaSignOnPolicyConditions extends \Okta\Resource\AbstractResource
{
    const PEOPLE = 'people';



    /**
     * Get the people.
     *
     * @return \Okta\Policies\PolicyPeopleCondition
     */
    public function getPeople(array $options = []): \Okta\Policies\PolicyPeopleCondition
    {
        return $this->getResourceProperty(
            self::PEOPLE,
            \Okta\Policies\PolicyPeopleCondition::class,
            $options
        );
    }


    /**
     * Set the people.
     *
     * @param \Okta\Policies\PolicyPeopleCondition $people The PolicyPeopleCondition instance.
     * @return self
     */
    public function setPeople(\Okta\Policies\PolicyPeopleCondition $people)
    {
        $this->setResourceProperty(
            self::PEOPLE,
            $people
        );

        return $this;
    }
}
