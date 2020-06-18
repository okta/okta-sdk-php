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


class IdentityProviderPolicy extends \Okta\Resource\AbstractResource
{
    const SUBJECT = 'subject';
    const ACCOUNT_LINK = 'accountLink';
    const MAX_CLOCK_SKEW = 'maxClockSkew';
    const PROVISIONING = 'provisioning';



    /**
     * Get the subject.
     *
     * @return \Okta\Policies\PolicySubject
     */
    public function getSubject(array $options = []): \Okta\Policies\PolicySubject
    {
        return $this->getResourceProperty(
            self::SUBJECT,
            \Okta\Policies\PolicySubject::class,
            $options
        );
    }


    /**
     * Set the subject.
     *
     * @param \Okta\Policies\PolicySubject $subject The PolicySubject instance.
     * @return self
     */
    public function setSubject(\Okta\Policies\PolicySubject $subject)
    {
        $this->setResourceProperty(
            self::SUBJECT,
            $subject
        );

        return $this;
    }

    /**
     * Get the accountLink.
     *
     * @return \Okta\Policies\PolicyAccountLink
     */
    public function getAccountLink(array $options = []): \Okta\Policies\PolicyAccountLink
    {
        return $this->getResourceProperty(
            self::ACCOUNT_LINK,
            \Okta\Policies\PolicyAccountLink::class,
            $options
        );
    }


    /**
     * Set the accountLink.
     *
     * @param \Okta\Policies\PolicyAccountLink $accountLink The PolicyAccountLink instance.
     * @return self
     */
    public function setAccountLink(\Okta\Policies\PolicyAccountLink $accountLink)
    {
        $this->setResourceProperty(
            self::ACCOUNT_LINK,
            $accountLink
        );

        return $this;
    }

    /**
     * Get the maxClockSkew.
     *
     * @return int
     */
    public function getMaxClockSkew()
    {
        return $this->getProperty(self::MAX_CLOCK_SKEW);
    }

    /**
    * Set the maxClockSkew.
    *
    * @param mixed $maxClockSkew The value to set.
    * @return self
    */
    public function setMaxClockSkew($maxClockSkew)
    {
        $this->setProperty(
            self::MAX_CLOCK_SKEW,
            $maxClockSkew
        );

        return $this;
    }

    /**
     * Get the provisioning.
     *
     * @return \Okta\IdentityProviders\Provisioning
     */
    public function getProvisioning(array $options = []): \Okta\IdentityProviders\Provisioning
    {
        return $this->getResourceProperty(
            self::PROVISIONING,
            \Okta\IdentityProviders\Provisioning::class,
            $options
        );
    }


    /**
     * Set the provisioning.
     *
     * @param \Okta\IdentityProviders\Provisioning $provisioning The Provisioning instance.
     * @return self
     */
    public function setProvisioning(\Okta\IdentityProviders\Provisioning $provisioning)
    {
        $this->setResourceProperty(
            self::PROVISIONING,
            $provisioning
        );

        return $this;
    }
}
