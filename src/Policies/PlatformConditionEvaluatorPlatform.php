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

namespace Okta\Policies;

class PlatformConditionEvaluatorPlatform extends \Okta\Resource\AbstractResource
{
    const OS = 'os';
    const TYPE = 'type';



    /**
     * Get the os.
     *
     * @return \Okta\Policies\PlatformConditionEvaluatorPlatformOperatingSystem
     */
    public function getOs(array $options = []): \Okta\Policies\PlatformConditionEvaluatorPlatformOperatingSystem
    {
        return $this->getResourceProperty(
            self::OS,
            \Okta\Policies\PlatformConditionEvaluatorPlatformOperatingSystem::class,
            $options
        );
    }


    /**
     * Set the os.
     *
     * @param \Okta\Policies\PlatformConditionEvaluatorPlatformOperatingSystem $os The PlatformConditionEvaluatorPlatformOperatingSystem instance.
     * @return self
     */
    public function setOs(\Okta\Policies\PlatformConditionEvaluatorPlatformOperatingSystem $os)
    {
        $this->setResourceProperty(
            self::OS,
            $os
        );

        return $this;
    }

    /**
     * Get the type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->getProperty(self::TYPE);
    }

    /**
    * Set the type.
    *
    * @param mixed $type The value to set.
    * @return self
    */
    public function setType($type)
    {
        $this->setProperty(
            self::TYPE,
            $type
        );

        return $this;
    }
}
