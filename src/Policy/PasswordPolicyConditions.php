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

class PasswordPolicyConditions extends \Okta\Resource\AbstractResource
{
    const PEOPLE = 'people';
    const AUTH_PROVIDER = 'authProvider';


    /**
     * Set the People.
     *
     * @param mixed $people The people to set.
     * @return self
     */
    function setPeople(\Okta\Policy\PolicyPeopleCondition $people) : PasswordPolicyConditions
    {
        $this->setResourceProperty(
            self::PEOPLE,
            $people
        );
    
        return $this;
    }

    /**
     * Set the AuthProvider.
     *
     * @param mixed $authProvider The authProvider to set.
     * @return self
     */
    function setAuthProvider(\Okta\Policy\PasswordPolicyAuthenticationProviderCondition $authProvider) : PasswordPolicyConditions
    {
        $this->setResourceProperty(
            self::AUTH_PROVIDER,
            $authProvider
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
     * Get the AuthProvider.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyAuthenticationProviderCondition
     */
    function getAuthProvider(array $options = []) : \Okta\Policy\PasswordPolicyAuthenticationProviderCondition
    {
        return $this->getResourceProperty(
            self::AUTH_PROVIDER,
            \Okta\Policy\PasswordPolicyAuthenticationProviderCondition::class,
            $options
        );
    }


}