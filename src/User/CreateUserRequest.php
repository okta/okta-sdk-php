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

class CreateUserRequest extends \Okta\Resource\AbstractResource
{
    const TYPE = 'type';
    const PROFILE = 'profile';
    const GROUP_IDS = 'groupIds';
    const CREDENTIALS = 'credentials';


    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType(\Okta\UserType\UserType $type) : CreateUserRequest
    {
        $this->setResourceProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }

    /**
     * Set the Profile.
     *
     * @param mixed $profile The profile to set.
     * @return self
     */
    function setProfile(\Okta\User\UserProfile $profile) : CreateUserRequest
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
        );
    
        return $this;
    }

    /**
     * Set the GroupIds.
     *
     * @param mixed $groupIds The groupIds to set.
     * @return self
     */
    function setGroupIds($groupIds) : CreateUserRequest
    {
        $this->setProperty(
            self::GROUP_IDS,
            $groupIds
        );
    
        return $this;
    }
    
    /**
     * Set the Credentials.
     *
     * @param mixed $credentials The credentials to set.
     * @return self
     */
    function setCredentials(\Okta\User\UserCredentials $credentials) : CreateUserRequest
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );
    
        return $this;
    }

    /**
     * Get the Type.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\UserType\UserType
     */
    function getType(array $options = []) : \Okta\UserType\UserType
    {
        return $this->getResourceProperty(
            self::TYPE,
            \Okta\UserType\UserType::class,
            $options
        );
    }

    /**
     * Get the Profile.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\UserProfile
     */
    function getProfile(array $options = []) : \Okta\User\UserProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\User\UserProfile::class,
            $options
        );
    }

    /**
     * Get the GroupIds.
     *
     * @param mixed $groupIds The groupIds to set.
     * @return array
     */
    function getGroupIds() : array
    {
        return $this->getProperty(
            self::GROUP_IDS,
        );
    }
    
    /**
     * Get the Credentials.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\UserCredentials
     */
    function getCredentials(array $options = []) : \Okta\User\UserCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\User\UserCredentials::class,
            $options
        );
    }


}