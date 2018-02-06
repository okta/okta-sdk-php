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


class ApplicationVisibilityHide extends \Okta\Resource\AbstractResource
{
    const I_OS = 'iOS';
    const WEB = 'web';



    /**
     * Get the iOS.
     *
     * @return bool
     */
    public function getIOs()
    {
        return $this->getProperty(self::I_OS);
    }

    /**
    * Set the iOS.
    *
    * @param mixed $iOS The value to set.
    * @return self
    */
    public function setIOs($iOS)
    {
        $this->setProperty(
            self::I_OS,
            $iOS
        );

        return $this;
    }

    /**
     * Get the web.
     *
     * @return bool
     */
    public function getWeb()
    {
        return $this->getProperty(self::WEB);
    }

    /**
    * Set the web.
    *
    * @param mixed $web The value to set.
    * @return self
    */
    public function setWeb($web)
    {
        $this->setProperty(
            self::WEB,
            $web
        );

        return $this;
    }
}
