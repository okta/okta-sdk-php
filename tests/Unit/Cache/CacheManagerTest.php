<?php

use Http\Discovery\UriFactoryDiscovery;
use Okta\ClientBuilder;

class CacheManagerTest extends BaseTestCase
{
    /** @test */
    public function can_generate_a_cache_key_string_from_a_uri()
    {
         $uriFactory = UriFactoryDiscovery::find();
         $uri = $uriFactory->createUri('https://okta.com/sample/cache-key/test+test@test.com');
         $query = http_build_query(['with'=>'a','query'=>'string']);

         $uri = $uri->withQuery($query);

         $clientBuilder = new ClientBuilder();
         $clientBuilder->setCacheManager(new TestCacheManager());
         $client = $clientBuilder->build();

         $cacheKey = $client->getCacheManager()->createCacheKey($uri);

         $this->assertEquals('okta_com_sample_cache_key_test_test_test_com', $cacheKey, 'The cache key was not created correctly.');
    }

    /** @test */
    public function can_get_the_cache_pool_from_the_manager()
    {
        $clientBuilder = new ClientBuilder();
        $client = $clientBuilder->build();
        $cachePool = $client->getCacheManager()->pool();

        $this->assertInstanceOf(\Psr\Cache\CacheItemPoolInterface::class, $cachePool, 'Could not get the cache pool from the manager.');
    }

    /** @test */
    public function cache_manager_can_store_item_in_cache()
    {
        $uriFactory = UriFactoryDiscovery::find();
        $uri = $uriFactory->createUri('https://okta.com/sample/cache/key');

        $clientBuilder = new ClientBuilder();
        $client = $clientBuilder->build();

        $cacheManager = $client->getCacheManager();

        $this->assertFalse($cacheManager->pool()->hasItem($cacheManager->createCacheKey($uri)));

        $cacheManager->save($uri, json_decode('{"test":"cache"}'));

        $this->assertTrue($cacheManager->pool()->hasItem($cacheManager->createCacheKey($uri)));

    }

}