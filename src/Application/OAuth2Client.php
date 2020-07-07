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

class OAuth2Client extends \Okta\Resource\AbstractResource
{
    const LINKS = '_links';
    const LOGO_URI = 'logo_uri';
    const CLIENT_ID = 'client_id';
    const CLIENT_URI = 'client_uri';
    const CLIENT_NAME = 'client_name';


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
     * Get the LogoUri.
     *
     * @param mixed $logo_uri The logo_uri to set.
     * @return string
     */
    function getLogoUri() : string
    {
        return $this->getProperty(
            self::LOGO_URI,
        );
    }
    
    /**
     * Get the ClientId.
     *
     * @param mixed $client_id The client_id to set.
     * @return string
     */
    function getClientId() : string
    {
        return $this->getProperty(
            self::CLIENT_ID,
        );
    }
    
    /**
     * Get the ClientUri.
     *
     * @param mixed $client_uri The client_uri to set.
     * @return string
     */
    function getClientUri() : string
    {
        return $this->getProperty(
            self::CLIENT_URI,
        );
    }
    
    /**
     * Get the ClientName.
     *
     * @param mixed $client_name The client_name to set.
     * @return string
     */
    function getClientName() : string
    {
        return $this->getProperty(
            self::CLIENT_NAME,
        );
    }
    

}