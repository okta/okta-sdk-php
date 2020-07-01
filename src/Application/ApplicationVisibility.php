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

class ApplicationVisibility extends \Okta\Resource\AbstractResource
{
    const HIDE = 'hide';
    const APP_LINKS = 'appLinks';
    const AUTO_SUBMIT_TOOLBAR = 'autoSubmitToolbar';

    /**
     * Set the Hide.
     *
     * @param mixed $hide The hide to set.
     * @return self
     */
    function setHide(\Okta\Application\ApplicationVisibilityHide $hide) : ApplicationVisibility
    {
        $this->setResourceProperty(
            self::HIDE,
            $hide
        );
    
        return $this;
    }

    /**
     * Set the AppLinks.
     *
     * @param mixed $appLinks The appLinks to set.
     * @return self
     */
    function setAppLinks($appLinks) : ApplicationVisibility
    {
        $this->setProperty(
            self::APP_LINKS,
            $appLinks
        );
    
        return $this;
    }
    
    /**
     * Set the AutoSubmitToolbar.
     *
     * @param mixed $autoSubmitToolbar The autoSubmitToolbar to set.
     * @return self
     */
    function setAutoSubmitToolbar($autoSubmitToolbar) : ApplicationVisibility
    {
        $this->setProperty(
            self::AUTO_SUBMIT_TOOLBAR,
            $autoSubmitToolbar
        );
    
        return $this;
    }
    
    /**
     * Get the Hide.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Application\ApplicationVisibilityHide
     */
    function getHide(array $options = []) : \Okta\Application\ApplicationVisibilityHide
    {
        return $this->getResourceProperty(
            self::HIDE,
            \Okta\Application\ApplicationVisibilityHide::class,
            $options
        );
    }

    /**
     * Get the AppLinks.
     *
     * @param mixed $appLinks The appLinks to set.
     * @return \stdClass
     */
    function getAppLinks() : \stdClass
    {
        return $this->getProperty(
            self::APP_LINKS
        );
    }
    
    /**
     * Get the AutoSubmitToolbar.
     *
     * @param mixed $autoSubmitToolbar The autoSubmitToolbar to set.
     * @return bool
     */
    function getAutoSubmitToolbar() : bool
    {
        return $this->getProperty(
            self::AUTO_SUBMIT_TOOLBAR
        );
    }
    

}