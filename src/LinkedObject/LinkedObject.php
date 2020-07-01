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

namespace Okta\LinkedObject;

class LinkedObject extends \Okta\Resource\AbstractResource
{
    const LINKS = '_links';
    const PRIMARY = 'primary';
    const ASSOCIATED = 'associated';

    /**
     * Set the Primary.
     *
     * @param mixed $primary The primary to set.
     * @return self
     */
    function setPrimary(\Okta\LinkedObject\LinkedObjectDetails $primary) : LinkedObject
    {
        $this->setResourceProperty(
            self::PRIMARY,
            $primary
        );
    
        return $this;
    }

    /**
     * Set the Associated.
     *
     * @param mixed $associated The associated to set.
     * @return self
     */
    function setAssociated(\Okta\LinkedObject\LinkedObjectDetails $associated) : LinkedObject
    {
        $this->setResourceProperty(
            self::ASSOCIATED,
            $associated
        );
    
        return $this;
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
            self::LINKS
        );
    }
    
    /**
     * Get the Primary.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\LinkedObject\LinkedObjectDetails
     */
    function getPrimary(array $options = []) : \Okta\LinkedObject\LinkedObjectDetails
    {
        return $this->getResourceProperty(
            self::PRIMARY,
            \Okta\LinkedObject\LinkedObjectDetails::class,
            $options
        );
    }

    /**
     * Get the Associated.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\LinkedObject\LinkedObjectDetails
     */
    function getAssociated(array $options = []) : \Okta\LinkedObject\LinkedObjectDetails
    {
        return $this->getResourceProperty(
            self::ASSOCIATED,
            \Okta\LinkedObject\LinkedObjectDetails::class,
            $options
        );
    }

    /**
     * Success
     */
    function create() : \Okta\LinkedObject\LinkedObject 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/meta/schemas/user/linkedObjects"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("POST")
                ->setUri($uri)
                ->setRequestBody()
                ->executeRequest();
        return new \Okta\LinkedObject\LinkedObject(null, $body);
    }
    /**
     * Success
     */
    function read($linkedObjectName) : \Okta\LinkedObject\LinkedObject 
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/meta/schemas/user/linkedObjects/${linkedObjectName}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("GET")
                ->setUri($uri)
                ->executeRequest();
        return new \Okta\LinkedObject\LinkedObject(null, $body);
    }
    /**
     * Success
     */
    function delete($linkedObjectName)
    {
        $uri = $this->getDataStore()->buildUri(
            "/api/v1/meta/schemas/user/linkedObjects/${linkedObjectName}"
        );
        $body = $this
                ->getDataStore()
                ->setRequestMethod("DELETE")
                ->setUri($uri)
                ->executeRequest();
    }

}