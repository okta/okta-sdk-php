<?php
/*******************************************************************************
 * Copyright 2017-Present Okta, Inc.
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

class IdentityProviderPolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const IDP_IDS = 'idpIds';
    const PROVIDER = 'provider';


    /**
     * Get the idpIds.
     *
     * @return array
     */
    public function getIdpIds()
    {
        return $this->getProperty(self::IDP_IDS);
    }

    /**
    * Set the idpIds.
    *
    * @param mixed $idpIds The value to set.
    * @return self
    */
    public function setIdpIds($idpIds)
    {
        $this->setProperty(
            self::IDP_IDS,
            $idpIds
        );

        return $this;
    }

    /**
     * Get the provider.
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->getProperty(self::PROVIDER);
    }

    /**
    * Set the provider.
    *
    * @param mixed $provider The value to set.
    * @return self
    */
    public function setProvider($provider)
    {
        $this->setProperty(
            self::PROVIDER,
            $provider
        );

        return $this;
    }
}
