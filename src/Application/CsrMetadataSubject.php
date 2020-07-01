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

namespace Okta\Application;

class CsrMetadataSubject extends \Okta\Resource\AbstractResource
{
    const COMMON_NAME = 'commonName';
    const COUNTRY_NAME = 'countryName';
    const LOCALITY_NAME = 'localityName';
    const ORGANIZATION_NAME = 'organizationName';
    const STATE_OR_PROVINCE_NAME = 'stateOrProvinceName';
    const ORGANIZATIONAL_UNIT_NAME = 'organizationalUnitName';

    /**
     * Set the CommonName.
     *
     * @param mixed $commonName The commonName to set.
     * @return self
     */
    function setCommonName($commonName) : CsrMetadataSubject
    {
        $this->setProperty(
            self::COMMON_NAME,
            $commonName
        );
    
        return $this;
    }
    
    /**
     * Set the CountryName.
     *
     * @param mixed $countryName The countryName to set.
     * @return self
     */
    function setCountryName($countryName) : CsrMetadataSubject
    {
        $this->setProperty(
            self::COUNTRY_NAME,
            $countryName
        );
    
        return $this;
    }
    
    /**
     * Set the LocalityName.
     *
     * @param mixed $localityName The localityName to set.
     * @return self
     */
    function setLocalityName($localityName) : CsrMetadataSubject
    {
        $this->setProperty(
            self::LOCALITY_NAME,
            $localityName
        );
    
        return $this;
    }
    
    /**
     * Set the OrganizationName.
     *
     * @param mixed $organizationName The organizationName to set.
     * @return self
     */
    function setOrganizationName($organizationName) : CsrMetadataSubject
    {
        $this->setProperty(
            self::ORGANIZATION_NAME,
            $organizationName
        );
    
        return $this;
    }
    
    /**
     * Set the StateOrProvinceName.
     *
     * @param mixed $stateOrProvinceName The stateOrProvinceName to set.
     * @return self
     */
    function setStateOrProvinceName($stateOrProvinceName) : CsrMetadataSubject
    {
        $this->setProperty(
            self::STATE_OR_PROVINCE_NAME,
            $stateOrProvinceName
        );
    
        return $this;
    }
    
    /**
     * Set the OrganizationalUnitName.
     *
     * @param mixed $organizationalUnitName The organizationalUnitName to set.
     * @return self
     */
    function setOrganizationalUnitName($organizationalUnitName) : CsrMetadataSubject
    {
        $this->setProperty(
            self::ORGANIZATIONAL_UNIT_NAME,
            $organizationalUnitName
        );
    
        return $this;
    }
    
    /**
     * Get the CommonName.
     *
     * @param mixed $commonName The commonName to set.
     * @return string
     */
    function getCommonName() : string
    {
        return $this->getProperty(
            self::COMMON_NAME
        );
    }
    
    /**
     * Get the CountryName.
     *
     * @param mixed $countryName The countryName to set.
     * @return string
     */
    function getCountryName() : string
    {
        return $this->getProperty(
            self::COUNTRY_NAME
        );
    }
    
    /**
     * Get the LocalityName.
     *
     * @param mixed $localityName The localityName to set.
     * @return string
     */
    function getLocalityName() : string
    {
        return $this->getProperty(
            self::LOCALITY_NAME
        );
    }
    
    /**
     * Get the OrganizationName.
     *
     * @param mixed $organizationName The organizationName to set.
     * @return string
     */
    function getOrganizationName() : string
    {
        return $this->getProperty(
            self::ORGANIZATION_NAME
        );
    }
    
    /**
     * Get the StateOrProvinceName.
     *
     * @param mixed $stateOrProvinceName The stateOrProvinceName to set.
     * @return string
     */
    function getStateOrProvinceName() : string
    {
        return $this->getProperty(
            self::STATE_OR_PROVINCE_NAME
        );
    }
    
    /**
     * Get the OrganizationalUnitName.
     *
     * @param mixed $organizationalUnitName The organizationalUnitName to set.
     * @return string
     */
    function getOrganizationalUnitName() : string
    {
        return $this->getProperty(
            self::ORGANIZATIONAL_UNIT_NAME
        );
    }
    

}