---
name: worldline-direct
description: Write and review integrations with the Worldline Direct payment platform that use the PHP server SDK (wl-online-payments-direct/sdk-php). Use when code creates or changes payments, Hosted Checkout, Hosted Tokenization or Hosted Fields sessions, client SDK sessions, payment links, captures, refunds, cancellations, recurring or card-on-file payments, reads payment status, receives webhooks, or handles SDK errors.
---

# Worldline Direct integration with the PHP SDK

Follow this skill whenever you write or change code that calls the Worldline Direct platform through
`wl-online-payments-direct/sdk-php`.

## How to work

1. Choose the integration method with the table below. If the user has not chosen one, propose Hosted Checkout.
2. Open `references/flows.md` and follow the steps for that method. Use the code shown there; it is copied from
   examples that are compiled against this SDK. Do not write SDK calls from memory.
3. Read `references/php.md` for installation, client setup and the SDK call for each API operation.
4. Every integration also needs webhook handling (`references/webhooks.md`) and error handling
   (`references/errors.md`).
5. For fields and operations not shown in the references, check the installed SDK classes and the API reference:
   https://docs.direct.worldline-solutions.com/en/api-reference. Property names in the SDK match the API reference.

The `examples/` folder has the complete source files the snippets come from, including the `using`/`import` lines.

## Choose an integration method

| Method | Use when | Card data on your server |
|---|---|---|
| Hosted Checkout | Redirect to a payment page hosted by the platform, all payment methods. Simplest and the default. | No |
| Hosted Tokenization | Card form in an iframe on your own checkout page. | No |
| Hosted Fields | Separate card fields that you style, on your own checkout page. | No |
| Client integration | Mobile app or own form; a Client SDK encrypts the card data on the device. | Encrypted only |
| Server-to-server | You send card data or a token from your server. Card data requires PCI DSS SAQ D. | Yes |
| Payment Links | Send a link by email, chat or invoice; no checkout page needed. | No |

## Client setup rules

- Create one client per application at startup and reuse it. `references/php.md` says what the client holds and
  whether it is thread-safe.
- Read the API key ID, secret and merchant ID (PSPID) from configuration or a secret store. Never hard-code them.
  Validate the configuration once at startup and fail fast when a value is missing. For local development use the
  secret store of your platform or environment variables, never a file in the repository.
- Endpoints: test `https://payment.direct.ecom.preprod.worldline-solutions.com`, live
  `https://payment.direct.ecom.worldline-solutions.com`.
- Set the integrator to your company or application name. It is mandatory: the SDK refuses to create the client
  without it.
- Amounts are in the smallest currency unit: EUR 10.00 is `1000`.

## Mandatory rules

1. **Send an idempotence key on every create call that supports idempotent requests.** Use a new UUID per operation
   and store it with the operation before the first call. For CreatePayment one operation is one payment attempt: a
   new attempt, for example after a decline, needs a new key (see "Payment attempt and idempotence key" in
   `references/flows.md`). When a request got no response (timeout, connection error), retry it with the same key.
   When the platform answered with an error marked `retriable`, send it again with a new key (see
   `references/errors.md`). The platform's guide lists the supported operations (for example CreatePayment,
   CapturePayment, RefundPayment, CancelPayment, SubsequentPayment). CreateHostedCheckout and CreatePaymentLink do
   not support them: the platform ignores the key, so a resend creates a second session or link. Send no key for
   those two.
2. **Persist `HostedCheckoutId` and `RETURNMAC` with the order before redirecting.** Keep them, the idempotence key
   and the payment IDs in storage that survives a restart (your database), not in memory. A demo that keeps them in
   memory must say so in its README. When the customer returns, the platform appends `RETURNMAC` to the query
   string of the return URL. It identifies the returning customer: only a request whose `RETURNMAC` matches the
   stored value belongs to that checkout. Compare it in constant time. Keep this check even when asked to simplify
   the code.
3. **Use the URLs from the response as returned, never a hand-built concatenation.** This applies to the Hosted
   Checkout `redirectUrl`, the 3-D Secure `merchantAction.redirectData.redirectURL`, the payment link
   `redirectionUrl` and the `hostedTokenizationUrl`.
4. **Verify every webhook with the SDK's webhooks helper before processing the event.** Reject events that fail
   verification. Never add a switch, setting or environment check that skips verification, not even for local
   development. To test locally, configure a test webhook key ID and secret, or send a test event with
   SendTestWebhook.
5. **After a declined-payment error, read the status with `GetPaymentDetails` before deciding anything.**
6. **Never log or store raw card data.** No card number, CVV or expiry date in logs, databases, exceptions or
   analytics. Do not log request objects that contain card data.

## Also required

- Decide the outcome on your server from `GetHostedCheckout` or `GetPaymentDetails`, never from the return URL or the
  browser alone.
- Base order state on `statusOutput.statusCategory`; see "Payment status" in `references/flows.md`.
- Build the return URL from configuration (an absolute public base URL), never from the request's `Host` header.
- Webhooks can arrive twice and in any order. Save each verified event before you answer with HTTP 2xx, then process
  it in the background. Do not count on the platform sending it again after a 2xx; see `references/webhooks.md`.
- Use the test endpoint and test credentials until the user explicitly asks for live.
- Documentation: https://docs.direct.worldline-solutions.com
