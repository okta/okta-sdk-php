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

use Okta\Resource\AbstractResource;

class VerifyFactorResponse extends AbstractResource
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
    public function getLinks(): \stdClass
    {
        return $this->getProperty(self::LINKS);
    }
    /**
     * Get the _embedded.
     *
     * @return \stdClass
     */
    public function getEmbedded(): \stdClass
    {
        return $this->getProperty(self::EMBEDDED);
    }
    /**
     * Get the expiresAt.
     *
     * @return string
     */
    public function getExpiresAt(): string
    {
        return $this->getProperty(self::EXPIRES_AT);
    }
    /**
     * Get the factorResult.
     *
     * @return string
     */
    public function getFactorResult(): string
    {
        return $this->getProperty(self::FACTOR_RESULT);
    }
    /**
     * Get the factorResultMessage.
     *
     * @return string
     */
    public function getFactorResultMessage(): string
    {
        return $this->getProperty(self::FACTOR_RESULT_MESSAGE);
    }
}
