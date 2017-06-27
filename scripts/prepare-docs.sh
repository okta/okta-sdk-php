#!/usr/bin/env bash
curl -I http://get.sensiolabs.org/sami.phar
git clone https://github.com/${TRAVIS_REPO_SLUG}.git full
cd full
git checkout ${TRAVIS_TAG}
php ../sami.phar update sami.php
git checkout ${TRAVIS_TAG}
mkdir build/gh-pages
mv build/docs /build/gh-pages