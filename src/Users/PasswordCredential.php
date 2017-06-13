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

use Okta\Resource\AbstractResource;

class PasswordCredential extends AbstractResource
{
    const HASH = 'hash';



    /**
     * Get the hash.
     *
     * @return HashedPassword
     */
    public function getHash(array $options = []): HashedPassword
    {
        return $this->getResourceProperty(
                        self::HASH,
                        HashedPassword::class,
                        $options
                    );
    }

    /**
     * Set the hash.
     *
     * @param HashedPassword $hash The HashedPassword instance.
     * @return self
     */
    public function setHash(HashedPassword $hash)
    {
        $this->setResourceProperty(
                        self::HASH,
                        $hash
                    );
        
        return $this;
    }
}
