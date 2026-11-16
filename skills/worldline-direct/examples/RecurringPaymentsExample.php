<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CreateHostedCheckoutRequest;
use OnlinePayments\Sdk\Domain\HostedCheckoutSpecificInput;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\OrderReferences;
use OnlinePayments\Sdk\Domain\SubsequentCardPaymentMethodSpecificInput;
use OnlinePayments\Sdk\Domain\SubsequentPaymentRequest;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;

final class RecurringPaymentsExample
{
    public function __construct(
        private readonly MerchantClientInterface $merchantClient,
        private readonly OrderStore $orders,
        private readonly HostedCheckoutExample $hostedCheckout,
    ) {
    }

    // [START recurring-first]
    // First payment of a subscription, made by the customer on the Hosted Checkout Page.
    // The recurring flag marks it as the first payment of the series.
    // It follows the Hosted Checkout flow: the return URL is built from your configuration and the call goes
    // through the same retry helper. Handle the return as there.
    public function startSubscription(string $orderId, int $amountInCents, string $currencyCode): string
    {
        $request = (new CreateHostedCheckoutRequest())
            ->withOrder((new Order())
                ->withAmountOfMoney((new AmountOfMoney())->withAmount($amountInCents)->withCurrencyCode($currencyCode))
                ->withReferences((new OrderReferences())->withMerchantReference($orderId)))
            ->withHostedCheckoutSpecificInput((new HostedCheckoutSpecificInput())
                ->withReturnUrl($this->hostedCheckout->buildReturnUrl($orderId))
                ->withIsRecurring(true));

        $response = $this->hostedCheckout->createHostedCheckoutWithRetry($request);
        $this->orders->saveHostedCheckout($orderId, (string) $response->getHostedCheckoutId(), (string) $response->getRETURNMAC());
        return (string) $response->getRedirectUrl();
    }

    // When the first payment is authorised or captured, keep its payment ID: later charges refer to it.
    public function onFirstPaymentSucceeded(string $customerId, string $firstPaymentId): void
    {
        $this->orders->saveRecurringPaymentId($customerId, $firstPaymentId);
    }
    // [END recurring-first]

    // [START recurring-subsequent]
    // Later charge started by you, without the customer (merchant-initiated).
    // The caller creates ONE idempotence key per charge and stores it with the charge
    // ($this->orders->saveIdempotenceKey($orderId, $key)) before the first call. Retries follow the error
    // handling example: the same key when there was no answer, a new key only for a retriable error.
    public function chargeRenewal(
        string $customerId,
        string $orderId,
        int $amountInCents,
        string $currencyCode,
        string $idempotenceKey,
    ): OrderPaymentState {
        $firstPaymentId = $this->orders->getRecurringPaymentId($customerId);

        $request = (new SubsequentPaymentRequest())
            ->withOrder((new Order())
                ->withAmountOfMoney((new AmountOfMoney())->withAmount($amountInCents)->withCurrencyCode($currencyCode))
                ->withReferences((new OrderReferences())->withMerchantReference($orderId)))
            ->withSubsequentcardPaymentMethodSpecificInput((new SubsequentCardPaymentMethodSpecificInput())
                // Recurring = fixed amount, regular intervals (at most one year), started by you.
                // Other allowed values: Unscheduled, Installment, NoShow, DelayedCharge, PartialShipment,
                // Resubmission, RecurringVariable, UnscheduledFixed.
                ->withSubsequentType('Recurring')
                // SALE: authorised and captured at once. Acquirers that do not support it ignore it.
                ->withAuthorizationMode('SALE'));

        $context = new CallContext();
        $context->setIdempotenceKey($idempotenceKey);
        $response = $this->merchantClient->subsequent()->subsequentPayment($firstPaymentId, $request, $context);

        $payment = $response->getPayment();
        $this->orders->savePaymentId($orderId, (string) $payment->getId());
        $state = PaymentStatusExample::toOrderState($payment->getStatus(), $payment->getStatusOutput());
        $this->orders->saveState($orderId, $state);
        return $state;
    }
    // [END recurring-subsequent]
}
