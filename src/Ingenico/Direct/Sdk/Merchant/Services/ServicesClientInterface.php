<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Merchant\Services;

use Exception;
use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\AuthorizationException;
use Ingenico\Direct\Sdk\CallContext;
use Ingenico\Direct\Sdk\DirectException;
use Ingenico\Direct\Sdk\Domain\TestConnection;
use Ingenico\Direct\Sdk\IdempotenceException;
use Ingenico\Direct\Sdk\InvalidResponseException;
use Ingenico\Direct\Sdk\ReferenceException;
use Ingenico\Direct\Sdk\ValidationException;

interface ServicesClientInterface
{
    /**
     * Resource /v2/{merchantId}/services/testconnection - Test connection
     *
     * @param CallContext $callContext
     * @return TestConnection
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference/index.html#operation/TestConnectionApi Test connection
     */
    public function testConnection(CallContext $callContext = null);
}
