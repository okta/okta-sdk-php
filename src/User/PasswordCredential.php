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

namespace Okta\User;

class PasswordCredential extends \Okta\Resource\AbstractResource
{
    const HASH = 'hash';
    const HOOK = 'hook';
    const VALUE = 'value';

    /**
     * Set the Hash.
     *
     * @param mixed $hash The hash to set.
     * @return self
     */
    function setHash(\Okta\User\PasswordCredentialHash $hash) : PasswordCredential
    {
        $this->setResourceProperty(
            self::HASH,
            $hash
        );
    
        return $this;
    }

    /**
     * Set the Hook.
     *
     * @param mixed $hook The hook to set.
     * @return self
     */
    function setHook(\Okta\User\PasswordCredentialHook $hook) : PasswordCredential
    {
        $this->setResourceProperty(
            self::HOOK,
            $hook
        );
    
        return $this;
    }

    /**
     * Set the Value.
     *
     * @param mixed $value The value to set.
     * @return self
     */
    function setValue($value) : PasswordCredential
    {
        $this->setProperty(
            self::VALUE,
            $value
        );
    
        return $this;
    }
    
    /**
     * Get the Hash.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\PasswordCredentialHash
     */
    function getHash(array $options = []) : \Okta\User\PasswordCredentialHash
    {
        return $this->getResourceProperty(
            self::HASH,
            \Okta\User\PasswordCredentialHash::class,
            $options
        );
    }

    /**
     * Get the Hook.
     *
     * @param array $options Additional options to pass, Typically query params.
     * @return \Okta\User\PasswordCredentialHook
     */
    function getHook(array $options = []) : \Okta\User\PasswordCredentialHook
    {
        return $this->getResourceProperty(
            self::HOOK,
            \Okta\User\PasswordCredentialHook::class,
            $options
        );
    }

    /**
     * Get the Value.
     *
     * @param mixed $value The value to set.
     * @return password
     */
    function getValue() : password
    {
        return $this->getProperty(
            self::VALUE
        );
    }
    

}