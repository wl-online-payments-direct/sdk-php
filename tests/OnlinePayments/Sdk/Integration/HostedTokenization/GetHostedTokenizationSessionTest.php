<?php

namespace OnlinePayments\Sdk\Integration\HostedTokenization;

use OnlinePayments\Sdk\Merchant\HostedTokenization\HostedTokenizationClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetHostedTokenizationSessionTest extends TestCase
{
    private const INVALID_TOKENIZATION_ID = 'invalid_id_12345';

    private HostedTokenizationClientInterface $hostedTokenizationClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->hostedTokenizationClient = $this->client->merchant($this->getMerchantId())->hostedTokenization();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testGetHostedTokenization_ValidHostedTokenizationId_ReturnsHostedTokenizationDetails()
    {
        $hostedTokenizationId = $this->sdkHelper->createHostedTokenizationAndGetId();

        $getHostedTokenizationResponse = $this->hostedTokenizationClient->getHostedTokenization($hostedTokenizationId);

        $this->assertNotNull($getHostedTokenizationResponse);
        $this->assertNotEmpty($hostedTokenizationId);
    }

    public function testGetHostedTokenization_InvalidHostedTokenizationId_ReturnsReferenceException()
    {
        try {
            $this->hostedTokenizationClient->getHostedTokenization(self::INVALID_TOKENIZATION_ID);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
