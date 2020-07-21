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
     * Set the Conditions.
     *
     * @param mixed $conditions The conditions to set.
     * @return self
     */
    function setConditions(\Okta\Policy\PolicyRuleConditions $conditions) : IdentityProviderPolicy
    {
        $this->setResourceProperty(
            self::CONDITIONS,
            $conditions
        );
    
        return $this;
    }

    /**
     * Set the Description.
     *
     * @param mixed $description The description to set.
     * @return self
     */
    function setDescription($description) : IdentityProviderPolicy
    {
        $this->setProperty(
            self::DESCRIPTION,
            $description
        );
    
        return $this;
    }
    
    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : IdentityProviderPolicy
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Priority.
     *
     * @param mixed $priority The priority to set.
     * @return self
     */
    function setPriority($priority) : IdentityProviderPolicy
    {
        $this->setProperty(
            self::PRIORITY,
            $priority
        );
    
        return $this;
    }
    
    /**
     * Set the Status.
     *
     * @param mixed $status The status to set.
     * @return self
     */
    function setStatus($status) : IdentityProviderPolicy
    {
        $this->setProperty(
            self::STATUS,
            $status
        );
    
        return $this;
    }
    
    /**
     * Set the System.
     *
     * @param mixed $system The system to set.
     * @return self
     */
    function setSystem($system) : IdentityProviderPolicy
    {
        $this->setProperty(
            self::SYSTEM,
            $system
        );
    
        return $this;
    }
    
    /**
     * Set the Type.
     *
     * @return self
     */
    function setType(\Okta\Policy\PolicyType $type) : IdentityProviderPolicy
    {
        $this->setEnumProperty(
            self::TYPE,
            $type
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
            self::MAX_CLOCK_SKEW,
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

    /**
     * Get the Embedded.
     *
     * @param mixed $_embedded The _embedded to set.
     * @return \stdClass
     */
    function getEmbedded() : \stdClass
    {
        return $this->getProperty(
            self::EMBEDDED,
        );
    }
    
    /**
     * Get the Links.
     *
     * @param mixed $_links The _links to set.
     * @return \stdClass
     */
    function getLinks() : \stdClass
    {
        return $this->getProperty(
            self::LINKS,
        );
    }
    
    /**
     * Get the Conditions.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicyRuleConditions
     */
    function getConditions(array $options = []) : \Okta\Policy\PolicyRuleConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\Policy\PolicyRuleConditions::class,
            $options
        );
    }

    /**
     * Get the Created.
     *
     * @param mixed $created The created to set.
     * @return \Carbon\Carbon
     */
    function getCreated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::CREATED
        );
    
        return $this;
    }

    /**
     * Get the Description.
     *
     * @param mixed $description The description to set.
     * @return string
     */
    function getDescription() : string
    {
        return $this->getProperty(
            self::DESCRIPTION,
        );
    }
    
    /**
     * Get the Id.
     *
     * @param mixed $id The id to set.
     * @return string
     */
    function getId() : string
    {
        return $this->getProperty(
            self::ID,
        );
    }
    
    /**
     * Get the LastUpdated.
     *
     * @param mixed $lastUpdated The lastUpdated to set.
     * @return \Carbon\Carbon
     */
    function getLastUpdated() : \Carbon\Carbon
    {
        return $this->getDateTimeProperty(
            self::LAST_UPDATED
        );
    
        return $this;
    }

    /**
     * Get the Name.
     *
     * @param mixed $name The name to set.
     * @return string
     */
    function getName() : string
    {
        return $this->getProperty(
            self::NAME,
        );
    }
    
    /**
     * Get the Priority.
     *
     * @param mixed $priority The priority to set.
     * @return int
     */
    function getPriority() : int
    {
        return $this->getProperty(
            self::PRIORITY,
        );
    }
    
    /**
     * Get the Status.
     *
     * @param mixed $status The status to set.
     * @return string
     */
    function getStatus() : string
    {
        return $this->getProperty(
            self::STATUS,
        );
    }
    
    /**
     * Get the System.
     *
     * @param mixed $system The system to set.
     * @return bool
     */
    function getSystem() : bool
    {
        return $this->getProperty(
            self::SYSTEM,
        );
    }
    
    /**
     * Get the Type.
     *
     * @return \Okta\Policy\PolicyType
     */
    function getType() : \Okta\Policy\PolicyType
    {
        return $this->getEnumProperty(
            self::TYPE,
            \Okta\Policy\PolicyType::class,
        );
    }


}