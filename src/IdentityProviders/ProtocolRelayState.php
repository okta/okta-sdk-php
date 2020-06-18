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

namespace Okta\IdentityProviders;

class ProtocolRelayState extends \Okta\Resource\AbstractResource
{
    const FORMAT = 'format';



    /**
     * Get the format.
     *
     * @return string
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
}
