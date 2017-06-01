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
     * @return PublicAppInstanceVisibilityHide
     */
    public function getHide(array $options = [])
    {
        return $this->getResourceProperty(
            self::HIDE,
            PublicAppInstanceVisibilityHide::class,
            $options
        );
    }

    /**
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
     * @return hash
     */
    public function getAppLinks()
    {
        return $this->getProperty(self::APP_LINKS);
    }
    
    /**
     * @return boolean
     */
    public function getAutoSubmitToolbar()
    {
        return $this->getProperty(self::AUTO_SUBMIT_TOOLBAR);
    }
}
