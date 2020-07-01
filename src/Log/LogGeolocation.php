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

class LogGeolocation extends \Okta\Resource\AbstractResource
{
    const LAT = 'lat';
    const LON = 'lon';

    /**
     * Get the Lat.
     *
     * @param mixed $lat The lat to set.
     * @return double
     */
    function getLat() : double
    {
        return $this->getProperty(
            self::LAT
        );
    }
    
    /**
     * Get the Lon.
     *
     * @param mixed $lon The lon to set.
     * @return double
     */
    function getLon() : double
    {
        return $this->getProperty(
            self::LON
        );
    }
    

}