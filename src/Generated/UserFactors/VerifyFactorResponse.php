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

namespace Okta\Generated\UserFactors;


class VerifyFactorResponse extends \Okta\Resource\AbstractResource
{
    const LINKS = '_links';
    const EMBEDDED = '_embedded';
    const EXPIRES_AT = 'expiresAt';
    const FACTOR_RESULT = 'factorResult';
    const FACTOR_RESULT_MESSAGE = 'factorResultMessage';



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
     * Get the _embedded.
     *
     * @return \stdClass
     */
    public function getEmbedded()
    {
        return $this->getProperty(self::EMBEDDED);
    }

    /**
     * Get the expiresAt.
     *
     * @return \Carbon\Carbon|null
     */
    public function getExpiresAt()
    {
        return $this->getDateProperty(self::EXPIRES_AT);
    }

    /**
     * Get the factorResult.
     *
     * @return string
     */
    public function getFactorResult()
    {
        return $this->getProperty(self::FACTOR_RESULT);
    }

    /**
     * Get the factorResultMessage.
     *
     * @return string
     */
    public function getFactorResultMessage()
    {
        return $this->getProperty(self::FACTOR_RESULT_MESSAGE);
    }
}
