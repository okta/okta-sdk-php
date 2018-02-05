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

namespace Okta\Generated\GroupRules;


class GroupRuleGroupCondition extends \Okta\Resource\AbstractResource
{
    const EXCLUDE = 'exclude';
    const INCLUDE = 'include';



    /**
     * Get the exclude.
     *
     * @return array
     */
    public function getExclude()
    {
        return $this->getProperty(self::EXCLUDE);
    }

    /**
    * Set the exclude.
    *
    * @param mixed $exclude The value to set.
    * @return self
    */
    public function setExclude($exclude)
    {
        $this->setProperty(
            self::EXCLUDE,
            $exclude
        );

        return $this;
    }

    /**
     * Get the include.
     *
     * @return array
     */
    public function getInclude()
    {
        return $this->getProperty(self::INCLUDE);
    }

    /**
    * Set the include.
    *
    * @param mixed $include The value to set.
    * @return self
    */
    public function setInclude($include)
    {
        $this->setProperty(
            self::INCLUDE,
            $include
        );

        return $this;
    }
}
