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

namespace Okta\User;

class ChangePasswordRequest extends \Okta\Resource\AbstractResource
{
    const NEW_PASSWORD = 'newPassword';
    const OLD_PASSWORD = 'oldPassword';


    /**
     * Set the NewPassword.
     *
     * @param mixed $newPassword The newPassword to set.
     * @return self
     */
    function setNewPassword(\Okta\User\PasswordCredential $newPassword) : ChangePasswordRequest
    {
        $this->setResourceProperty(
            self::NEW_PASSWORD,
            $newPassword
        );
    
        return $this;
    }

    /**
     * Set the OldPassword.
     *
     * @param mixed $oldPassword The oldPassword to set.
     * @return self
     */
    function setOldPassword(\Okta\User\PasswordCredential $oldPassword) : ChangePasswordRequest
    {
        $this->setResourceProperty(
            self::OLD_PASSWORD,
            $oldPassword
        );
    
        return $this;
    }

    /**
     * Get the NewPassword.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\PasswordCredential
     */
    function getNewPassword(array $options = []) : \Okta\User\PasswordCredential
    {
        return $this->getResourceProperty(
            self::NEW_PASSWORD,
            \Okta\User\PasswordCredential::class,
            $options
        );
    }

    /**
     * Get the OldPassword.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\PasswordCredential
     */
    function getOldPassword(array $options = []) : \Okta\User\PasswordCredential
    {
        return $this->getResourceProperty(
            self::OLD_PASSWORD,
            \Okta\User\PasswordCredential::class,
            $options
        );
    }


}