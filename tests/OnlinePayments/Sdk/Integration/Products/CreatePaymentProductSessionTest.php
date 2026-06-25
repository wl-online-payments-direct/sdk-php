<?php

namespace OnlinePayments\Sdk\Integration\Products;

use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Merchant\Products\ProductsClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Products\PaymentProductSessionRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;

class CreatePaymentProductSessionTest extends TestCase
{
    private const INVALID_PAYMENT_PRODUCT_ID = -1;

    private ProductsClientInterface $productsClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->productsClient = $this->client->merchant($this->getMerchantId())->products();
    }

    public function testCreatePaymentProductSession_WithNonExistingProductId_ThrowsInvalidResponseException(): void
    {
        $request = PaymentProductSessionRequestBuilder::create()->build();

        try {
            $this->productsClient->createPaymentProductSession(self::INVALID_PAYMENT_PRODUCT_ID, $request);

            $this->fail('Expected InvalidResponseException was not thrown');
        } catch (InvalidResponseException $e) {
            $this->assertNotNull($e);
        }
    }
}