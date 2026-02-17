<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\CofSeries;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Domain\ImportCofSeriesRequest;
use OnlinePayments\Sdk\Domain\ImportCofSeriesResponse;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * CofSeries client interface.
 */
interface CofSeriesClientInterface
{
    /**
     * Resource /v2/{merchantId}/tokens/importCofSeries - Imports the COF Series token.
     *
     * @param ImportCofSeriesRequest $body
     * @param CallContext|null $callContext
     * @return ImportCofSeriesResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function importCofSeries(ImportCofSeriesRequest $body, ?CallContext $callContext = null): ImportCofSeriesResponse;
}
