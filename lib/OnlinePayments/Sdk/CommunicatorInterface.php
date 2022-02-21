<?php

namespace OnlinePayments\Sdk;

use Exception;

/**
 * Class Communicator
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
     * @param CallContext $callContext
     * @return DataObject
     * @throws ResponseException
     */
    public function get(ResponseClassMap $responseClassMap, $relativeUriPath, $clientMetaInfo = '', RequestObject $requestParameters = null, CallContext $callContext = null);

    /**
     * @param ResponseClassMap $responseClassMap
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param RequestObject|null $requestParameters
     * @param CallContext $callContext
     * @return DataObject
     * @throws Exception
     */
    public function delete(ResponseClassMap $responseClassMap, $relativeUriPath, $clientMetaInfo = '', RequestObject $requestParameters = null, CallContext $callContext = null);

    /**
     * @param ResponseClassMap $responseClassMap
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param DataObject|null $requestBodyObject
     * @param RequestObject|null $requestParameters
     * @param CallContext $callContext
     * @return DataObject
     * @throws Exception
     */
    public function post(ResponseClassMap $responseClassMap, $relativeUriPath, $clientMetaInfo = '', $requestBodyObject = null, RequestObject $requestParameters = null, CallContext $callContext = null);

    /**
     * @param ResponseClassMap $responseClassMap
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param DataObject|null $requestBodyObject
     * @param RequestObject|null $requestParameters
     * @param CallContext $callContext
     * @return DataObject
     * @throws Exception
     */
    public function put(ResponseClassMap $responseClassMap, $relativeUriPath, $clientMetaInfo = '', $requestBodyObject = null, RequestObject $requestParameters = null, CallContext $callContext = null);

    /**
     * @return Connection
     */
    public function getConnection();

    /**
     * @param Connection $connection
     */
    public function setConnection(Connection $connection);

    /**
     * @param CommunicatorConfiguration
     * @return CommunicatorInterface
     */
    public function setCommunicatorConfiguration(CommunicatorConfiguration $communicatorConfiguration);
}
