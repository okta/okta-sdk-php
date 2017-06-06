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

namespace Okta\Apps;

use Okta\Resource\AbstractResource;

class PublicAppInstanceVisibility extends AbstractResource
{
    const HIDE = 'hide';
    const APP_LINKS = 'appLinks';
    const AUTO_SUBMIT_TOOLBAR = 'autoSubmitToolbar';


    /**
     * Get the hide.
     *
     * @return PublicAppInstanceVisibilityHide
     */
    public function getHide(array $options = []): PublicAppInstanceVisibilityHide
    {
        return $this->getResourceProperty(
                        self::HIDE,
                        PublicAppInstanceVisibilityHide::class,
                        $options
                    );
    }

    /**
     * Set the hide.
     *
     * @param PublicAppInstanceVisibilityHide $hide The PublicAppInstanceVisibilityHide instance.
     * @return self
     */
    public function setHide(PublicAppInstanceVisibilityHide $hide)
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
     * @return array
     */
    public function getAppLinks(): array
    {
        return $this->getProperty(self::APP_LINKS);
    }
    
    /**
     * Get the autoSubmitToolbar.
     *
     * @return boolean
     */
    public function getAutoSubmitToolbar(): boolean
    {
        return $this->getProperty(self::AUTO_SUBMIT_TOOLBAR);
    }
}
