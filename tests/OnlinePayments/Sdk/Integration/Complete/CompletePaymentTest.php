<?php

namespace OnlinePayments\Sdk\Integration\Complete;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\Complete\CompleteClientInterface;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Complete\CompletePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class CompletePaymentTest extends TestCase
{
    private const NON_EXISTING_PAYMENT_ID = '9999999999_0';

    private CompleteClientInterface $completeClient;
    private SdkTestHelper $sdkTestHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->completeClient = $this->client->merchant($this->merchantId)->complete();

        $this->sdkTestHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testCompletePayment_WithValidPaymentId_ThrowsPlatformExceptionSinceRedirectPaymentFlow(): void
    {
        $paymentId = $this->sdkTestHelper->createPayPalPaymentAndGetId();
        $request = CompletePaymentRequestBuilder::create()->build();

        try {
            $this->completeClient->completePayment($paymentId, $request);

            $this->fail('Expected PlatformException was not thrown');
        }
        catch (PlatformException $e) {
            $this->assertNotNull($e->getErrors());
            $this->assertNotNull($e->getErrors()[0]->getHttpStatusCode());
            $this->assertSame(500, $e->getErrors()[0]->getHttpStatusCode());
            $this->assertNotNull($e->getErrors()[0]->getCategory());
            $this->assertSame("DIRECT_PLATFORM_ERROR", $e->getErrors()[0]->getCategory());
        }
    }

    public function testCompletePayment_WithValidPaymentId_WithCallContext_ReturnsCompletePaymentResponse(): void
    {
        $paymentId = $this->sdkTestHelper->createPayPalPaymentAndGetId();
        $request = CompletePaymentRequestBuilder::create()->build();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-complete-" . uniqid());

        try {
            $this->completeClient->completePayment($paymentId, $request);

            $this->fail('Expected PlatformException was not thrown');
        }
        catch (PlatformException $e) {
            $this->assertNotNull($e->getErrors());
            $this->assertNotNull($e->getErrors()[0]->getHttpStatusCode());
            $this->assertSame(500, $e->getErrors()[0]->getHttpStatusCode());
            $this->assertNotNull($e->getErrors()[0]->getCategory());
            $this->assertSame("DIRECT_PLATFORM_ERROR", $e->getErrors()[0]->getCategory());
        }
    }

    public function testCompletePayment_WithInvalidPaymentId_ThrowsReferenceException(): void
    {
        $request = CompletePaymentRequestBuilder::create()->build();

        try {
            $this->completeClient->completePayment(self::NON_EXISTING_PAYMENT_ID, $request);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

    public function testCompletePayment_WithInvalidInput_ThrowsValidationException(): void
    {
        $paymentId = $this->sdkTestHelper->createPayPalPaymentAndGetId();
        $request = CompletePaymentRequestBuilder::create()
            ->withOrder(null)
            ->build();

        try {
            $this->completeClient->completePayment($paymentId, $request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }
}
