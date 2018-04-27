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

use Cache\Adapter\Common\CacheItem;
use Http\Discovery\UriFactoryDiscovery;
use Okta\Client;
use Okta\Resource\AbstractResource;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Http\Message\UriInterface;

abstract class CacheManager
{
    /**
     * @var CacheItemPoolInterface
     */
    private $cachePool;

    /**
     * Set the CachePool.  This should be called from the specific Manager only.
     *
     * @param CacheItemPoolInterface $cachePool The PSR-6 compliant cache pool.
     * @return CacheManager
     */
    protected function setCachePool(CacheItemPoolInterface $cachePool): CacheManager
    {
        $this->cachePool = $cachePool;
        return $this;
    }

    /**
     * Creates the key that will be used by the cache. This will use the URL and will
     * automatically remove any query strings that were used in the original url.
     *
     * @param UriInterface $uri
     * @return string
     */
    public function createCacheKey(UriInterface $uri): string
    {
        $url = "{$uri->getHost()}{$uri->getPath()}";

        return str_replace(['/', '.', '-', '@', '+'],'_',$url);
    }

    /**
     * Get the current cache item pool.
     *
     * @return CacheItemPoolInterface
     */
    public function pool(): CacheItemPoolInterface
    {
        return $this->cachePool;
    }

    /**
     * Save an item into the cache pool
     *
     * @param UriInterface $uri
     * @param \stdClass $itemToCache
     * @return CacheItemInterface
     */
    public function save(UriInterface $uri, \stdClass $itemToCache): CacheItemInterface
    {

        if(
            property_exists($itemToCache, '_links') &&
            property_exists($itemToCache->_links, 'self') &&
            property_exists($itemToCache->_links->self, 'href')
        ) {
            $uri = Client::getInstance()->getDataStore()->getUriFactory()->createUri($itemToCache->_links->self->href);
        }

        $cacheItem = (new CacheItem($this->createCacheKey($uri)))
            ->set($itemToCache)
            ->expiresAfter(new \DateInterval('PT3600S'));

        $this->cachePool->save($cacheItem);

        return $cacheItem;
    }

    /**
     * Delete item from cache. This will also delete all linked items from cache as well.
     *
     * @param UriInterface     $uri
     * @param \stdClass $resource
     * @return void
     */
    public function delete(UriInterface $uri, \stdClass $resource)
    {
        $this->cachePool->deleteItem($this->createCacheKey($uri));

        if(!property_exists($resource, '_links')) {
            return;
        }

        $links = $resource->_links;

        if($links) {
            foreach ($links as $link) {
                if(is_object($link) && property_exists($link, 'href')) {
                    $uri = Client::getInstance()
                        ->getDataStore()
                        ->getUriFactory()
                        ->createUri($link->href);
                }

                $this->cachePool->deleteItem($this->createCacheKey($uri));
            }
        }

    }

}