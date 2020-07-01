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

namespace Okta\InlineHook;

class InlineHookResponseCommandValue extends \Okta\Resource\AbstractResource
{
    const OP = 'op';
    const PATH = 'path';
    const VALUE = 'value';

    /**
     * Set the Op.
     *
     * @param mixed $op The op to set.
     * @return self
     */
    function setOp($op) : InlineHookResponseCommandValue
    {
        $this->setProperty(
            self::OP,
            $op
        );
    
        return $this;
    }
    
    /**
     * Set the Path.
     *
     * @param mixed $path The path to set.
     * @return self
     */
    function setPath($path) : InlineHookResponseCommandValue
    {
        $this->setProperty(
            self::PATH,
            $path
        );
    
        return $this;
    }
    
    /**
     * Set the Value.
     *
     * @param mixed $value The value to set.
     * @return self
     */
    function setValue($value) : InlineHookResponseCommandValue
    {
        $this->setProperty(
            self::VALUE,
            $value
        );
    
        return $this;
    }
    
    /**
     * Get the Op.
     *
     * @param mixed $op The op to set.
     * @return string
     */
    function getOp() : string
    {
        return $this->getProperty(
            self::OP
        );
    }
    
    /**
     * Get the Path.
     *
     * @param mixed $path The path to set.
     * @return string
     */
    function getPath() : string
    {
        return $this->getProperty(
            self::PATH
        );
    }
    
    /**
     * Get the Value.
     *
     * @param mixed $value The value to set.
     * @return string
     */
    function getValue() : string
    {
        return $this->getProperty(
            self::VALUE
        );
    }
    

}