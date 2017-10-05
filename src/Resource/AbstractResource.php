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

/**
 * Class AbstractResource
 * @package Okta\Resource
 */
abstract class AbstractResource
{
    /**
     * @var DefaultDataStore $dataStore The DataStore that will be used for requests.
     */
    private $dataStore;
    /**
     * @var \StdClass $properties List of properties on the resource.
     */
    private $properties;
    /**
     * @var \StdClass $dirtyProperties List of any properties that have been updated since get/save.
     */
    private $dirtyProperties;
    /**
     * @var bool $materialized Has the resource been full retrieved from the API.
     */
    private $materialized;
    /**
     * @var bool $dirty Are there dirty properties on the resource.
     */
    private $dirty;
    /**
     * @var array $options Current options used on the resource
     */
    private $options;
    /**
     * @var array|bool $methods List of methods on the resource.
     */
    private $methods;

    const ID = "id";

    /**
     * AbstractResource constructor.
     *
     * @param DefaultDataStore|NULL $dataStore DataStore to use for requests.
     * @param \stdClass|NULL        $properties Properties for the resource.
     * @param array                 $options Options to use on the resource.
     */
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

    /**
     * Set properties on the resource.
     *
     * @param \stdClass|NULL $properties the properties to set.
     * @return self
     */
    public function setProperties(\stdClass $properties = null): self
    {
        $this->dirty = false;

        $this->properties = new \stdClass;
        $this->dirtyProperties = new \stdClass;

        if ($properties) {
            foreach ($properties as $key => $value) {
                $this->properties->{$key} = $value;
            }
        }

        return $this;
    }

    /**
     * Gets a property off the resource and allow you to cast it to a type.
     *
     * @param string      $name Property to get off the resource.
     * @param string|null $castTo Cast your item to this type.
     * @return mixed|null
     */
    public function getProperty($name, $castTo = null)
    {
        $property = $this->readProperty($name);

        if (null !== $castTo) {
            settype($property, $castTo);
        }

        return $property;
    }

    /**
     * Get a HAL Linked property.
     *
     * @param string $key The property you want to get from the _links section.
     * @return mixed|null
     */
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

    /**
     * Returns an instance of Carbon for the date property.
     *
     * @param string $name Get this date property of the resource.
     * @return Carbon|null
     */
    public function getDateProperty($name)
    {
        $value = $this->readProperty($name);

        if (null === $value) {
            return null;
        }

        return new Carbon($value);
    }

    /**
     * Gets the current property names for the resource.
     *
     * @param bool $retrieveDirtyProperties determines if you want to get only dirty properties with id.
     * @return array
     */
    public function getPropertyNames($retrieveDirtyProperties = false)
    {
        if ($retrieveDirtyProperties and $this->isDirty() and !$this->isNew()) {
            return $this->getDirtyPropertyNames();
        } else {
            return array_keys((array) $this->properties);
        }
    }

    /**
     * Gets the property names that have been updated.
     *
     * @return array
     */
    protected function getDirtyPropertyNames()
    {
        $names = array_keys((array) $this->dirtyProperties);

        if (property_exists($this->properties, self::ID)) {
            array_push($names, self::ID);
        }

        return $names;
    }

    /**
     * Set the current options to use for the resource.
     *
     * @param array $options The options to set on the resource, typically query params.
     *
     * @return self
     */
    public function setOptions($options): self
    {
        $this->options = $options;
        return $this;
    }

    /**
     * Clears all options on the resource.
     *
     * @return self
     */
    public function clearOptions(): self
    {
        $this->options = null;
        return $this;
    }

    /**
     * Get the options currently set on the resource.
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Get a resource property from the resource.
     *
     * @param string $key The name of the resource property you want to get.
     * @param string $className The class name you want to return as.
     * @param array  $options Additional options to pass, Typically query params.
     *
     * @return AbstractResource
     */
    protected function getResourceProperty($key, $className, array $options = array()): AbstractResource
    {
        $this->options = array_replace($this->options, $options);
        $value = $this->getProperty($key);

        return $this->getDataStore()->instantiate($className, $value, $this->options);
    }

    /**
     * Set a resource property  on a resource.
     *
     * @param string $name Which property do you want to set.
     * @param AbstractResource $resource What you want to set the property as.
     *
     * @return void
     */
    protected function setResourceProperty($name, AbstractResource $resource)
    {
        $this->setProperty($name, $resource->properties);
    }

    /**
     * Set a property on a resource.
     *
     * @param string $name Which property do you want to set.
     * @param mixed $value What you want to set the property as.
     *
     * @return void
     */
    protected function setProperty($name, $value)
    {
        $this->properties->$name = $value;
        $this->dirtyProperties->$name = $value;
        $this->dirty = true;
    }

    /**
     * Get the current DataStore instance.
     *
     * @return DefaultDataStore
     */
    protected function getDataStore()
    {
        return $this->dataStore;
    }

    /**
     * Is the resource dirty.
     *
     * Has the resource been updated since you retrieved it from the API.
     *
     * @return bool
     */
    protected function isDirty()
    {
        return $this->dirty;
    }

    /**
     * Gets the ID property off the resource.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
    }

    /**
     * Determines if the resource is new or not based on assigned id property.
     *
     * @return bool
     */
    protected function isNew()
    {
        $prop = $this->readProperty(self::ID);
        if ($prop) {
            return false;
        }
        return true;
    }

    /**
     * Will read the property from the resource if it exists or return null if it does not.
     *
     * @param string $name The property you want to read.
     * @return mixed|null
     */
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

        $this->setProperty($property, $value);
//        $this->properties->{$property} = $value;
        return $this;
    }

    /**
     * Returns a json string representation of the resource.
     *
     * @return string
     */
    public function __toString()
    {
        $propertyNames = $this->getPropertyNames();

        $properties = new \stdClass();
        foreach ($propertyNames as $name) {
            $properties->$name = $this->getProperty($name);
        }
        return json_encode($properties, true);
    }
}
