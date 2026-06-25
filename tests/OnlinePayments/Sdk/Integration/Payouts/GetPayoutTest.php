<?php

namespace OnlinePayments\Sdk\Integration\Payouts;

use OnlinePayments\Sdk\Merchant\Payouts\PayoutsClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetPayoutTest extends TestCase
{
    private const NON_EXISTING_PAYOUT_ID = '9999999999_0';

    private PayoutsClientInterface $payoutsClient;
    protected SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->payoutsClient = $this->client->merchant($this->getMerchantId())->payouts();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testGetPayout_ValidPayoutId_ReturnsPayoutDetailsSuccessfully()
    {
        $payoutId = $this->sdkHelper->createPayoutAndGetId();

        $response = $this->payoutsClient->getPayout($payoutId);

        $this->assertNotEmpty($response->getId());
        $this->assertSame($payoutId, $response->getId());

        $this->assertNotEmpty($response->getStatus());
        $this->assertEquals('ACCOUNT_CREDITED', $response->getStatus());

        $this->assertNotNull($response->getPayoutOutput());
        $this->assertNotNull($response->getStatusOutput());
        $this->assertEquals('REFUNDED', $response->getStatusOutput()->getStatusCategory());
        $this->assertEquals(8, $response->getStatusOutput()->getStatusCode());
    }

    public function testGetPayout_InvalidPayoutId_ReturnsReferenceException()
    {
        try {
            $this->payoutsClient->getPayout(self::NON_EXISTING_PAYOUT_ID);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
