<?php

use Cache\Adapter\Void\VoidCachePool;

class TestCacheManager extends \Okta\Cache\CacheManager
{
    public function __construct()
    {
        $this->setCachePool(
            new VoidCachePool
        );
    }
}