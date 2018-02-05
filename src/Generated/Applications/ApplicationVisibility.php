<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\Generated\Applications;


class ApplicationVisibility extends \Okta\Resource\AbstractResource
{
    const HIDE = 'hide';
    const APP_LINKS = 'appLinks';
    const AUTO_SUBMIT_TOOLBAR = 'autoSubmitToolbar';



    /**
     * Get the hide.
     *
     * @return \Okta\Applications\ApplicationVisibilityHide
     */
    public function getHide(array $options = []): \Okta\Applications\ApplicationVisibilityHide
    {
        return $this->getResourceProperty(
            self::HIDE,
            \Okta\Applications\ApplicationVisibilityHide::class,
            $options
        );
    }


    /**
     * Set the hide.
     *
     * @param \Okta\Applications\ApplicationVisibilityHide $hide The ApplicationVisibilityHide instance.
     * @return self
     */
    public function setHide(\Okta\Applications\ApplicationVisibilityHide $hide)
    {
        $this->setResourceProperty(
            self::HIDE,
            $hide
        );
        
        return $this;
    }

    /**
     * Get the appLinks.
     *
     * @return \stdClass
     */
    public function getAppLinks()
    {
        return $this->getProperty(self::APP_LINKS);
    }

    /**
    * Set the appLinks.
    *
    * @param mixed $appLinks The value to set.
    * @return self
    */
    public function setAppLinks($appLinks)
    {
        $this->setProperty(
            self::APP_LINKS,
            $appLinks
        );

        return $this;
    }

    /**
     * Get the autoSubmitToolbar.
     *
     * @return bool
     */
    public function getAutoSubmitToolbar()
    {
        return $this->getProperty(self::AUTO_SUBMIT_TOOLBAR);
    }

    /**
    * Set the autoSubmitToolbar.
    *
    * @param mixed $autoSubmitToolbar The value to set.
    * @return self
    */
    public function setAutoSubmitToolbar($autoSubmitToolbar)
    {
        $this->setProperty(
            self::AUTO_SUBMIT_TOOLBAR,
            $autoSubmitToolbar
        );

        return $this;
    }
}
