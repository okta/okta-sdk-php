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

namespace Okta\Users;


class PasswordCredentialHash extends \Okta\Resource\AbstractResource
{
    const SALT = 'salt';
    const VALUE = 'value';
    const ALGORITHM = 'algorithm';
    const SALT_ORDER = 'saltOrder';
    const WORKER_FACTOR = 'workerFactor';



    /**
     * Get the salt.
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->getProperty(self::SALT);
    }

    /**
    * Set the salt.
    *
    * @param mixed $salt The value to set.
    * @return self
    */
    public function setSalt($salt)
    {
        $this->setProperty(
            self::SALT,
            $salt
        );

        return $this;
    }

    /**
     * Get the value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->getProperty(self::VALUE);
    }

    /**
    * Set the value.
    *
    * @param mixed $value The value to set.
    * @return self
    */
    public function setValue($value)
    {
        $this->setProperty(
            self::VALUE,
            $value
        );

        return $this;
    }

    /**
     * Get the algorithm.
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->getProperty(self::ALGORITHM);
    }

    /**
    * Set the algorithm.
    *
    * @param mixed $algorithm The value to set.
    * @return self
    */
    public function setAlgorithm($algorithm)
    {
        $this->setProperty(
            self::ALGORITHM,
            $algorithm
        );

        return $this;
    }

    /**
     * Get the saltOrder.
     *
     * @return string
     */
    public function getSaltOrder()
    {
        return $this->getProperty(self::SALT_ORDER);
    }

    /**
    * Set the saltOrder.
    *
    * @param mixed $saltOrder The value to set.
    * @return self
    */
    public function setSaltOrder($saltOrder)
    {
        $this->setProperty(
            self::SALT_ORDER,
            $saltOrder
        );

        return $this;
    }

    /**
     * Get the workerFactor.
     *
     * @return int
     */
    public function getWorkerFactor()
    {
        return $this->getProperty(self::WORKER_FACTOR);
    }

    /**
    * Set the workerFactor.
    *
    * @param mixed $workerFactor The value to set.
    * @return self
    */
    public function setWorkerFactor($workerFactor)
    {
        $this->setProperty(
            self::WORKER_FACTOR,
            $workerFactor
        );

        return $this;
    }
}
