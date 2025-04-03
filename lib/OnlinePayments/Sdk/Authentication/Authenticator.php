<?php
namespace OnlinePayments\Sdk\Authentication;

/**
 * Class Authenticator
 *
 * @package OnlinePayments\Sdk\Authentication
 */
interface Authenticator
{
    /**
     * Returns properly formated authentication header(s).
     *
     *
     * @param string $httpMethod
     * @param string $uriPath
     * @param array<string, string> $requestHeaders
     *
     * @return string The full value for the Authorization header
    */
    public function getAuthorization(string $httpMethod, string $uriPath, array $requestHeaders = []): string;
}
