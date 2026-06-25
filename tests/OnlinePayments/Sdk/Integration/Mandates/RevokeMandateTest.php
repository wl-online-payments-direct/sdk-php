<?php

namespace OnlinePayments\Sdk\Integration\Mandates;

use OnlinePayments\Sdk\Merchant\Mandates\MandatesClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Mandates\RevokeMandateRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class RevokeMandateTest extends TestCase
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

    public function testRevokeMandate_ValidMandate_ReturnsUniqueMandateReference()
    {
        $uniqueMandateReference = $this->sdkHelper->createMandateAndGetMandateReference();

        $request = RevokeMandateRequestBuilder::create()->build();

        $response = $this->mandatesClient->revokeMandate($uniqueMandateReference, $request);

        $this->assertNotNull($response->getMandate());
        $this->assertNotEmpty($response->getMandate()->getUniqueMandateReference());
    }

    public function testRevokeMandate_BlockedMandate_ReturnsUniqueMandateReference()
    {
        $uniqueMandateReference = $this->sdkHelper->createMandateAndGetMandateReference();

        $this->mandatesClient->blockMandate($uniqueMandateReference);

        $request = RevokeMandateRequestBuilder::create()->build();

        $response = $this->mandatesClient->revokeMandate($uniqueMandateReference, $request);

        $this->assertNotNull($response->getMandate());
        $this->assertNotEmpty($response->getMandate()->getUniqueMandateReference());
    }

    public function testRevokeMandate_UnblockedMandate_ReturnsUniqueMandateReference()
    {
        $uniqueMandateReference = $this->sdkHelper->createMandateAndGetMandateReference();

        $this->mandatesClient->blockMandate($uniqueMandateReference);

        $this->mandatesClient->unblockMandate($uniqueMandateReference);

        $request = RevokeMandateRequestBuilder::create()->build();

        $response = $this->mandatesClient->revokeMandate($uniqueMandateReference, $request);

        $this->assertNotNull($response->getMandate());
        $this->assertNotEmpty($response->getMandate()->getUniqueMandateReference());
    }

    public function testRevokeMandate_AlreadyRevoked_ReturnsValidationException()
    {
        $uniqueMandateReference = $this->sdkHelper->createMandateAndGetMandateReference();

        $revokeRequest = RevokeMandateRequestBuilder::create()->build();

        $this->mandatesClient->revokeMandate($uniqueMandateReference, $revokeRequest);

        try {
            $this->mandatesClient->revokeMandate($uniqueMandateReference, $revokeRequest);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }

    public function testRevokeMandate_InvalidUniqueMandateReference_ReturnsValidationException()
    {
        $request = RevokeMandateRequestBuilder::create()->build();

        try {
            $this->mandatesClient->revokeMandate(self::INVALID_MANDATE_REFERENCE, $request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }
}
