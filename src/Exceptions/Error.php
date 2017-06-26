<?php
/******************************************************************************
 * Copyright 2017 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

namespace Okta\Exceptions;

use Okta\Resource\AbstractResource;

class Error extends AbstractResource
{

    const ERROR_CODE = 'errorCode';
    const ERROR_SUMMARY = 'errorSummary';
    const ERROR_LINK = 'errorLink';
    const ERROR_ID = 'errorId';
    const ERROR_CAUSES = 'errorCauses';
    const HTTP_STATUS = 'httpStatus';

    public function __construct(\stdClass $properties)
    {
        parent::__construct(null, $properties);
    }

    /**
     * Gets the errorCode property.
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->getProperty(self::ERROR_CODE);
    }

    /**
     * Gets the errorSummary property.
     *
     * @return string
     */
    public function getErrorSummary()
    {
        return $this->getProperty(self::ERROR_SUMMARY);
    }

    /**
     * Gets the errorLink property.
     *
     * @return string
     */
    public function getErrorLink()
    {
        return $this->getProperty(self::ERROR_LINK);
    }

    /**
     * Gets the errorId property.
     *
     * @return string
     */
    public function getErrorId()
    {
        return $this->getProperty(self::ERROR_ID);
    }

    /**
     * Gets the errorCauses property.
     *
     * @return array
     */
    public function getErrorCauses()
    {
        return $this->getProperty(self::ERROR_CAUSES);
    }

    /**
     * Gets the httpStatusCode property.
     *
     * @return int
     */
    public function getHttpStatus()
    {
        return $this->getProperty(self::HTTP_STATUS);
    }
}
