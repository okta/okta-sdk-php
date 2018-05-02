export OKTA_CLIENT_ORGURL=$TREX_OKTA_CLIENT_ORGURL
export OKTA_CLIENT_TOKEN=$TREX_OKTA_CLIENT_TOKEN
export OKTA_MOCK_TESTS=false

php --version | grep -w 7.1

if [[ $? != 0 ]] ; then
    exit 0
fi

composer test:integration
