<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Helpers;

use OnlinePayments\Sdk\Domain\CreatedTokenResponse;
use OnlinePayments\Sdk\Domain\CreateHostedTokenizationRequest;
use OnlinePayments\Sdk\Domain\CreateHostedTokenizationResponse;
use OnlinePayments\Sdk\Domain\CreateMandateRequest;
use OnlinePayments\Sdk\Domain\CreateMandateResponse;
use OnlinePayments\Sdk\Domain\CreatePaymentLinkRequest;
use OnlinePayments\Sdk\Domain\CreatePaymentRequest;
use OnlinePayments\Sdk\Domain\CreatePaymentResponse;
use OnlinePayments\Sdk\Domain\CreatePayoutRequest;
use OnlinePayments\Sdk\Domain\CreateTokenRequest;
use OnlinePayments\Sdk\Domain\PaymentLinkResponse;
use OnlinePayments\Sdk\Domain\PayoutResponse;
use OnlinePayments\Sdk\Domain\SubmitBatchRequestBody;
use OnlinePayments\Sdk\Domain\SubmitBatchResponse;
use OnlinePayments\Sdk\Merchant\MerchantClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Common\CreatePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Common\CreateTokenRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\HostedTokenization\CreateHostedTokenizationRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Mandates\CreateMandateRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\MerchantBatch\SubmitBatchRequestBodyBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\PaymentLinks\CreatePaymentLinkRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payouts\CreatePayoutRequestBuilder;

class SdkTestHelper
{
    private MerchantClientInterface $merchantClient;

    public function __construct(MerchantClientInterface $merchantClient)
    {
        $this->merchantClient = $merchantClient;
    }

    public function createPaymentAndGetId(
        ?int $amount = null,
        ?string $currency = null)
    : string
    {
        $builder = CreatePaymentRequestBuilder::create();

        if ($amount !== null && $currency !== null) {
            $builder->withAmount($amount)->withCurrency($currency);
        }

        return $this->createPayment($builder->build())->getPayment()->getId();
    }

    public function createPayPalPaymentAndGetId(): ?string
    {
        $request = CreatePaymentRequestBuilder::create()
            ->withPayPalRedirectPaymentMethod()
            ->build();

        return $this->createPayment($request)->getPayment()->getId();
    }

    public function createTokenAndGetId()
    : ?string
    {
        return $this->createToken(CreateTokenRequestBuilder::create()->build())->getToken();
    }

    public function createHostedTokenizationAndGetId()
    : ?string
    {
        return $this->createHostedTokenization(CreateHostedTokenizationRequestBuilder::create()->build())->getHostedTokenizationId();
    }

    public function createPaymentLinkAndGetId()
    : ?string
    {
        return $this->createPaymentLink(CreatePaymentLinkRequestBuilder::create()->build())->getPaymentLinkId();
    }

    public function createPayoutAndGetId(): ?string
    {
        return $this->createPayout(CreatePayoutRequestBuilder::create()->build())->getId();
    }

    public function createMandateAndGetMandateReference()
    : ?string
    {
        return $this->createMandate(
                CreateMandateRequestBuilder::create()
                ->withUniqueMandateReference("exampleMandateReference" . str_replace('.', '', substr(microtime(), 0, 10)))
                ->build())
            ->getMandate()->getUniqueMandateReference();
    }

    public function submitBatchAndGetReference(
        array $createPaymentRequests,
        string $operationType,
        int $itemCount)
    : ?string
    {
        return $this->submitBatch(SubmitBatchRequestBodyBuilder::create()
            ->withCreatePaymentRequests($createPaymentRequests)
            ->withOperationType($operationType)
            ->withItemCount($itemCount)
            ->build())->getMerchantBatchReference();
    }

    private function createPayment(
        CreatePaymentRequest $request)
    : CreatePaymentResponse
    {
        return $this->merchantClient->payments()->createPayment($request);
    }

    private function createToken(
        CreateTokenRequest $request)
    : CreatedTokenResponse
    {
        return $this->merchantClient->tokens()->createToken($request);
    }

    private function createHostedTokenization(
        CreateHostedTokenizationRequest $request
    ): CreateHostedTokenizationResponse {
        return $this->merchantClient->hostedTokenization()->createHostedTokenization($request);
    }

    private function createPaymentLink(
        CreatePaymentLinkRequest $request
    ): PaymentLinkResponse {
        return $this->merchantClient->paymentLinks()->createPaymentLink($request);
    }

    private function createPayout(
        CreatePayoutRequest $request)
    : PayoutResponse
    {
        return $this->merchantClient->payouts()->createPayout($request);
    }

    private function createMandate(
        CreateMandateRequest $request)
    : CreateMandateResponse
    {
        return $this->merchantClient->mandates()->createMandate($request);
    }

    private function submitBatch(
        SubmitBatchRequestBody $requestBody)
    : SubmitBatchResponse
    {
        return $this->merchantClient->merchantBatch()->submitBatch($requestBody);
    }
}
