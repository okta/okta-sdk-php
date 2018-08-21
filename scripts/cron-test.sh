export OKTA_CLIENT_ORGURL=$TREX_OKTA_CLIENT_ORGURL
export OKTA_CLIENT_TOKEN=$TREX_OKTA_CLIENT_TOKEN
export OKTA_MOCK_TESTS=false

# Run tests for php 7.2. If its not 7.2, exit
php --version | grep -w 7.2

if [[ $? != 0 ]] ; then
    exit 0
fi

composer test:integration
