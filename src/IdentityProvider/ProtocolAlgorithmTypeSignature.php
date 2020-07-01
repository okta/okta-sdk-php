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

namespace Okta\IdentityProvider;

class ProtocolAlgorithmTypeSignature extends \Okta\Resource\AbstractResource
{
    const SCOPE = 'scope';
    const ALGORITHM = 'algorithm';

    /**
     * Set the Scope.
     *
     * @param mixed $scope The scope to set.
     * @return self
     */
    function setScope($scope) : ProtocolAlgorithmTypeSignature
    {
        $this->setProperty(
            self::SCOPE,
            $scope
        );
    
        return $this;
    }
    
    /**
     * Set the Algorithm.
     *
     * @param mixed $algorithm The algorithm to set.
     * @return self
     */
    function setAlgorithm($algorithm) : ProtocolAlgorithmTypeSignature
    {
        $this->setProperty(
            self::ALGORITHM,
            $algorithm
        );
    
        return $this;
    }
    
    /**
     * Get the Scope.
     *
     * @param mixed $scope The scope to set.
     * @return string
     */
    function getScope() : string
    {
        return $this->getProperty(
            self::SCOPE
        );
    }
    
    /**
     * Get the Algorithm.
     *
     * @param mixed $algorithm The algorithm to set.
     * @return string
     */
    function getAlgorithm() : string
    {
        return $this->getProperty(
            self::ALGORITHM
        );
    }
    

}