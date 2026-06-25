<?php

namespace OnlinePayments\Sdk\Integration\Tokens;

use OnlinePayments\Sdk\Merchant\Tokens\TokensClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;

class DeleteTokenTest extends TestCase
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

    public function testDeleteToken_ValidTokenId_SuccessfullyDeletesToken()
    {
        $token = $this->sdkHelper->createTokenAndGetId();

        $this->tokensClient->deleteToken($token);

        try {
            $this->tokensClient->getToken($token);

            $this->fail('Token still exists after deletion');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

    public function testDeleteToken_InvalidTokenId_ReturnsReferenceException()
    {
        try {
            $this->tokensClient->deleteToken(self::INVALID_TOKEN_ID);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
