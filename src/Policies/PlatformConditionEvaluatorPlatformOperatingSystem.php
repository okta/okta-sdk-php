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

class PlatformConditionEvaluatorPlatformOperatingSystem extends \Okta\Resource\AbstractResource
{
    const TYPE = 'type';
    const VERSION = 'version';
    const EXPRESSION = 'expression';



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

    /**
     * Get the version.
     *
     * @return \Okta\Policies\PlatformConditionEvaluatorPlatformOperatingSystemVersion
     */
    public function getVersion(array $options = []): \Okta\Policies\PlatformConditionEvaluatorPlatformOperatingSystemVersion
    {
        return $this->getResourceProperty(
            self::VERSION,
            \Okta\Policies\PlatformConditionEvaluatorPlatformOperatingSystemVersion::class,
            $options
        );
    }


    /**
     * Set the version.
     *
     * @param \Okta\Policies\PlatformConditionEvaluatorPlatformOperatingSystemVersion $version The PlatformConditionEvaluatorPlatformOperatingSystemVersion instance.
     * @return self
     */
    public function setVersion(\Okta\Policies\PlatformConditionEvaluatorPlatformOperatingSystemVersion $version)
    {
        $this->setResourceProperty(
            self::VERSION,
            $version
        );

        return $this;
    }

    /**
     * Get the expression.
     *
     * @return string
     */
    public function getExpression()
    {
        return $this->getProperty(self::EXPRESSION);
    }

    /**
    * Set the expression.
    *
    * @param mixed $expression The value to set.
    * @return self
    */
    public function setExpression($expression)
    {
        $this->setProperty(
            self::EXPRESSION,
            $expression
        );

        return $this;
    }
}
