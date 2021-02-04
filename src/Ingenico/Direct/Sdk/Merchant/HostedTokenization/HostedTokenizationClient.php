<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Merchant\HostedTokenization;

use Exception;
use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\AuthorizationException;
use Ingenico\Direct\Sdk\CallContext;
use Ingenico\Direct\Sdk\DirectException;
use Ingenico\Direct\Sdk\Domain\CreateHostedTokenizationRequest;
use Ingenico\Direct\Sdk\Domain\CreateHostedTokenizationResponse;
use Ingenico\Direct\Sdk\Domain\GetHostedTokenizationResponse;
use Ingenico\Direct\Sdk\IdempotenceException;
use Ingenico\Direct\Sdk\InvalidResponseException;
use Ingenico\Direct\Sdk\ReferenceException;
use Ingenico\Direct\Sdk\Resource;
use Ingenico\Direct\Sdk\ResponseClassMap;
use Ingenico\Direct\Sdk\ValidationException;

class HostedTokenizationClient extends Resource implements HostedTokenizationClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function createHostedTokenization(CreateHostedTokenizationRequest $body, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\CreateHostedTokenizationResponse');
        return $this->getCommunicator()->post(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/hostedtokenizations'),
            $this->getClientMetaInfo(),
            $body,
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getHostedTokenization($hostedTokenizationId, CallContext $callContext = null)
    {
        $this->context['hostedTokenizationId'] = $hostedTokenizationId;
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\GetHostedTokenizationResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/hostedtokenizations/{hostedTokenizationId}'),
            $this->getClientMetaInfo(),
            null,
            $callContext
        );
    }
}
