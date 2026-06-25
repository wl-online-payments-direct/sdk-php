<?php

namespace OnlinePayments\Sdk\Integration\Mandates;

use OnlinePayments\Sdk\Merchant\Mandates\MandatesClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetMandateTest extends TestCase
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

    public function testGetMandate_ValidMandateReference_ReturnsMandateDetails()
    {
        $mandateReference = $this->sdkHelper->createMandateAndGetMandateReference();

        $response = $this->mandatesClient->getMandate($mandateReference);

        $this->assertNotNull($response->getMandate());
        $this->assertNotEmpty($response->getMandate()->getUniqueMandateReference());
    }

    public function testGetMandate_InvalidMandateReference_ReturnsReferenceException()
    {
        try {
            $this->mandatesClient->getMandate(self::INVALID_MANDATE_REFERENCE);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }
}
