<?php

namespace OnlinePayments\Sdk\Integration\Tokenization;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\Tokenization\TokenizationClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Tokenization\CsrRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class SignCertificateTest extends TestCase
{
    private const INVALID_CSR = "INVALID_CSR";

    private TokenizationClientInterface $tokenizationClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->tokenizationClient = $this->client->merchant($this->getMerchantId())->tokenization();
    }

    public function testCreateCertificate_ValidInput_SuccessfullyGeneratedCertificate()
    {
        $this->markTestSkipped('Test is skipped because the Tokenization endpoint features are not enabled for the test merchant.');

        $request = CsrRequestBuilder::create()->build();

        $response = $this->tokenizationClient->createCertificate($request);

        $this->assertNotEmpty($response->getCertificateId());
        $this->assertNotEmpty($response->getSignedCertificate());
    }

    public function testCreateCertificate_ValidInput_WithCallContext_SuccessfullyGeneratedCertificate()
    {
        $this->markTestSkipped('Test is skipped because the Tokenization endpoint features are not enabled for the test merchant.');

        $request = CsrRequestBuilder::create()->build();
        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-tokenization-" . uniqid());

        $response = $this->tokenizationClient->createCertificate($request, $callContext);

        $this->assertNotEmpty($response->getCertificateId());
        $this->assertNotEmpty($response->getSignedCertificate());
    }

    public function testCreateCertificate_InvalidCsrInput_ReturnsValidationException()
    {
        $request = CsrRequestBuilder::create()->withCsr(self::INVALID_CSR)->build();

        try {
            $this->tokenizationClient->createCertificate($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }
}
