<?php

namespace OnlinePayments\Sdk\Integration\Tokenization;

use OnlinePayments\Sdk\Merchant\Tokenization\TokenizationClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Tokenization\GetCardDataByTokensParamsBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class GetSensitiveCardDetailsByCardAliasTokensTest extends TestCase
{
    private TokenizationClientInterface $tokenizationClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->tokenizationClient = $this->client->merchant($this->getMerchantId())->tokenization();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testGetCardDataByTokens_ValidTokensInput_ReturnsCardDataList()
    {
        $this->markTestSkipped('Test is skipped because the Tokenization endpoint features are not enabled for the test merchant.');

        $token = $this->sdkHelper->createTokenAndGetId();

        $params = GetCardDataByTokensParamsBuilder::create()
            ->withTokens([$token])
            ->build();

        $response = $this->tokenizationClient->getCardDataByTokens($params);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getTokens());
    }

    public function testGetCardDataByTokens_NonExistentTokensInput_ReturnsReferenceException()
    {
        $this->markTestSkipped('Test is skipped because the Tokenization endpoint features are not enabled for the test merchant.');

        $params = GetCardDataByTokensParamsBuilder::create()
            ->withTokens(['non-existent-token-xyz'])
            ->build();

        try {
            $this->tokenizationClient->getCardDataByTokens($params);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

    public function testGetCardDataByTokens_InvalidTokensInput_ReturnsValidationException()
    {
        $params = GetCardDataByTokensParamsBuilder::create()
            ->withTokens(null)
            ->build();

        try {
            $this->tokenizationClient->getCardDataByTokens($params);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }
}
