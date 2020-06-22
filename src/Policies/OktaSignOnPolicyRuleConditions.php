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

class OktaSignOnPolicyRuleConditions extends \Okta\Resource\AbstractResource
{
    const PEOPLE = 'people';
    const NETWORK = 'network';
    const AUTH_CONTEXT = 'authContext';


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

    /**
     * Get the network.
     *
     * @return \Okta\Policies\PolicyNetworkCondition
     */
    public function getNetwork(array $options = []): \Okta\Policies\PolicyNetworkCondition
    {
        return $this->getResourceProperty(
            self::NETWORK,
            \Okta\Policies\PolicyNetworkCondition::class,
            $options
        );
    }

    /**
     * Set the network.
     *
     * @param \Okta\Policies\PolicyNetworkCondition $network The PolicyNetworkCondition instance.
     * @return self
     */
    public function setNetwork(\Okta\Policies\PolicyNetworkCondition $network)
    {
        $this->setResourceProperty(
            self::NETWORK,
            $network
        );

        return $this;
    }

    /**
     * Get the authContext.
     *
     * @return \Okta\Policies\PolicyRuleAuthContextCondition
     */
    public function getAuthContext(array $options = []): \Okta\Policies\PolicyRuleAuthContextCondition
    {
        return $this->getResourceProperty(
            self::AUTH_CONTEXT,
            \Okta\Policies\PolicyRuleAuthContextCondition::class,
            $options
        );
    }

    /**
     * Set the authContext.
     *
     * @param \Okta\Policies\PolicyRuleAuthContextCondition $authContext The PolicyRuleAuthContextCondition instance.
     * @return self
     */
    public function setAuthContext(\Okta\Policies\PolicyRuleAuthContextCondition $authContext)
    {
        $this->setResourceProperty(
            self::AUTH_CONTEXT,
            $authContext
        );

        return $this;
    }
}
