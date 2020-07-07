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

namespace Okta\Application;

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
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : OAuth2Claim
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Value.
     *
     * @param mixed $value The value to set.
     * @return self
     */
    function setValue($value) : OAuth2Claim
    {
        $this->setProperty(
            self::VALUE,
            $value
        );
    
        return $this;
    }
    
    /**
     * Set the Status.
     *
     * @param mixed $status The status to set.
     * @return self
     */
    function setStatus($status) : OAuth2Claim
    {
        $this->setProperty(
            self::STATUS,
            $status
        );
    
        return $this;
    }
    
    /**
     * Set the System.
     *
     * @param mixed $system The system to set.
     * @return self
     */
    function setSystem($system) : OAuth2Claim
    {
        $this->setProperty(
            self::SYSTEM,
            $system
        );
    
        return $this;
    }
    
    /**
     * Set the ClaimType.
     *
     * @param mixed $claimType The claimType to set.
     * @return self
     */
    function setClaimType($claimType) : OAuth2Claim
    {
        $this->setProperty(
            self::CLAIM_TYPE,
            $claimType
        );
    
        return $this;
    }
    
    /**
     * Set the ValueType.
     *
     * @param mixed $valueType The valueType to set.
     * @return self
     */
    function setValueType($valueType) : OAuth2Claim
    {
        $this->setProperty(
            self::VALUE_TYPE,
            $valueType
        );
    
        return $this;
    }
    
    /**
     * Set the Conditions.
     *
     * @param mixed $conditions The conditions to set.
     * @return self
     */
    function setConditions(\Okta\Application\OAuth2ClaimConditions $conditions) : OAuth2Claim
    {
        $this->setResourceProperty(
            self::CONDITIONS,
            $conditions
        );
    
        return $this;
    }

    /**
     * Set the GroupFilterType.
     *
     * @param mixed $group_filter_type The group_filter_type to set.
     * @return self
     */
    function setGroupFilterType($group_filter_type) : OAuth2Claim
    {
        $this->setProperty(
            self::GROUP_FILTER_TYPE,
            $group_filter_type
        );
    
        return $this;
    }
    
    /**
     * Set the AlwaysIncludeInToken.
     *
     * @param mixed $alwaysIncludeInToken The alwaysIncludeInToken to set.
     * @return self
     */
    function setAlwaysIncludeInToken($alwaysIncludeInToken) : OAuth2Claim
    {
        $this->setProperty(
            self::ALWAYS_INCLUDE_IN_TOKEN,
            $alwaysIncludeInToken
        );
    
        return $this;
    }
    
    /**
     * Get the Id.
     *
     * @param mixed $id The id to set.
     * @return string
     */
    function getId() : string
    {
        return $this->getProperty(
            self::ID,
        );
    }
    
    /**
     * Get the Name.
     *
     * @param mixed $name The name to set.
     * @return string
     */
    function getName() : string
    {
        return $this->getProperty(
            self::NAME,
        );
    }
    
    /**
     * Get the Value.
     *
     * @param mixed $value The value to set.
     * @return string
     */
    function getValue() : string
    {
        return $this->getProperty(
            self::VALUE,
        );
    }
    
    /**
     * Get the Links.
     *
     * @param mixed $_links The _links to set.
     * @return \stdClass
     */
    function getLinks() : \stdClass
    {
        return $this->getProperty(
            self::LINKS,
        );
    }
    
    /**
     * Get the Status.
     *
     * @param mixed $status The status to set.
     * @return string
     */
    function getStatus() : string
    {
        return $this->getProperty(
            self::STATUS,
        );
    }
    
    /**
     * Get the System.
     *
     * @param mixed $system The system to set.
     * @return bool
     */
    function getSystem() : bool
    {
        return $this->getProperty(
            self::SYSTEM,
        );
    }
    
    /**
     * Get the ClaimType.
     *
     * @param mixed $claimType The claimType to set.
     * @return string
     */
    function getClaimType() : string
    {
        return $this->getProperty(
            self::CLAIM_TYPE,
        );
    }
    
    /**
     * Get the ValueType.
     *
     * @param mixed $valueType The valueType to set.
     * @return string
     */
    function getValueType() : string
    {
        return $this->getProperty(
            self::VALUE_TYPE,
        );
    }
    
    /**
     * Get the Conditions.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\OAuth2ClaimConditions
     */
    function getConditions(array $options = []) : \Okta\Application\OAuth2ClaimConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\Application\OAuth2ClaimConditions::class,
            $options
        );
    }

    /**
     * Get the GroupFilterType.
     *
     * @param mixed $group_filter_type The group_filter_type to set.
     * @return string
     */
    function getGroupFilterType() : string
    {
        return $this->getProperty(
            self::GROUP_FILTER_TYPE,
        );
    }
    
    /**
     * Get the AlwaysIncludeInToken.
     *
     * @param mixed $alwaysIncludeInToken The alwaysIncludeInToken to set.
     * @return bool
     */
    function getAlwaysIncludeInToken() : bool
    {
        return $this->getProperty(
            self::ALWAYS_INCLUDE_IN_TOKEN,
        );
    }
    

}