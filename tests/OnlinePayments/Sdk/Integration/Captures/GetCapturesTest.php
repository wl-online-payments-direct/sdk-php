<?php

namespace OnlinePayments\Sdk\Integration\Captures;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\Captures\CapturesClientInterface;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\CapturePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetCapturesTest extends TestCase
{
    private const NON_EXISTING_PAYMENT_ID = '9999999999_0';

    private PaymentsClientInterface $paymentsClient;
    private CapturesClientInterface $capturesClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->paymentsClient = $this->client->merchant($this->getMerchantId())->payments();
        $this->capturesClient = $this->client->merchant($this->getMerchantId())->captures();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testGetCaptures_ExistingPaymentId_ReturnsCaptures(): void
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();
        $this->paymentsClient->capturePayment($paymentId, CapturePaymentRequestBuilder::create()->build());

        $response = $this->capturesClient->getCaptures($paymentId);

        $this->assertNotEmpty($response->getCaptures());
        $this->assertNotNull($response->getCaptures()[0]);
        $this->assertNotEmpty($response->getCaptures()[0]->getId());
        $this->assertNotEmpty($response->getCaptures()[0]->getStatus());
    }

    public function testGetCaptures_ExistingPaymentId_WithCallContext_ReturnsCaptures(): void
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();
        $this->paymentsClient->capturePayment($paymentId, CapturePaymentRequestBuilder::create()->build());

        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-captures-" . uniqid());
        $response = $this->capturesClient->getCaptures($paymentId, $callContext);

        $this->assertNotEmpty($response->getCaptures());
        $this->assertNotNull($response->getCaptures()[0]);
        $this->assertNotEmpty($response->getCaptures()[0]->getId());
        $this->assertNotEmpty($response->getCaptures()[0]->getStatus());
    }

    public function testGetCaptures_ExistingPaymentId_ReturnsCaptureDetails(): void
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();
        $this->paymentsClient->capturePayment($paymentId, CapturePaymentRequestBuilder::create()->build());

        $response = $this->capturesClient->getCaptures($paymentId);

        $this->assertNotEmpty($response->getCaptures());

        $capture = $response->getCaptures()[0];
        $this->assertNotEmpty($capture->getId());
        $this->assertNotEmpty($capture->getStatus());
        $this->assertNotNull($capture->getCaptureOutput());
        $this->assertNotNull($capture->getStatusOutput());
    }

    public function testGetCaptures_ExistingPaymentId_ReturnsMultipleCaptures(): void
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();
        $this->paymentsClient->capturePayment($paymentId, CapturePaymentRequestBuilder::create()->build());

        $response = $this->capturesClient->getCaptures($paymentId);

        $this->assertNotEmpty($response->getCaptures());

        foreach ($response->getCaptures() as $capture) {
            $this->assertNotEmpty($capture->getId());
            $this->assertNotEmpty($capture->getStatus());
        }
    }

    public function testGetCaptures_InvalidPaymentId_ThrowsReferenceException(): void
    {
        try {
            $this->capturesClient->getCaptures(self::NON_EXISTING_PAYMENT_ID);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
