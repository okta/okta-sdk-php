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

namespace Okta\Policy;

class IdentityProviderPolicy extends \Okta\Policy\Policy
{
    const SUBJECT = 'subject';
    const ACCOUNT_LINK = 'accountLink';
    const MAX_CLOCK_SKEW = 'maxClockSkew';
    const PROVISIONING = 'provisioning';

    /**
     * Set the Subject.
     *
     * @param mixed $subject The subject to set.
     * @return self
     */
    function setSubject(\Okta\Policy\PolicySubject $subject) : IdentityProviderPolicy
    {
        $this->setResourceProperty(
            self::SUBJECT,
            $subject
        );
    
        return $this;
    }

    /**
     * Set the AccountLink.
     *
     * @param mixed $accountLink The accountLink to set.
     * @return self
     */
    function setAccountLink(\Okta\Policy\PolicyAccountLink $accountLink) : IdentityProviderPolicy
    {
        $this->setResourceProperty(
            self::ACCOUNT_LINK,
            $accountLink
        );
    
        return $this;
    }

    /**
     * Set the MaxClockSkew.
     *
     * @param mixed $maxClockSkew The maxClockSkew to set.
     * @return self
     */
    function setMaxClockSkew($maxClockSkew) : IdentityProviderPolicy
    {
        $this->setProperty(
            self::MAX_CLOCK_SKEW,
            $maxClockSkew
        );
    
        return $this;
    }
    
    /**
     * Set the Provisioning.
     *
     * @param mixed $provisioning The provisioning to set.
     * @return self
     */
    function setProvisioning(\Okta\IdentityProvider\Provisioning $provisioning) : IdentityProviderPolicy
    {
        $this->setResourceProperty(
            self::PROVISIONING,
            $provisioning
        );
    
        return $this;
    }

    /**
     * Get the Subject.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicySubject
     */
    function getSubject(array $options = []) : \Okta\Policy\PolicySubject
    {
        return $this->getResourceProperty(
            self::SUBJECT,
            \Okta\Policy\PolicySubject::class,
            $options
        );
    }

    /**
     * Get the AccountLink.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicyAccountLink
     */
    function getAccountLink(array $options = []) : \Okta\Policy\PolicyAccountLink
    {
        return $this->getResourceProperty(
            self::ACCOUNT_LINK,
            \Okta\Policy\PolicyAccountLink::class,
            $options
        );
    }

    /**
     * Get the MaxClockSkew.
     *
     * @param mixed $maxClockSkew The maxClockSkew to set.
     * @return int
     */
    function getMaxClockSkew() : int
    {
        return $this->getProperty(
            self::MAX_CLOCK_SKEW
        );
    }
    
    /**
     * Get the Provisioning.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\Provisioning
     */
    function getProvisioning(array $options = []) : \Okta\IdentityProvider\Provisioning
    {
        return $this->getResourceProperty(
            self::PROVISIONING,
            \Okta\IdentityProvider\Provisioning::class,
            $options
        );
    }


}