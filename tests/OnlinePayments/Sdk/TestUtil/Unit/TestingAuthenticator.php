<?php

namespace OnlinePayments\Sdk\TestUtil\Unit;

use OnlinePayments\Sdk\Authentication\Authenticator;

class TestingAuthenticator implements Authenticator
{
    /** @var string */
    private string $authorization;

    /**
     * @param string $authorization
     */
    public function __construct(string $authorization = '')
    {
        $this->authorization = $authorization;
    }

    public function getAuthorization(string $httpMethod, string $uriPath, array $requestHeaders = []): string
    {
        return $this->authorization;
    }
}
