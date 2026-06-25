<?php

namespace OnlinePayments\Sdk\Integration\Payments;

use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetPaymentTest extends TestCase
{
    private const INVALID_PAYMENT_ID = '4509444655';

    private PaymentsClientInterface $paymentsClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->paymentsClient = $this->client->merchant($this->getMerchantId())->payments();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testGetPayment_ExistingPaymentId_ReturnsPaymentIdAndMatchingStatus()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $fetchedPayment = $this->paymentsClient->getPayment($paymentId);

        $this->assertNotEmpty($fetchedPayment->getId());
        $this->assertSame($paymentId, $fetchedPayment->getId());
        $this->assertNotNull($fetchedPayment->getStatus());
    }

    public function testGetPayment_InvalidPaymentId_ReturnsResponseExceptionNotFound()
    {
        try {
            $this->paymentsClient->getPaymentDetails(self::INVALID_PAYMENT_ID);

            $this->fail('Expected ResponseException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
