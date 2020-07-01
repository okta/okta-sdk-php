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

class SamlAttributeStatement extends \Okta\Resource\AbstractResource
{
    const NAME = 'name';
    const TYPE = 'type';
    const VALUES = 'values';
    const NAMESPACE = 'namespace';

    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : SamlAttributeStatement
    {
        $this->setProperty(
            self::NAME,
            $name
        );
    
        return $this;
    }
    
    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : SamlAttributeStatement
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Values.
     *
     * @param mixed $values The values to set.
     * @return self
     */
    function setValues($values) : SamlAttributeStatement
    {
        $this->setProperty(
            self::VALUES,
            $values
        );
    
        return $this;
    }
    
    /**
     * Set the Namespace.
     *
     * @param mixed $namespace The namespace to set.
     * @return self
     */
    function setNamespace($namespace) : SamlAttributeStatement
    {
        $this->setProperty(
            self::NAMESPACE,
            $namespace
        );
    
        return $this;
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
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return string
     */
    function getType() : string
    {
        return $this->getProperty(
            self::TYPE
        );
    }
    
    /**
     * Get the Values.
     *
     * @param mixed $values The values to set.
     * @return array
     */
    function getValues() : array
    {
        return $this->getProperty(
            self::VALUES
        );
    }
    
    /**
     * Get the Namespace.
     *
     * @param mixed $namespace The namespace to set.
     * @return string
     */
    function getNamespace() : string
    {
        return $this->getProperty(
            self::NAMESPACE
        );
    }
    

}