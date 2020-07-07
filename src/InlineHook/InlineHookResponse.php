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

class InlineHookResponse extends \Okta\Resource\AbstractResource
{
    const COMMANDS = 'commands';


    /**
     * Set the Commands.
     *
     * @param mixed $commands The commands to set.
     * @return self
     */
    function setCommands($commands) : InlineHookResponse
    {
        $this->setProperty(
            self::COMMANDS,
            $commands
        );
    
        return $this;
    }
    
    /**
     * Get the Commands.
     *
     * @param mixed $commands The commands to set.
     * @return array
     */
    function getCommands() : array
    {
        return $this->getProperty(
            self::COMMANDS,
        );
    }
    

}