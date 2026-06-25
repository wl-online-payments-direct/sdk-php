<?php

namespace OnlinePayments\Sdk\Integration\PaymentLinks;

use OnlinePayments\Sdk\Merchant\PaymentLinks\PaymentLinksClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class CancelPaymentLinkByIdTest extends TestCase
{
    private const UNKNOWN_PAYMENT_LINK_ID = '00000000-0000-0000-0000-000000000000';
    private const INVALID_PAYMENT_LINK_ID = 'invalid-payment-link-id';

    private PaymentLinksClientInterface $paymentLinksClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->paymentLinksClient = $this->client->merchant($this->getMerchantId())->paymentLinks();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testCancelPaymentLinkById_ValidPaymentLinkId_SuccessfullyCancelsPaymentLink()
    {
        $paymentLinkId = $this->sdkHelper->createPaymentLinkAndGetId();

        $this->paymentLinksClient->cancelPaymentLinkById($paymentLinkId);

        $response = $this->paymentLinksClient->getPaymentLinkById($paymentLinkId);

        $this->assertSame($paymentLinkId, $response->getPaymentLinkId());
        $this->assertNotNull($response->getPaymentLinkEvents());
        $this->assertEquals('CANCELLED', $response->getPaymentLinkEvents()[1]->getType());
    }

    public function testCancelPaymentLinkById_NonExistentPaymentLinkId_ReturnsReferenceException()
    {
        try {
            $this->paymentLinksClient->cancelPaymentLinkById(self::UNKNOWN_PAYMENT_LINK_ID);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

    public function testCancelPaymentLinkById_InvalidPaymentLinkIdFormat_ReturnsValidationException()
    {
        try {
            $this->paymentLinksClient->cancelPaymentLinkById(self::INVALID_PAYMENT_LINK_ID);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }

    public function testCancelPaymentLinkById_AlreadyCancelled_ReturnsReferenceException()
    {
        $paymentLinkId = $this->sdkHelper->createPaymentLinkAndGetId();

        $this->paymentLinksClient->cancelPaymentLinkById($paymentLinkId);

        try {
            $this->paymentLinksClient->cancelPaymentLinkById($paymentLinkId);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(409, $e->getHttpStatusCode());
        }
    }
}
