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

namespace Okta\Applications;

class OAuth2Claim extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const VALUE = 'value';
    const LINKS = '_links';
    const STATUS = 'status';
    const SYSTEM = 'system';
    const CLAIM_TYPE = 'claimType';
    const VALUE_TYPE = 'valueType';
    const CONDITIONS = 'conditions';
    const GROUP_FILTER_TYPE = 'group_filter_type';
    const ALWAYS_INCLUDE_IN_TOKEN = 'alwaysIncludeInToken';


    /**
     * Get the id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }

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
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }

    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
    * Set the status.
    *
    * @param mixed $status The value to set.
    * @return self
    */
    public function setStatus($status)
    {
        $this->setProperty(
            self::STATUS,
            $status
        );

        return $this;
    }

    /**
     * Get the system.
     *
     * @return bool
     */
    public function getSystem()
    {
        return $this->getProperty(self::SYSTEM);
    }

    /**
    * Set the system.
    *
    * @param mixed $system The value to set.
    * @return self
    */
    public function setSystem($system)
    {
        $this->setProperty(
            self::SYSTEM,
            $system
        );

        return $this;
    }

    /**
     * Get the claimType.
     *
     * @return string
     */
    public function getClaimType()
    {
        return $this->getProperty(self::CLAIM_TYPE);
    }

    /**
    * Set the claimType.
    *
    * @param mixed $claimType The value to set.
    * @return self
    */
    public function setClaimType($claimType)
    {
        $this->setProperty(
            self::CLAIM_TYPE,
            $claimType
        );

        return $this;
    }

    /**
     * Get the valueType.
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->getProperty(self::VALUE_TYPE);
    }

    /**
    * Set the valueType.
    *
    * @param mixed $valueType The value to set.
    * @return self
    */
    public function setValueType($valueType)
    {
        $this->setProperty(
            self::VALUE_TYPE,
            $valueType
        );

        return $this;
    }

    /**
     * Get the conditions.
     *
     * @return \Okta\Applications\OAuth2ClaimConditions
     */
    public function getConditions(array $options = []): \Okta\Applications\OAuth2ClaimConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\Applications\OAuth2ClaimConditions::class,
            $options
        );
    }

    /**
     * Set the conditions.
     *
     * @param \Okta\Applications\OAuth2ClaimConditions $conditions The OAuth2ClaimConditions instance.
     * @return self
     */
    public function setConditions(\Okta\Applications\OAuth2ClaimConditions $conditions)
    {
        $this->setResourceProperty(
            self::CONDITIONS,
            $conditions
        );

        return $this;
    }

    /**
     * Get the group_filter_type.
     *
     * @return string
     */
    public function getGroupFilterType()
    {
        return $this->getProperty(self::GROUP_FILTER_TYPE);
    }

    /**
    * Set the group_filter_type.
    *
    * @param mixed $group_filter_type The value to set.
    * @return self
    */
    public function setGroupFilterType($group_filter_type)
    {
        $this->setProperty(
            self::GROUP_FILTER_TYPE,
            $group_filter_type
        );

        return $this;
    }

    /**
     * Get the alwaysIncludeInToken.
     *
     * @return bool
     */
    public function getAlwaysIncludeInToken()
    {
        return $this->getProperty(self::ALWAYS_INCLUDE_IN_TOKEN);
    }

    /**
    * Set the alwaysIncludeInToken.
    *
    * @param mixed $alwaysIncludeInToken The value to set.
    * @return self
    */
    public function setAlwaysIncludeInToken($alwaysIncludeInToken)
    {
        $this->setProperty(
            self::ALWAYS_INCLUDE_IN_TOKEN,
            $alwaysIncludeInToken
        );

        return $this;
    }
}
