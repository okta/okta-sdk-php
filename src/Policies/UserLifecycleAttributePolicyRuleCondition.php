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

class UserLifecycleAttributePolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const ATTRIBUTE_NAME = 'attributeName';
    const MATCHING_VALUE = 'matchingValue';


    /**
     * Get the attributeName.
     *
     * @return string
     */
    public function getAttributeName()
    {
        return $this->getProperty(self::ATTRIBUTE_NAME);
    }

    /**
    * Set the attributeName.
    *
    * @param mixed $attributeName The value to set.
    * @return self
    */
    public function setAttributeName($attributeName)
    {
        $this->setProperty(
            self::ATTRIBUTE_NAME,
            $attributeName
        );

        return $this;
    }

    /**
     * Get the matchingValue.
     *
     * @return string
     */
    public function getMatchingValue()
    {
        return $this->getProperty(self::MATCHING_VALUE);
    }

    /**
    * Set the matchingValue.
    *
    * @param mixed $matchingValue The value to set.
    * @return self
    */
    public function setMatchingValue($matchingValue)
    {
        $this->setProperty(
            self::MATCHING_VALUE,
            $matchingValue
        );

        return $this;
    }
}
