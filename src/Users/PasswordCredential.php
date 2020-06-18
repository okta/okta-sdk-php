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

namespace Okta\Users;


class PasswordCredential extends \Okta\Resource\AbstractResource
{
    const HASH = 'hash';
    const HOOK = 'hook';
    const VALUE = 'value';



    /**
     * Get the hash.
     *
     * @return \Okta\Users\PasswordCredentialHash
     */
    public function getHash(array $options = []): \Okta\Users\PasswordCredentialHash
    {
        return $this->getResourceProperty(
            self::HASH,
            \Okta\Users\PasswordCredentialHash::class,
            $options
        );
    }


    /**
     * Set the hash.
     *
     * @param \Okta\Users\PasswordCredentialHash $hash The PasswordCredentialHash instance.
     * @return self
     */
    public function setHash(\Okta\Users\PasswordCredentialHash $hash)
    {
        $this->setResourceProperty(
            self::HASH,
            $hash
        );

        return $this;
    }

    /**
     * Get the hook.
     *
     * @return \Okta\Users\PasswordCredentialHook
     */
    public function getHook(array $options = []): \Okta\Users\PasswordCredentialHook
    {
        return $this->getResourceProperty(
            self::HOOK,
            \Okta\Users\PasswordCredentialHook::class,
            $options
        );
    }


    /**
     * Set the hook.
     *
     * @param \Okta\Users\PasswordCredentialHook $hook The PasswordCredentialHook instance.
     * @return self
     */
    public function setHook(\Okta\Users\PasswordCredentialHook $hook)
    {
        $this->setResourceProperty(
            self::HOOK,
            $hook
        );

        return $this;
    }

    /**
     * Get the value.
     *
     * @return password
     */
    public function getValue()
    {
        return $this->getProperty(self::VALUE);
    }

    /**
    * Set the value.
    *
    * @param mixed $value The value to set.
    * @return self
    */
    public function setValue($value)
    {
        $this->setProperty(
            self::VALUE,
            $value
        );

        return $this;
    }
}
