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

class UserIdentifierConditionEvaluatorPattern extends \Okta\Resource\AbstractResource
{
    const VALUE = 'value';
    const MATCH_TYPE = 'matchType';


    /**
     * Set the Value.
     *
     * @param mixed $value The value to set.
     * @return self
     */
    function setValue($value) : UserIdentifierConditionEvaluatorPattern
    {
        $this->setProperty(
            self::VALUE,
            $value
        );
    
        return $this;
    }
    
    /**
     * Set the MatchType.
     *
     * @param mixed $matchType The matchType to set.
     * @return self
     */
    function setMatchType($matchType) : UserIdentifierConditionEvaluatorPattern
    {
        $this->setProperty(
            self::MATCH_TYPE,
            $matchType
        );
    
        return $this;
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
     * Get the MatchType.
     *
     * @param mixed $matchType The matchType to set.
     * @return string
     */
    function getMatchType() : string
    {
        return $this->getProperty(
            self::MATCH_TYPE,
        );
    }
    

}