<?php

namespace OnlinePayments\Sdk\Integration\Mandates;

use OnlinePayments\Sdk\Merchant\Mandates\MandatesClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Mandates\RevokeMandateRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class UnblockMandateTest extends TestCase
{
    private const INVALID_MANDATE_REFERENCE = 'INVALID123456';

    private MandatesClientInterface $mandatesClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->mandatesClient = $this->client->merchant($this->getMerchantId())->mandates();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testUnblockMandate_BlockedMandate_ReturnsUniqueMandateReference()
    {
        $uniqueMandateReference = $this->sdkHelper->createMandateAndGetMandateReference();

        $this->mandatesClient->blockMandate($uniqueMandateReference);

        $response = $this->mandatesClient->unblockMandate($uniqueMandateReference);

        $this->assertNotNull($response->getMandate());
        $this->assertNotEmpty($response->getMandate()->getUniqueMandateReference());
    }

    public function testUnblockMandate_MandateNotBlocked_ReturnsValidationException()
    {
        $uniqueMandateReference = $this->sdkHelper->createMandateAndGetMandateReference();

        try {
            $this->mandatesClient->unblockMandate($uniqueMandateReference);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }

    public function testUnblockMandate_RevokedMandate_ReturnsValidationException()
    {
        $uniqueMandateReference = $this->sdkHelper->createMandateAndGetMandateReference();

        $revokeRequest = RevokeMandateRequestBuilder::create()->build();

        $this->mandatesClient->revokeMandate($uniqueMandateReference, $revokeRequest);

        try {
            $this->mandatesClient->unblockMandate($uniqueMandateReference);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }

    public function testUnblockMandate_InvalidUniqueMandateReference_ReturnsReferenceException()
    {
        try {
            $this->mandatesClient->unblockMandate(self::INVALID_MANDATE_REFERENCE);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }
}
