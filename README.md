# Okta PHP SDK

[![Build Status](https://api.travis-ci.org/okta/okta-sdk-php.svg?branch=master,develop)](https://travis-ci.org/okta/okta-sdk-php)
[![Codecov](https://img.shields.io/codecov/c/github/okta/okta-sdk-php.svg)](https://codecov.io/github/okta/okta-sdk-php)
[![License](https://poser.pugx.org/okta/sdk/license.svg)](https://packagist.org/packages/okta/sdk)
[![Support](https://img.shields.io/badge/support-Developer%20Forum-blue.svg)](https://devforum.okta.com/)

## Installation
**okta-sdk-php** is available on Packagist as the [okta/sdk](http://packagist.org/packages/okta/sdk) package.

Run `composer require okta/sdk` from the root of your project in terminal, and you are done.

## Client Initialization
Once you have the SDK installed in your project, you will need to instantiate a Client object. We follow the builder
pattern for building a Client. You can create a Client by calling the ClientBuilder and relying on the ~/.okta/okta
.yaml file for the settings

```php
$client = (new \Okta\ClientBuilder())
            ->build();
```

By default, The client builder will look for a file in your home directory with the Okta properties you want to use.
This file should be placed at  `~/.okta/okta.yaml`. If at this location, you do not need to define the location
during initialization. If you are unable to place the file there, or you are on a Windows based machine, you will
have to define the location of this file manually if you want to use the file.

```php
$client = (new \Okta\ClientBuilder())
            ->setConfigFileLocation('path/to/okta.yaml')
            ->build();
```

If you need to override any of the defaults from your `~/.okta/okta.yaml` file, or you do not have one, you can set
the properties on the client builder directly. The minimum required properties are your token and organization url.

```php
$client = (new \Okta\ClientBuilder())
            ->setToken('YourApiToken')
            ->setOrganizationUrl('https://dev-123456.oktapreview.com')
            ->build();
```

### Changing your Http Client Instance
The Okta PHP SDK follows PSR-7 standards for HTTP Messages. We are using Httplug which allows you to change out to
any PSR-7 compliant Http Client. Create a new instance of a `Http\Client\HttpClient`
implementation and pass it into the client builder.

```php
$client = (new \Okta\ClientBuilder())
            ->setHttpClient(new Http\Client\HttpClient())
            ->build();
```

### OAuth 2.0

Okta allows you to interact with Okta APIs using scoped OAuth 2.0 access tokens. Each access token enables the bearer to perform specific actions on specific Okta endpoints, with that ability controlled by which scopes the access token contains.

This SDK supports this feature only for service-to-service applications. Check out [our guides](https://developer.okta.com/docs/guides/implement-oauth-for-okta-serviceapp/overview/) to learn more about how to register a new service application using a private and public key pair.

When using this approach you won't need an API Token because the SDK will request an access token for you. In order to use OAuth 2.0, construct a client instance by passing the following parameters:

```php
$client = (new \Okta\ClientBuilder)
            ->setAuthorizationMode(new \Okta\Utilities\AuthorizationMode(\Okta\Utilities\AuthorizationMode::PRIVATE_KEY))
            ->setClientId({{clientId}})
            ->setScopes("okta.users.read okta.apps.read")
            ->setPrivateKey("{{PEM PRIVATE KEY BLOCK}}")
            ->build();
```


## Users
### Finding a user by id
```php
$user = new \Okta\Users\User();
$foundUser = $user->get('00uak5dkxjhg4AQ230h7');
dump($foundUser);
```

### Finding a user by email
```php
$user = new \Okta\Users\User();
$foundUser = $user->get('email@example.com');
dump($foundUser);
```

### Creating a User
```php
$user = new \Okta\Users\User();
$profile = new \Okta\Users\UserProfile();

$profile->setFirstName('John')
    ->setLastName('User')
    ->setLogin('auser@example.com')
    ->setEmail('auser@example.com');
$user->setProfile($profile);

$credentials = new \Okta\Users\Credentials();

$password = new \Okta\Users\Password();
$password->setPassword('Abcd1234!');

$recoveryQuestion = new \Okta\Users\RecoveryQuestion();
$recoveryQuestion->setQuestion('What Language do I write in?')
    ->setAnswer('PHP!');


$provider = new \Okta\Users\Provider();
$provider->setName('OKTA')
    ->setType('OKTA');


$credentials->setPassword($password);
$credentials->setRecoveryQuestion($recoveryQuestion);
$credentials->setProvider($provider);


$user->setCredentials($credentials);

$user->setGroupIds([
    '00gajavp1anBX8svy0h7',
    '00gajb08d19WCvbsC0h7'
]);

$user->create();
```

### Update user profile
Our SDK allows you to fill in the default profile fields, as well as other dynamic fields that you create in your
profile.

```php
$user = new \Okta\Users\User();
    $foundUser = $user->get('00uak5dkxjhg4AQ230h7');
    $profile = $foundUser->getProfile();
    $profile->middleName = 'Middle Name';
    $profile->someField = 'Just Testing Field';
    $foundUser->setProfile($profile);
    $foundUser->save();
```

## Pagination and Collections
All of our calls that return a set of items will return a Collection object. The collection object we built on top of
 is the tightenco/collect object.

### Getting all users
```php
$users = (new \Okta\Okta)->getUsers();

// get the first user in the collection
$firstUser = $users->first();
```

### Narrowing Responses
To start at the second entry and get the next two items:
```php
$users = (new \Okta\Okta)->getUsers(['query' => ['limit' = 2, 'after' = 2]]);
```

## Caching
The Okta PHP SDK allows any resource with a self link to be cached by default. The SDK uses any PSR-6
caching adaptor that you would like to use. By default, we ship with the
[filesystem cache pool](https://github.com/php-cache/filesystem-adapter) with the
[flysystem memory adaptor](https://github.com/thephpleague/flysystem-memory).  By doing this, there is no
need to configure anything, however, if you would like to run with your own Cache strategy, or change how
the default works, you are able to swap out the Cache Manager. Create a new Cache Manager that extends the
base `\Okta\Cache\CacheManager` class, and call the parent `setCachePool()` method. This should be called
with an instance of a PSR-6 compliant cache pool implementation.  Once created, you can swap out the manager
using the `ClientBuilder` class

```php
$clientBuilder = new ClientBuilder();
        $clientBuilder->setCacheManager(new MyCacheManager());
        $client = $clientBuilder->build();
```

### Contents of the okta.yaml File
```yaml
okta:
  client:
    orgUrl: "https://{yourOktaDomain}"
    token: "{token}"
```

When you use OAuth 2.0 the full YAML configuration looks like:

```yaml
okta:
  client:
    connectionTimeout: 30 # seconds
    orgUrl: "https://{yourOktaDomain}"
    proxy:
      port: null
      host: null
      username: null
      password: null
    authorizationMode: "PrivateKey"
    clientId: "{yourClientId}"
    Scopes:
      - scope.1
      - scope.2
    PrivateKey: "{PEM PRIVATE KEY}"
    requestTimeout: 0 # seconds
    rateLimit:
      maxRetries: 4
```

> You can pass the path to your private key pem file as well instead of copying the pem string into the YAML configuration
> E.g `PrivateKey: /Path/to/privateKey.pem`

For information on what can go into the query property, visit
[our documentation](https://developer.okta.com/docs/api/resources/users.html#list-users)
