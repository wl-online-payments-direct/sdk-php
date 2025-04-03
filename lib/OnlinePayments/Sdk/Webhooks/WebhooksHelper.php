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
    private $signatureValidator;

    /** @var ResponseFactory|null */
    private $responseFactory = null;

    /**
     * @param SecretKeyStore $secretKeyStore
     */
    public function __construct(SecretKeyStore $secretKeyStore)
    {
        $this->signatureValidator = new SignatureValidator($secretKeyStore);
    }

    /** @return ResponseFactory */
    protected function getResponseFactory()
    {
        if (is_null($this->responseFactory)) {
            $this->responseFactory = new ResponseFactory();
        }
        return $this->responseFactory;
    }

    /**
     * Unmarshals the given input stream that contains the body,
     * while also validating its contents using the given request headers.
     * @param string $body
     * @param array $requestHeaders
     * @return WebhooksEvent
     * @throws SignatureValidationException
     * @throws ApiVersionMismatchException
     */
    public function unmarshal($body, $requestHeaders)
    {
        $this->signatureValidator->validate($body, $requestHeaders);

        $response = new ConnectionResponse(200, array('Content-Type' => 'application/json'), $body);
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->addResponseClassName(200, WebhooksEvent::class);

        $event = $this->getResponseFactory()->createResponse($response, $responseClassMap);
        $this->validateApiVersion($event);
        return $event;
    }

    private function validateApiVersion($event)
    {
        if ('v1' !== $event->apiVersion) {
            throw new ApiVersionMismatchException($event->apiVersion, 'v1');
        }
    }
}
