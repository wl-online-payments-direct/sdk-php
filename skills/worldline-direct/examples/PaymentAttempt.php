<?php

declare(strict_types=1);

namespace Examples;

use LogicException;

// [START payment-attempt-key]
// One idempotence key per payment attempt, stored with the order.
final class PaymentAttempt
{
    // Call start() when the customer begins to pay, for example when you show the payment form, and again
    // before a new attempt after a decline or a rejected request. It stores the key before any
    // createPayment() call.
    public static function start(string $orderId, OrderStore $orders): string
    {
        $key = bin2hex(random_bytes(16));
        $orders->saveIdempotenceKey($orderId, $key);
        return $key;
    }

    // The request that creates the payment reads the stored key. A double submit, a retry after a timeout
    // and a restart then send the same key, so the platform does not create a second payment.
    public static function keyFor(string $orderId, OrderStore $orders): string
    {
        $key = $orders->findIdempotenceKey($orderId);
        if ($key === null) {
            throw new LogicException('No payment attempt was started for order ' . $orderId);
        }
        return $key;
    }
}
// [END payment-attempt-key]
