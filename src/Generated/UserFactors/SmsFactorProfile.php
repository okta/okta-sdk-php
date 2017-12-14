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


class SmsFactorProfile extends \Okta\UserFactors\FactorProfile
{
    const PHONE_NUMBER = 'phoneNumber';



    /**
     * Get the phoneNumber.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->getProperty(self::PHONE_NUMBER);
    }

    /**
    * Set the phoneNumber.
    *
    * @param mixed $phoneNumber The value to set.
    * @return self
    */
    public function setPhoneNumber($phoneNumber)
    {
        $this->setProperty(
            self::PHONE_NUMBER,
            $phoneNumber
        );

        return $this;
    }
}
