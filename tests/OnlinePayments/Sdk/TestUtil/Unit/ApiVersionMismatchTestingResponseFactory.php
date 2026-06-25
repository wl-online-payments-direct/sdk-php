<?php

namespace OnlinePayments\Sdk\TestUtil\Unit;

use OnlinePayments\Sdk\Communication\ConnectionResponseInterface;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communication\ResponseFactory;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Domain\WebhooksEvent;

class ApiVersionMismatchTestingResponseFactory extends ResponseFactory
{
    public function createResponse(
        ConnectionResponseInterface $response,
        ResponseClassMap $responseClassMap
    ): ?DataObject {
        /** @var WebhooksEvent $event */
        $event = parent::createResponse($response, $responseClassMap);
        $event->apiVersion = 'v0';

        return $event;
    }
}
