<?php
namespace OnlinePayments\Sdk\Communication;

use OnlinePayments\Sdk\Logging\CommunicatorLogger;

/**
 * Interface Connection
 *
 * @package OnlinePayments\Sdk\Communication
 */
interface Connection
{
    /**
     * @param string $requestUri
     * @param string[] $requestHeaders
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     */
    public function get(string $requestUri, array $requestHeaders, callable $responseHandler): void;

    /**
     * @param string $requestUri
     * @param string[] $requestHeaders
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     */
    public function delete(string $requestUri, array $requestHeaders, callable $responseHandler): void;

    /**
     * @param string $requestUri
     * @param string[] $requestHeaders
     * @param string|MultipartFormDataObject $body
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     */
    public function post(string $requestUri, array $requestHeaders, $body, callable $responseHandler): void;

    /**
     * @param string $requestUri
     * @param string[] $requestHeaders
     * @param string|MultipartFormDataObject $body
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     */
    public function put(string $requestUri, array $requestHeaders, $body, callable $responseHandler): void;

    /**
     * @param CommunicatorLogger $communicatorLogger
     */
    public function enableLogging(CommunicatorLogger $communicatorLogger): void;

    /**
     *
     */
    public function disableLogging(): void;
}
