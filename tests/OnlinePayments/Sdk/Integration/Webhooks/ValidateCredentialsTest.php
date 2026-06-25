<?php

namespace OnlinePayments\Sdk\Integration\Webhooks;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\Webhooks\WebhooksClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Webhooks\ValidateCredentialsRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;

class ValidateCredentialsTest extends TestCase
{
    private const VALID_WEBHOOK_KEY = 'test-key';
    private const VALID_WEBHOOK_SECRET = 'test-secret';

    private WebhooksClientInterface $webhooksClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->webhooksClient = $this->client->merchant($this->getMerchantId())->webhooks();
    }

    public function testValidateCredentials_WithValidCredentials_ReturnsResult(): void
    {
        $request = ValidateCredentialsRequestBuilder::create()
            ->withKey(self::VALID_WEBHOOK_KEY)
            ->withSecret(self::VALID_WEBHOOK_SECRET)
            ->build();

        $response = $this->webhooksClient->validateWebhookCredentials($request);

        $this->assertNotNull($response->getResult());
    }

    public function testValidateCredentials_WithValidCredentials_WithCallContext_ReturnsResult(): void
    {
        $request = ValidateCredentialsRequestBuilder::create()
            ->withKey(self::VALID_WEBHOOK_KEY)
            ->withSecret(self::VALID_WEBHOOK_SECRET)
            ->build();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-webhooks-" . uniqid());

        $response = $this->webhooksClient->validateWebhookCredentials($request, $callContext);

        $this->assertNotNull($response->getResult());
    }

    public function testValidateCredentials_WithIncorrectSecret_ReturnsInvalidResult(): void
    {
        $request = ValidateCredentialsRequestBuilder::create()
            ->withKey(self::VALID_WEBHOOK_KEY)
            ->withSecret('incorrect-secret')
            ->build();

        $response = $this->webhooksClient->validateWebhookCredentials($request);

        $this->assertNotNull($response->getResult());
        $this->assertSame('Invalid', $response->getResult());
    }
}
