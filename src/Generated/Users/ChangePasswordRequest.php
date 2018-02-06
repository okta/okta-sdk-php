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

namespace Okta\Generated\Users;


class ChangePasswordRequest extends \Okta\Resource\AbstractResource
{
    const NEW_PASSWORD = 'newPassword';
    const OLD_PASSWORD = 'oldPassword';



    /**
     * Get the newPassword.
     *
     * @return \Okta\Users\PasswordCredential
     */
    public function getNewPassword(array $options = []): \Okta\Users\PasswordCredential
    {
        return $this->getResourceProperty(
            self::NEW_PASSWORD,
            \Okta\Users\PasswordCredential::class,
            $options
        );
    }


    /**
     * Set the newPassword.
     *
     * @param \Okta\Users\PasswordCredential $newPassword The PasswordCredential instance.
     * @return self
     */
    public function setNewPassword(\Okta\Users\PasswordCredential $newPassword)
    {
        $this->setResourceProperty(
            self::NEW_PASSWORD,
            $newPassword
        );
        
        return $this;
    }

    /**
     * Get the oldPassword.
     *
     * @return \Okta\Users\PasswordCredential
     */
    public function getOldPassword(array $options = []): \Okta\Users\PasswordCredential
    {
        return $this->getResourceProperty(
            self::OLD_PASSWORD,
            \Okta\Users\PasswordCredential::class,
            $options
        );
    }


    /**
     * Set the oldPassword.
     *
     * @param \Okta\Users\PasswordCredential $oldPassword The PasswordCredential instance.
     * @return self
     */
    public function setOldPassword(\Okta\Users\PasswordCredential $oldPassword)
    {
        $this->setResourceProperty(
            self::OLD_PASSWORD,
            $oldPassword
        );
        
        return $this;
    }
}
