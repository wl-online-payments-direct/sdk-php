<?php

namespace OnlinePayments\Sdk\Integration\HostedFields;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\HostedFields\HostedFieldsClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\HostedFields\CreateHostedFieldsSessionRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class CreateHostedFieldsSessionTest extends TestCase
{
    private const INVALID_LOCALE = 'invalid-locale';

    private HostedFieldsClientInterface $hostedFieldsClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->hostedFieldsClient = $this->client->merchant($this->getMerchantId())->hostedFields();
        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testCreateHostedFieldsSession_ValidInput_ReturnsHostedFieldsSessionId()
    {
        $request = CreateHostedFieldsSessionRequestBuilder::create()->build();

        $response = $this->hostedFieldsClient->createHostedFieldsSession($request);

        $this->assertNotNull($response->getSessionData());
        $this->assertNotEmpty($response->getSessionData()->getHostedFieldsSessionId());
        $this->assertNotEmpty($response->getSdkSri());
        $this->assertNotEmpty($response->getSdkUrl());
    }

    public function testCreateHostedFieldsSession_ValidInput_WithCallContext_ReturnsHostedFieldsSessionId()
    {
        $request = CreateHostedFieldsSessionRequestBuilder::create()->build();
        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-hosted-fields-" . uniqid());

        $response = $this->hostedFieldsClient->createHostedFieldsSession($request, $callContext);

        $this->assertNotNull($response->getSessionData());
        $this->assertNotEmpty($response->getSessionData()->getHostedFieldsSessionId());
        $this->assertNotEmpty($response->getSdkSri());
        $this->assertNotEmpty($response->getSdkUrl());
    }

    public function testCreateHostedFieldsSession_WithTokens_ReturnsSessionDataWithTokens(): void
    {
        $tokenId = $this->sdkHelper->createTokenAndGetId();

        $request = CreateHostedFieldsSessionRequestBuilder::create()
            ->withTokens([$tokenId])
            ->build();

        $response = $this->hostedFieldsClient->createHostedFieldsSession($request);

        $this->assertNotNull($response->getSessionData());
        $this->assertNotEmpty($response->getSessionData()->getHostedFieldsSessionId());
    }

    public function testCreateHostedFieldsSession_MissingLocaleInput_ReturnsValidationException()
    {
        $request = CreateHostedFieldsSessionRequestBuilder::create()->withLocale(null)->build();

        try {
            $this->hostedFieldsClient->createHostedFieldsSession($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }

    public function testCreateHostedFieldsSession_EmptyLocaleInput_ReturnsValidationException()
    {
        $request = CreateHostedFieldsSessionRequestBuilder::create()->withLocale('')->build();

        try {
            $this->hostedFieldsClient->createHostedFieldsSession($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }

    public function testCreateHostedFieldsSession_InvalidLocaleFormat_ReturnsUnprocessableEntityException()
    {
        $request = CreateHostedFieldsSessionRequestBuilder::create()->withLocale(self::INVALID_LOCALE)->build();

        try {
            $this->hostedFieldsClient->createHostedFieldsSession($request);

            $this->fail('Expected ApiException was not thrown');
        } catch (ApiException $e) {
            $this->assertSame(422, $e->getHttpStatusCode());
        }
    }
}