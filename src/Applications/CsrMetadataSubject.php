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

namespace Okta\Applications;


class CsrMetadataSubject extends \Okta\Resource\AbstractResource
{
    const COMMON_NAME = 'commonName';
    const COUNTRY_NAME = 'countryName';
    const LOCALITY_NAME = 'localityName';
    const ORGANIZATION_NAME = 'organizationName';
    const STATE_OR_PROVINCE_NAME = 'stateOrProvinceName';
    const ORGANIZATIONAL_UNIT_NAME = 'organizationalUnitName';



    /**
     * Get the commonName.
     *
     * @return string
     */
    public function getCommonName()
    {
        return $this->getProperty(self::COMMON_NAME);
    }

    /**
    * Set the commonName.
    *
    * @param mixed $commonName The value to set.
    * @return self
    */
    public function setCommonName($commonName)
    {
        $this->setProperty(
            self::COMMON_NAME,
            $commonName
        );

        return $this;
    }

    /**
     * Get the countryName.
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->getProperty(self::COUNTRY_NAME);
    }

    /**
    * Set the countryName.
    *
    * @param mixed $countryName The value to set.
    * @return self
    */
    public function setCountryName($countryName)
    {
        $this->setProperty(
            self::COUNTRY_NAME,
            $countryName
        );

        return $this;
    }

    /**
     * Get the localityName.
     *
     * @return string
     */
    public function getLocalityName()
    {
        return $this->getProperty(self::LOCALITY_NAME);
    }

    /**
    * Set the localityName.
    *
    * @param mixed $localityName The value to set.
    * @return self
    */
    public function setLocalityName($localityName)
    {
        $this->setProperty(
            self::LOCALITY_NAME,
            $localityName
        );

        return $this;
    }

    /**
     * Get the organizationName.
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->getProperty(self::ORGANIZATION_NAME);
    }

    /**
    * Set the organizationName.
    *
    * @param mixed $organizationName The value to set.
    * @return self
    */
    public function setOrganizationName($organizationName)
    {
        $this->setProperty(
            self::ORGANIZATION_NAME,
            $organizationName
        );

        return $this;
    }

    /**
     * Get the stateOrProvinceName.
     *
     * @return string
     */
    public function getStateOrProvinceName()
    {
        return $this->getProperty(self::STATE_OR_PROVINCE_NAME);
    }

    /**
    * Set the stateOrProvinceName.
    *
    * @param mixed $stateOrProvinceName The value to set.
    * @return self
    */
    public function setStateOrProvinceName($stateOrProvinceName)
    {
        $this->setProperty(
            self::STATE_OR_PROVINCE_NAME,
            $stateOrProvinceName
        );

        return $this;
    }

    /**
     * Get the organizationalUnitName.
     *
     * @return string
     */
    public function getOrganizationalUnitName()
    {
        return $this->getProperty(self::ORGANIZATIONAL_UNIT_NAME);
    }

    /**
    * Set the organizationalUnitName.
    *
    * @param mixed $organizationalUnitName The value to set.
    * @return self
    */
    public function setOrganizationalUnitName($organizationalUnitName)
    {
        $this->setProperty(
            self::ORGANIZATIONAL_UNIT_NAME,
            $organizationalUnitName
        );

        return $this;
    }
}
