<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Merchant\HostedCheckout;

use Exception;
use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\AuthorizationException;
use Ingenico\Direct\Sdk\CallContext;
use Ingenico\Direct\Sdk\DirectException;
use Ingenico\Direct\Sdk\Domain\CreateHostedCheckoutRequest;
use Ingenico\Direct\Sdk\Domain\CreateHostedCheckoutResponse;
use Ingenico\Direct\Sdk\Domain\GetHostedCheckoutResponse;
use Ingenico\Direct\Sdk\IdempotenceException;
use Ingenico\Direct\Sdk\InvalidResponseException;
use Ingenico\Direct\Sdk\ReferenceException;
use Ingenico\Direct\Sdk\Resource;
use Ingenico\Direct\Sdk\ResponseClassMap;
use Ingenico\Direct\Sdk\ValidationException;

class HostedCheckoutClient extends Resource implements HostedCheckoutClientInterface
{
    /**
     * Resource /v2/{merchantId}/hostedcheckouts - Create hosted checkout
     *
     * @param CreateHostedCheckoutRequest $body
     * @param CallContext $callContext
     * @return CreateHostedCheckoutResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference/index.html#operation/CreateHostedCheckoutApi Create hosted checkout
     */
    public function createHostedCheckout(CreateHostedCheckoutRequest $body, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\CreateHostedCheckoutResponse');
        return $this->getCommunicator()->post(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/hostedcheckouts'),
            $this->getClientMetaInfo(),
            $body,
            null,
            $callContext
        );
    }

    /**
     * Resource /v2/{merchantId}/hostedcheckouts/{hostedCheckoutId} - Get hosted checkout status
     *
     * @param string $hostedCheckoutId
     * @param CallContext $callContext
     * @return GetHostedCheckoutResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference/index.html#operation/GetHostedCheckoutApi Get hosted checkout status
     */
    public function getHostedCheckout($hostedCheckoutId, CallContext $callContext = null)
    {
        $this->context['hostedCheckoutId'] = $hostedCheckoutId;
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\GetHostedCheckoutResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/hostedcheckouts/{hostedCheckoutId}'),
            $this->getClientMetaInfo(),
            null,
            $callContext
        );
    }
}
