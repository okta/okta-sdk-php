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

namespace Okta\Generated\Applications;


class SamlAttributeStatement extends \Okta\Resource\AbstractResource
{
    const NAME = 'name';
    const TYPE = 'type';
    const VALUES = 'values';
    const NAMESPACE = 'namespace';



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
     * Get the values.
     *
     * @return array
     */
    public function getValues()
    {
        return $this->getProperty(self::VALUES);
    }

    /**
    * Set the values.
    *
    * @param mixed $values The value to set.
    * @return self
    */
    public function setValues($values)
    {
        $this->setProperty(
            self::VALUES,
            $values
        );

        return $this;
    }

    /**
     * Get the namespace.
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->getProperty(self::NAMESPACE);
    }

    /**
    * Set the namespace.
    *
    * @param mixed $namespace The value to set.
    * @return self
    */
    public function setNamespace($namespace)
    {
        $this->setProperty(
            self::NAMESPACE,
            $namespace
        );

        return $this;
    }
}
