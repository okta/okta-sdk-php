<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;
use Sami\Version\GitVersionCollection;
use Sami\RemoteRepository\GitHubRemoteRepository;

$dir = __DIR__ . '/src';

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in($dir)
;


$versions = GitVersionCollection::create($dir)
    ->addFromTags('*')
    ->add('develop', 'Develop')
;

return new Sami($iterator, [
    'title'             => 'Okta PHP SDK',
    'versions'          => $versions,
    'build_dir'         => __DIR__ . '/build/gh-pages/%version%',
    'cache_dir'         => __DIR__ . '/build/doc_cache/%version%',
    'remote_repository' => new GitHubRemoteRepository('okta/okta-sdk-php', dirname($dir)),
]);
