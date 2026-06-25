<?php

namespace OnlinePayments\Sdk\Integration\Payouts;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\Payouts\PayoutsClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payouts\CreatePayoutRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class CreatePayoutTest extends TestCase
{
    private PayoutsClientInterface $payoutsClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->payoutsClient = $this->client->merchant($this->getMerchantId())->payouts();
    }

    public function testCreatePayout_ValidCardInput_ReturnsSuccessfullyCreatedPayout()
    {
        $request = CreatePayoutRequestBuilder::create()->build();

        $response = $this->payoutsClient->createPayout($request);

        $this->assertNotEmpty($response->getId());
        $this->assertNotNull($response->getStatus());
        $this->assertNotNull($response->getPayoutOutput());
        $this->assertNotNull($response->getPayoutOutput()->getAmountOfMoney());
        $this->assertSame(
            $request->getAmountOfMoney()->getAmount(),
            $response->getPayoutOutput()->getAmountOfMoney()->getAmount()
        );

        $this->assertSame(
            $request->getAmountOfMoney()->getCurrencyCode(),
            $response->getPayoutOutput()->getAmountOfMoney()->getCurrencyCode()
        );
    }

    public function testCreatePayout_ValidCardInputWithCallContext_ReturnsSuccessfullyCreatedPayout()
    {
        $request = CreatePayoutRequestBuilder::create()->build();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-payout-" . uniqid());
        $response = $this->payoutsClient->createPayout($request, $callContext);

        $this->assertNotEmpty($response->getId());
        $this->assertNotNull($response->getStatus());
        $this->assertNotNull($response->getPayoutOutput());
        $this->assertNotNull($response->getPayoutOutput()->getAmountOfMoney());
        $this->assertSame(
            $request->getAmountOfMoney()->getAmount(),
            $response->getPayoutOutput()->getAmountOfMoney()->getAmount()
        );

        $this->assertSame(
            $request->getAmountOfMoney()->getCurrencyCode(),
            $response->getPayoutOutput()->getAmountOfMoney()->getCurrencyCode()
        );
    }

    public function testCreatePayout_InvalidAmount_ReturnsValidationException()
    {
        $request = CreatePayoutRequestBuilder::create()
            ->withAmount(-1000)
            ->withCurrencyCode('EUR')
            ->build();

        try {
            $this->payoutsClient->createPayout($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
            $this->assertSame('INVALID_VALUE', $e->getErrors()[0]->id);
        }
    }

    public function testCreatePayout_InvalidCurrencyCode_ReturnsValidationException()
    {
        $request = CreatePayoutRequestBuilder::create()
            ->withAmount(1000)
            ->withCurrencyCode('INVALID')
            ->build();

        try {
            $this->payoutsClient->createPayout($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
            $this->assertSame('INVALID_VALUE', $e->getErrors()[0]->id);
        }
    }

    public function testCreatePayout_InvalidCardNumber_ReturnsValidationException()
    {
        $request = CreatePayoutRequestBuilder::create()
            ->withCardNumber('123')
            ->build();

        try {
            $this->payoutsClient->createPayout($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
            $this->assertSame('INVALID_VALUE', $e->getErrors()[0]->id);
        }
    }
}
