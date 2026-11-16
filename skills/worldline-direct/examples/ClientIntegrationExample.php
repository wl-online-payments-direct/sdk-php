<?php

declare(strict_types=1);

namespace Examples;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CardPaymentMethodSpecificInput;
use OnlinePayments\Sdk\Domain\CreatePaymentRequest;
use OnlinePayments\Sdk\Domain\Customer;
use OnlinePayments\Sdk\Domain\CustomerDevice;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\OrderReferences;
use OnlinePayments\Sdk\Domain\RedirectionData;
use OnlinePayments\Sdk\Domain\SessionRequest;
use OnlinePayments\Sdk\Domain\SessionResponse;
use OnlinePayments\Sdk\Domain\ThreeDSecure;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;

final class ClientIntegrationExample
{
    public function __construct(
        private readonly MerchantClientInterface $merchantClient,
        private readonly OrderStore $orders,
    ) {
    }

    // [START client-session-create]
    // Creates the session that a Client SDK (JavaScript, iOS, Android, Flutter...) needs to encrypt card data.
    public function createClientSession(): SessionResponse
    {
        $session = $this->merchantClient->sessions()->createSession(new SessionRequest());

        // Send getClientSessionId(), getCustomerId(), getClientApiUrl() and getAssetUrl() to the app.
        // Never send your API key.
        return $session;
    }
    // [END client-session-create]

    // [START client-encrypted-payment]
    // The Client SDK returns an encrypted string; the app posts it to your server.
    public function pay(
        string $orderId,
        string $encryptedCustomerInput,
        int $amountInCents,
        string $currencyCode,
        CustomerDevice $device,
        string $returnUrl,
    ): PaymentStep {
        $request = (new CreatePaymentRequest())
            ->withEncryptedCustomerInput($encryptedCustomerInput)
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
    // [END client-encrypted-payment]
}
