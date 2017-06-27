#!/usr/bin/env bash
git clone https://github.com/${TRAVIS_REPO_SLUG}.git full
cd full
git checkout ${TRAVIS_TAG}
php ../sami.phar update sami.php
git checkout ${TRAVIS_TAG}
mkdir build/gh-pages/latest
php scripts/create-redirector.php build/gh-pages/latest/index.html
php scripts/create-redirector.php build/gh-pages/index.html
