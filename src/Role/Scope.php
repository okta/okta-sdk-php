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

namespace Okta\Role;

class Scope extends \Okta\Resource\AbstractResource
{
    const TYPE = 'type';
    const STRING_VALUE = 'stringValue';


    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : Scope
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the StringValue.
     *
     * @param mixed $stringValue The stringValue to set.
     * @return self
     */
    function setStringValue($stringValue) : Scope
    {
        $this->setProperty(
            self::STRING_VALUE,
            $stringValue
        );
    
        return $this;
    }
    
    /**
     * Get the Type.
     *
     * @return \Okta\Role\ScopeType
     */
    function getType() : \Okta\Role\ScopeType
    {
        return $this->getEnumProperty(
            self::TYPE,
            \Okta\Role\ScopeType::class,
        );
    }

    /**
     * Get the StringValue.
     *
     * @param mixed $stringValue The stringValue to set.
     * @return string
     */
    function getStringValue() : string
    {
        return $this->getProperty(
            self::STRING_VALUE,
        );
    }
    

}