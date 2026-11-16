<?php

declare(strict_types=1);

namespace Examples;

use DateTime;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CreatePaymentLinkRequest;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\OrderReferences;
use OnlinePayments\Sdk\Domain\PaymentLinkResponse;
use OnlinePayments\Sdk\Domain\PaymentLinkSpecificInput;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;

final class PaymentLinksExample
{
    public function __construct(
        private readonly MerchantClientInterface $merchantClient,
    ) {
    }

    // [START payment-link-create]
    // Returns the link to send to the customer (email, chat, invoice).
    public function createLink(string $orderId, int $amountInCents, string $currencyCode, string $description): PaymentLinkResponse
    {
        $request = (new CreatePaymentLinkRequest())
            ->withOrder((new Order())
                ->withAmountOfMoney((new AmountOfMoney())->withAmount($amountInCents)->withCurrencyCode($currencyCode))
                ->withReferences((new OrderReferences())->withMerchantReference($orderId)))
            ->withPaymentLinkSpecificInput((new PaymentLinkSpecificInput())
                ->withDescription($description)
                // Required. At most 6 months in the future.
                ->withExpirationDate(new DateTime('+7 days')));

        // CreatePaymentLink does not support idempotent requests, so no idempotence key is sent.
        $link = $this->merchantClient->paymentLinks()->createPaymentLink($request);

        // Store getPaymentLinkId() with the order. Send getRedirectionUrl() exactly as returned.
        // The paymentlink.paid webhook (or getPaymentLinkById()) tells you when it is paid.
        // Once paid, the link's getPaymentId() has no attempt suffix: use it with "_0" appended in
        // GetPaymentDetails, and read the payment's status.
        return $link;
    }
    // [END payment-link-create]
}
