#!/bin/bash
#
# Copyright 2017 Okta
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#

set -e

git clone --depth=50 --branch=gh-pages https://github.com/okta/okta-sdk-php.git okta/php-gh-pages
git clone --depth=50 https://github.com/okta/okta-sdk-php.git okta/php-sdk-repo

cd okta/php-gh-pages
composer install

./vendor/bin/sami.php update sami.php

git add --all
git comit -am "AutoDeploy of Documentation $RELEASE_VERSION"
git push origin gh-pages
