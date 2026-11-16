<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CancelPaymentRequest;
use OnlinePayments\Sdk\Domain\CancelPaymentResponse;
use OnlinePayments\Sdk\Domain\CapturePaymentRequest;
use OnlinePayments\Sdk\Domain\CaptureResponse;
use OnlinePayments\Sdk\Domain\RefundRequest;
use OnlinePayments\Sdk\Domain\RefundResponse;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;
use RuntimeException;

// Each method takes an idempotence key. Create it once per operation (e.g. when someone clicks
// "Refund") and store it. Pass the same key again if the request got no answer; see ErrorHandlingExample.
final class AfterPaymentOperationsExample
{
    public function __construct(
        private readonly MerchantClientInterface $merchantClient,
    ) {
    }

    // [START capture-payment]
    // Captures an authorized payment (status PENDING_CAPTURE). Without an amount, the full amount is captured.
    public function capture(string $paymentId, int $amountInCents, bool $isFinal, string $idempotenceKey): CaptureResponse
    {
        $details = $this->merchantClient->payments()->getPaymentDetails($paymentId);
        if ($details->getStatus() !== 'PENDING_CAPTURE') {
            throw new RuntimeException('Payment ' . $paymentId . ' cannot be captured in status ' . $details->getStatus());
        }

        $request = (new CapturePaymentRequest())
            ->withAmount($amountInCents)
            // true: this capture is final, no further capture is accepted.
            ->withIsFinal($isFinal);
        $context = new CallContext();
        $context->setIdempotenceKey($idempotenceKey);
        return $this->merchantClient->payments()->capturePayment($paymentId, $request, $context);
    }
    // [END capture-payment]

    // [START refund-payment]
    // Refunds a captured payment, fully or partly.
    public function refund(string $paymentId, int $amountInCents, string $currencyCode, string $idempotenceKey): RefundResponse
    {
        $details = $this->merchantClient->payments()->getPaymentDetails($paymentId);
        if ($details->getStatusOutput()?->getIsRefundable() !== true) {
            throw new RuntimeException('Payment ' . $paymentId . ' is not refundable in status ' . $details->getStatus());
        }

        $request = (new RefundRequest())
            ->withAmountOfMoney((new AmountOfMoney())->withAmount($amountInCents)->withCurrencyCode($currencyCode));
        $context = new CallContext();
        $context->setIdempotenceKey($idempotenceKey);
        $refund = $this->merchantClient->payments()->refundPayment($paymentId, $request, $context);

        // REFUND_REQUESTED: the platform is processing the refund and waiting for the result. The status then
        // becomes REFUNDED or REJECTED; treat the refund as done only when it is REFUNDED.
        return $refund;
    }
    // [END refund-payment]

    // [START cancel-payment]
    // Cancels (voids) an authorization that is not captured yet. No amount cancels the full amount.
    public function cancel(string $paymentId, string $idempotenceKey): CancelPaymentResponse
    {
        $details = $this->merchantClient->payments()->getPaymentDetails($paymentId);
        if ($details->getStatusOutput()?->getIsCancellable() !== true) {
            throw new RuntimeException('Payment ' . $paymentId . ' is not cancellable in status ' . $details->getStatus());
        }

        $context = new CallContext();
        $context->setIdempotenceKey($idempotenceKey);
        return $this->merchantClient->payments()->cancelPayment($paymentId, new CancelPaymentRequest(), $context);
    }
    // [END cancel-payment]
}
