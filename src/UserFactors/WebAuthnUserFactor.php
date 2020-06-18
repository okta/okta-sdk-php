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

namespace Okta\UserFactors;


class WebAuthnUserFactor extends \Okta\Resource\AbstractResource
{
    const PROFILE = 'profile';



    /**
     * Get the profile.
     *
     * @return \Okta\UserFactors\WebAuthnUserFactorProfile
     */
    public function getProfile(array $options = []): \Okta\UserFactors\WebAuthnUserFactorProfile
    {
        return $this->getResourceProperty(
            self::PROFILE,
            \Okta\UserFactors\WebAuthnUserFactorProfile::class,
            $options
        );
    }


    /**
     * Set the profile.
     *
     * @param \Okta\UserFactors\WebAuthnUserFactorProfile $profile The WebAuthnUserFactorProfile instance.
     * @return self
     */
    public function setProfile(\Okta\UserFactors\WebAuthnUserFactorProfile $profile)
    {
        $this->setResourceProperty(
            self::PROFILE,
            $profile
        );

        return $this;
    }
}
