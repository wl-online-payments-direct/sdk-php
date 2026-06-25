<?php

namespace OnlinePayments\Sdk\Integration\HostedTokenization;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\HostedTokenization\HostedTokenizationClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\HostedTokenization\CreateHostedTokenizationRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class CreateHostedTokenizationSessionTest extends TestCase
{
    private const FIRST_INVALID_TOKEN = 'firstInvalidToken';
    private const SECOND_INVALID_TOKEN = 'secondInvalidToken';

    private const FIRST_CHAINED_TOKEN = 'firstChainedToken';
    private const SECOND_CHAINED_TOKEN = 'secondChainedToken';
    private const THIRD_CHAINED_TOKEN = 'thirdChainedToken';

    private const SPECIAL_TOKEN_DASHES = 'token-with-dashes';
    private const SPECIAL_TOKEN_UNDERSCORES = 'token_with_underscores';
    private const SPECIAL_TOKEN_DOTS = 'token.with.dots';

    private const DUPLICATE_TOKEN = 'duplicateToken';
    private const UNIQUE_TOKEN = 'uniqueToken';

    private HostedTokenizationClientInterface $hostedTokenizationClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->hostedTokenizationClient = $this->client->merchant($this->getMerchantId())->hostedTokenization();
    }

    public function testCreateHostedTokenization_ValidInput_ReturnsHostedTokenizationId()
    {
        $request = CreateHostedTokenizationRequestBuilder::create()->build();

        $response = $this->hostedTokenizationClient->createHostedTokenization($request);

        $this->assertNotEmpty($response->getHostedTokenizationId());
        $this->assertNotEmpty($response->getHostedTokenizationUrl());
    }

    public function testCreateHostedTokenization_ValidInput_WithCallContext_ReturnsHostedTokenizationId()
    {
        $request = CreateHostedTokenizationRequestBuilder::create()->build();
        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-hosted-tokenization-" . uniqid());

        $response = $this->hostedTokenizationClient->createHostedTokenization($request, $callContext);

        $this->assertNotEmpty($response->getHostedTokenizationId());
        $this->assertNotEmpty($response->getHostedTokenizationUrl());
    }

    public function testCreateHostedTokenization_InvalidLocale_ReturnsValidationException()
    {
        $request = CreateHostedTokenizationRequestBuilder::create()
            ->withLocale('invalid_locale')
            ->build();

        try {
            $this->hostedTokenizationClient->createHostedTokenization($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testCreateHostedTokenization_InvalidTokenInput_ReturnsInvalidToken()
    {
        $request = CreateHostedTokenizationRequestBuilder::create()
            ->withTokens(self::FIRST_INVALID_TOKEN)
            ->build();

        $response = $this->hostedTokenizationClient->createHostedTokenization($request);

        $this->assertNotEmpty($response->getHostedTokenizationId());
        $this->assertNotEmpty($response->getHostedTokenizationUrl());
        $this->assertNotEmpty($response->getInvalidTokens());
        $this->assertCount(1, $response->getInvalidTokens());
        $this->assertContains(self::FIRST_INVALID_TOKEN, $response->getInvalidTokens());
    }

    public function testCreateHostedTokenization_InvalidTokensInput_ReturnsInvalidTokensList()
    {
        $request = CreateHostedTokenizationRequestBuilder::create()
            ->withTokens(self::FIRST_INVALID_TOKEN, self::SECOND_INVALID_TOKEN)
            ->build();

        $response = $this->hostedTokenizationClient->createHostedTokenization($request);

        $this->assertNotEmpty($response->getHostedTokenizationId());
        $this->assertNotEmpty($response->getHostedTokenizationUrl());
        $this->assertNotEmpty($response->getInvalidTokens());
        $this->assertCount(2, $response->getInvalidTokens());
        $this->assertContains(self::FIRST_INVALID_TOKEN, $response->getInvalidTokens());
        $this->assertContains(self::SECOND_INVALID_TOKEN, $response->getInvalidTokens());
    }

    public function testCreateHostedTokenization_ChainedTokenAddition_ReturnsInvalidTokensList()
    {
        $request = CreateHostedTokenizationRequestBuilder::create()
            ->withToken(self::FIRST_CHAINED_TOKEN)
            ->withToken(self::SECOND_CHAINED_TOKEN)
            ->withToken(self::THIRD_CHAINED_TOKEN)
            ->build();

        $response = $this->hostedTokenizationClient->createHostedTokenization($request);

        $this->assertNotEmpty($response->getHostedTokenizationId());
        $this->assertNotEmpty($response->getHostedTokenizationUrl());
        $this->assertNotEmpty($response->getInvalidTokens());
        $this->assertCount(3, $response->getInvalidTokens());
        $this->assertContains(self::FIRST_CHAINED_TOKEN, $response->getInvalidTokens());
        $this->assertContains(self::SECOND_CHAINED_TOKEN, $response->getInvalidTokens());
        $this->assertContains(self::THIRD_CHAINED_TOKEN, $response->getInvalidTokens());
    }

    public function testCreateHostedTokenization_EmptyTokenList_ReturnsHostedTokenizationId()
    {
        $request = CreateHostedTokenizationRequestBuilder::create()
            ->withTokens()
            ->build();

        $response = $this->hostedTokenizationClient->createHostedTokenization($request);

        $this->assertNotEmpty($response->getHostedTokenizationId());
        $this->assertNotEmpty($response->getHostedTokenizationUrl());
        $this->assertCount(0, $response->getInvalidTokens());
    }

    public function testCreateHostedTokenization_TokensWithSpecialCharacters_ReturnsInvalidTokensList()
    {
        $request = CreateHostedTokenizationRequestBuilder::create()
            ->withTokens(
                self::SPECIAL_TOKEN_DASHES,
                self::SPECIAL_TOKEN_UNDERSCORES,
                self::SPECIAL_TOKEN_DOTS
            )
            ->build();

        $response = $this->hostedTokenizationClient->createHostedTokenization($request);

        $this->assertNotEmpty($response->getHostedTokenizationId());
        $this->assertNotEmpty($response->getHostedTokenizationUrl());
        $this->assertNotNull($response->getInvalidTokens());
        $this->assertCount(3, $response->getInvalidTokens());
    }

    public function testCreateHostedTokenization_LargeNumberOfTokens_ReturnsInvalidTokensList()
    {
        $request = CreateHostedTokenizationRequestBuilder::create()
            ->withTokens(
                'token01',
                'token02',
                'token03',
                'token04',
                'token05',
                'token06',
                'token07',
                'token08',
                'token09',
                'token10'
            )
            ->build();

        $response = $this->hostedTokenizationClient->createHostedTokenization($request);

        $this->assertNotEmpty($response->getHostedTokenizationId());
        $this->assertNotEmpty($response->getHostedTokenizationUrl());
        $this->assertNotNull($response->getInvalidTokens());
        $this->assertCount(10, $response->getInvalidTokens());
    }

    public function testCreateHostedTokenization_DuplicateTokens_ReturnsInvalidTokensList()
    {
        $request = CreateHostedTokenizationRequestBuilder::create()
            ->withTokens(self::DUPLICATE_TOKEN, self::DUPLICATE_TOKEN, self::UNIQUE_TOKEN)
            ->build();

        $response = $this->hostedTokenizationClient->createHostedTokenization($request);

        $this->assertNotEmpty($response->getHostedTokenizationId());
        $this->assertNotEmpty($response->getHostedTokenizationUrl());
        $this->assertNotNull($response->getInvalidTokens());
    }
}
