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

namespace Okta\Feature;

class Feature extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const NAME = 'name';
    const TYPE = 'type';
    const STAGE = 'stage';
    const LINKS = '_links';
    const STATUS = 'status';
    const DESCRIPTION = 'description';


    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : Feature
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
     * @return self
     */
    function setType(\Okta\Feature\FeatureType $type) : Feature
    {
        $this->setEnumProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }

    /**
     * Set the Stage.
     *
     * @param mixed $stage The stage to set.
     * @return self
     */
    function setStage(\Okta\Feature\FeatureStage $stage) : Feature
    {
        $this->setResourceProperty(
            self::STAGE,
            $stage
        );
    
        return $this;
    }

    /**
     * Set the Status.
     *
     * @return self
     */
    function setStatus(\Okta\Common\EnabledStatus $status) : Feature
    {
        $this->setEnumProperty(
            self::STATUS,
            $status
        );
    
        return $this;
    }

    /**
     * Set the Description.
     *
     * @param mixed $description The description to set.
     * @return self
     */
    function setDescription($description) : Feature
    {
        $this->setProperty(
            self::DESCRIPTION,
            $description
        );
    
        return $this;
    }
    
    /**
     * Get the Id.
     *
     * @param mixed $id The id to set.
     * @return string
     */
    function getId() : string
    {
        return $this->getProperty(
            self::ID,
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
            self::NAME,
        );
    }
    
    /**
     * Get the Type.
     *
     * @return \Okta\Feature\FeatureType
     */
    function getType() : \Okta\Feature\FeatureType
    {
        return $this->getEnumProperty(
            self::TYPE,
            \Okta\Feature\FeatureType::class,
        );
    }

    /**
     * Get the Stage.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Feature\FeatureStage
     */
    function getStage(array $options = []) : \Okta\Feature\FeatureStage
    {
        return $this->getResourceProperty(
            self::STAGE,
            \Okta\Feature\FeatureStage::class,
            $options
        );
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
            self::LINKS,
        );
    }
    
    /**
     * Get the Status.
     *
     * @return \Okta\Common\EnabledStatus
     */
    function getStatus() : \Okta\Common\EnabledStatus
    {
        return $this->getEnumProperty(
            self::STATUS,
            \Okta\Common\EnabledStatus::class,
        );
    }

    /**
     * Get the Description.
     *
     * @param mixed $description The description to set.
     * @return string
     */
    function getDescription() : string
    {
        return $this->getProperty(
            self::DESCRIPTION,
        );
    }
    

}