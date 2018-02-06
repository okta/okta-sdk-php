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


class TokenFactorProfile extends \Okta\UserFactors\FactorProfile
{
    const CREDENTIAL_ID = 'credentialId';



    /**
     * Get the credentialId.
     *
     * @return string
     */
    public function getCredentialId()
    {
        return $this->getProperty(self::CREDENTIAL_ID);
    }

    /**
    * Set the credentialId.
    *
    * @param mixed $credentialId The value to set.
    * @return self
    */
    public function setCredentialId($credentialId)
    {
        $this->setProperty(
            self::CREDENTIAL_ID,
            $credentialId
        );

        return $this;
    }
}
