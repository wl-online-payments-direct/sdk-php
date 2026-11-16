# PHP SDK reference

How to install and set up the PHP SDK (`wl-online-payments-direct/sdk-php`), and the SDK calls for the API operations used in this
skill.
Source code and README: https://github.com/wl-online-payments-direct/sdk-php

## Install

```
composer require wl-online-payments-direct/sdk-php
```

Requires PHP 8.3 or later with the `curl`, `json`, `mbstring` and `zlib` extensions. Load `vendor/autoload.php`.

## Namespaces

| Namespace | Contains |
|---|---|
| `OnlinePayments\Sdk` | `Client`, `Communicator`, `CommunicatorConfiguration`, `CallContext`, the exceptions |
| `OnlinePayments\Sdk\Merchant` | `MerchantClientInterface` and its sub-clients |
| `OnlinePayments\Sdk\Domain` | All request and response classes (`CreatePaymentRequest`, `Order`, `AmountOfMoney`, ...) and `WebhooksEvent` |
| `OnlinePayments\Sdk\Authentication` | `V1HmacAuthenticator` |
| `OnlinePayments\Sdk\Webhooks` | `WebhooksHelper`, `InMemorySecretKeyStore`, `SecretKeyStore`, `SignatureValidationException`, `ApiVersionMismatchException` |
| `OnlinePayments\Sdk\Logging` | `CommunicatorLogger`, `ResourceLogger`, `SplFileObjectLogger` |

## Client setup

```php
// Read a setting and fail at startup, with its name, when it is missing or blank. Do not cast getenv() to a
// string: that turns a missing setting into an empty value and the error shows up later, in a payment.
// Locally keep the values in your environment or your platform's secret store, never in a file in the
// repository; in production read them from a secret store (cloud secret manager, Vault, framework secrets).
public static function requireEnv(string $name): string
{
    $value = getenv($name);
    if ($value === false || trim($value) === '') {
        throw new RuntimeException("Missing configuration: $name");
    }
    return $value;
}

// The absolute public URL of your shop, e.g. https://shop.example. The return URL is built from it, never
// from the Host header of a request, which the sender controls.
public static function publicBaseUrl(): string
{
    $url = self::requireEnv('SHOP_PUBLIC_BASE_URL');
    $parts = parse_url($url);
    if (!is_array($parts) || !in_array($parts['scheme'] ?? '', ['https', 'http'], true)
        || ($parts['host'] ?? '') === '' || isset($parts['query']) || isset($parts['fragment'])) {
        throw new RuntimeException('SHOP_PUBLIC_BASE_URL must be an absolute URL such as https://shop.example');
    }
    return rtrim($url, '/');
}

// Create the client once per request (or once per worker in long-running processes) and reuse it
// for every call, e.g. register it as a shared service in your dependency injection container.
public static function createClient(): Client
{
    $configuration = new CommunicatorConfiguration(
        self::requireEnv('ONLINEPAYMENTS_API_KEY_ID'),
        self::requireEnv('ONLINEPAYMENTS_API_SECRET'),
        // Test or live endpoint, e.g. https://payment.direct.ecom.preprod.worldline-solutions.com
        self::requireEnv('ONLINEPAYMENTS_API_ENDPOINT'),
        // Your company or application name; it identifies your requests in the platform logs.
        // It is mandatory: the SDK throws UnexpectedValueException when it is empty.
        self::requireEnv('ONLINEPAYMENTS_INTEGRATOR'),
        null,
        // Timeouts in seconds; the default (-1) means no timeout.
        connectTimeout: 5,
        readTimeout: 300,
    );

    $communicator = new Communicator($configuration, new V1HmacAuthenticator($configuration));
    return new Client($communicator);
}

// The merchant ID is your PSPID. Every API call goes through the merchant client.
public static function createMerchantClient(Client $client): MerchantClientInterface
{
    return $client->merchant(self::requireEnv('ONLINEPAYMENTS_MERCHANT_ID'));
}
```

- The fourth constructor argument (integrator) is mandatory: `CommunicatorConfiguration` throws
  `UnexpectedValueException` when it is null or blank. Read it from configuration like the other settings.
- Read settings with a function that throws when a value is missing or blank (`requireEnv()` above); `(string) getenv()`
  turns a missing setting into an empty string.
- The API endpoint must not contain a path.
- Timeouts are in seconds. The default (-1) means no timeout; set both.
- In Symfony or Laravel, register the `Client` (or the merchant client) as a shared service.
- The client keeps no connection pool: every request opens its own cURL handle, and there is nothing to close. Create the
  `Client` once and reuse it.

## Conventions

- Calls are synchronous and return the response object. Errors are thrown as exceptions (see below).
- Request and response classes have getters and setters with the API names (`order.amountOfMoney` is
  `getOrder()->getAmountOfMoney()`), plus fluent `with...()` methods:
  `(new Order())->withAmountOfMoney((new AmountOfMoney())->withAmount(1000)->withCurrencyCode('EUR'))`.
- Getters can return `null`; use `?->` and compare flags with `=== true`.
- Every call takes an optional `CallContext` as last argument. Set the idempotence key with
  `$context = new CallContext(); $context->setIdempotenceKey($key);`, for example `bin2hex(random_bytes(16))`.
  `createHostedCheckout` and `createPaymentLink` ignore the key, so send none.
- Members marked `@deprecated` are deprecated in the API. Use the replacement named in the PHPDoc.

## API operations used in this skill

All calls start from the merchant client: `$merchant = $client->merchant($merchantId)`.

| API operation | SDK call | Used in |
|---|---|---|
| CreateHostedCheckout | `$merchant->hostedCheckout()->createHostedCheckout($request)` | Hosted Checkout, recurring payments |
| GetHostedCheckout | `$merchant->hostedCheckout()->getHostedCheckout($hostedCheckoutId)` | Hosted Checkout |
| CreateHostedTokenization | `$merchant->hostedTokenization()->createHostedTokenization($request)` | Hosted Tokenization |
| CreateHostedFieldsSession | `$merchant->hostedFields()->createHostedFieldsSession($request)` | Hosted Fields |
| CreateSession | `$merchant->sessions()->createSession($request)` | Client integration |
| CreatePayment | `$merchant->payments()->createPayment($request, $context)` | Server-to-server, Hosted Tokenization, Hosted Fields, client integration |
| GetPaymentDetails | `$merchant->payments()->getPaymentDetails($paymentId)` | Payment status, webhooks, error handling |
| CapturePayment | `$merchant->payments()->capturePayment($paymentId, $request, $context)` | After-payment operations |
| RefundPayment | `$merchant->payments()->refundPayment($paymentId, $request, $context)` | After-payment operations |
| CancelPayment | `$merchant->payments()->cancelPayment($paymentId, $request, $context)` | After-payment operations |
| SubsequentPayment | `$merchant->subsequent()->subsequentPayment($paymentId, $request, $context)` | Recurring payments |
| CreatePaymentLink | `$merchant->paymentLinks()->createPaymentLink($request)` | Payment Links |
| GetPaymentLinkById | `$merchant->paymentLinks()->getPaymentLinkById($paymentLinkId)` | Payment Links |

For anything else, use the API reference; the SDK's sub-clients and method names match the operation names there.

## Exceptions

All in `OnlinePayments\Sdk`. The base class of all error responses is `ResponseException`, not `ApiException`:
only `PlatformException` extends `ApiException`. Catch the specific ones first.

| Exception | Extends | When |
|---|---|---|
| `DeclinedPaymentException` | `ResponseException` | The error response carries a payment result: a declined payment (seen with 402 and 403), also for `subsequentPayment`. The body decides, not the status. `getCreatePaymentResponse()` holds the created payment (`->getPayment()->getId()`). |
| `DeclinedRefundException` | `ResponseException` | The error response carries a refund result (the body decides, not the status). `getRefundResponse()` holds it. |
| `IdempotenceException` | `ResponseException` | 409 on a call with an idempotence key, with a single error with error code `30001002`: a request with the same idempotence key is still running. Has `getIdempotenceKey()`. |
| `ValidationException` | `ResponseException` | 400: invalid request, including an operation that the payment's state does not allow (error `id` `ACTION_NOT_ALLOWED_ON_TRANSACTION`). |
| `AuthorizationException` | `ResponseException` | 403: wrong API key ID, secret or merchant ID (error `id` `ACCESS_TO_MERCHANT_NOT_ALLOWED`), or an action that is not allowed. |
| `ReferenceException` | `ResponseException` | 404 (object not found), 410, and a 409 that is not the idempotence case above. |
| `PlatformException` | `ApiException` | 500, 502, 503. Retry only if an error has `getRetriable() === true`, with a new idempotence key. |
| `ApiException` | `ResponseException` | Any other error status, including 401 and 402 without a payment result. Other `ApiException` subclasses, `ProblemDetailsException` and `DeclinedPayoutException`, are raised by operations this skill does not use. |
| `ResponseException` | `RuntimeException` | Base class. Has `getHttpStatusCode()`, `getErrorId()`, `getErrors()`, `getResponse()`. |
| `\ErrorException` (PHP) | | No valid response: cURL timeout or connection error. Not a `ResponseException`. |
| `OnlinePayments\Sdk\Webhooks\SignatureValidationException` | `RuntimeException` | `unmarshal`: missing header, wrong signature or unknown key ID (`SecretKeyNotAvailableException` extends it). |
| `OnlinePayments\Sdk\Webhooks\ApiVersionMismatchException` | `RuntimeException` | `unmarshal`: valid signature, event API version is not `v1`. Not a `SignatureValidationException`. |
| `OnlinePayments\Sdk\Communication\InvalidResponseException` | `RuntimeException` | `unmarshal`: valid signature, body is not valid JSON or does not fit the event. Valid JSON that is not an object (`[]`, `null`, `"x"`) leaks as `TypeError`. An API call raises it too, for any status, when the response is not valid JSON or has no content type (except 202 and 204). |

`getErrors()` returns `APIError` objects with `getErrorCode()`, `getPropertyName()`, `getMessage()` and
`getRetriable()`. The response of a declined payment also carries the payment; do not log it.

`getMessage()` of a `ResponseException` is fixed text ("the payment platform returned an error response"; for the
declined exceptions it holds the payment or refund ID and status) and does not hold the response body. Its `__toString()` (so `echo $e`, string casts and some loggers) includes the response as
pretty-printed JSON. Log `getHttpStatusCode()`, `getErrorId()` and the error codes instead, and echo the exception
only for Hosted Checkout calls, whose error body is a plain error response. To catch every error response, including after a specific one, catch
`ResponseException`; `ApiException` does not cover validation, authorization or reference errors.

## Webhooks

`new WebhooksHelper($secretKeyStore)` and `$helper->unmarshal($body, $headers)`, where `$body` is the raw body string
and `$headers` is an array of header name => one string value (names are matched case-insensitively). It returns a
`WebhooksEvent` with `getPayment()`, `getRefund()`, `getPaymentLink()`, `getPayout()` and `getToken()`; the event ID
and type are in its `id` and `type` properties. See `webhooks.md` for the full handler.

The helper cannot receive repeated headers: it takes the first match for a name and does not reject duplicates, and a
list value is a `TypeError`. The handler therefore joins repeated values with `,`; a merged `X-GCS-Signature` or
`X-GCS-KeyId` then fails verification (`SignatureValidationException`) instead of being used. Never pass only the first
value.

## Payment status category

`GetHostedCheckoutResponse::getCreatedPaymentOutput()` is a `CreatedPaymentOutput`: `getPaymentStatusCategory()`
(property `paymentStatusCategory`) and `getPayment()`. Decide on `getPayment()->getStatusOutput()?->getStatusCategory()`.

## Logging

`$client->enableLogging(new ResourceLogger(STDOUT))` (or `SplFileObjectLogger` for a file) logs requests and
responses with card data and secrets masked. Implement `CommunicatorLogger` to forward to your own logger. Do not log
request or response objects yourself.
