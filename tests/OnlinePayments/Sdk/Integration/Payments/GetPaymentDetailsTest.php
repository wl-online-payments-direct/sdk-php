<?php

namespace OnlinePayments\Sdk\Integration\Payments;

use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetPaymentDetailsTest extends TestCase
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

    public function testGetPaymentDetails_ExistingPaymentId_ReturnsPaymentDetails()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $fetchedPayment = $this->paymentsClient->getPaymentDetails($paymentId);

        $this->assertSame($paymentId, $fetchedPayment->getId());
        $this->assertNotNull($fetchedPayment->getStatus());
        $this->assertNotNull($fetchedPayment->getPaymentOutput());
    }

    public function testGetPaymentDetails_NonExistingPaymentId_ReturnsResponseException()
    {
        try {
            $this->paymentsClient->getPaymentDetails(self::INVALID_PAYMENT_ID);

            $this->fail('Expected exception was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
