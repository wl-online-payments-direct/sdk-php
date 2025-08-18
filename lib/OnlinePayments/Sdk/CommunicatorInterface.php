<?php

namespace OnlinePayments\Sdk;

use Exception;
use OnlinePayments\Sdk\Communication\RequestObject;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Logging\CommunicatorLogger;

/**
 * Interface CommunicatorInterface
 *
 * @package OnlinePayments\Sdk
 */
interface CommunicatorInterface
{
    /**
     * @param CommunicatorLogger $communicatorLogger
     */
    public function enableLogging(CommunicatorLogger $communicatorLogger);

    /**
     *
     */
    public function disableLogging();

    /**
     * @param ResponseClassMap $responseClassMap
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @return DataObject
     * @throws Exception
     */
    public function get(
        ResponseClassMap $responseClassMap,
        string           $relativeUriPath,
        string           $clientMetaInfo = '',
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null
    ): ?DataObject;

    /**
     * @param callable $bodyHandler Callable accepting a response body chunk and the response headers
     * @param ResponseClassMap $responseClassMap Used for error handling
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @throws Exception
     */
    public function getWithBinaryResponse(
        callable         $bodyHandler,
        ResponseClassMap $responseClassMap,
        string           $relativeUriPath,
        string           $clientMetaInfo = '',
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null
    ): void;

    /**
     * @param ResponseClassMap $responseClassMap
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @return DataObject
     * @throws Exception
     */
    public function delete(
        ResponseClassMap $responseClassMap,
        string           $relativeUriPath,
        string           $clientMetaInfo = '',
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null
    ): ?DataObject;

    /**
     * @param callable $bodyHandler Callable accepting a response body chunk and the response headers
     * @param ResponseClassMap $responseClassMap Used for error handling
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @throws Exception
     */
    public function deleteWithBinaryResponse(
        callable         $bodyHandler,
        ResponseClassMap $responseClassMap,
        string           $relativeUriPath,
        string           $clientMetaInfo = '',
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null
    ): void;

    /**
     * @param ResponseClassMap $responseClassMap
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param DataObject|MultipartDataObject|MultipartFormDataObject|null $requestBodyObject
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @return DataObject
     * @throws Exception
     */
    public function post(
        ResponseClassMap $responseClassMap,
        string           $relativeUriPath,
        string           $clientMetaInfo = '',
        $requestBodyObject = null,
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null
    ): ?DataObject;

    /**
     * @param callable $bodyHandler Callable accepting a response body chunk and the response headers
     * @param ResponseClassMap $responseClassMap Used for error handling
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param DataObject|MultipartDataObject|MultipartFormDataObject|null $requestBodyObject
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @throws Exception
     */
    public function postWithBinaryResponse(
        callable         $bodyHandler,
        ResponseClassMap $responseClassMap,
        string           $relativeUriPath,
        string           $clientMetaInfo = '',
        $requestBodyObject = null,
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null
    ): void;

    /**
     * @param ResponseClassMap $responseClassMap
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param DataObject|MultipartDataObject|MultipartFormDataObject|null $requestBodyObject
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @return DataObject
     * @throws Exception
     */
    public function put(
        ResponseClassMap $responseClassMap,
        string           $relativeUriPath,
        string           $clientMetaInfo = '',
        $requestBodyObject = null,
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null
    ): ?DataObject;

    /**
     * @param callable $bodyHandler Callable accepting a response body chunk and the response headers
     * @param ResponseClassMap $responseClassMap Used for error handling
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param DataObject|MultipartDataObject|MultipartFormDataObject|null $requestBodyObject
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @throws Exception
     */
    public function putWithBinaryResponse(
        callable         $bodyHandler,
        ResponseClassMap $responseClassMap,
        string           $relativeUriPath,
        string           $clientMetaInfo = '',
        $requestBodyObject = null,
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null
    ): void;
}
