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

class ProtocolAlgorithms extends \Okta\Resource\AbstractResource
{
    const REQUEST = 'request';
    const RESPONSE = 'response';

    /**
     * Set the Request.
     *
     * @param mixed $request The request to set.
     * @return self
     */
    function setRequest(\Okta\IdentityProvider\ProtocolAlgorithmType $request) : ProtocolAlgorithms
    {
        $this->setResourceProperty(
            self::REQUEST,
            $request
        );
    
        return $this;
    }

    /**
     * Set the Response.
     *
     * @param mixed $response The response to set.
     * @return self
     */
    function setResponse(\Okta\IdentityProvider\ProtocolAlgorithmType $response) : ProtocolAlgorithms
    {
        $this->setResourceProperty(
            self::RESPONSE,
            $response
        );
    
        return $this;
    }

    /**
     * Get the Request.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolAlgorithmType
     */
    function getRequest(array $options = []) : \Okta\IdentityProvider\ProtocolAlgorithmType
    {
        return $this->getResourceProperty(
            self::REQUEST,
            \Okta\IdentityProvider\ProtocolAlgorithmType::class,
            $options
        );
    }

    /**
     * Get the Response.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\ProtocolAlgorithmType
     */
    function getResponse(array $options = []) : \Okta\IdentityProvider\ProtocolAlgorithmType
    {
        return $this->getResourceProperty(
            self::RESPONSE,
            \Okta\IdentityProvider\ProtocolAlgorithmType::class,
            $options
        );
    }


}