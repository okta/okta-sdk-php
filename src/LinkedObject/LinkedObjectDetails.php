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

namespace Okta\LinkedObject;

class LinkedObjectDetails extends \Okta\Resource\AbstractResource
{
    const NAME = 'name';
    const TYPE = 'type';
    const TITLE = 'title';
    const DESCRIPTION = 'description';


    /**
     * Set the Name.
     *
     * @param mixed $name The name to set.
     * @return self
     */
    function setName($name) : LinkedObjectDetails
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
    function setType($type) : LinkedObjectDetails
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Title.
     *
     * @param mixed $title The title to set.
     * @return self
     */
    function setTitle($title) : LinkedObjectDetails
    {
        $this->setProperty(
            self::TITLE,
            $title
        );
    
        return $this;
    }
    
    /**
     * Set the Description.
     *
     * @param mixed $description The description to set.
     * @return self
     */
    function setDescription($description) : LinkedObjectDetails
    {
        $this->setProperty(
            self::DESCRIPTION,
            $description
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
            self::NAME,
        );
    }
    
    /**
     * Get the Type.
     *
     * @return \Okta\LinkedObject\LinkedObjectDetailsType
     */
    function getType() : \Okta\LinkedObject\LinkedObjectDetailsType
    {
        return $this->getEnumProperty(
            self::TYPE,
            \Okta\LinkedObject\LinkedObjectDetailsType::class,
        );
    }

    /**
     * Get the Title.
     *
     * @param mixed $title The title to set.
     * @return string
     */
    function getTitle() : string
    {
        return $this->getProperty(
            self::TITLE,
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