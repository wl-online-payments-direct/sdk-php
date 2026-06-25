<?php

namespace OnlinePayments\Sdk\Integration\Tokens;

use OnlinePayments\Sdk\Merchant\Tokens\TokensClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetTokenTest extends TestCase
{
    private const INVALID_TOKEN_ID = 'invalid_token_12345';

    private TokensClientInterface $tokensClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->tokensClient = $this->client->merchant($this->getMerchantId())->tokens();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testGetToken_ValidTokenId_ReturnsTokenDetails()
    {
        $token = $this->sdkHelper->createTokenAndGetId();

        $getResponse = $this->tokensClient->getToken($token);

        $this->assertSame($token, $getResponse->getId());
        $this->assertNotNull($getResponse->getPaymentProductId());

        $this->assertNotNull($getResponse->getCard());
        $this->assertNotNull($getResponse->getCard()->getData());
        $this->assertNotNull($getResponse->getCard()->getData()->getCardWithoutCvv());
        $this->assertNotNull($getResponse->getCard()->getData()->getCardWithoutCvv()->getCardNumber());
    }

    public function testGetToken_InvalidTokenId_ReturnsReferenceException()
    {
        try {
            $this->tokensClient->getToken(self::INVALID_TOKEN_ID);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
