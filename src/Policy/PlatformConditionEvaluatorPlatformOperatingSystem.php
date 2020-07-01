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

namespace Okta\Policy;

class PlatformConditionEvaluatorPlatformOperatingSystem extends \Okta\Resource\AbstractResource
{
    const TYPE = 'type';
    const VERSION = 'version';
    const EXPRESSION = 'expression';

    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : PlatformConditionEvaluatorPlatformOperatingSystem
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Version.
     *
     * @param mixed $version The version to set.
     * @return self
     */
    function setVersion(\Okta\Policy\PlatformConditionEvaluatorPlatformOperatingSystemVersion $version) : PlatformConditionEvaluatorPlatformOperatingSystem
    {
        $this->setResourceProperty(
            self::VERSION,
            $version
        );
    
        return $this;
    }

    /**
     * Set the Expression.
     *
     * @param mixed $expression The expression to set.
     * @return self
     */
    function setExpression($expression) : PlatformConditionEvaluatorPlatformOperatingSystem
    {
        $this->setProperty(
            self::EXPRESSION,
            $expression
        );
    
        return $this;
    }
    
    /**
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return string
     */
    function getType() : string
    {
        return $this->getProperty(
            self::TYPE
        );
    }
    
    /**
     * Get the Version.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PlatformConditionEvaluatorPlatformOperatingSystemVersion
     */
    function getVersion(array $options = []) : \Okta\Policy\PlatformConditionEvaluatorPlatformOperatingSystemVersion
    {
        return $this->getResourceProperty(
            self::VERSION,
            \Okta\Policy\PlatformConditionEvaluatorPlatformOperatingSystemVersion::class,
            $options
        );
    }

    /**
     * Get the Expression.
     *
     * @param mixed $expression The expression to set.
     * @return string
     */
    function getExpression() : string
    {
        return $this->getProperty(
            self::EXPRESSION
        );
    }
    

}