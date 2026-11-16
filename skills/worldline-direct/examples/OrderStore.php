<?php

declare(strict_types=1);

namespace Examples;

/**
 * Stand-in for your application's own persistence. The examples call it where your code must
 * store or read data; replace it with your database code. Keep the values in storage that survives
 * a restart, not in memory.
 */
interface OrderStore
{
    // The idempotence key of the create call of this order. Save it before the call is sent.
    public function saveIdempotenceKey(string $orderId, string $idempotenceKey): void;

    // Null as long as no idempotence key is stored for the order.
    public function findIdempotenceKey(string $orderId): ?string;

    public function saveHostedCheckout(string $orderId, string $hostedCheckoutId, string $returnMac): void;

    public function getHostedCheckout(string $orderId): StoredHostedCheckout;

    public function savePaymentId(string $orderId, string $paymentId): void;

    // Null as long as no payment ID is stored for the order.
    public function findPaymentId(string $orderId): ?string;

    public function getPaymentId(string $orderId): string;

    public function saveState(string $orderId, OrderPaymentState $state): void;

    public function saveRecurringPaymentId(string $customerId, string $initialPaymentId): void;

    public function getRecurringPaymentId(string $customerId): string;
}
