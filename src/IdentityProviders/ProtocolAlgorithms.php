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


class ProtocolAlgorithms extends \Okta\Resource\AbstractResource
{
    const REQUEST = 'request';
    const RESPONSE = 'response';



    /**
     * Get the request.
     *
     * @return \Okta\IdentityProviders\ProtocolAlgorithmType
     */
    public function getRequest(array $options = []): \Okta\IdentityProviders\ProtocolAlgorithmType
    {
        return $this->getResourceProperty(
            self::REQUEST,
            \Okta\IdentityProviders\ProtocolAlgorithmType::class,
            $options
        );
    }


    /**
     * Set the request.
     *
     * @param \Okta\IdentityProviders\ProtocolAlgorithmType $request The ProtocolAlgorithmType instance.
     * @return self
     */
    public function setRequest(\Okta\IdentityProviders\ProtocolAlgorithmType $request)
    {
        $this->setResourceProperty(
            self::REQUEST,
            $request
        );

        return $this;
    }

    /**
     * Get the response.
     *
     * @return \Okta\IdentityProviders\ProtocolAlgorithmType
     */
    public function getResponse(array $options = []): \Okta\IdentityProviders\ProtocolAlgorithmType
    {
        return $this->getResourceProperty(
            self::RESPONSE,
            \Okta\IdentityProviders\ProtocolAlgorithmType::class,
            $options
        );
    }


    /**
     * Set the response.
     *
     * @param \Okta\IdentityProviders\ProtocolAlgorithmType $response The ProtocolAlgorithmType instance.
     * @return self
     */
    public function setResponse(\Okta\IdentityProviders\ProtocolAlgorithmType $response)
    {
        $this->setResourceProperty(
            self::RESPONSE,
            $response
        );

        return $this;
    }
}
