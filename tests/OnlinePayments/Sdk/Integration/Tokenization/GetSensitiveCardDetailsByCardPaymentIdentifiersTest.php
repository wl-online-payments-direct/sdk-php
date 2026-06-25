<?php

namespace OnlinePayments\Sdk\Integration\Tokenization;

use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\Merchant\Tokenization\TokenizationClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Common\CreatePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Tokenization\GetCardDataByPaymentsParamsBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class GetSensitiveCardDetailsByCardPaymentIdentifiersTest extends TestCase
{
    private PaymentsClientInterface $paymentsClient;
    private TokenizationClientInterface $tokenizationClient;
    private SdkTestHelper $sdkTestHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->paymentsClient = $this->client->merchant($this->getMerchantId())->payments();
        $this->tokenizationClient = $this->client->merchant($this->getMerchantId())->tokenization();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testGetCardDataByPayments_ValidPaymentsInput_ReturnsCardDataList()
    {
        $this->markTestSkipped('Test is skipped because the Tokenization endpoint features are not enabled for the test merchant.');

        $token = $this->sdkTestHelper->createTokenAndGetId();

        $createPaymentRequest = CreatePaymentRequestBuilder::create()
            ->withToken($token)
            ->build();

        $createPaymentResponse = $this->paymentsClient->createPayment($createPaymentRequest);

        $params = GetCardDataByPaymentsParamsBuilder::create()
            ->withPayments([$createPaymentResponse->getPayment()->getId()])
            ->build();

        $response = $this->tokenizationClient->getCardDataByPayments($params);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getTokens());
    }

    public function testGetCardDataByPayments_NonExistentPaymentsInput_ReturnsReferenceException()
    {
        $this->markTestSkipped('Test is skipped because the Tokenization endpoint features are not enabled for the test merchant.');

        $params = GetCardDataByPaymentsParamsBuilder::create()->withPayments(['non-existent-payment'])->build();

        try {
            $this->tokenizationClient->getCardDataByPayments($params);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

    public function testGetCardDataByPayments_InvalidPaymentsInput_ReturnsValidationException()
    {
        $params = GetCardDataByPaymentsParamsBuilder::create()->withPayments(null)->build();

        try {
            $this->tokenizationClient->getCardDataByPayments($params);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }
}
