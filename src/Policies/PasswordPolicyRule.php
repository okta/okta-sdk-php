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


class PasswordPolicyRule extends \Okta\Resource\AbstractResource
{
    const NAME = 'name';
    const ACTIONS = 'actions';
    const CONDITIONS = 'conditions';



    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->getProperty(self::NAME);
    }

    /**
    * Set the name.
    *
    * @param mixed $name The value to set.
    * @return self
    */
    public function setName($name)
    {
        $this->setProperty(
            self::NAME,
            $name
        );

        return $this;
    }

    /**
     * Get the actions.
     *
     * @return \Okta\Policies\PasswordPolicyRuleActions
     */
    public function getActions(array $options = []): \Okta\Policies\PasswordPolicyRuleActions
    {
        return $this->getResourceProperty(
            self::ACTIONS,
            \Okta\Policies\PasswordPolicyRuleActions::class,
            $options
        );
    }


    /**
     * Set the actions.
     *
     * @param \Okta\Policies\PasswordPolicyRuleActions $actions The PasswordPolicyRuleActions instance.
     * @return self
     */
    public function setActions(\Okta\Policies\PasswordPolicyRuleActions $actions)
    {
        $this->setResourceProperty(
            self::ACTIONS,
            $actions
        );

        return $this;
    }

    /**
     * Get the conditions.
     *
     * @return \Okta\Policies\PasswordPolicyRuleConditions
     */
    public function getConditions(array $options = []): \Okta\Policies\PasswordPolicyRuleConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\Policies\PasswordPolicyRuleConditions::class,
            $options
        );
    }


    /**
     * Set the conditions.
     *
     * @param \Okta\Policies\PasswordPolicyRuleConditions $conditions The PasswordPolicyRuleConditions instance.
     * @return self
     */
    public function setConditions(\Okta\Policies\PasswordPolicyRuleConditions $conditions)
    {
        $this->setResourceProperty(
            self::CONDITIONS,
            $conditions
        );

        return $this;
    }
}
