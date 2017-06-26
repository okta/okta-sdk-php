#!/usr/bin/env bash
php sami.phar update sami.php
git checkout ${TRAVIS_TAG}
mkdir build/gh-pages
mv build/docs /build/gh-pages