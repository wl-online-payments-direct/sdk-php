<?php

namespace OnlinePayments\Sdk\Integration\Webhooks;

use OnlinePayments\Sdk\Merchant\Webhooks\WebhooksClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Webhooks\SendTestRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class SendTestTest extends TestCase
{
    private const INVALID_WEBHOOK_URL = 'invalid-url';
    private const VALID_WEBHOOK_URL = 'https://example.com/webhook';

    private WebhooksClientInterface $webhooksClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->webhooksClient = $this->client->merchant($this->getMerchantId())->webhooks();
    }

    public function testSendTest_WithoutWebhookConfiguration_ThrowsValidationException(): void
    {
        $request = SendTestRequestBuilder::create()
            ->withUrl(self::VALID_WEBHOOK_URL)
            ->build();

        try {
            $this->webhooksClient->sendTestWebhook($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testSendTest_WithoutUrl_ThrowsValidationException(): void
    {
        $request = SendTestRequestBuilder::create()->build();

        try {
            $this->webhooksClient->sendTestWebhook($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testSendTest_WithInvalidUrl_ThrowsValidationException(): void
    {
        $request = SendTestRequestBuilder::create()
            ->withUrl(self::INVALID_WEBHOOK_URL)
            ->build();

        try {
            $this->webhooksClient->sendTestWebhook($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }
}
