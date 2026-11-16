<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\Card;
use OnlinePayments\Sdk\Domain\CardPaymentMethodSpecificInput;
use OnlinePayments\Sdk\Domain\CreatePaymentRequest;
use OnlinePayments\Sdk\Domain\Customer;
use OnlinePayments\Sdk\Domain\CustomerDevice;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\OrderReferences;
use OnlinePayments\Sdk\Domain\RedirectionData;
use OnlinePayments\Sdk\Domain\ThreeDSecure;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;

final class ServerToServerExample
{
    public function __construct(
        private readonly MerchantClientInterface $merchantClient,
        private readonly OrderStore $orders,
    ) {
    }

    // [START server-to-server-create]
    // Card data on your server puts you in scope of PCI DSS SAQ D.
    // Use Hosted Tokenization or Hosted Fields unless you are certified for it.
    public function payWithCard(
        string $orderId,
        int $amountInCents,
        string $currencyCode,
        int $paymentProductId,
        CardInput $card,
        CustomerDevice $device,
        string $returnUrl,
    ): PaymentStep {
        $request = (new CreatePaymentRequest())
            ->withOrder((new Order())
                ->withAmountOfMoney((new AmountOfMoney())->withAmount($amountInCents)->withCurrencyCode($currencyCode))
                ->withReferences((new OrderReferences())->withMerchantReference($orderId))
                ->withCustomer((new Customer())->withDevice($device)))
            ->withCardPaymentMethodSpecificInput((new CardPaymentMethodSpecificInput())
                // e.g. 1 = Visa, 3 = Mastercard.
                ->withPaymentProductId($paymentProductId)
                ->withCard((new Card())
                    ->withCardNumber($card->number)
                    ->withCardholderName($card->holderName)
                    ->withExpiryDate($card->expiryDate)
                    ->withCvv($card->cvv))
                // SALE: authorised and captured at once. Acquirers that do not support it ignore it.
                // FINAL_AUTHORIZATION: capture the full amount within 7 days.
                // PRE_AUTHORIZATION: can be reversed; capture the authorised amount or less within 30 days.
                ->withAuthorizationMode('SALE')
                ->withThreeDSecure((new ThreeDSecure())
                    ->withRedirectionData((new RedirectionData())->withReturnUrl($returnUrl))));

        $context = new CallContext();
        $context->setIdempotenceKey(PaymentAttempt::keyFor($orderId, $this->orders));
        $response = $this->merchantClient->payments()->createPayment($request, $context);
        return CreatePaymentResponseHandler::handle($response, $orderId, $this->orders);
    }
    // [END server-to-server-create]
}
