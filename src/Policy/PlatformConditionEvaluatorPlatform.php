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

class PlatformConditionEvaluatorPlatform extends \Okta\Resource\AbstractResource
{
    const OS = 'os';
    const TYPE = 'type';

    /**
     * Set the Os.
     *
     * @param mixed $os The os to set.
     * @return self
     */
    function setOs(\Okta\Policy\PlatformConditionEvaluatorPlatformOperatingSystem $os) : PlatformConditionEvaluatorPlatform
    {
        $this->setResourceProperty(
            self::OS,
            $os
        );
    
        return $this;
    }

    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : PlatformConditionEvaluatorPlatform
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Get the Os.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\Policy\PlatformConditionEvaluatorPlatformOperatingSystem
     */
    function getOs(array $options = []) : \Okta\Policy\PlatformConditionEvaluatorPlatformOperatingSystem
    {
        return $this->getResourceProperty(
            self::OS,
            \Okta\Policy\PlatformConditionEvaluatorPlatformOperatingSystem::class,
            $options
        );
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
    

}