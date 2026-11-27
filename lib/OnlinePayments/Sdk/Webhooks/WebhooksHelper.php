<?php

namespace OnlinePayments\Sdk\Webhooks;

use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communication\ResponseFactory;
use OnlinePayments\Sdk\Domain\WebhooksEvent;

/**
 * Class WebhooksHelper
 *
 * @package OnlinePayments\Sdk\Webhooks
 */
class WebhooksHelper
{
    /** @var SignatureValidator */
    private readonly SignatureValidator $signatureValidator;

    /** @var ResponseFactory|null */
    private ?ResponseFactory $responseFactory = null;

    /**
     * @param SecretKeyStore $secretKeyStore
     */
    public function __construct(SecretKeyStore $secretKeyStore)
    {
        $this->signatureValidator = new SignatureValidator($secretKeyStore);
    }

    /**
     * @return ResponseFactory
     */
    protected function getResponseFactory(): ResponseFactory
    {
        return $this->responseFactory ??= new ResponseFactory();
    }

    /**
     * Unmarshals the given input stream that contains the body,
     * while also validating its contents using the given request headers.
     *
     * @param string $body
     * @param array<string, mixed> $requestHeaders
     * @return WebhooksEvent
     * @throws SignatureValidationException
     * @throws ApiVersionMismatchException
     */
    public function unmarshal(string $body, array $requestHeaders): WebhooksEvent
    {
        $this->signatureValidator->validate($body, $requestHeaders);

        $response = new ConnectionResponse(200, ['Content-Type' => 'application/json'], $body);
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->addResponseClassName(200, WebhooksEvent::class);

        /** @var WebhooksEvent $event */
        $event = $this->getResponseFactory()->createResponse($response, $responseClassMap);
        $this->validateApiVersion($event);
        return $event;
    }

    /**
     * @param WebhooksEvent $event
     */
    private function validateApiVersion(WebhooksEvent $event): void
    {
        if ('v1' !== $event->apiVersion) {
            throw new ApiVersionMismatchException($event->apiVersion, 'v1');
        }
    }
}
