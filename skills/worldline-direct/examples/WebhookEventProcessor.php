<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\Domain\WebhooksEvent;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;

final class WebhookEventProcessor
{
    public function __construct(
        private readonly MerchantClientInterface $merchantClient,
        private readonly OrderStore $orders,
    ) {
    }

    // [START webhooks-process]
    // Runs in a background job on the events saved in the inbox (read one with
    // (new WebhooksEvent())->fromJson($rawBody)). Events can arrive twice and out of order, so read the current
    // status instead of trusting the event; repeating this is harmless.
    public function process(WebhooksEvent $webhooksEvent): void
    {
        $payment = $webhooksEvent->getPayment();
        if ($payment === null) {
            // Refund, payment link, payout and token events carry other objects, e.g. getRefund().
            return;
        }

        $orderId = $payment->getPaymentOutput()?->getReferences()?->getMerchantReference();
        if ($orderId === null) {
            return;
        }

        $details = $this->merchantClient->payments()->getPaymentDetails((string) $payment->getId());
        $this->orders->savePaymentId($orderId, (string) $details->getId());
        $this->orders->saveState($orderId, PaymentStatusExample::toOrderState($details->getStatus(), $details->getStatusOutput()));
    }
    // [END webhooks-process]
}
