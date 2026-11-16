<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\Domain\CreatePaymentResponse;

final class CreatePaymentResponseHandler
{
    // [START payment-response-handle]
    // Use for every createPayment response: server-to-server, Hosted Tokenization, Hosted Fields
    // and client integration.
    public static function handle(CreatePaymentResponse $response, string $orderId, OrderStore $orders): PaymentStep
    {
        $orders->savePaymentId($orderId, (string) $response->getPayment()->getId());

        if ($response->getMerchantAction()?->getActionType() === 'REDIRECT') {
            // 3-D Secure challenge or a third-party page. Redirect to the URL exactly as returned.
            // The customer comes back on your return URL; then read the status with getPaymentDetails().
            return PaymentStep::redirect((string) $response->getMerchantAction()->getRedirectData()->getRedirectURL());
        }

        // No customer action needed: the result is already known.
        $payment = $response->getPayment();
        $state = PaymentStatusExample::toOrderState($payment->getStatus(), $payment->getStatusOutput());
        $orders->saveState($orderId, $state);
        return PaymentStep::done($state);
    }
    // [END payment-response-handle]
}
