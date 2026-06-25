<?php

namespace OnlinePayments\Sdk\Integration\Mandates;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\Mandates\MandatesClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Mandates\CreateMandateRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class CreateMandateTest extends TestCase
{
    private const INVALID_IBAN = 'INVALID_IBAN';

    private MandatesClientInterface $mandatesClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->mandatesClient = $this->client->merchant($this->getMerchantId())->mandates();
    }

    public function testCreateMandate_ValidInput_ReturnsUniqueMandateReference()
    {
        $request = CreateMandateRequestBuilder::create()
            ->withUniqueMandateReference("exampleMandateReference" . str_replace('.', '', substr(microtime(), 0, 10)))
            ->build();

        $response = $this->mandatesClient->createMandate($request);

        $this->assertNotNull($response->getMandate());
        $this->assertNotEmpty($response->getMandate()->getUniqueMandateReference());
    }

    public function testCreateMandate_ValidInputWithCallContext_ReturnsUniqueMandateReference()
    {
        $request = CreateMandateRequestBuilder::create()
            ->withUniqueMandateReference("exampleMandateReference" . str_replace('.', '', substr(microtime(), 0, 10)))
            ->build();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-mandates-" . uniqid());
        $response = $this->mandatesClient->createMandate($request, $callContext);

        $this->assertNotNull($response->getMandate());
        $this->assertNotEmpty($response->getMandate()->getUniqueMandateReference());
    }

    public function testCreateMandate_InvalidIban_ReturnsValidationException()
    {
        $request = CreateMandateRequestBuilder::create()
            ->withCustomerIban(self::INVALID_IBAN)
            ->build();

        try {
            $this->mandatesClient->createMandate($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }
}
