# Okta PHP SDK 

[![Build Status](https://api.travis-ci.org/okta/okta-sdk-php.svg?branch=master,dev)](https://travis-ci.org/okta/okta-sdk-php) 
[![Codecov](https://img.shields.io/codecov/c/github/okta/okta-sdk-php.svg)](https://codecov.io/github/okta/okta-sdk-php)
[![License](https://poser.pugx.org/okta/sdk/license.svg)](https://packagist.org/packages/okta/sdk)
[![Support](https://img.shields.io/badge/support-devex@okta.com-blue.svg)](mailto:devex@okta.com?subject=Stormpath+PHP+SDK)

> Note: The PHP SDK is in a preview release state and may change at any time without notice. You should not use this 
in a production environment until a stable 1.x release is made.

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

