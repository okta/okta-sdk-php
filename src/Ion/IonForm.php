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

namespace Okta\Ion;

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
     * Set the Rel.
     *
     * @param mixed $rel The rel to set.
     * @return self
     */
    function setRel($rel) : IonForm
    {
        $this->setProperty(
            self::REL,
            $rel
        );
    
        return $this;
    }
    
    /**
     * Set the Href.
     *
     * @param mixed $href The href to set.
     * @return self
     */
    function setHref($href) : IonForm
    {
        $this->setProperty(
            self::HREF,
            $href
        );
    
        return $this;
    }
    
    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : IonForm
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Method.
     *
     * @param mixed $method The method to set.
     * @return self
     */
    function setMethod($method) : IonForm
    {
        $this->setProperty(
            self::METHOD,
            $method
        );
    
        return $this;
    }
    
    /**
     * Set the Accepts.
     *
     * @param mixed $accepts The accepts to set.
     * @return self
     */
    function setAccepts($accepts) : IonForm
    {
        $this->setProperty(
            self::ACCEPTS,
            $accepts
        );
    
        return $this;
    }
    
    /**
     * Set the Refresh.
     *
     * @param mixed $refresh The refresh to set.
     * @return self
     */
    function setRefresh($refresh) : IonForm
    {
        $this->setProperty(
            self::REFRESH,
            $refresh
        );
    
        return $this;
    }
    
    /**
     * Set the Produces.
     *
     * @param mixed $produces The produces to set.
     * @return self
     */
    function setProduces($produces) : IonForm
    {
        $this->setProperty(
            self::PRODUCES,
            $produces
        );
    
        return $this;
    }
    
    /**
     * Set the RelatesTo.
     *
     * @param mixed $relatesTo The relatesTo to set.
     * @return self
     */
    function setRelatesTo($relatesTo) : IonForm
    {
        $this->setProperty(
            self::RELATES_TO,
            $relatesTo
        );
    
        return $this;
    }
    
    /**
     * Get the Rel.
     *
     * @param mixed $rel The rel to set.
     * @return array
     */
    function getRel() : array
    {
        return $this->getProperty(
            self::REL
        );
    }
    
    /**
     * Get the Href.
     *
     * @param mixed $href The href to set.
     * @return string
     */
    function getHref() : string
    {
        return $this->getProperty(
            self::HREF
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
            self::NAME
        );
    }
    
    /**
     * Get the Value.
     *
     * @param mixed $value The value to set.
     * @return array
     */
    function getValue() : array
    {
        return $this->getProperty(
            self::VALUE
        );
    }
    
    /**
     * Get the Method.
     *
     * @param mixed $method The method to set.
     * @return string
     */
    function getMethod() : string
    {
        return $this->getProperty(
            self::METHOD
        );
    }
    
    /**
     * Get the Accepts.
     *
     * @param mixed $accepts The accepts to set.
     * @return string
     */
    function getAccepts() : string
    {
        return $this->getProperty(
            self::ACCEPTS
        );
    }
    
    /**
     * Get the Refresh.
     *
     * @param mixed $refresh The refresh to set.
     * @return int
     */
    function getRefresh() : int
    {
        return $this->getProperty(
            self::REFRESH
        );
    }
    
    /**
     * Get the Produces.
     *
     * @param mixed $produces The produces to set.
     * @return string
     */
    function getProduces() : string
    {
        return $this->getProperty(
            self::PRODUCES
        );
    }
    
    /**
     * Get the RelatesTo.
     *
     * @param mixed $relatesTo The relatesTo to set.
     * @return array
     */
    function getRelatesTo() : array
    {
        return $this->getProperty(
            self::RELATES_TO
        );
    }
    

}