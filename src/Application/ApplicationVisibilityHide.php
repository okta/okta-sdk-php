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

class ApplicationVisibilityHide extends \Okta\Resource\AbstractResource
{
    const I_OS = 'iOS';
    const WEB = 'web';


    /**
     * Set the IOs.
     *
     * @param mixed $iOS The iOS to set.
     * @return self
     */
    function setIOs($iOS) : ApplicationVisibilityHide
    {
        $this->setProperty(
            self::I_OS,
            $iOS
        );
    
        return $this;
    }
    
    /**
     * Set the Web.
     *
     * @param mixed $web The web to set.
     * @return self
     */
    function setWeb($web) : ApplicationVisibilityHide
    {
        $this->setProperty(
            self::WEB,
            $web
        );
    
        return $this;
    }
    
    /**
     * Get the IOs.
     *
     * @param mixed $iOS The iOS to set.
     * @return bool
     */
    function getIOs() : bool
    {
        return $this->getProperty(
            self::I_OS,
        );
    }
    
    /**
     * Get the Web.
     *
     * @param mixed $web The web to set.
     * @return bool
     */
    function getWeb() : bool
    {
        return $this->getProperty(
            self::WEB,
        );
    }
    

}