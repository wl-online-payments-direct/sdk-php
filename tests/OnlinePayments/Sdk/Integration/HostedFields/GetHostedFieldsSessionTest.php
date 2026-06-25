<?php

namespace OnlinePayments\Sdk\Integration\HostedFields;

use OnlinePayments\Sdk\Merchant\HostedFields\HostedFieldsClientInterface;
use OnlinePayments\Sdk\ProblemDetailsException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\HostedFields\CreateHostedFieldsSessionRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetHostedFieldsSessionTest extends TestCase
{
    private const NON_EXISTING_SESSION_ID = 'non-existing-session-id';

    private HostedFieldsClientInterface $hostedFieldsClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->hostedFieldsClient = $this->client->merchant($this->getMerchantId())->hostedFields();
    }

    public function testGetHostedFieldsSession_ValidSessionId_ReturnsSession(): void
    {
        $createRequest = CreateHostedFieldsSessionRequestBuilder::create()->build();
        $createResponse = $this->hostedFieldsClient->createHostedFieldsSession($createRequest);
        $sessionId = $createResponse->getSessionData()->getHostedFieldsSessionId();

        $response = $this->hostedFieldsClient->getHostedFieldsSession($sessionId);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getSessionId());
    }

    public function testGetHostedFieldsSession_InvalidSessionId_ThrowsProblemDetailsException(): void
    {
        try {
            $this->hostedFieldsClient->getHostedFieldsSession(self::NON_EXISTING_SESSION_ID);

            $this->fail('Expected ProblemDetailsException was not thrown');
        } catch (ProblemDetailsException $e) {
            $this->assertNotEmpty($e->getHttpStatusCode());
        }
    }
}