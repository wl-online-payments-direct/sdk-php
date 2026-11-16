<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\Domain\PaymentStatusOutput;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;

final class PaymentStatusExample
{
    public function __construct(
        private readonly MerchantClientInterface $merchantClient,
        private readonly OrderStore $orders,
    ) {
    }

    // [START payment-status]
    public function refreshPaymentState(string $orderId): OrderPaymentState
    {
        $paymentId = $this->orders->getPaymentId($orderId);
        $details = $this->merchantClient->payments()->getPaymentDetails($paymentId);

        $state = self::toOrderState($details->getStatus(), $details->getStatusOutput());
        $this->orders->saveState($orderId, $state);
        return $state;
    }

    // Decide on getStatusCategory(). getStatus() and getStatusCode() give more detail.
    // statusOutput can be missing in a response. Without a status category the payment is not known to be final:
    // that is Pending (the default below), never Paid.
    public static function toOrderState(?string $status, ?PaymentStatusOutput $statusOutput): OrderPaymentState
    {
        return match ($statusOutput?->getStatusCategory()) {
            'COMPLETED' => OrderPaymentState::Paid,
            // PENDING_CAPTURE: authorized but not captured yet, capture or cancel it.
            // Any other status (CANCELLED, waiting for its final result) is not final.
            'PENDING_MERCHANT' => $status === 'PENDING_CAPTURE'
                ? OrderPaymentState::Authorized
                : OrderPaymentState::Pending,
            'REFUNDED' => OrderPaymentState::Refunded,
            // Not paid: do not treat the order as paid.
            'REVERSED' => OrderPaymentState::Reversed,
            'UNSUCCESSFUL' => $status === 'CANCELLED' ? OrderPaymentState::Cancelled : OrderPaymentState::Failed,
            // CREATED, PENDING_PAYMENT, PENDING_CONNECT_OR_3RD_PARTY or no category at all: not final.
            // Wait for a webhook or check again later.
            default => OrderPaymentState::Pending,
        };
    }
    // [END payment-status]
}
