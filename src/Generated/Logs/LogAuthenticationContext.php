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

namespace Okta\Generated\Logs;


class LogAuthenticationContext extends \Okta\Resource\AbstractResource
{
    const ISSUER = 'issuer';
    const INTERFACE = 'interface';
    const CREDENTIAL_TYPE = 'credentialType';
    const EXTERNAL_SESSION_ID = 'externalSessionId';
    const AUTHENTICATION_STEP = 'authenticationStep';
    const CREDENTIAL_PROVIDER = 'credentialProvider';
    const AUTHENTICATION_PROVIDER = 'authenticationProvider';



    /**
     * Get the issuer.
     *
     * @return \Okta\Logs\LogIssuer
     */
    public function getIssuer(array $options = []): \Okta\Logs\LogIssuer
    {
        return $this->getResourceProperty(
            self::ISSUER,
            \Okta\Logs\LogIssuer::class,
            $options
        );
    }


    /**
     * Get the interface.
     *
     * @return string
     */
    public function getInterface()
    {
        return $this->getProperty(self::INTERFACE);
    }

    /**
     * Get the credentialType.
     *
     * @return array
     */
    public function getCredentialType()
    {
        return $this->getProperty(self::CREDENTIAL_TYPE);
    }

    /**
     * Get the externalSessionId.
     *
     * @return string
     */
    public function getExternalSessionId()
    {
        return $this->getProperty(self::EXTERNAL_SESSION_ID);
    }

    /**
     * Get the authenticationStep.
     *
     * @return int
     */
    public function getAuthenticationStep()
    {
        return $this->getProperty(self::AUTHENTICATION_STEP);
    }

    /**
     * Get the credentialProvider.
     *
     * @return array
     */
    public function getCredentialProvider()
    {
        return $this->getProperty(self::CREDENTIAL_PROVIDER);
    }

    /**
     * Get the authenticationProvider.
     *
     * @return string
     */
    public function getAuthenticationProvider()
    {
        return $this->getProperty(self::AUTHENTICATION_PROVIDER);
    }
}
