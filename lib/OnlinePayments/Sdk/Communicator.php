<?php
namespace OnlinePayments\Sdk;

use DateTime;
use Exception;
use OnlinePayments\Sdk\Communication\ConnectionResponseInterface;
use UnexpectedValueException;
use OnlinePayments\Sdk\Authentication\Authenticator;
use OnlinePayments\Sdk\Communication\Connection;
use OnlinePayments\Sdk\Communication\DefaultConnection;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\MetadataProvider;
use OnlinePayments\Sdk\Communication\MetadataProviderInterface;
use OnlinePayments\Sdk\Communication\MultipartDataObject;
use OnlinePayments\Sdk\Communication\MultipartFormDataObject;
use OnlinePayments\Sdk\Communication\RequestObject;
use OnlinePayments\Sdk\Communication\ResponseBuilder;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communication\ResponseFactory;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Logging\CommunicatorLogger;

/**
 * Class Communicator
 *
 * @package OnlinePayments\Sdk
 */
class Communicator implements CommunicatorInterface
{
    const MIME_APPLICATION_JSON = 'application/json';

    /** @var string */
    private $apiEndpoint;

    /** @var Authenticator */
    private $authenticator;

    /** @var Connection */
    private $connection;

    /** @var MetadataProviderInterface */
    private $metadataProvider;

    /** @var ResponseFactory|null */
    private $responseFactory = null;

    /**
     * @param CommunicatorConfiguration $communicatorConfiguration
     * @param Authenticator $authenticator
     * @param Connection|null $connection
     * @param MetadataProviderInterface|null $metadataProvider
     */
    public function __construct(
        CommunicatorConfiguration $communicatorConfiguration,
        Authenticator $authenticator,
        Connection $connection = null,
        MetadataProviderInterface $metadataProvider = null
    ) {
        $this->apiEndpoint = $communicatorConfiguration->getApiEndpoint();
        $this->authenticator = $authenticator;
        $this->connection = $connection ?? new DefaultConnection($communicatorConfiguration);
        $this->metadataProvider = $metadataProvider ?? new MetadataProvider($communicatorConfiguration);
    }

    /**
     * @param CommunicatorLogger $communicatorLogger
     */
    public function enableLogging(CommunicatorLogger $communicatorLogger)
    {
        $this->connection->enableLogging($communicatorLogger);
    }

    /**
     *
     */
    public function disableLogging()
    {
        $this->connection->disableLogging();
    }

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
        $relativeUriPath,
        $clientMetaInfo = '',
        RequestObject $requestParameters = null,
        CallContext $callContext = null
    ) {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        $requestHeaders =
            $this->getRequestHeaders('GET', $relativeUriPathWithRequestParameters, null, $clientMetaInfo, $callContext);

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $this->connection->get(
            $this->apiEndpoint . $relativeUriPathWithRequestParameters,
            $requestHeaders,
            $responseHandler
        );
        $connectionResponse = $responseBuilder->getResponse();
        $this->updateCallContext($connectionResponse, $callContext);
        $response = $this->getResponseFactory()->createResponse($connectionResponse, $responseClassMap);
        $httpStatusCode = $connectionResponse->getHttpStatusCode();
        if ($httpStatusCode >= 400) {
            throw new ErrorResponseException($httpStatusCode, $response);
        }
        return $response;
    }

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
        callable $bodyHandler,
        ResponseClassMap $responseClassMap,
        $relativeUriPath,
        $clientMetaInfo = '',
        RequestObject $requestParameters = null,
        CallContext $callContext = null
    ) {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        $requestHeaders =
            $this->getRequestHeaders('GET', $relativeUriPathWithRequestParameters, null, $clientMetaInfo, $callContext);

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder, $bodyHandler) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            if ($httpStatusCode >= 400) {
                $responseBuilder->appendBody($data);
            } else {
                call_user_func($bodyHandler, $data, $headers);
            }
        };

        $this->connection->get(
            $this->apiEndpoint . $relativeUriPathWithRequestParameters,
            $requestHeaders,
            $responseHandler
        );
        $connectionResponse = $responseBuilder->getResponse();
        $this->updateCallContext($connectionResponse, $callContext);
        $httpStatusCode = $connectionResponse->getHttpStatusCode();
        if ($httpStatusCode >= 400) {
            $response = $this->getResponseFactory()->createResponse($connectionResponse, $responseClassMap);
            throw new ErrorResponseException($httpStatusCode, $response);
        }
    }

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
        $relativeUriPath,
        $clientMetaInfo = '',
        RequestObject $requestParameters = null,
        CallContext $callContext = null
    ) {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        $requestHeaders =
            $this->getRequestHeaders('DELETE', $relativeUriPathWithRequestParameters, null, $clientMetaInfo, $callContext);

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $this->connection->delete(
            $this->apiEndpoint . $relativeUriPathWithRequestParameters,
            $requestHeaders,
            $responseHandler
        );
        $connectionResponse = $responseBuilder->getResponse();
        $this->updateCallContext($connectionResponse, $callContext);
        $response = $this->getResponseFactory()->createResponse($connectionResponse, $responseClassMap);
        $httpStatusCode = $connectionResponse->getHttpStatusCode();
        if ($httpStatusCode >= 400) {
            throw new ErrorResponseException($httpStatusCode, $response);
        }
        return $response;
    }

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
        callable $bodyHandler,
        ResponseClassMap $responseClassMap,
        $relativeUriPath,
        $clientMetaInfo = '',
        RequestObject $requestParameters = null,
        CallContext $callContext = null
    ) {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        $requestHeaders =
            $this->getRequestHeaders('DELETE', $relativeUriPathWithRequestParameters, null, $clientMetaInfo, $callContext);

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder, $bodyHandler) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            if ($httpStatusCode >= 400) {
                $responseBuilder->appendBody($data);
            } else {
                call_user_func($bodyHandler, $data, $headers);
            }
        };

        $this->connection->delete(
            $this->apiEndpoint . $relativeUriPathWithRequestParameters,
            $requestHeaders,
            $responseHandler
        );
        $connectionResponse = $responseBuilder->getResponse();
        $this->updateCallContext($connectionResponse, $callContext);
        $httpStatusCode = $connectionResponse->getHttpStatusCode();
        if ($httpStatusCode >= 400) {
            $response = $this->getResponseFactory()->createResponse($connectionResponse, $responseClassMap);
            throw new ErrorResponseException($httpStatusCode, $response);
        }
    }

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
        $relativeUriPath,
        $clientMetaInfo = '',
        $requestBodyObject = null,
        RequestObject $requestParameters = null,
        CallContext $callContext = null
    ) {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        if ($requestBodyObject instanceof MultipartFormDataObject) {
            $contentType = $requestBodyObject->getContentType();
            $requestBody = $requestBodyObject;
        } elseif ($requestBodyObject instanceof MultipartDataObject) {
            $multipart = $requestBodyObject->toMultipartFormDataObject();
            $contentType = $multipart->getContentType();
            $requestBody = $multipart;
        } elseif ($requestBodyObject instanceof DataObject || is_null($requestBodyObject)) {
            $contentType = static::MIME_APPLICATION_JSON;
            $requestBody = $requestBodyObject ? $requestBodyObject->toJson() : '';
        } else {
            throw new UnexpectedValueException('Unsupported request body');
        }
        $requestHeaders =
            $this->getRequestHeaders('POST', $relativeUriPathWithRequestParameters, $contentType, $clientMetaInfo, $callContext);

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $this->connection->post(
            $this->apiEndpoint . $relativeUriPathWithRequestParameters,
            $requestHeaders,
            $requestBody,
            $responseHandler
        );
        $connectionResponse = $responseBuilder->getResponse();
        $this->updateCallContext($connectionResponse, $callContext);
        $response = $this->getResponseFactory()->createResponse($connectionResponse, $responseClassMap);
        $httpStatusCode = $connectionResponse->getHttpStatusCode();
        if ($httpStatusCode >= 400) {
            throw new ErrorResponseException($httpStatusCode, $response);
        }
        return $response;
    }

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
        callable $bodyHandler,
        ResponseClassMap $responseClassMap,
        $relativeUriPath,
        $clientMetaInfo = '',
        $requestBodyObject = null,
        RequestObject $requestParameters = null,
        CallContext $callContext = null
    ) {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        if ($requestBodyObject instanceof MultipartFormDataObject) {
            $contentType = $requestBodyObject->getContentType();
            $requestBody = $requestBodyObject;
        } elseif ($requestBodyObject instanceof MultipartDataObject) {
            $multipart = $requestBodyObject->toMultipartFormDataObject();
            $contentType = $multipart->getContentType();
            $requestBody = $multipart;
        } elseif ($requestBodyObject instanceof DataObject || is_null($requestBodyObject)) {
            $contentType = static::MIME_APPLICATION_JSON;
            $requestBody = $requestBodyObject ? $requestBodyObject->toJson() : '';
        } else {
            throw new UnexpectedValueException('Unsupported request body');
        }
        $requestHeaders =
            $this->getRequestHeaders('POST', $relativeUriPathWithRequestParameters, $contentType, $clientMetaInfo, $callContext);

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder, $bodyHandler) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            if ($httpStatusCode >= 400) {
                $responseBuilder->appendBody($data);
            } else {
                call_user_func($bodyHandler, $data, $headers);
            }
        };

        $this->connection->post(
            $this->apiEndpoint . $relativeUriPathWithRequestParameters,
            $requestHeaders,
            $requestBody,
            $responseHandler
        );
        $connectionResponse = $responseBuilder->getResponse();
        $this->updateCallContext($connectionResponse, $callContext);
        $httpStatusCode = $connectionResponse->getHttpStatusCode();
        if ($httpStatusCode >= 400) {
            $response = $this->getResponseFactory()->createResponse($connectionResponse, $responseClassMap);
            throw new ErrorResponseException($httpStatusCode, $response);
        }
    }

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
        $relativeUriPath,
        $clientMetaInfo = '',
        $requestBodyObject = null,
        RequestObject $requestParameters = null,
        CallContext $callContext = null
    ) {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        if ($requestBodyObject instanceof MultipartFormDataObject) {
            $contentType = $requestBodyObject->getContentType();
            $requestBody = $requestBodyObject;
        } elseif ($requestBodyObject instanceof MultipartDataObject) {
            $multipart = $requestBodyObject->toMultipartFormDataObject();
            $contentType = $multipart->getContentType();
            $requestBody = $multipart;
        } elseif ($requestBodyObject instanceof DataObject || is_null($requestBodyObject)) {
            $contentType = static::MIME_APPLICATION_JSON;
            $requestBody = $requestBodyObject ? $requestBodyObject->toJson() : '';
        } else {
            throw new UnexpectedValueException('Unsupported request body');
        }
        $requestHeaders =
            $this->getRequestHeaders('PUT', $relativeUriPathWithRequestParameters, $contentType, $clientMetaInfo, $callContext);

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $this->connection->put(
            $this->apiEndpoint . $relativeUriPathWithRequestParameters,
            $requestHeaders,
            $requestBody,
            $responseHandler
        );
        $connectionResponse = $responseBuilder->getResponse();
        $this->updateCallContext($connectionResponse, $callContext);
        $response = $this->getResponseFactory()->createResponse($connectionResponse, $responseClassMap);
        $httpStatusCode = $connectionResponse->getHttpStatusCode();
        if ($httpStatusCode >= 400) {
            throw new ErrorResponseException($httpStatusCode, $response);
        }
        return $response;
    }

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
        callable $bodyHandler,
        ResponseClassMap $responseClassMap,
        $relativeUriPath,
        $clientMetaInfo = '',
        $requestBodyObject = null,
        RequestObject $requestParameters = null,
        CallContext $callContext = null
    ) {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        if ($requestBodyObject instanceof MultipartFormDataObject) {
            $contentType = $requestBodyObject->getContentType();
            $requestBody = $requestBodyObject;
        } elseif ($requestBodyObject instanceof MultipartDataObject) {
            $multipart = $requestBodyObject->toMultipartFormDataObject();
            $contentType = $multipart->getContentType();
            $requestBody = $multipart;
        } elseif ($requestBodyObject instanceof DataObject || is_null($requestBodyObject)) {
            $contentType = static::MIME_APPLICATION_JSON;
            $requestBody = $requestBodyObject ? $requestBodyObject->toJson() : '';
        } else {
            throw new UnexpectedValueException('Unsupported request body');
        }
        $requestHeaders =
            $this->getRequestHeaders('PUT', $relativeUriPathWithRequestParameters, $contentType, $clientMetaInfo, $callContext);

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder, $bodyHandler) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            if ($httpStatusCode >= 400) {
                $responseBuilder->appendBody($data);
            } else {
                call_user_func($bodyHandler, $data, $headers);
            }
        };

        $this->connection->put(
            $this->apiEndpoint . $relativeUriPathWithRequestParameters,
            $requestHeaders,
            $requestBody,
            $responseHandler
        );
        $connectionResponse = $responseBuilder->getResponse();
        $this->updateCallContext($connectionResponse, $callContext);
        $httpStatusCode = $connectionResponse->getHttpStatusCode();
        if ($httpStatusCode >= 400) {
            $response = $this->getResponseFactory()->createResponse($connectionResponse, $responseClassMap);
            throw new ErrorResponseException($httpStatusCode, $response);
        }
    }

    /**
     * @param ConnectionResponseInterface $response
     * @param CallContext|null $callContext
     */
    protected function updateCallContext(ConnectionResponseInterface $response, CallContext $callContext = null)
    {
        if ($callContext) {
            $callContext->setIdempotenceRequestTimestamp(
                $response->getHeaderValue('X-GCS-Idempotence-Request-Timestamp')
            );
            $callContext->setIdempotenceResponseDateTime(
                new DateTime($response->getHeaderValue('IdempotencyResponseDatetime'))
            );
        }
    }

    /**
     * @param $relativeUriPath
     * @param RequestObject|null $requestParameters
     * @return string
     * @throws Exception
     */
    protected function getRequestUri($relativeUriPath, RequestObject $requestParameters = null)
    {
        return
            $this->apiEndpoint .
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
    }

    /**
     * @param string $httpMethod
     * @param string $relativeUriPathWithRequestParameters
     * @param string|null $contentType
     * @param string $clientMetaInfo
     * @param CallContext|null $callContext
     * @return string[]
     */
    protected function getRequestHeaders(
        $httpMethod,
        $relativeUriPathWithRequestParameters,
        $contentType = null,
        $clientMetaInfo = '',
        CallContext $callContext = null
    ) {
        $rfc2616Date = self::getRfc161Date();
        $requestHeaders = array();
        if (!empty($contentType)) {
            $requestHeaders['Content-Type'] = $contentType;
        }
        $requestHeaders['Date'] = $rfc2616Date;
        if ($clientMetaInfo) {
            $requestHeaders['X-GCS-ClientMetaInfo'] = $clientMetaInfo;
        }
        $requestHeaders['X-GCS-ServerMetaInfo'] = $this->metadataProvider->getServerMetaInfoValue();
        if ($callContext && strlen($callContext->getIdempotenceKey()) > 0) {
            $requestHeaders['X-GCS-Idempotence-Key'] = $callContext->getIdempotenceKey();
        }
        $requestHeaders['Authorization'] = $this->authenticator->getAuthorization($httpMethod, $relativeUriPathWithRequestParameters, $requestHeaders);
        return $requestHeaders;
    }

    /**
     * @return string
     */
    protected static function getRfc161Date()
    {
        return gmdate('D, d M Y H:i:s T');
    }

    /**
     * @param string $relativeUriPath
     * @param RequestObject|null $requestParameters
     * @return string
     */
    protected function getRelativeUriPathWithRequestParameters(
        $relativeUriPath,
        RequestObject $requestParameters = null
    ) {
        if (is_null($requestParameters)) {
            return $relativeUriPath;
        }
        $requestParameterObjectVars = method_exists($requestParameters, 'toArray') ?
            $requestParameters->toArray() : get_object_vars($requestParameters);
        if (count($requestParameterObjectVars) == 0) {
            return $relativeUriPath;
        }
        $httpQuery = http_build_query($requestParameterObjectVars);
        // remove [0], [1] etc that are added if properties are arrays
        $httpQuery = preg_replace('/%5B[0-9]+%5D/simU', '', $httpQuery);
        return $relativeUriPath . '?' . $httpQuery;
    }

    /** @return ResponseFactory */
    protected function getResponseFactory()
    {
        if (is_null($this->responseFactory)) {
            $this->responseFactory = new ResponseFactory();
        }
        return $this->responseFactory;
    }
}
