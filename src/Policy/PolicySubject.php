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

class PolicySubject extends \Okta\Resource\AbstractResource
{
    const FILTER = 'filter';
    const FORMAT = 'format';
    const MATCH_TYPE = 'matchType';
    const MATCH_ATTRIBUTE = 'matchAttribute';
    const USER_NAME_TEMPLATE = 'userNameTemplate';


    /**
     * Set the Filter.
     *
     * @param mixed $filter The filter to set.
     * @return self
     */
    function setFilter($filter) : PolicySubject
    {
        $this->setProperty(
            self::FILTER,
            $filter
        );
    
        return $this;
    }
    
    /**
     * Set the Format.
     *
     * @param mixed $format The format to set.
     * @return self
     */
    function setFormat($format) : PolicySubject
    {
        $this->setProperty(
            self::FORMAT,
            $format
        );
    
        return $this;
    }
    
    /**
     * Set the MatchType.
     *
     * @param mixed $matchType The matchType to set.
     * @return self
     */
    function setMatchType($matchType) : PolicySubject
    {
        $this->setProperty(
            self::MATCH_TYPE,
            $matchType
        );
    
        return $this;
    }
    
    /**
     * Set the MatchAttribute.
     *
     * @param mixed $matchAttribute The matchAttribute to set.
     * @return self
     */
    function setMatchAttribute($matchAttribute) : PolicySubject
    {
        $this->setProperty(
            self::MATCH_ATTRIBUTE,
            $matchAttribute
        );
    
        return $this;
    }
    
    /**
     * Set the UserNameTemplate.
     *
     * @param mixed $userNameTemplate The userNameTemplate to set.
     * @return self
     */
    function setUserNameTemplate(\Okta\Policy\PolicyUserNameTemplate $userNameTemplate) : PolicySubject
    {
        $this->setResourceProperty(
            self::USER_NAME_TEMPLATE,
            $userNameTemplate
        );
    
        return $this;
    }

    /**
     * Get the Filter.
     *
     * @param mixed $filter The filter to set.
     * @return string
     */
    function getFilter() : string
    {
        return $this->getProperty(
            self::FILTER,
        );
    }
    
    /**
     * Get the Format.
     *
     * @param mixed $format The format to set.
     * @return array
     */
    function getFormat() : array
    {
        return $this->getProperty(
            self::FORMAT,
        );
    }
    
    /**
     * Get the MatchType.
     *
     * @return \Okta\Policy\PolicySubjectMatchType
     */
    function getMatchType() : \Okta\Policy\PolicySubjectMatchType
    {
        return $this->getEnumProperty(
            self::MATCH_TYPE,
            \Okta\Policy\PolicySubjectMatchType::class,
        );
    }

    /**
     * Get the MatchAttribute.
     *
     * @param mixed $matchAttribute The matchAttribute to set.
     * @return string
     */
    function getMatchAttribute() : string
    {
        return $this->getProperty(
            self::MATCH_ATTRIBUTE,
        );
    }
    
    /**
     * Get the UserNameTemplate.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicyUserNameTemplate
     */
    function getUserNameTemplate(array $options = []) : \Okta\Policy\PolicyUserNameTemplate
    {
        return $this->getResourceProperty(
            self::USER_NAME_TEMPLATE,
            \Okta\Policy\PolicyUserNameTemplate::class,
            $options
        );
    }


}