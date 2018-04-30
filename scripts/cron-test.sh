export OKTA_CLIENT_ORGURL=$TREX_OKTA_CLIENT_ORGURL
export OKTA_CLIENT_TOKEN=$TREX_OKTA_CLIENT_TOKEN
export OKTA_MOCK_TESTS=false

echo '------------------'
echo $OKTA_CLIENT_ORGURL
echo '------------------'

composer test:integration
