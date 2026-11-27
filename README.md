# Online Payments PHP SDK

## Introduction

The PHP SDK helps you to communicate with the payment platform server API. Its primary features are:

* convenient PHP library for the API calls and responses
    * marshals PHP request objects to HTTP requests
    * unmarshals HTTP responses to PHP response objects or PHP exceptions
* handling of all the details concerning authentication
* handling of required metadata

See the [Worldline Online Payments Developer Hub](https://docs.direct.worldline-solutions.com/documentation/sdk/server/php/) for more information on how to use the SDK.

## Structure of this repository

This repository consists out of three main components:

1. The source code of the SDK itself:
    * `/src`: the API clients, request and response classes and exceptions, generated from the API specification
    * `/lib`: the hand-written runtime, such as communication, authentication, logging and webhooks
2. The source code of the SDK unit tests: `/tests/OnlinePayments/Sdk/Unit`
3. The source code of the integration tests: `/tests/OnlinePayments/Sdk/Integration`

Both `/src` and `/lib` use the `OnlinePayments\Sdk` namespace.

## Requirements

PHP 8.3 or higher is required, with the `curl`, `json`, `mbstring` and `zlib` extensions. In addition, the following package is required:

* [robtimus/multipart](https://packagist.org/packages/robtimus/multipart) 1.0 or higher, for multipart uploads

This package will be installed automatically if the SDK is installed using Composer.

## Installation

### Using Composer

To install the SDK using [Composer](https://getcomposer.org/download/), execute the following command:

    composer require wl-online-payments-direct/sdk-php

Then include the Composer autoloader in your project, if this is not already done:

```php
require __DIR__ . '/vendor/autoload.php';
```

## Working with AI agents

The SDK comes with an agent skill for AI coding agents such as Claude Code, Codex, GitHub Copilot and Cursor. It tells the agent how to choose an integration method, which steps each flow needs, which rules every integration must follow, and gives code examples that are checked against this SDK version.

The skill for this version is available:

* online, as plain Markdown for agents: https://raw.githubusercontent.com/wl-online-payments-direct/sdk-php/14.0.0/skills/worldline-direct/SKILL.md
* online, on GitHub: https://github.com/wl-online-payments-direct/sdk-php/blob/14.0.0/skills/worldline-direct/SKILL.md
* in the Composer package: `vendor/wl-online-payments-direct/sdk-php/skills/worldline-direct/`
* in this repository: `skills/worldline-direct/`

To make your agent use it, add this to the `AGENTS.md` or `CLAUDE.md` file of your project:

```
For the Worldline Direct integration (wl-online-payments-direct/sdk-php), read and follow the agent skill
vendor/wl-online-payments-direct/sdk-php/skills/worldline-direct/SKILL.md
(online: https://raw.githubusercontent.com/wl-online-payments-direct/sdk-php/14.0.0/skills/worldline-direct/SKILL.md)
Use the code shown in the skill; do not write SDK calls from memory.
```

Agents that support the Agent Skills format can also load the folder directly, for example by copying `vendor/wl-online-payments-direct/sdk-php/skills/worldline-direct/` to `.claude/skills/worldline-direct/` in your project for Claude Code.

## Manual installation

1. Download the latest version of the PHP SDK from GitHub. Choose the `sdk-php-x.y.z.tar.gz` file from the [releases](https://github.com/wl-online-payments-direct/sdk-php/releases) page, where `x.y.z` is the version number.
2. Add the contents of the `tar.gz` file to your project. The contents of the `/src` and `/lib` folders may be combined, if this is required by the project.
3. Add all classes from the `/src` and `/lib` folders to your autoloader; all classes inside these folders are compliant with [PSR-4](https://www.php-fig.org/psr/psr-4/).
4. Install [robtimus/multipart](https://packagist.org/packages/robtimus/multipart) in the same way, and add it to your autoloader.

## Usage

### Creating a client

```php
use OnlinePayments\Sdk\Factory;

$client = Factory::createClient(
    apiEndpoint: 'https://payment.direct.ecom.preprod.worldline-solutions.com',
    apiKeyId: '...',
    apiSecret: '...',
    integrator: 'MyShop',
    connectTimeout: 10,    // seconds
    readTimeout: 60,       // seconds
    // optional: proxyConfiguration, shoppingCartExtension
);
```

The timeouts must be positive. `readTimeout` is the maximum time for the whole request, including the transfer of the response.
For large uploads or slow connections, use a higher value.

A proxy can be configured with `proxyConfiguration: new ProxyConfiguration('proxy.example.com', 3128)`, optionally with a username and password.

A client can also be created from a `CommunicatorConfiguration` with `Factory::createClientFromConfiguration($configuration)`.

The merchant ID is not part of the client configuration; pass it to `$client->merchant($merchantId)`.

### Creating requests

Request objects can be built with the fluent `with*` methods, the setters or the public properties:

```php
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CreatePaymentRequest;
use OnlinePayments\Sdk\Domain\Order;

$request = (new CreatePaymentRequest())
    ->withOrder((new Order())
        ->withAmountOfMoney((new AmountOfMoney())->withAmount(125000)->withCurrencyCode('EUR')));

$callContext = new CallContext();
$callContext->setIdempotenceKey('order-42');

$response = $client->merchant($merchantId)->payments()->createPayment($request, $callContext);
```

Assigning a property that does not exist throws an `Exception`.
`var_dump` and `print_r` of a request or response object show its fields, with card numbers, CVVs and personal data masked.

### Handling errors

```php
use OnlinePayments\Sdk\Communication\CommunicationException;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\DeclinedPaymentException;
use OnlinePayments\Sdk\ResponseException;

try {
    $response = $client->merchant($merchantId)->payments()->createPayment($request, $callContext);
} catch (DeclinedPaymentException $e) {
    $declinedPayment = $e->getCreatePaymentResponse();
} catch (ResponseException $e) {
    $logger->error('Payment failed: ' . $e);    // the response in the string is masked
    $errors = $e->getErrors();
    $previous = $e->getPrevious();
    if ($previous instanceof ErrorResponseException) {
        $headers = $previous->getHeaders();     // the response headers
    }
} catch (CommunicationException $e) {
    // $e->getMessage() contains the cURL error
}
```

All exceptions for error responses extend `ResponseException`, for example `ValidationException`, `AuthorizationException`, `ReferenceException`, `IdempotenceException` and `ApiException`.
`getHttpStatusCode()`, `getErrorId()` and `getErrors()` give the details of the error. The unmasked response is available in `getResponse()`.

A timeout, a `CommunicationException` or a `PlatformException` during `createPayment` means the outcome of the payment is unknown.
Check the payment status with `getPayment`, and always send an idempotence key so that a retry does not create a second payment.

### Logging

```php
use OnlinePayments\Sdk\Logging\SplFileObjectLogger;

$client->enableLogging(new SplFileObjectLogger(new SplFileObject('sdk.log', 'a')));
// ...
$client->disableLogging();
```

Requests and responses are logged with card numbers, CVVs, personal data and authorization headers masked.
`ResourceLogger` logs to a PHP stream resource instead; a custom logger implements `CommunicatorLogger`.

## Development and testing

1. Install [Composer](https://getcomposer.org/download/).
2. From the root of the repository, execute `composer install`.

There are two types of tests: unit tests and integration tests. The unit tests will work out-of-the-box; for the integration tests some configuration is required.
Copy `tests/config.json.dist` to `tests/config.json` and replace the template values with your merchant ID, API endpoint, API key and secret API key. The proxy values are optional.

The following commands can then be executed from the root of the repository:

* Unit tests:

    ```
    vendor/bin/phpunit --testsuite unit
    ```

* Integration tests:

    ```
    vendor/bin/phpunit --testsuite integration
    ```

* Both unit and integration tests:

    ```
    vendor/bin/phpunit
    ```

* Static analysis:

    ```
    vendor/bin/phpstan analyse -c phpstan.neon
    ```

* Code style of the hand-written code and the tests:

    ```
    composer style
    ```

* All automated quality checks (PHPStan, code style and unit tests):

    ```
    composer quality
    ```

Some unit tests start a local PHP web server on port 8080; keep this port free when running them.
