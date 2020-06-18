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

namespace Okta\Policies;

class InactivityPolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const UNIT = 'unit';
    const NUMBER = 'number';



    /**
     * Get the unit.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->getProperty(self::UNIT);
    }

    /**
    * Set the unit.
    *
    * @param mixed $unit The value to set.
    * @return self
    */
    public function setUnit($unit)
    {
        $this->setProperty(
            self::UNIT,
            $unit
        );

        return $this;
    }

    /**
     * Get the number.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->getProperty(self::NUMBER);
    }

    /**
    * Set the number.
    *
    * @param mixed $number The value to set.
    * @return self
    */
    public function setNumber($number)
    {
        $this->setProperty(
            self::NUMBER,
            $number
        );

        return $this;
    }
}
