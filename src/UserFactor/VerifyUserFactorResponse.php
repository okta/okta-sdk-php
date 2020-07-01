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

namespace Okta\UserFactor;

class VerifyUserFactorResponse extends \Okta\Resource\AbstractResource
{
    const LINKS = '_links';
    const EMBEDDED = '_embedded';
    const EXPIRES_AT = 'expiresAt';
    const FACTOR_RESULT = 'factorResult';
    const FACTOR_RESULT_MESSAGE = 'factorResultMessage';

    /**
     * Set the FactorResult.
     *
     * @param mixed $factorResult The factorResult to set.
     * @return self
     */
    function setFactorResult($factorResult) : VerifyUserFactorResponse
    {
        $this->setProperty(
            self::FACTOR_RESULT,
            $factorResult
        );
    
        return $this;
    }
    
    /**
     * Set the FactorResultMessage.
     *
     * @param mixed $factorResultMessage The factorResultMessage to set.
     * @return self
     */
    function setFactorResultMessage($factorResultMessage) : VerifyUserFactorResponse
    {
        $this->setProperty(
            self::FACTOR_RESULT_MESSAGE,
            $factorResultMessage
        );
    
        return $this;
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
            self::LINKS
        );
    }
    
    /**
     * Get the Embedded.
     *
     * @param mixed $_embedded The _embedded to set.
     * @return \stdClass
     */
    function getEmbedded() : \stdClass
    {
        return $this->getProperty(
            self::EMBEDDED
        );
    }
    
    /**
     * Get the ExpiresAt.
     *
     * @param mixed $expiresAt The expiresAt to set.
     * @return \Carbon\Carbon
     */
    function getExpiresAt() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::EXPIRES_AT
        );
    
        return $this;
    }

    /**
     * Get the FactorResult.
     *
     * @param mixed $factorResult The factorResult to set.
     * @return string
     */
    function getFactorResult() : string
    {
        return $this->getProperty(
            self::FACTOR_RESULT
        );
    }
    
    /**
     * Get the FactorResultMessage.
     *
     * @param mixed $factorResultMessage The factorResultMessage to set.
     * @return string
     */
    function getFactorResultMessage() : string
    {
        return $this->getProperty(
            self::FACTOR_RESULT_MESSAGE
        );
    }
    

}