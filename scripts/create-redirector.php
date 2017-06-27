<?php
/**
 * Adapted from contentful.php
 */
$travisRepoSlug = getenv('TRAVIS_REPO_SLUG');
$indexFile = $argv[1];

$shellOutput = shell_exec('git tag');
$tags = explode("\n", $shellOutput);
$tags = array_filter($tags, function ($tag) {
    return trim($tag) !== '';
});

// We remove all non-stable versions from the list as we don't want to direct the docs to them by default
$tags = array_filter($tags, function ($tag) {
    return strpos($tag, '-') === false;
});

usort($tags, function ($a, $b) {
    return version_compare($b, $a);
});

$newestTag = $tags[0];
$repoParts = explode('/', $travisRepoSlug);
$repoOwner = $repoParts[0];
$repoName = $repoParts[1];

$html = '<meta http-equiv="refresh" content="0; url=https://developer.okta.com/' . $repoName . '/' . $newestTag . '/">';

file_put_contents($indexFile, $html);

echo 'Created index file redirecting to ' . $newestTag . '.' . "\n";