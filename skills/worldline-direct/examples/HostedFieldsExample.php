<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CardPaymentMethodSpecificInput;
use OnlinePayments\Sdk\Domain\CreateHostedFieldsSessionRequest;
use OnlinePayments\Sdk\Domain\CreateHostedFieldsSessionResponse;
use OnlinePayments\Sdk\Domain\CreatePaymentRequest;
use OnlinePayments\Sdk\Domain\Customer;
use OnlinePayments\Sdk\Domain\CustomerDevice;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\OrderReferences;
use OnlinePayments\Sdk\Domain\RedirectionData;
use OnlinePayments\Sdk\Domain\ThreeDSecure;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;

final class HostedFieldsExample
{
    public function __construct(
        private readonly MerchantClientInterface $merchantClient,
        private readonly OrderStore $orders,
    ) {
    }

    // [START hosted-fields-create]
    // Creates the session that the Hosted Fields script on your checkout page needs.
    public function createSession(string $checkoutPageOrigin): CreateHostedFieldsSessionResponse
    {
        $request = (new CreateHostedFieldsSessionRequest())
            ->withLocale('en-GB')
            // The origin of your checkout page, e.g. https://shop.example
            ->withOrigin($checkoutPageOrigin);

        $response = $this->merchantClient->hostedFields()->createHostedFieldsSession($request);

        // Send getSdkUrl(), getSdkSri() and getSessionData() to the page. Pass the session data on unchanged.
        return $response;
    }
    // [END hosted-fields-create]

    // [START hosted-fields-payment]
    // The page calls tokenize() and tells your server the card is ready.
    // $hostedFieldsSessionId is getHostedFieldsSessionId() of the createSession response; getSessionData()->getHostedFieldsSessionId() holds the same value.
    public function pay(
        string $orderId,
        string $hostedFieldsSessionId,
        int $amountInCents,
        string $currencyCode,
        CustomerDevice $device,
        string $returnUrl,
    ): PaymentStep {
        $request = (new CreatePaymentRequest())
            ->withHostedFieldsSessionId($hostedFieldsSessionId)
            ->withOrder((new Order())
                ->withAmountOfMoney((new AmountOfMoney())->withAmount($amountInCents)->withCurrencyCode($currencyCode))
                ->withReferences((new OrderReferences())->withMerchantReference($orderId))
                ->withCustomer((new Customer())->withDevice($device)))
            ->withCardPaymentMethodSpecificInput((new CardPaymentMethodSpecificInput())
                ->withAuthorizationMode('SALE')
                ->withThreeDSecure((new ThreeDSecure())
                    ->withRedirectionData((new RedirectionData())->withReturnUrl($returnUrl))));

        $context = new CallContext();
        $context->setIdempotenceKey(PaymentAttempt::keyFor($orderId, $this->orders));
        $response = $this->merchantClient->payments()->createPayment($request, $context);
        return CreatePaymentResponseHandler::handle($response, $orderId, $this->orders);
    }
    // [END hosted-fields-payment]
}
