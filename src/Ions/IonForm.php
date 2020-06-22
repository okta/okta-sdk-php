<?php
/*******************************************************************************
 * Copyright 2017-Present Okta, Inc.
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

namespace Okta\Ions;

class IonForm extends \Okta\Resource\AbstractResource
{
    const REL = 'rel';
    const HREF = 'href';
    const NAME = 'name';
    const VALUE = 'value';
    const METHOD = 'method';
    const ACCEPTS = 'accepts';
    const REFRESH = 'refresh';
    const PRODUCES = 'produces';
    const RELATES_TO = 'relatesTo';


    /**
     * Get the rel.
     *
     * @return array
     */
    public function getRel()
    {
        return $this->getProperty(self::REL);
    }

    /**
    * Set the rel.
    *
    * @param mixed $rel The value to set.
    * @return self
    */
    public function setRel($rel)
    {
        $this->setProperty(
            self::REL,
            $rel
        );

        return $this;
    }

    /**
     * Get the href.
     *
     * @return string
     */
    public function getHref()
    {
        return $this->getProperty(self::HREF);
    }

    /**
    * Set the href.
    *
    * @param mixed $href The value to set.
    * @return self
    */
    public function setHref($href)
    {
        $this->setProperty(
            self::HREF,
            $href
        );

        return $this;
    }

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->getProperty(self::NAME);
    }

    /**
    * Set the name.
    *
    * @param mixed $name The value to set.
    * @return self
    */
    public function setName($name)
    {
        $this->setProperty(
            self::NAME,
            $name
        );

        return $this;
    }

    /**
     * Get the value.
     *
     * @return array
     */
    public function getValue()
    {
        return $this->getProperty(self::VALUE);
    }

    /**
     * Get the method.
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->getProperty(self::METHOD);
    }

    /**
    * Set the method.
    *
    * @param mixed $method The value to set.
    * @return self
    */
    public function setMethod($method)
    {
        $this->setProperty(
            self::METHOD,
            $method
        );

        return $this;
    }

    /**
     * Get the accepts.
     *
     * @return string
     */
    public function getAccepts()
    {
        return $this->getProperty(self::ACCEPTS);
    }

    /**
    * Set the accepts.
    *
    * @param mixed $accepts The value to set.
    * @return self
    */
    public function setAccepts($accepts)
    {
        $this->setProperty(
            self::ACCEPTS,
            $accepts
        );

        return $this;
    }

    /**
     * Get the refresh.
     *
     * @return int
     */
    public function getRefresh()
    {
        return $this->getProperty(self::REFRESH);
    }

    /**
    * Set the refresh.
    *
    * @param mixed $refresh The value to set.
    * @return self
    */
    public function setRefresh($refresh)
    {
        $this->setProperty(
            self::REFRESH,
            $refresh
        );

        return $this;
    }

    /**
     * Get the produces.
     *
     * @return string
     */
    public function getProduces()
    {
        return $this->getProperty(self::PRODUCES);
    }

    /**
    * Set the produces.
    *
    * @param mixed $produces The value to set.
    * @return self
    */
    public function setProduces($produces)
    {
        $this->setProperty(
            self::PRODUCES,
            $produces
        );

        return $this;
    }

    /**
     * Get the relatesTo.
     *
     * @return array
     */
    public function getRelatesTo()
    {
        return $this->getProperty(self::RELATES_TO);
    }

    /**
    * Set the relatesTo.
    *
    * @param mixed $relatesTo The value to set.
    * @return self
    */
    public function setRelatesTo($relatesTo)
    {
        $this->setProperty(
            self::RELATES_TO,
            $relatesTo
        );

        return $this;
    }
}
