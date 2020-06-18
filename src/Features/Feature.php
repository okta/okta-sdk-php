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

namespace Okta\Features;

class Feature extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const TYPE = 'type';
    const STAGE = 'stage';
    const LINKS = '_links';
    const STATUS = 'status';
    const DESCRIPTION = 'description';


    public function get($query)
    {
        return \Okta\Client::getInstance()
                    ->getDataStore()
                    ->getResource(
                        $query,
                        \Okta\Features\Feature::class,
                        "/features"
                    );
    }
        
    /**
     * Get the id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty(self::ID);
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
     * Get the stage.
     *
     * @return \Okta\Features\FeatureStage
     */
    public function getStage(array $options = []): \Okta\Features\FeatureStage
    {
        return $this->getResourceProperty(
            self::STAGE,
            \Okta\Features\FeatureStage::class,
            $options
        );
    }


    /**
     * Set the stage.
     *
     * @param \Okta\Features\FeatureStage $stage The FeatureStage instance.
     * @return self
     */
    public function setStage(\Okta\Features\FeatureStage $stage)
    {
        $this->setResourceProperty(
            self::STAGE,
            $stage
        );

        return $this;
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
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty(self::STATUS);
    }

    /**
    * Set the status.
    *
    * @param mixed $status The value to set.
    * @return self
    */
    public function setStatus($status)
    {
        $this->setProperty(
            self::STATUS,
            $status
        );

        return $this;
    }

    /**
     * Get the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty(self::DESCRIPTION);
    }

    /**
    * Set the description.
    *
    * @param mixed $description The value to set.
    * @return self
    */
    public function setDescription($description)
    {
        $this->setProperty(
            self::DESCRIPTION,
            $description
        );

        return $this;
    }


    /**
    * Success
    *
    *
    * @return mixed|null
    */
    public function updateLifecycle($lifecycle)
    {
        $uri = "/api/v1/features/{$this->getId()}/{$lifecycle}";
        $uri = $this->getDataStore()->buildUri(
            $this->getDataStore()->getOrganizationUrl() . $uri
        );
        $body = $this
                ->getDataStore()
                ->executeRequest('POST', $uri);

        return new \Okta\Features\Feature(null, $body);
    }


    /**
    * Get the Feature object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Features\Collection
    */
    public function getDependents(array $options = []): \Okta\Features\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/features/{$this->getId()}/dependents",
                    \Okta\Features\Feature::class,
                    \Okta\Features\Collection::class,
                    $options
                );
    }


    /**
    * Get the Feature object.
    *
    * @param array $options The options for the request.
    * @return \Okta\Features\Collection
    */
    public function getDependencies(array $options = []): \Okta\Features\Collection
    {

        return $this
                ->getDataStore()
                ->getCollection(
                    "/api/v1/features/{$this->getId()}/dependencies",
                    \Okta\Features\Feature::class,
                    \Okta\Features\Collection::class,
                    $options
                );
    }
}
