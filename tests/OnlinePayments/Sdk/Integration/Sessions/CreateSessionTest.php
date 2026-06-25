<?php

namespace OnlinePayments\Sdk\Integration\Sessions;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\Sessions\SessionsClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Sessions\SessionRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class CreateSessionTest extends TestCase
{
    private SessionsClientInterface $sessionsClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->sessionsClient = $this->client->merchant($this->getMerchantId())->sessions();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testCreateSession_WithValidInput_ReturnsClientSessionId(): void
    {
        $request = SessionRequestBuilder::create()->build();

        $response = $this->sessionsClient->createSession($request);

        $this->assertNotNull($response->getClientSessionId());
        $this->assertNotNull($response->getAssetUrl());
        $this->assertNotNull($response->getClientApiUrl());
    }

    public function testCreateSession_WithValidInput_WithCallContext_ReturnsClientSessionId(): void
    {
        $request = SessionRequestBuilder::create()->build();
        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-session-" . uniqid());

        $response = $this->sessionsClient->createSession($request, $callContext);

        $this->assertNotNull($response->getClientSessionId());
        $this->assertNotNull($response->getAssetUrl());
        $this->assertNotNull($response->getClientApiUrl());
    }

    public function testCreateSession_WithValidToken_ReturnsSessionWithValidToken(): void
    {
        $tokenId = $this->sdkHelper->createTokenAndGetId();
        $request = SessionRequestBuilder::create()
            ->withToken($tokenId)
            ->build();

        $response = $this->sessionsClient->createSession($request);

        $this->assertNotNull($response->getClientSessionId());
        $this->assertTrue($response->getInvalidTokens() === null || !in_array($tokenId, $response->getInvalidTokens(), true));
    }

    public function testCreateSession_WithTooManyTokens_ThrowsValidationException(): void
    {
        $request = SessionRequestBuilder::create()
            ->withTokens([
                'firstToken', 'secondToken', 'thirdToken', 'fourthToken', 'fifthToken',
                'sixthToken', 'seventhToken', 'eighthToken', 'ninthToken', 'tenthToken', 'eleventhToken'
            ])
            ->build();

        try {
            $this->sessionsClient->createSession($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testCreateSession_WithInvalidTokenValues_ReturnsSessionWithInvalidTokens(): void
    {
        $request = SessionRequestBuilder::create()
            ->withTokens(['65468465464646', '654646464', 'easgudasdas'])
            ->build();

        $response = $this->sessionsClient->createSession($request);

        $this->assertNotNull($response->getClientSessionId());
        $this->assertNotNull($response->getInvalidTokens());
        $this->assertNotEmpty($response->getInvalidTokens());
    }
}
