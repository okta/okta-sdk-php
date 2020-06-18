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


class PasswordPolicyPasswordSettingsComplexity extends \Okta\Resource\AbstractResource
{
    const MIN_LENGTH = 'minLength';
    const MIN_NUMBER = 'minNumber';
    const MIN_SYMBOL = 'minSymbol';
    const DICTIONARY = 'dictionary';
    const MIN_LOWER_CASE = 'minLowerCase';
    const MIN_UPPER_CASE = 'minUpperCase';
    const EXCLUDE_USERNAME = 'excludeUsername';
    const EXCLUDE_ATTRIBUTES = 'excludeAttributes';

    private $minLength = '8';
    private $minNumber = '1';
    private $minSymbol = '1';
    private $minLowerCase = '1';
    private $minUpperCase = '1';
    private $excludeUsername = 'true';
    private $excludeAttributes = '1';


    /**
     * Get the dictionary.
     *
     * @return \Okta\Policies\PasswordDictionary
     */
    public function getDictionary(array $options = []): \Okta\Policies\PasswordDictionary
    {
        return $this->getResourceProperty(
            self::DICTIONARY,
            \Okta\Policies\PasswordDictionary::class,
            $options
        );
    }


    /**
     * Set the dictionary.
     *
     * @param \Okta\Policies\PasswordDictionary $dictionary The PasswordDictionary instance.
     * @return self
     */
    public function setDictionary(\Okta\Policies\PasswordDictionary $dictionary)
    {
        $this->setResourceProperty(
            self::DICTIONARY,
            $dictionary
        );

        return $this;
    }
}
