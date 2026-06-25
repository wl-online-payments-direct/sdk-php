<?php

namespace OnlinePayments\Sdk\Integration\PaymentLinks;

use OnlinePayments\Sdk\Merchant\PaymentLinks\PaymentLinksClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class GetPaymentLinkByIdTest extends TestCase
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

    public function testGetPaymentLinkById_ValidPaymentLinkId_ReturnsPaymentLink()
    {
        $paymentLinkId = $this->sdkHelper->createPaymentLinkAndGetId();

        $response = $this->paymentLinksClient->getPaymentLinkById($paymentLinkId);

        $this->assertSame($paymentLinkId, $response->getPaymentLinkId());
        $this->assertNotNull($response->getStatus());
        $this->assertNotNull($response->getRedirectionUrl());
    }

    public function testGetPaymentLinkById_NonExistentPaymentLinkId_ReturnsReferenceException()
    {
        try {
            $this->paymentLinksClient->getPaymentLinkById(self::UNKNOWN_PAYMENT_LINK_ID);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

    public function testGetPaymentLinkById_InvalidPaymentLinkIdFormat_ReturnsValidationException()
    {
        try {
            $this->paymentLinksClient->getPaymentLinkById(self::INVALID_PAYMENT_LINK_ID);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }
}
