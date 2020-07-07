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

namespace Okta\Log;

class LogGeographicalContext extends \Okta\Resource\AbstractResource
{
    const CITY = 'city';
    const STATE = 'state';
    const COUNTRY = 'country';
    const POSTAL_CODE = 'postalCode';
    const GEOLOCATION = 'geolocation';


    /**
     * Get the City.
     *
     * @param mixed $city The city to set.
     * @return string
     */
    function getCity() : string
    {
        return $this->getProperty(
            self::CITY,
        );
    }
    
    /**
     * Get the State.
     *
     * @param mixed $state The state to set.
     * @return string
     */
    function getState() : string
    {
        return $this->getProperty(
            self::STATE,
        );
    }
    
    /**
     * Get the Country.
     *
     * @param mixed $country The country to set.
     * @return string
     */
    function getCountry() : string
    {
        return $this->getProperty(
            self::COUNTRY,
        );
    }
    
    /**
     * Get the PostalCode.
     *
     * @param mixed $postalCode The postalCode to set.
     * @return string
     */
    function getPostalCode() : string
    {
        return $this->getProperty(
            self::POSTAL_CODE,
        );
    }
    
    /**
     * Get the Geolocation.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Log\LogGeolocation
     */
    function getGeolocation(array $options = []) : \Okta\Log\LogGeolocation
    {
        return $this->getResourceProperty(
            self::GEOLOCATION,
            \Okta\Log\LogGeolocation::class,
            $options
        );
    }


}