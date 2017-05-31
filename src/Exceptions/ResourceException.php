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

use Throwable;

class ResourceException extends GeneralException
{
    private $error;

    public function __construct(Error $error, Throwable $previous = null)
    {
        $this->error = $error;
        $message = $error->getErrorSummary() ?: '';
        parent::__construct($message, $error->getHttpStatus(), $previous);
    }

    public function getHttpStatus()
    {
        return $this->error ? $this->error->getHttpStatus() : null;
    }

    public function getErrorCode()
    {
        return $this->error ? $this->error->getErrorCode() : null;
    }

    public function getErrorLink()
    {
        return $this->error ? $this->error->getErrorLink() : null;
    }

    public function getErrorId()
    {
        return $this->error ? $this->error->getErrorId() : null;
    }

    public function getErrorCauses()
    {
        return $this->error ? $this->error->getErrorCauses() : null;
    }

    public function getErrorSummary()
    {
        return $this->error ? $this->error->getErrorSummary() : null;
    }
}
