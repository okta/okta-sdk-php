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


class UserIdentityProviderLinkRequest extends \Okta\Resource\AbstractResource
{
    const EXTERNAL_ID = 'externalId';



    /**
     * Get the externalId.
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->getProperty(self::EXTERNAL_ID);
    }

    /**
    * Set the externalId.
    *
    * @param mixed $externalId The value to set.
    * @return self
    */
    public function setExternalId($externalId)
    {
        $this->setProperty(
            self::EXTERNAL_ID,
            $externalId
        );

        return $this;
    }
}
