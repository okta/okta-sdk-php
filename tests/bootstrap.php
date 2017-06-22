<?php

require __DIR__ . '/BaseTestCase.php';

if (!is_dir(posix_getpwuid(posix_getuid())['dir'] . '/.okta')) {
    mkdir(posix_getpwuid(posix_getuid())['dir'] . '/.okta');
}

file_put_contents(
    posix_getpwuid(posix_getuid())['dir'] . '/.okta/okta.yaml',
    '{okta: { client: { token:"defaultToken", orgUrl:"https://default-org.okta.com"}}}');