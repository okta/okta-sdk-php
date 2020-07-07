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

class OAuth2ClaimConditions extends \Okta\Resource\AbstractResource
{
    const SCOPES = 'scopes';


    /**
     * Set the Scopes.
     *
     * @param mixed $scopes The scopes to set.
     * @return self
     */
    function setScopes($scopes) : OAuth2ClaimConditions
    {
        $this->setProperty(
            self::SCOPES,
            $scopes
        );
    
        return $this;
    }
    
    /**
     * Get the Scopes.
     *
     * @param mixed $scopes The scopes to set.
     * @return array
     */
    function getScopes() : array
    {
        return $this->getProperty(
            self::SCOPES,
        );
    }
    

}