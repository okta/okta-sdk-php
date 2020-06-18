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

class ProtocolAlgorithmTypeSignature extends \Okta\Resource\AbstractResource
{
    const SCOPE = 'scope';
    const ALGORITHM = 'algorithm';



    /**
     * Get the scope.
     *
     * @return string
     */
    public function getScope()
    {
        return $this->getProperty(self::SCOPE);
    }

    /**
    * Set the scope.
    *
    * @param mixed $scope The value to set.
    * @return self
    */
    public function setScope($scope)
    {
        $this->setProperty(
            self::SCOPE,
            $scope
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
}
