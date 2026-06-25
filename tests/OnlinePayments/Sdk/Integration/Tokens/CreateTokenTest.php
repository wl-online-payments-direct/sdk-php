<?php

namespace OnlinePayments\Sdk\Integration\Tokens;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\Tokens\TokensClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Common\CreateTokenRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class CreateTokenTest extends TestCase
{
    private const EXPECTED_CARDHOLDER_NAME = 'John Doe';
    private const EXPECTED_EXPIRY_DATE = '1230';

    private TokensClientInterface $tokensClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->tokensClient = $this->client->merchant($this->getMerchantId())->tokens();
    }

    public function testCreateToken_ValidInput_ReturnsSuccessfullyCreatedToken()
    {
        $request = CreateTokenRequestBuilder::create()->build();

        $response = $this->tokensClient->createToken($request);

        $this->assertNotEmpty($response->getToken());
        $this->assertNotNull($response->getCard());
        $this->assertSame(self::EXPECTED_CARDHOLDER_NAME, $response->getCard()->getCardholderName());
        $this->assertSame(self::EXPECTED_EXPIRY_DATE, $response->getCard()->getExpiryDate());
        $this->assertNotEmpty($response->getCard()->getCardNumber());
    }

    public function testCreateToken_ValidInput_WithCallContext_ReturnsSuccessfullyCreatedToken()
    {
        $request = CreateTokenRequestBuilder::create()->build();
        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-tokens-" . uniqid());

        $response = $this->tokensClient->createToken($request, $callContext);

        $this->assertNotEmpty($response->getToken());
        $this->assertNotNull($response->getCard());
        $this->assertSame(self::EXPECTED_CARDHOLDER_NAME, $response->getCard()->getCardholderName());
        $this->assertSame(self::EXPECTED_EXPIRY_DATE, $response->getCard()->getExpiryDate());
        $this->assertNotEmpty($response->getCard()->getCardNumber());
    }

    public function testCreateToken_InvalidCardNumberInput_ReturnsValidationException()
    {
        $request = CreateTokenRequestBuilder::create()->withCardNumber("1234567890123456")->build();

        try {
            $this->tokensClient->createToken($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }

    public function testCreateToken_InvalidExpiryDateInput_ReturnsValidationException()
    {
        $request = CreateTokenRequestBuilder::create()->withExpiryDate("0000")->build();

        try {
            $this->tokensClient->createToken($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }

    public function testCreateToken_InvalidCvvInput_ReturnsValidationException()
    {
        $request = CreateTokenRequestBuilder::create()->withCvv("12345678")->build();

        try {
            $this->tokensClient->createToken($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }
}
