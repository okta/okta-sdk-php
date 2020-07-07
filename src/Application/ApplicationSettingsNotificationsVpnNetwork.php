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

namespace Okta\Application;

class ApplicationSettingsNotificationsVpnNetwork extends \Okta\Resource\AbstractResource
{
    const EXCLUDE = 'exclude';
    const INCLUDE = 'include';
    const CONNECTION = 'connection';


    /**
     * Set the Exclude.
     *
     * @param mixed $exclude The exclude to set.
     * @return self
     */
    function setExclude($exclude) : ApplicationSettingsNotificationsVpnNetwork
    {
        $this->setProperty(
            self::EXCLUDE,
            $exclude
        );
    
        return $this;
    }
    
    /**
     * Set the Include.
     *
     * @param mixed $include The include to set.
     * @return self
     */
    function setInclude($include) : ApplicationSettingsNotificationsVpnNetwork
    {
        $this->setProperty(
            self::INCLUDE,
            $include
        );
    
        return $this;
    }
    
    /**
     * Set the Connection.
     *
     * @param mixed $connection The connection to set.
     * @return self
     */
    function setConnection($connection) : ApplicationSettingsNotificationsVpnNetwork
    {
        $this->setProperty(
            self::CONNECTION,
            $connection
        );
    
        return $this;
    }
    
    /**
     * Get the Exclude.
     *
     * @param mixed $exclude The exclude to set.
     * @return array
     */
    function getExclude() : array
    {
        return $this->getProperty(
            self::EXCLUDE,
        );
    }
    
    /**
     * Get the Include.
     *
     * @param mixed $include The include to set.
     * @return array
     */
    function getInclude() : array
    {
        return $this->getProperty(
            self::INCLUDE,
        );
    }
    
    /**
     * Get the Connection.
     *
     * @param mixed $connection The connection to set.
     * @return string
     */
    function getConnection() : string
    {
        return $this->getProperty(
            self::CONNECTION,
        );
    }
    

}