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

class UserIdentifierConditionEvaluatorPattern extends \Okta\Resource\AbstractResource
{
    const VALUE = 'value';
    const MATCH_TYPE = 'matchType';


    /**
     * Get the value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->getProperty(self::VALUE);
    }

    /**
    * Set the value.
    *
    * @param mixed $value The value to set.
    * @return self
    */
    public function setValue($value)
    {
        $this->setProperty(
            self::VALUE,
            $value
        );

        return $this;
    }

    /**
     * Get the matchType.
     *
     * @return string
     */
    public function getMatchType()
    {
        return $this->getProperty(self::MATCH_TYPE);
    }

    /**
    * Set the matchType.
    *
    * @param mixed $matchType The value to set.
    * @return self
    */
    public function setMatchType($matchType)
    {
        $this->setProperty(
            self::MATCH_TYPE,
            $matchType
        );

        return $this;
    }
}
