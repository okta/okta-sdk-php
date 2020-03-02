<?php

require __DIR__ . '/BaseTestCase.php';
require __DIR__ . '/BaseUnitTestCase.php';
require __DIR__ . '/BaseIntegrationTestCase.php';
require __DIR__ . '/fixtures/TestCacheManager.php';

if (file_exists(__DIR__ . '/../.env')) {
    
    $dotenv = Dotenv\Dotenv::createMutable(__DIR__ . '/../');
    $dotenv->load();
}
