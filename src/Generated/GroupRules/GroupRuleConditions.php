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

namespace Okta\Generated\GroupRules;


class GroupRuleConditions extends \Okta\Resource\AbstractResource
{
    const PEOPLE = 'people';
    const EXPRESSION = 'expression';



    /**
     * Get the people.
     *
     * @return \Okta\GroupRules\GroupRulePeopleCondition
     */
    public function getPeople(array $options = []): \Okta\GroupRules\GroupRulePeopleCondition
    {
        return $this->getResourceProperty(
            self::PEOPLE,
            \Okta\GroupRules\GroupRulePeopleCondition::class,
            $options
        );
    }


    /**
     * Set the people.
     *
     * @param \Okta\GroupRules\GroupRulePeopleCondition $people The GroupRulePeopleCondition instance.
     * @return self
     */
    public function setPeople(\Okta\GroupRules\GroupRulePeopleCondition $people)
    {
        $this->setResourceProperty(
            self::PEOPLE,
            $people
        );
        
        return $this;
    }

    /**
     * Get the expression.
     *
     * @return \Okta\GroupRules\GroupRuleExpression
     */
    public function getExpression(array $options = []): \Okta\GroupRules\GroupRuleExpression
    {
        return $this->getResourceProperty(
            self::EXPRESSION,
            \Okta\GroupRules\GroupRuleExpression::class,
            $options
        );
    }


    /**
     * Set the expression.
     *
     * @param \Okta\GroupRules\GroupRuleExpression $expression The GroupRuleExpression instance.
     * @return self
     */
    public function setExpression(\Okta\GroupRules\GroupRuleExpression $expression)
    {
        $this->setResourceProperty(
            self::EXPRESSION,
            $expression
        );
        
        return $this;
    }
}
