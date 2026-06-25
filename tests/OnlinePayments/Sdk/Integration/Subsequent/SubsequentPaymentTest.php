<?php

namespace OnlinePayments\Sdk\Integration\Subsequent;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\Subsequent\SubsequentClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Subsequent\SubsequentPaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class SubsequentPaymentTest extends TestCase
{
    private const NON_EXISTING_PAYMENT_ID = '9999999999';

    private SubsequentClientInterface $subsequentClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subsequentClient = $this->client->merchant($this->getMerchantId())->subsequent();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testSubsequentPayment_WithValidInput_ReturnsPaymentId(): void
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();
        $request = SubsequentPaymentRequestBuilder::create()->build();

        $response = $this->subsequentClient->subsequentPayment($paymentId, $request);

        $this->assertNotNull($response->getPayment());
        $this->assertNotNull($response->getPayment()->getId());
        $this->assertNotNull($response->getPayment()->getStatus());
    }

    public function testSubsequentPayment_WithValidInput_WithCallContext_ReturnsPaymentId(): void
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();
        $request = SubsequentPaymentRequestBuilder::create()->build();
        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-subsequent-" . uniqid());

        $response = $this->subsequentClient->subsequentPayment($paymentId, $request, $callContext);

        $this->assertNotNull($response->getPayment());
        $this->assertNotNull($response->getPayment()->getId());
        $this->assertNotNull($response->getPayment()->getStatus());
    }

    public function testSubsequentPayment_WithInvalidAmount_ThrowsValidationException(): void
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();
        $request = SubsequentPaymentRequestBuilder::create()
            ->withAmount(-1000)
            ->build();

        try {
            $this->subsequentClient->subsequentPayment($paymentId, $request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testSubsequentPayment_WithInvalidPaymentId_ThrowsReferenceException(): void
    {
        $request = SubsequentPaymentRequestBuilder::create()->build();

        try {
            $this->subsequentClient->subsequentPayment(self::NON_EXISTING_PAYMENT_ID, $request);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

}
