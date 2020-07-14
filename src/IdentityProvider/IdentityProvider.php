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

namespace Okta\IdentityProvider;

class IdentityProvider extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const TYPE = 'type';
    const LINKS = '_links';
    const POLICY = 'policy';
    const STATUS = 'status';
    const CREATED = 'created';
    const PROTOCOL = 'protocol';
    const ISSUER_MODE = 'issuerMode';
    const LAST_UPDATED = 'lastUpdated';


    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : IdentityProvider
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : IdentityProvider
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Policy.
     *
     * @param mixed $policy The policy to set.
     * @return self
     */
    function setPolicy(\Okta\Policy\IdentityProviderPolicy $policy) : IdentityProvider
    {
        $this->setResourceProperty(
            self::POLICY,
            $policy
        );
    
        return $this;
    }

    /**
     * Set the Status.
     *
     * @param mixed $status The status to set.
     * @return self
     */
    function setStatus($status) : IdentityProvider
    {
        $this->setProperty(
            self::STATUS,
            $status
        );
    
        return $this;
    }
    
    /**
     * Set the Protocol.
     *
     * @param mixed $protocol The protocol to set.
     * @return self
     */
    function setProtocol(\Okta\IdentityProvider\Protocol $protocol) : IdentityProvider
    {
        $this->setResourceProperty(
            self::PROTOCOL,
            $protocol
        );
    
        return $this;
    }

    /**
     * Set the IssuerMode.
     *
     * @param mixed $issuerMode The issuerMode to set.
     * @return self
     */
    function setIssuerMode($issuerMode) : IdentityProvider
    {
        $this->setProperty(
            self::ISSUER_MODE,
            $issuerMode
        );
    
        return $this;
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
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return string
     */
    function getType() : string
    {
        return $this->getProperty(
            self::TYPE,
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
     * Get the Policy.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\IdentityProviderPolicy
     */
    function getPolicy(array $options = []) : \Okta\Policy\IdentityProviderPolicy
    {
        return $this->getResourceProperty(
            self::POLICY,
            \Okta\Policy\IdentityProviderPolicy::class,
            $options
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
     * Get the Protocol.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\IdentityProvider\Protocol
     */
    function getProtocol(array $options = []) : \Okta\IdentityProvider\Protocol
    {
        return $this->getResourceProperty(
            self::PROTOCOL,
            \Okta\IdentityProvider\Protocol::class,
            $options
        );
    }

    /**
     * Get the IssuerMode.
     *
     * @param mixed $issuerMode The issuerMode to set.
     * @return string
     */
    function getIssuerMode() : string
    {
        return $this->getProperty(
            self::ISSUER_MODE,
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


}