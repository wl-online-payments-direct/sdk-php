<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CardPaymentMethodSpecificInput;
use OnlinePayments\Sdk\Domain\CreateHostedTokenizationRequest;
use OnlinePayments\Sdk\Domain\CreateHostedTokenizationResponse;
use OnlinePayments\Sdk\Domain\CreatePaymentRequest;
use OnlinePayments\Sdk\Domain\Customer;
use OnlinePayments\Sdk\Domain\CustomerDevice;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\OrderReferences;
use OnlinePayments\Sdk\Domain\RedirectionData;
use OnlinePayments\Sdk\Domain\ThreeDSecure;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;

final class HostedTokenizationExample
{
    public function __construct(
        private readonly MerchantClientInterface $merchantClient,
        private readonly OrderStore $orders,
    ) {
    }

    // [START hosted-tokenization-create]
    // Creates the session for the card form iframe on your checkout page.
    public function createSession(): CreateHostedTokenizationResponse
    {
        $request = (new CreateHostedTokenizationRequest())
            ->withLocale('en-GB');
        // Optional: ->withVariant('MyTemplate.html'), the file name of a custom template.

        $response = $this->merchantClient->hostedTokenization()->createHostedTokenization($request);

        // Send getHostedTokenizationUrl() (iframe URL) and getSri() (script integrity) to the page.
        return $response;
    }
    // [END hosted-tokenization-create]

    // [START hosted-tokenization-payment]
    // The page calls tokenizer.submitTokenization() and posts result.hostedTokenizationId to your server.
    public function pay(
        string $orderId,
        string $hostedTokenizationId,
        int $amountInCents,
        string $currencyCode,
        CustomerDevice $device,
        string $returnUrl,
    ): PaymentStep {
        $request = (new CreatePaymentRequest())
            ->withHostedTokenizationId($hostedTokenizationId)
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
    // [END hosted-tokenization-payment]
}
