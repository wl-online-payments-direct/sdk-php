<?php
namespace OnlinePayments\Sdk\TestUtil;

use OnlinePayments\Sdk\Authentication\Authenticator;

class TestingAuthenticator implements Authenticator
{
    /** @var string */
    private $authorization;

    /**
     * @param string $authorization
     */
    public function __construct($authorization = '')
    {
        $this->authorization = $authorization;
    }

    public function getAuthorization(string $httpMethod, string $uriPath, array $requestHeaders = []): string
    {
        return $this->authorization;
    }
}
