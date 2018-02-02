<?php
/******************************************************************************
 * Copyright 2018 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

namespace Okta\Cache;

use Cache\Adapter\Filesystem\FilesystemCachePool;
use League\Flysystem\Adapter\AbstractAdapter;
use League\Flysystem\Filesystem;
use League\Flysystem\Memory\MemoryAdapter;

class MemoryManager extends CacheManager
{

    public function __construct(AbstractAdapter $adapter = null)
    {
        if(null === $adapter) {
            $adapter = new MemoryAdapter();
        }

        $this->setCachePool(
            new FilesystemCachePool(
                new Filesystem(
                    $adapter
                )
            )
        );

    }
}