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

class PasswordPolicyRuleAction extends \Okta\Resource\AbstractResource
{
    const ACCESS = 'access';


    /**
     * Get the access.
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->getProperty(self::ACCESS);
    }

    /**
    * Set the access.
    *
    * @param mixed $access The value to set.
    * @return self
    */
    public function setAccess($access)
    {
        $this->setProperty(
            self::ACCESS,
            $access
        );

        return $this;
    }
}
