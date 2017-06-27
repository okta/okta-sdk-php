#!/usr/bin/env bash
git clone https://github.com/${TRAVIS_REPO_SLUG}.git full
cd full
git checkout ${TRAVIS_TAG}
php ../sami.phar update sami.php
git checkout ${TRAVIS_TAG}
