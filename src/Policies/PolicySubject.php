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

class PolicySubject extends \Okta\Resource\AbstractResource
{
    const FILTER = 'filter';
    const FORMAT = 'format';
    const MATCH_TYPE = 'matchType';
    const MATCH_ATTRIBUTE = 'matchAttribute';
    const USER_NAME_TEMPLATE = 'userNameTemplate';


    /**
     * Get the filter.
     *
     * @return string
     */
    public function getFilter()
    {
        return $this->getProperty(self::FILTER);
    }

    /**
    * Set the filter.
    *
    * @param mixed $filter The value to set.
    * @return self
    */
    public function setFilter($filter)
    {
        $this->setProperty(
            self::FILTER,
            $filter
        );

        return $this;
    }

    /**
     * Get the format.
     *
     * @return array
     */
    public function getFormat()
    {
        return $this->getProperty(self::FORMAT);
    }

    /**
    * Set the format.
    *
    * @param mixed $format The value to set.
    * @return self
    */
    public function setFormat($format)
    {
        $this->setProperty(
            self::FORMAT,
            $format
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

    /**
     * Get the matchAttribute.
     *
     * @return string
     */
    public function getMatchAttribute()
    {
        return $this->getProperty(self::MATCH_ATTRIBUTE);
    }

    /**
    * Set the matchAttribute.
    *
    * @param mixed $matchAttribute The value to set.
    * @return self
    */
    public function setMatchAttribute($matchAttribute)
    {
        $this->setProperty(
            self::MATCH_ATTRIBUTE,
            $matchAttribute
        );

        return $this;
    }

    /**
     * Get the userNameTemplate.
     *
     * @return \Okta\Policies\PolicyUserNameTemplate
     */
    public function getUserNameTemplate(array $options = []): \Okta\Policies\PolicyUserNameTemplate
    {
        return $this->getResourceProperty(
            self::USER_NAME_TEMPLATE,
            \Okta\Policies\PolicyUserNameTemplate::class,
            $options
        );
    }

    /**
     * Set the userNameTemplate.
     *
     * @param \Okta\Policies\PolicyUserNameTemplate $userNameTemplate The PolicyUserNameTemplate instance.
     * @return self
     */
    public function setUserNameTemplate(\Okta\Policies\PolicyUserNameTemplate $userNameTemplate)
    {
        $this->setResourceProperty(
            self::USER_NAME_TEMPLATE,
            $userNameTemplate
        );

        return $this;
    }
}
