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

class AcsEndpoint extends \Okta\Resource\AbstractResource
{
    const URL = 'url';
    const INDEX = 'index';


    /**
     * Set the Url.
     *
     * @param mixed $url The url to set.
     * @return self
     */
    function setUrl($url) : AcsEndpoint
    {
        $this->setProperty(
            self::URL,
            $url
        );
    
        return $this;
    }
    
    /**
     * Set the Index.
     *
     * @param mixed $index The index to set.
     * @return self
     */
    function setIndex($index) : AcsEndpoint
    {
        $this->setProperty(
            self::INDEX,
            $index
        );
    
        return $this;
    }
    
    /**
     * Get the Url.
     *
     * @param mixed $url The url to set.
     * @return string
     */
    function getUrl() : string
    {
        return $this->getProperty(
            self::URL,
        );
    }
    
    /**
     * Get the Index.
     *
     * @param mixed $index The index to set.
     * @return int
     */
    function getIndex() : int
    {
        return $this->getProperty(
            self::INDEX,
        );
    }
    

}