<?php

namespace OnlinePayments\Sdk\Integration\Mandates;

use OnlinePayments\Sdk\Merchant\Mandates\MandatesClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Mandates\RevokeMandateRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class BlockMandateTest extends TestCase
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

    public function testBlockMandate_ValidMandate_ReturnsUniqueMandateReference()
    {
        $uniqueMandateReference = $this->sdkHelper->createMandateAndGetMandateReference();

        $response = $this->mandatesClient->blockMandate($uniqueMandateReference);

        $this->assertNotNull($response->getMandate());
        $this->assertNotEmpty($response->getMandate()->getUniqueMandateReference());
    }

    public function testBlockMandate_AlreadyBlockedMandate_ReturnsValidationException()
    {
        $uniqueMandateReference = $this->sdkHelper->createMandateAndGetMandateReference();

        $this->mandatesClient->blockMandate($uniqueMandateReference);

        try {
            $this->mandatesClient->blockMandate($uniqueMandateReference);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }

    public function testBlockMandate_RevokedMandate_ReturnsValidationException()
    {
        $uniqueMandateReference = $this->sdkHelper->createMandateAndGetMandateReference();

        $revokeRequest = RevokeMandateRequestBuilder::create()->build();

        $this->mandatesClient->revokeMandate($uniqueMandateReference, $revokeRequest);

        try {
            $this->mandatesClient->blockMandate($uniqueMandateReference);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }

    public function testBlockMandate_InvalidUniqueMandateReference_ReturnsReferenceException()
    {
        try {
            $this->mandatesClient->blockMandate(self::INVALID_MANDATE_REFERENCE);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }
}
