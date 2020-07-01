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

namespace Okta\GroupRule;

class GroupRuleConditions extends \Okta\Resource\AbstractResource
{
    const PEOPLE = 'people';
    const EXPRESSION = 'expression';

    /**
     * Set the People.
     *
     * @param mixed $people The people to set.
     * @return self
     */
    function setPeople(\Okta\GroupRule\GroupRulePeopleCondition $people) : GroupRuleConditions
    {
        $this->setResourceProperty(
            self::PEOPLE,
            $people
        );
    
        return $this;
    }

    /**
     * Set the Expression.
     *
     * @param mixed $expression The expression to set.
     * @return self
     */
    function setExpression(\Okta\GroupRule\GroupRuleExpression $expression) : GroupRuleConditions
    {
        $this->setResourceProperty(
            self::EXPRESSION,
            $expression
        );
    
        return $this;
    }

    /**
     * Get the People.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\GroupRule\GroupRulePeopleCondition
     */
    function getPeople(array $options = []) : \Okta\GroupRule\GroupRulePeopleCondition
    {
        return $this->getResourceProperty(
            self::PEOPLE,
            \Okta\GroupRule\GroupRulePeopleCondition::class,
            $options
        );
    }

    /**
     * Get the Expression.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\GroupRule\GroupRuleExpression
     */
    function getExpression(array $options = []) : \Okta\GroupRule\GroupRuleExpression
    {
        return $this->getResourceProperty(
            self::EXPRESSION,
            \Okta\GroupRule\GroupRuleExpression::class,
            $options
        );
    }


}