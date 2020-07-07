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

class PasswordPolicyRuleConditions extends \Okta\Resource\AbstractResource
{
    const PEOPLE = 'people';
    const NETWORK = 'network';


    /**
     * Set the People.
     *
     * @param mixed $people The people to set.
     * @return self
     */
    function setPeople(\Okta\Policy\PolicyPeopleCondition $people) : PasswordPolicyRuleConditions
    {
        $this->setResourceProperty(
            self::PEOPLE,
            $people
        );
    
        return $this;
    }

    /**
     * Set the Network.
     *
     * @param mixed $network The network to set.
     * @return self
     */
    function setNetwork(\Okta\Policy\PolicyNetworkCondition $network) : PasswordPolicyRuleConditions
    {
        $this->setResourceProperty(
            self::NETWORK,
            $network
        );
    
        return $this;
    }

    /**
     * Get the People.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicyPeopleCondition
     */
    function getPeople(array $options = []) : \Okta\Policy\PolicyPeopleCondition
    {
        return $this->getResourceProperty(
            self::PEOPLE,
            \Okta\Policy\PolicyPeopleCondition::class,
            $options
        );
    }

    /**
     * Get the Network.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicyNetworkCondition
     */
    function getNetwork(array $options = []) : \Okta\Policy\PolicyNetworkCondition
    {
        return $this->getResourceProperty(
            self::NETWORK,
            \Okta\Policy\PolicyNetworkCondition::class,
            $options
        );
    }


}