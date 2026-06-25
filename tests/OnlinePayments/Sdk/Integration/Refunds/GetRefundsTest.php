<?php

namespace OnlinePayments\Sdk\Integration\Refunds;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\Merchant\Refunds\RefundsClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\CapturePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\RefundRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetRefundsTest extends TestCase
{
    private const NON_EXISTING_PAYMENT_ID = '9999999999_0';

    private PaymentsClientInterface $paymentsClient;
    private RefundsClientInterface $refundsClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->paymentsClient = $this->client->merchant($this->getMerchantId())->payments();
        $this->refundsClient = $this->client->merchant($this->getMerchantId())->refunds();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testGetRefunds_ExistingPaymentId_ReturnsRefunds(): void
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $captureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(1000)
            ->build();

        $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $refundRequest = RefundRequestBuilder::create()
            ->withAmount(1000)
            ->withCurrency('EUR')
            ->build();

        $this->paymentsClient->refundPayment($paymentId, $refundRequest);

        $response = $this->refundsClient->getRefunds($paymentId);

        $this->assertNotEmpty($response->getRefunds());
        $this->assertNotNull($response->getRefunds()[0]);
        $this->assertNotEmpty($response->getRefunds()[0]->getId());
        $this->assertNotEmpty($response->getRefunds()[0]->getStatus());
    }

    public function testGetRefunds_ExistingPaymentId_WithCallContext_ReturnsRefunds(): void
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $captureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(1000)
            ->build();

        $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $refundRequest = RefundRequestBuilder::create()
            ->withAmount(1000)
            ->withCurrency('EUR')
            ->build();

        $this->paymentsClient->refundPayment($paymentId, $refundRequest);

        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-refunds-" . uniqid());
        $response = $this->refundsClient->getRefunds($paymentId, $callContext);

        $this->assertNotEmpty($response->getRefunds());
        $this->assertNotNull($response->getRefunds()[0]);
        $this->assertNotEmpty($response->getRefunds()[0]->getId());
        $this->assertNotEmpty($response->getRefunds()[0]->getStatus());
    }

    public function testGetRefunds_ExistingPaymentId_ReturnsRefundDetails(): void
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $captureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(1000)
            ->build();

        $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $refundRequest = RefundRequestBuilder::create()
            ->withAmount(1000)
            ->withCurrency('EUR')
            ->build();

        $this->paymentsClient->refundPayment($paymentId, $refundRequest);

        $response = $this->refundsClient->getRefunds($paymentId);

        $this->assertNotEmpty($response->getRefunds());

        $refund = $response->getRefunds()[0];
        $this->assertNotEmpty($refund->getId());
        $this->assertNotEmpty($refund->getStatus());
        $this->assertNotNull($refund->getRefundOutput());
        $this->assertNotNull($refund->getStatusOutput());
    }

    public function testGetRefunds_ExistingPaymentId_ReturnsMultipleRefunds(): void
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $captureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(1000)
            ->build();

        $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $refundRequest = RefundRequestBuilder::create()
            ->withAmount(1000)
            ->withCurrency('EUR')
            ->build();

        $this->paymentsClient->refundPayment($paymentId, $refundRequest);

        $response = $this->refundsClient->getRefunds($paymentId);

        $this->assertNotEmpty($response->getRefunds());

        foreach ($response->getRefunds() as $refund) {
            $this->assertNotEmpty($refund->getId());
            $this->assertNotEmpty($refund->getStatus());
        }
    }

    public function testGetRefunds_InvalidPaymentId_ThrowsReferenceException(): void
    {
        try {
            $this->refundsClient->getRefunds(self::NON_EXISTING_PAYMENT_ID);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
