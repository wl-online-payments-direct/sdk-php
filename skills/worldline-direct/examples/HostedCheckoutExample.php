<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\Communication\CommunicationException;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\APIError;
use OnlinePayments\Sdk\Domain\CreateHostedCheckoutRequest;
use OnlinePayments\Sdk\Domain\CreateHostedCheckoutResponse;
use OnlinePayments\Sdk\Domain\HostedCheckoutSpecificInput;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\OrderReferences;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ResponseException;
use RuntimeException;

final class HostedCheckoutExample
{
    // $publicBaseUrl: the absolute public URL of your shop from your configuration, see ClientSetup::publicBaseUrl().
    public function __construct(
        private readonly MerchantClientInterface $merchantClient,
        private readonly OrderStore $orders,
        private readonly PaymentStatusExample $paymentStatus,
        private readonly string $publicBaseUrl,
    ) {
    }

    // [START hosted-checkout-create]
    // Returns the URL to redirect the customer to.
    public function startCheckout(string $orderId, int $amountInCents, string $currencyCode): string
    {
        $request = (new CreateHostedCheckoutRequest())
            ->withOrder((new Order())
                ->withAmountOfMoney((new AmountOfMoney())->withAmount($amountInCents)->withCurrencyCode($currencyCode))
                ->withReferences((new OrderReferences())->withMerchantReference($orderId)))
            ->withHostedCheckoutSpecificInput((new HostedCheckoutSpecificInput())
                ->withReturnUrl($this->buildReturnUrl($orderId))
                ->withLocale('en-GB'));

        $response = $this->createHostedCheckoutWithRetry($request);

        // Store both values with the order before the customer leaves your site.
        $this->orders->saveHostedCheckout($orderId, (string) $response->getHostedCheckoutId(), (string) $response->getRETURNMAC());

        // Redirect to this URL exactly as returned. Do not build it from getPartialRedirectUrl().
        return (string) $response->getRedirectUrl();
    }

    // The return URL holds your own order reference, e.g. https://shop.example/return?orderId=123.
    // The base URL comes from configuration, never from the Host header of the request. The platform
    // appends RETURNMAC and hostedCheckoutId to it.
    public function buildReturnUrl(string $orderId): string
    {
        return $this->publicBaseUrl . '/return?orderId=' . rawurlencode($orderId);
    }
    // [END hosted-checkout-create]

    // [START hosted-checkout-retry]
    // CreateHostedCheckout does not support idempotent requests: the platform ignores an idempotence key, so every
    // resend creates a new session. That is harmless until the customer pays in it; the unused session expires.
    // Send it again after no answer or after an error marked retriable, at most 3 attempts with a growing delay.
    // The waiting happens inside the customer's request, so the browser waits too: keep the attempts few and the
    // delays short, or move the call to a background job.
    public function createHostedCheckoutWithRetry(CreateHostedCheckoutRequest $request): CreateHostedCheckoutResponse
    {
        for ($attempt = 1; ; $attempt++) {
            try {
                return $this->merchantClient->hostedCheckout()->createHostedCheckout($request);
            } catch (ResponseException $e) {
                // The error of a Hosted Checkout call is a plain error response (error ID and errors), so logging
                // it is fine here; log at least the error ID, status and error codes.
                $codes = array_map(static fn (APIError $error): string => (string) $error->getErrorCode(), $e->getErrors());
                error_log(sprintf(
                    'createHostedCheckout failed: HTTP %d, errorId %s, errors %s',
                    $e->getHttpStatusCode(),
                    $e->getErrorId(),
                    implode(', ', $codes),
                ));
                // Only an error marked retriable means the request was not processed. Other errors reach the caller.
                if ($attempt >= 3 || !self::isRetriable($e)) {
                    throw $e;
                }
                sleep(2 * $attempt);
            } catch (CommunicationException $e) {
                // Timeout or connection error (cURL): the session may or may not exist. Send it again.
                if ($attempt >= 3) {
                    throw $e;
                }
                sleep(2 * $attempt);
            }
        }
    }

    private static function isRetriable(ResponseException $e): bool
    {
        foreach ($e->getErrors() as $error) {
            if ($error->getRetriable() === true) {
                return true;
            }
        }
        return false;
    }
    // [END hosted-checkout-retry]

    // [START hosted-checkout-return]
    // Called when the customer comes back on your return URL, e.g. with $_GET['orderId'] and $_GET['RETURNMAC'].
    public function handleReturn(string $orderId, ?string $returnMacFromQuery): OrderPaymentState
    {
        $stored = $this->orders->getHostedCheckout($orderId);

        // The platform appends RETURNMAC to the return URL. It identifies the returning customer:
        // a missing or different value means the request does not belong to this checkout.
        if ($returnMacFromQuery === null || !hash_equals($stored->returnMac, $returnMacFromQuery)) {
            throw new RuntimeException('RETURNMAC does not match the stored value for order ' . $orderId);
        }

        // Never trust the redirect alone: read the result from the platform.
        try {
            $hostedCheckout = $this->merchantClient->hostedCheckout()->getHostedCheckout($stored->hostedCheckoutId);
        } catch (ReferenceException $e) {
            // The API reference documents a 404 for this call. If it fails with not found, read the payment
            // instead, with the payment ID that your webhook handler stored. Other errors reach the caller.
            if ($e->getHttpStatusCode() !== 404) {
                throw $e;
            }
            error_log(sprintf('getHostedCheckout failed: HTTP %d, errorId %s', $e->getHttpStatusCode(), $e->getErrorId()));
            if ($this->orders->findPaymentId($orderId) === null) {
                // No payment known yet: keep the order pending, do not mark it failed. The webhook or your
                // reconciliation job settles it.
                return OrderPaymentState::Pending;
            }
            return $this->paymentStatus->refreshPaymentState($orderId);
        }

        if ($hostedCheckout->getStatus() === 'PAYMENT_CREATED') {
            $payment = $hostedCheckout->getCreatedPaymentOutput()?->getPayment();
            if ($payment === null) {
                return OrderPaymentState::Pending;
            }
            $this->orders->savePaymentId($orderId, (string) $payment->getId());
            $state = PaymentStatusExample::toOrderState($payment->getStatus(), $payment->getStatusOutput());
            $this->orders->saveState($orderId, $state);
            return $state;
        }
        if ($hostedCheckout->getStatus() === 'CANCELLED_BY_CONSUMER') {
            // The customer cancelled, or the session expired (the created payment is then cancelled with the
            // error id CANCELLED_BY_EXPIRATION).
            $this->orders->saveState($orderId, OrderPaymentState::Cancelled);
            return OrderPaymentState::Cancelled;
        }
        // IN_PROGRESS: the customer has not finished. A webhook will report the result.
        return OrderPaymentState::Pending;
    }
    // [END hosted-checkout-return]
}
