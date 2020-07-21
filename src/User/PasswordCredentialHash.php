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

namespace Okta\User;

class PasswordCredentialHash extends \Okta\Resource\AbstractResource
{
    const SALT = 'salt';
    const VALUE = 'value';
    const ALGORITHM = 'algorithm';
    const SALT_ORDER = 'saltOrder';
    const WORKER_FACTOR = 'workerFactor';


    /**
     * Set the Salt.
     *
     * @param mixed $salt The salt to set.
     * @return self
     */
    function setSalt($salt) : PasswordCredentialHash
    {
        $this->setProperty(
            self::SALT,
            $salt
        );
    
        return $this;
    }
    
    /**
     * Set the Value.
     *
     * @param mixed $value The value to set.
     * @return self
     */
    function setValue($value) : PasswordCredentialHash
    {
        $this->setProperty(
            self::VALUE,
            $value
        );
    
        return $this;
    }
    
    /**
     * Set the Algorithm.
     *
     * @return self
     */
    function setAlgorithm(\Okta\User\PasswordCredentialHashAlgorithm $algorithm) : PasswordCredentialHash
    {
        $this->setEnumProperty(
            self::ALGORITHM,
            $algorithm
        );
    
        return $this;
    }

    /**
     * Set the SaltOrder.
     *
     * @param mixed $saltOrder The saltOrder to set.
     * @return self
     */
    function setSaltOrder($saltOrder) : PasswordCredentialHash
    {
        $this->setProperty(
            self::SALT_ORDER,
            $saltOrder
        );
    
        return $this;
    }
    
    /**
     * Set the WorkerFactor.
     *
     * @param mixed $workerFactor The workerFactor to set.
     * @return self
     */
    function setWorkerFactor($workerFactor) : PasswordCredentialHash
    {
        $this->setProperty(
            self::WORKER_FACTOR,
            $workerFactor
        );
    
        return $this;
    }
    
    /**
     * Get the Salt.
     *
     * @param mixed $salt The salt to set.
     * @return string
     */
    function getSalt() : string
    {
        return $this->getProperty(
            self::SALT,
        );
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
     * Get the Algorithm.
     *
     * @return \Okta\User\PasswordCredentialHashAlgorithm
     */
    function getAlgorithm() : \Okta\User\PasswordCredentialHashAlgorithm
    {
        return $this->getEnumProperty(
            self::ALGORITHM,
            \Okta\User\PasswordCredentialHashAlgorithm::class,
        );
    }

    /**
     * Get the SaltOrder.
     *
     * @param mixed $saltOrder The saltOrder to set.
     * @return string
     */
    function getSaltOrder() : string
    {
        return $this->getProperty(
            self::SALT_ORDER,
        );
    }
    
    /**
     * Get the WorkerFactor.
     *
     * @param mixed $workerFactor The workerFactor to set.
     * @return int
     */
    function getWorkerFactor() : int
    {
        return $this->getProperty(
            self::WORKER_FACTOR,
        );
    }
    

}