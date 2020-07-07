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

class PasswordPolicy extends \Okta\Policy\Policy
{
    const SETTINGS = 'settings';
    const CONDITIONS = 'conditions';


    /**
     * Set the Settings.
     *
     * @param mixed $settings The settings to set.
     * @return self
     */
    function setSettings(\Okta\Policy\PasswordPolicySettings $settings) : PasswordPolicy
    {
        $this->setResourceProperty(
            self::SETTINGS,
            $settings
        );
    
        return $this;
    }

    /**
     * Set the Conditions.
     *
     * @param mixed $conditions The conditions to set.
     * @return self
     */
    function setConditions(\Okta\Policy\PasswordPolicyConditions $conditions) : PasswordPolicy
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
    function setDescription($description) : PasswordPolicy
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
    function setName($name) : PasswordPolicy
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
    function setPriority($priority) : PasswordPolicy
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
    function setStatus($status) : PasswordPolicy
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
    function setSystem($system) : PasswordPolicy
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
     * @param mixed $type The type to set.
     * @return self
     */
    function setType(\Okta\Policy\PolicyType $type) : PasswordPolicy
    {
        $this->setResourceProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }

    /**
     * Get the Settings.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicySettings
     */
    function getSettings(array $options = []) : \Okta\Policy\PasswordPolicySettings
    {
        return $this->getResourceProperty(
            self::SETTINGS,
            \Okta\Policy\PasswordPolicySettings::class,
            $options
        );
    }

    /**
     * Get the Conditions.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PasswordPolicyConditions
     */
    function getConditions(array $options = []) : \Okta\Policy\PasswordPolicyConditions
    {
        return $this->getResourceProperty(
            self::CONDITIONS,
            \Okta\Policy\PasswordPolicyConditions::class,
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
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PolicyType
     */
    function getType(array $options = []) : \Okta\Policy\PolicyType
    {
        return $this->getResourceProperty(
            self::TYPE,
            \Okta\Policy\PolicyType::class,
            $options
        );
    }


}