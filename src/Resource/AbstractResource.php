<?php
/******************************************************************************
 * Copyright 2017 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

namespace Okta\Resource;

use Carbon\Carbon;
use Okta\Client;
use Okta\DataStore\DefaultDataStore;

abstract class AbstractResource
{
    private $dataStore;
    private $properties;
    private $dirtyProperties;
    private $materialized;
    private $dirty;
    private $options;
    private $methods;

    const ID = "id";

    public function __construct(DefaultDataStore $dataStore = null, \stdClass $properties = null, array $options = [])
    {
        $this->dataStore = $dataStore ?: Client::getInstance()->getDataStore();
        $this->setProperties($properties);
        $this->options = $options;

        $this->methods = array_flip(get_class_methods(get_class($this)));
    }

    /**
     * Gets the href property.
     *
     * @return string
     */
    public function getHref()
    {
        return $this->getLinkProperty('self.href');
    }

    public function setProperties(\stdClass $properties = null)
    {
        $this->dirty = false;
        $this->materialized = false;

        $this->properties = new \stdClass;
        $this->dirtyProperties = new \stdClass;

        if ($properties) {
            foreach ($properties as $key => $value) {
                $this->properties->{$key} = $value;
            }

            $propertiesArr = (array)$properties;
            $hrefOnly = count($propertiesArr) == 1 && array_key_exists(self::ID, $propertiesArr);
            $this->materialized = !$hrefOnly;
        }
    }

    public function getProperty($name, $castTo = null)
    {
        if (self::ID != $name) {
            //not the href/id, must be a property that requires materialization:
            if (!$this->isNew() and !$this->isMaterialized()) {
                // only materialize if the property hasn't been set previously (no need to execute a server
                // request since we have the most recent value already):
                $present = isset($this->dirtyProperties->$name);
                if (!$present) {
                    // exhausted present properties - we require a server call:
                    $this->materialize();
                }
            }
        }
        $property = $this->readProperty($name);

        if (null !== $castTo) {
            settype($property, $castTo);
        }

        return $property;
    }

    public function getLinkProperty($key)
    {
        $target = $this->getProperty('_links');

        $key = is_array($key) ? $key : explode('.', $key);

        while (($segment = array_shift($key)) !== null) {
            if (!property_exists($target, $segment)) {
                throw new \InvalidArgumentException("Property {$segment} does not exists.");
            }
            $target = $target->{$segment};
        }

        return $target;
    }

    public function getDateProperty($name)
    {
        $value = $this->readProperty($name);

        if (null === $value) {
            return null;
        }

        return new Carbon($value);
    }

    public function getPropertyNames($retrieveDirtyProperties = false)
    {
        if ($retrieveDirtyProperties and $this->isDirty() and !$this->isNew()) {
            return $this->getDirtyPropertyNames();
        } else {
            return array_keys((array) $this->properties);
        }
    }
    protected function getDirtyPropertyNames()
    {
        $names = array_keys((array) $this->dirtyProperties);

        if (property_exists($this->properties, self::ID)) {
            array_push($names, self::ID);
        }

        return $names;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    protected function getResourceProperty($key, $className, array $options = array()): AbstractResource
    {
        $this->options = array_replace($this->options, $options);
        $value = $this->getProperty($key);

        return $this->getDataStore()->instantiate($className, $value, $this->options);
    }
    protected function setResourceProperty($name, AbstractResource $resource)
    {
        $this->setProperty($name, $resource->properties);
    }

    protected function setProperty($name, $value)
    {
        $this->properties->$name = $value;
        $this->dirtyProperties->$name = $value;
        $this->dirty = true;
    }

    protected function getDataStore()
    {
        return $this->dataStore;
    }

    protected function isMaterialized()
    {
        return $this->materialized;
    }

    protected function isDirty()
    {
        return $this->dirty;
    }

    public function getId()
    {
        return $this->getProperty(self::ID);
    }

    protected function materialize()
    {
        $className = get_class($this);
        $resource = $this->dataStore->getResource($this->getId(), $className, $this->options);
        $this->properties = $resource->properties;
        //retain dirty properties:
        $this->properties = (object) array_merge((array)$this->properties, (array)$this->dirtyProperties);
        $this->materialized = true;
    }

    /**
     * Returns {@code true} if the resource does not yet have an assigned 'id' property, {@code false} otherwise.
     *
     * @return bool
     */
    protected function isNew()
    {
        //we can't call getHref() in here, otherwise we'll have an infinite loop:
        $prop = $this->readProperty(self::ID);
        if ($prop) {
            return false;
        }
        return true;
    }

    private function readProperty($name)
    {
        return property_exists($this->properties, $name) ? $this->properties->$name : null;
    }

    /**
     * Magic "get" method
     *
     * @param string $property Property name
     * @return mixed|null Property value if it exists, null if not
     */
    public function __get($property)
    {
        $method = 'get' .ucfirst($property);
        if (isset($this->methods[$method])) {
            return $this->{$method}();
        }

        if (null === $this->readProperty($property)) {
            return null;
        }

        return $this->properties->{$property};
    }
    /**
     * Magic "set" method
     *
     * @param string $property Property name
     * @param mixed $value Property value
     *
     * @return self
     */
    public function __set($property, $value)
    {
        $method = 'set' .ucfirst($property);
        if (isset($this->methods[$method])) {
            return $this->{$method}($value);
        }


        $this->properties->{$property} = $value;
        return $this;
    }

    public function __toString()
    {
        $propertyNames = $this->getPropertyNames(true);

        $properties = new \stdClass();
        foreach ($propertyNames as $name) {
            $properties->$name = $this->getProperty($name);
        }
        return json_encode($properties, true);
    }
}
