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

class PasswordDictionary extends \Okta\Resource\AbstractResource
{
    const COMMON = 'common';



    /**
     * Get the common.
     *
     * @return \Okta\Policies\PasswordDictionaryCommon
     */
    public function getCommon(array $options = []): \Okta\Policies\PasswordDictionaryCommon
    {
        return $this->getResourceProperty(
            self::COMMON,
            \Okta\Policies\PasswordDictionaryCommon::class,
            $options
        );
    }


    /**
     * Set the common.
     *
     * @param \Okta\Policies\PasswordDictionaryCommon $common The PasswordDictionaryCommon instance.
     * @return self
     */
    public function setCommon(\Okta\Policies\PasswordDictionaryCommon $common)
    {
        $this->setResourceProperty(
            self::COMMON,
            $common
        );

        return $this;
    }
}
