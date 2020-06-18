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

namespace Okta\Users;

class CreateUserRequest extends \Okta\Resource\AbstractResource
{
    const TYPE = 'type';
    const PROFILE = 'profile';
    const GROUP_IDS = 'groupIds';
    const CREDENTIALS = 'credentials';



    /**
     * Get the type.
     *
     * @return \Okta\UserTypes\UserType
     */
    public function getType(array $options = []): \Okta\UserTypes\UserType
    {
        return $this->getResourceProperty(
            self::TYPE,
            \Okta\UserTypes\UserType::class,
            $options
        );
    }


    /**
     * Set the type.
     *
     * @param \Okta\UserTypes\UserType $type The UserType instance.
     * @return self
     */
    public function setType(\Okta\UserTypes\UserType $type)
    {
        $this->setResourceProperty(
            self::TYPE,
            $type
        );

        return $this;
    }

    /**
     * Get the profile.
     *
     * @return \Okta\Users\UserProfile
     */
    public function getProfile(array $options = []): \Okta\Users\UserProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\Users\UserProfile::class,
            $options
        );
    }


    /**
     * Set the profile.
     *
     * @param \Okta\Users\UserProfile $profile The UserProfile instance.
     * @return self
     */
    public function setProfile(\Okta\Users\UserProfile $profile)
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
        );

        return $this;
    }

    /**
     * Get the groupIds.
     *
     * @return array
     */
    public function getGroupIds()
    {
        return $this->getProperty(self::GROUP_IDS);
    }

    /**
    * Set the groupIds.
    *
    * @param mixed $groupIds The value to set.
    * @return self
    */
    public function setGroupIds($groupIds)
    {
        $this->setProperty(
            self::GROUP_IDS,
            $groupIds
        );

        return $this;
    }

    /**
     * Get the credentials.
     *
     * @return \Okta\Users\UserCredentials
     */
    public function getCredentials(array $options = []): \Okta\Users\UserCredentials
    {
        return $this->getResourceProperty(
            self::CREDENTIALS,
            \Okta\Users\UserCredentials::class,
            $options
        );
    }


    /**
     * Set the credentials.
     *
     * @param \Okta\Users\UserCredentials $credentials The UserCredentials instance.
     * @return self
     */
    public function setCredentials(\Okta\Users\UserCredentials $credentials)
    {
        $this->setResourceProperty(
            self::CREDENTIALS,
            $credentials
        );

        return $this;
    }
}
