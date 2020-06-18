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

namespace Okta\LinkedObjects;

class LinkedObject extends \Okta\Resource\AbstractResource
{
    const LINKS = '_links';
    const PRIMARY = 'primary';
    const ASSOCIATED = 'associated';


    public function create($query = [])
    {
        return \Okta\Client::getInstance()
                ->getDataStore()
                ->createResource(
                    "/meta",
                    $this,
                    \Okta\LinkedObjects\LinkedObject::class,
                    $query
                );
    }

    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\LinkedObjects\LinkedObject::class,
                        "/meta"
                    );
    }
    public function delete()
    {
        return \Okta\Client::getInstance()
        ->getDataStore()
        ->deleteResource(
            "/meta",
            $this
        );
    }
        
    /**
     * Get the _links.
     *
     * @return \stdClass
     */
    public function getLinks()
    {
        return $this->getProperty(self::LINKS);
    }

    /**
     * Get the primary.
     *
     * @return \Okta\LinkedObjects\LinkedObjectDetails
     */
    public function getPrimary(array $options = []): \Okta\LinkedObjects\LinkedObjectDetails
    {
        return $this->getResourceProperty(
            self::PRIMARY,
            \Okta\LinkedObjects\LinkedObjectDetails::class,
            $options
        );
    }


    /**
     * Set the primary.
     *
     * @param \Okta\LinkedObjects\LinkedObjectDetails $primary The LinkedObjectDetails instance.
     * @return self
     */
    public function setPrimary(\Okta\LinkedObjects\LinkedObjectDetails $primary)
    {
        $this->setResourceProperty(
            self::PRIMARY,
            $primary
        );

        return $this;
    }

    /**
     * Get the associated.
     *
     * @return \Okta\LinkedObjects\LinkedObjectDetails
     */
    public function getAssociated(array $options = []): \Okta\LinkedObjects\LinkedObjectDetails
    {
        return $this->getResourceProperty(
            self::ASSOCIATED,
            \Okta\LinkedObjects\LinkedObjectDetails::class,
            $options
        );
    }


    /**
     * Set the associated.
     *
     * @param \Okta\LinkedObjects\LinkedObjectDetails $associated The LinkedObjectDetails instance.
     * @return self
     */
    public function setAssociated(\Okta\LinkedObjects\LinkedObjectDetails $associated)
    {
        $this->setResourceProperty(
            self::ASSOCIATED,
            $associated
        );

        return $this;
    }
}
