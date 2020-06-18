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

namespace Okta\IdentityProviders;

class ProtocolEndpoint extends \Okta\Resource\AbstractResource
{
    const URL = 'url';
    const TYPE = 'type';
    const BINDING = 'binding';
    const DESTINATION = 'destination';



    /**
     * Get the url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->getProperty(self::URL);
    }

    /**
    * Set the url.
    *
    * @param mixed $url The value to set.
    * @return self
    */
    public function setUrl($url)
    {
        $this->setProperty(
            self::URL,
            $url
        );

        return $this;
    }

    /**
     * Get the type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->getProperty(self::TYPE);
    }

    /**
    * Set the type.
    *
    * @param mixed $type The value to set.
    * @return self
    */
    public function setType($type)
    {
        $this->setProperty(
            self::TYPE,
            $type
        );

        return $this;
    }

    /**
     * Get the binding.
     *
     * @return string
     */
    public function getBinding()
    {
        return $this->getProperty(self::BINDING);
    }

    /**
    * Set the binding.
    *
    * @param mixed $binding The value to set.
    * @return self
    */
    public function setBinding($binding)
    {
        $this->setProperty(
            self::BINDING,
            $binding
        );

        return $this;
    }

    /**
     * Get the destination.
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->getProperty(self::DESTINATION);
    }

    /**
    * Set the destination.
    *
    * @param mixed $destination The value to set.
    * @return self
    */
    public function setDestination($destination)
    {
        $this->setProperty(
            self::DESTINATION,
            $destination
        );

        return $this;
    }
}
