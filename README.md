
# Getting Started with Shell Card Management APIs

## Introduction

The Shell Card Management API provides secure and structured access to the Shell Card Platform, enabling integration with Shell’s internal systems for managing card-related resources.

This REST-based API uses the POST method for all operations—including retrieval, creation, update, and deletion of resources. It supports flexible search capabilities through JSON-encoded request bodies and returns JSON-formatted responses. Standard HTTP status codes are used to indicate the outcome of each request.

Authentication is handled via OAuth 2.0 using the Client Credentials flow. Access tokens must be included in the Authorization header of each request.

All resources are managed within the Shell Card Platform, which abstracts the complexity of backend systems. Some operations may be processed asynchronously, and clients should be prepared to handle delayed responses or polling mechanisms where applicable.

Go to the Shell Developer Portal: [https://developer.shell.com](https://developer.shell.com)

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```bash
composer require "shell/card-management-sdk:2.0.1"
```

Or add it to the composer.json file manually as given below:

```json
"require": {
    "shell/card-management-sdk": "2.0.1"
}
```

You can also view the package at:
https://packagist.org/packages/shell/card-management-sdk#2.0.1

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/sdks-io/card-management-php-sdk/tree/2.0.1/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| environment | `Environment` | The API environment. <br> **Default: `Environment.SIT`** |
| timeout | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| enableRetries | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| numberOfRetries | `int` | The number of retries to make.<br>*Default*: `0` |
| retryInterval | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| backOffFactor | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| maximumRetryWaitTime | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| retryOnTimeout | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| httpStatusCodesToRetry | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| httpMethodsToRetry | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| proxyConfiguration | [`ProxyConfigurationBuilder`](https://www.github.com/sdks-io/card-management-php-sdk/tree/2.0.1/doc/proxy-configuration-builder.md) | Represents the proxy configurations for API calls |
| clientCredentialsAuth | [`ClientCredentialsAuth`](https://www.github.com/sdks-io/card-management-php-sdk/tree/2.0.1/doc/auth/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |

The API client can be initialized as follows:

```php
use ShellCardManagementAPIsLib\Environment;
use ShellCardManagementAPIsLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use ShellCardManagementAPIsLib\ShellCardManagementAPIsClientBuilder;

$client = ShellCardManagementAPIsClientBuilder::init()
    ->clientCredentialsAuthCredentials(
        ClientCredentialsAuthCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
    )
    ->environment(Environment::SIT)
    ->build();
```

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| SIT | **Default** |
| Production | - |

## Authorization

This API uses the following authentication schemes.

* [`BearerToken (OAuth 2 Client Credentials Grant)`](https://www.github.com/sdks-io/card-management-php-sdk/tree/2.0.1/doc/auth/oauth-2-client-credentials-grant.md)

## List of APIs

* [Customer](https://www.github.com/sdks-io/card-management-php-sdk/tree/2.0.1/doc/controllers/customer.md)
* [Restriction](https://www.github.com/sdks-io/card-management-php-sdk/tree/2.0.1/doc/controllers/restriction.md)
* [Card](https://www.github.com/sdks-io/card-management-php-sdk/tree/2.0.1/doc/controllers/card.md)

## SDK Infrastructure

### Configuration

* [ProxyConfigurationBuilder](https://www.github.com/sdks-io/card-management-php-sdk/tree/2.0.1/doc/proxy-configuration-builder.md)

### HTTP

* [HttpRequest](https://www.github.com/sdks-io/card-management-php-sdk/tree/2.0.1/doc/http-request.md)
* [HttpResponse](https://www.github.com/sdks-io/card-management-php-sdk/tree/2.0.1/doc/http-response.md)

### Utilities

* [ApiException](https://www.github.com/sdks-io/card-management-php-sdk/tree/2.0.1/doc/api-exception.md)

