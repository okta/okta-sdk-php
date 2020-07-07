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

namespace Okta\Log;

class LogActor extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const TYPE = 'type';
    const DETAIL = 'detail';
    const ALTERNATE_ID = 'alternateId';
    const DISPLAY_NAME = 'displayName';


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
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return string
     */
    function getType() : string
    {
        return $this->getProperty(
            self::TYPE,
        );
    }
    
    /**
     * Get the Detail.
     *
     * @param mixed $detail The detail to set.
     * @return \stdClass
     */
    function getDetail() : \stdClass
    {
        return $this->getProperty(
            self::DETAIL,
        );
    }
    
    /**
     * Get the AlternateId.
     *
     * @param mixed $alternateId The alternateId to set.
     * @return string
     */
    function getAlternateId() : string
    {
        return $this->getProperty(
            self::ALTERNATE_ID,
        );
    }
    
    /**
     * Get the DisplayName.
     *
     * @param mixed $displayName The displayName to set.
     * @return string
     */
    function getDisplayName() : string
    {
        return $this->getProperty(
            self::DISPLAY_NAME,
        );
    }
    

}